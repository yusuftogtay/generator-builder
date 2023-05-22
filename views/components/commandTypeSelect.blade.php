<select id="drdCommandType" class="form-control" style="width: 100%">
    <option value="" selected disabled>
        {{ __('generatorBuilder.generation_type_select') }}</option>
    @foreach (config('yusuftogtay.generator_builder.commandType') as $type)
        <option value="{{$type}}">{{ __("generatorBuilder.commandType.{$type}") }}</option>
    @endforeach
</select>
