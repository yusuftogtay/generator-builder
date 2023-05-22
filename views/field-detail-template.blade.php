<h3>Validations Rules</h3>
<div class="row">
    <div class="col-sm-6">
        @foreach (config('yusuftogtay.generator_builder.ruleType') as $rule)
            <!-- {{ $rule['name'] }} Field -->
            <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                <label class="col-md-3 control-label text-md-right mx-1" for="{{ $rule['title'] }}">
                    {{ __("generatorBuilder.rules.{$rule['title']}") }}
                </label>
                <input type="hidden" name="{{ $rule['title'] }}" id="hidden_{{ $rule['title'] }}">
                <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                    <input type="checkbox" name="{{ $rule['title'] }}" id="{{ $rule['title'] }}"> <label
                        for="{{ $rule['title'] }}"></label>
                </div>
                <div class="form-text text-muted">
                    {!! $rule['descriptionHtml'] !!} <a href="{{ $rule['link'] }}">Docs</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-sm-6">

    </div>
</div>
