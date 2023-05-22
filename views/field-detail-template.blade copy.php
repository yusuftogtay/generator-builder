<h3>Validations Rules</h3>
<div class="row">
    <div class="col-sm-4">
        <!-- accepted Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="accepted">
                {{ __('generatorBuilder.fields.accepted') }}<span class="required">*</span>
            </label>
            <div class="col-md-9 icheck">
                <input type="hidden" name="accepted" id="hidden_accepted">
                <input type="checkbox" name="accepted" id="accepted"> <label for="accepted"></label>
                <div class="form-text text-muted">{{ __('generatorBuilder.fields.accepted_helper') }}</div>
            </div>
        </div>
        <!-- active_url Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="active_url">
                {{ __('generatorBuilder.fields.active_url') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="active_url" id="hidden_active_url">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="active_url" id="active_url"> <label for="active_url"></label>
                <div class="form-text text-muted">{{ __('generatorBuilder.fields.active_url_helper') }}</div>
            </div>
        </div>
        <!-- boolean Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="boolean">
                {{ __('generatorBuilder.fields.boolean') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="boolean" id="hidden_boolean">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="boolean" id="boolean"> <label for="boolean"></label>
                <div class="form-text text-muted">{{ __('generatorBuilder.fields.boolean_helper') }}</div>
            </div>
        </div>
        <!-- date Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="date">
                {{ __('generatorBuilder.fields.date') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="date" id="hidden_date">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="date" id="date"> <label for="date"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.date_helper') }}
                </div>
            </div>
        </div>
        <!-- declined Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="declined">
                {{ __('generatorBuilder.fields.declined') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="declined" id="hidden_declined">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="declined" id="declined"> <label for="declined"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.declined_helper') }}
                </div>
            </div>
        </div>
        <!-- distinct Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="distinct">
                {{ __('generatorBuilder.fields.distinct') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="distinct" id="hidden_distinct">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="distinct" id="distinct"> <label for="distinct"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.distinct_helper') }}
                </div>
            </div>
        </div>
        <!-- email Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="email">
                {{ __('generatorBuilder.fields.email') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="email" id="hidden_email">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="email" id="email"> <label for="email"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.email_helper') }}
                </div>
            </div>
        </div>
        <!-- enum Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="enum">
                {{ __('generatorBuilder.fields.enum') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="enum" id="hidden_enum">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="enum" id="enum"> <label for="enum"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.enum_helper') }}
                </div>
            </div>
        </div>
        <!-- file Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="file">
                {{ __('generatorBuilder.fields.file') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="file" id="hidden_file">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="file" id="file"> <label for="file"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.file_helper') }}
                </div>
            </div>
        </div>
        <!-- image Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="image">
                {{ __('generatorBuilder.fields.image') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="image" id="hidden_image">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="image" id="image"> <label for="image"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.image_helper') }}
                </div>
            </div>
        </div>
        <!-- array Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="array">
                {{ __('generatorBuilder.fields.array') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="array" id="hidden_array">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="array" id="array"> <label for="array"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.array_helper') }}
                </div>
            </div>
        </div>
        <!-- integer Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="integer">
                {{ __('generatorBuilder.fields.integer') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="integer" id="hidden_integer">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="integer" id="integer"> <label for="integer"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.integer_helper') }}
                </div>
            </div>
        </div>
        <!-- ip Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="ip">
                {{ __('generatorBuilder.fields.ip') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="ip" id="hidden_ip">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="ip" id="ip"> <label for="ip"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.ip_helper') }}
                </div>
            </div>
        </div>
        <!-- ipv4 Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="ipv4">
                {{ __('generatorBuilder.fields.ipv4') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="ipv4" id="hidden_ipv4">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="ipv4" id="ipv4"> <label for="ipv4"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.ipv4_helper') }}
                </div>
            </div>
        </div>
        <!-- ipv6 Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="ipv6">
                {{ __('generatorBuilder.fields.ipv6') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="ipv6" id="hidden_ipv6">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="ipv6" id="ipv6"> <label for="ipv6"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.ipv6_helper') }}
                </div>
            </div>
        </div>
        <!-- json Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="json">
                {{ __('generatorBuilder.fields.json') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="json" id="hidden_json">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="json" id="json"> <label for="json"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.json_helper') }}
                </div>
            </div>
        </div>
        <!-- lover_case Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="lover_case">
                {{ __('generatorBuilder.fields.lover_case') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="lover_case" id="hidden_lower_case">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="lover_case" id="lover_case"> <label for="lover_case"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.lover_case_helper') }}
                </div>
            </div>
        </div>
        <!-- mac_address Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="mac_address">
                {{ __('generatorBuilder.fields.mac_address') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="mac_address" id="hidden_mac_address">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="mac_address" id="mac_address"> <label for="mac_address"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.mac_address_helper') }}
                </div>
            </div>
        </div>
        <!-- nullable Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="nullable">
                {{ __('generatorBuilder.fields.nullable') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="nullable" id="hidden_nullable">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="nullable" id="nullable"> <label for="nullable"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.nullable_helper') }}
                </div>
            </div>
        </div>
        <!-- numeric Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="numeric">
                {{ __('generatorBuilder.fields.numeric') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="numeric" id="hidden_numeric">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="numeric" id="numeric"> <label for="numeric"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.numeric_helper') }}
                </div>
            </div>
        </div>
        <!-- password Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="password">
                {{ __('generatorBuilder.fields.password') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="password" id="hidden_password">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="password" id="password"> <label for="password"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.password_helper') }}
                </div>
            </div>
        </div>
        <!-- prohibited Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="prohibited">
                {{ __('generatorBuilder.fields.prohibited') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="prohibited" id="hidden_prohibited">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="prohibited" id="prohibited"> <label for="prohibited"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.prohibited_helper') }}
                </div>
            </div>
        </div>
        <!-- required Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="required">
                {{ __('generatorBuilder.fields.required') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="required" id="hidden_required">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="required" id="required"> <label for="required"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.required_helper') }}
                </div>
            </div>
        </div>
        <!-- string Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="string">
                {{ __('generatorBuilder.fields.string') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="string" id="hidden_string">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="string" id="string"> <label for="string"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.string_helper') }}
                </div>
            </div>
        </div>
        <!-- upper_case Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="upper_case">
                {{ __('generatorBuilder.fields.upper_case') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="upper_case" id="hidden_upper_case">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="upper_case" id="upper_case"> <label for="upper_case"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.upper_case_helper') }}
                </div>
            </div>
        </div>
        <!-- url Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="url">
                {{ __('generatorBuilder.fields.url') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="url" id="hidden_url">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="url" id="url"> <label for="url"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.url_helper') }}
                </div>
            </div>
        </div>
        <!-- ulid Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="ulid">
                {{ __('generatorBuilder.fields.ulid') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="ulid" id="hidden_ulid">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="ulid" id="ulid"> <label for="ulid"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.ulid_helper') }}
                </div>
            </div>
        </div>
        <!-- uuid Field -->
        <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
            <label class="col-md-3 control-label text-md-right mx-1" for="uuid">
                {{ __('generatorBuilder.fields.uuid') }}<span class="required">*</span>
            </label>
            <input type="hidden" name="uuid" id="hidden_uuid">
            <div class="col-md-9 icheck-{{ setting('theme_color', 'blue') }}">
                <input type="checkbox" name="uuid" id="uuid"> <label for="uuid"></label>
                <div class="form-text text-muted">
                    {{ __('generatorBuilder.fields.uuid_helper') }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <!-- İçerik sütunu 2 -->
        <h1>fkbndlkfn</h1>
    </div>
    <div class="col-sm-4">
        <!-- İçerik sütunu 3 -->
        <h1>fbşlkdnfkbfd</h1>
    </div>
</div>
