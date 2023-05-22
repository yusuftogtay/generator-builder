<select class="form-control drdHtmlType" style="width: 100%">
    @foreach (config('yusuftogtay.generator_builder.htmlType') as $html)
        <option value="{{ $html }}">{{ __("generatorBuilder.htmlType.{$html}") }}</option>
    @endforeach
</select>
<input type="text" class="form-control htmlValue txtHtmlValue" style="display: none" placeholder="" />
