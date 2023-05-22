<?php

namespace YusufTogtay\GeneratorBuilder\Commands;

use File;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class GeneratorBuilderRoutesPublisherCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'yusuftogtay.publish:generator-builder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publishes routes for generator builder and published views.';

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->option('views')) {
            $this->publishViews();
            $this->publishLocales();
        } else {
            $this->publishRoutes();
            $this->publishLocales();
        }
    }

    private function publishRoutes()
    {
        $path = config('yusuftogtay.laravel_generator.path.routes', app_path('Http/routes.php'));

        $routeContents = file_get_contents($path);

        $builderRoutes = file_get_contents(__DIR__.'/../../templates/routes.stub');

        file_put_contents($path, $routeContents."\n\n".$builderRoutes);

        $this->comment("\nBuilder routes added to routes.php");
    }

    /**
     * Publishes views.
     */
    public function publishViews()
    {
        $sourceDir = __DIR__.'/../../views/';
        $destinationDir = base_path('resources/views/yusuftogtay/generator-builder/');

        if (file_exists($destinationDir)) {
            $answer = $this->ask('Do you want to overwrite generator-builder? (y|N) :', false);

            if (strtolower($answer) != 'y' and strtolower($answer) != 'yes') {
                return false;
            }
        } else {
            File::makeDirectory($destinationDir, 493, true);
        }

        File::copyDirectory($sourceDir, $destinationDir);

        $this->comment('generator-builder views published');
        $this->info($destinationDir);
    }

    /**
     * Publishes locales.
     */
    public function publishLocales()
    {
        $sourceDir = __DIR__.'/../../resources/lang/';
        $destinationDir = base_path('resources/lang/');

        if (file_exists($destinationDir)) {
            $answer = $this->ask('Do you want to overwrite generator-builder locales? (y|N) :', false);

            if (strtolower($answer) != 'y' and strtolower($answer) != 'yes') {
                return false;
            }
        } else {
            File::makeDirectory($destinationDir, 493, true);
        }

        File::copyDirectory($sourceDir, $destinationDir);

        $this->comment('generator-builder locales published');
        $this->info($destinationDir);
    }

    public function getOptions()
    {
        return [
            ['views', null, InputOption::VALUE_NONE, 'Publishes views as well'],
        ];
    }
}
