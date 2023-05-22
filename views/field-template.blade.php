<td style="vertical-align: middle">
    <input type="text" style="width: 100%" required class="form-control txtFieldName" />
    <div class="row foreignTable" style="display: none; padding-top: 1rem">
        <div class="col-md-6">
            <select class="form-control txtForeignModel" style="width: 100%" placeholder="Foreign Model">
                <option selected disabled value="">{{ __('generatorBuilder.foreign_table_select') }}
                </option>
                @foreach ($models as $model)
                    <option value="{{ $model->name }}">{{ $model->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <select disabled class="form-control txtForeignKey" style="width: 100%" placeholder="Foreign Model"
                id="">
                <option selected disabled value="">
                    {{ __('generatorBuilder.foreign_key_place_holder') }}</option>
            </select>
        </div>
    </div>
</td>
<td style="vertical-align: middle">
    <select class="form-control txtdbType" style="width: 100%">
        <option value="increments">Increments</option>
        <option value="integer">Integer</option>
        <option value="smallInteger">SmallInteger</option>
        <option value="longText">LongText</option>
        <option value="bigInteger">BigInteger</option>
        <option value="double">Double</option>
        <option value="float">Float</option>
        <option value="decimal">Decimal</option>
        <option value="boolean">Boolean</option>
        <option value="string">String</option>
        <option value="char">Char</option>
        <option value="text">Text</option>
        <option value="mediumText">MediumText</option>
        <option value="longText">LongText</option>
        <option value="enum">Enum</option>
        <option value="binary">Binary</option>
        <option value="dateTime">DateTime</option>
        <option value="date">Date</option>
        <option value="timestamp">Timestamp</option>
    </select>

    <input type="text" class="form-control dbValue txtDbValue" style="display: none" placeholder="" />
</td>
<td style="vertical-align: middle">
    @include('generator-builder::components.htmlTypeSelect')
</td>
<td style="vertical-align: middle">
    <div class="checkbox" style="text-align: center">
        <label style="padding-left: 0px">
            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkPrimary" />
        </label>
    </div>
</td>
<td style="vertical-align: middle">
    <div class="checkbox" style="text-align: center">
        <label style="padding-left: 0px">
            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkForeign" />
        </label>
    </div>
</td>
<td style="vertical-align: middle">
    <div class="checkbox" style="text-align: center">
        <label style="padding-left: 0px">
            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkSearchable" checked />
        </label>
    </div>
</td>
<td style="vertical-align: middle">
    <div class="checkbox" style="text-align: center">
        <label style="padding-left: 0px">
            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkFillable" checked />
        </label>
    </div>
</td>
<td style="vertical-align: middle">
    <div class="checkbox" style="text-align: center">
        <label style="padding-left: 0px">
            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkInForm" checked />
        </label>
    </div>
</td>
<td style="vertical-align: middle">
    <div class="checkbox" style="text-align: center">
        <label style="padding-left: 0px">
            <input type="checkbox" style="margin-left: 0px!important;" class="flat-red chkInIndex" checked />
        </label>
    </div>
</td>
<td style="text-align: center;vertical-align: middle">
    <div class="btn-group">
        <i onclick="removeItem(this)" class="remove fa-solid fa-trash"
            style="cursor: pointer;font-size: 20px;color: red; padding-right: 1rem"></i>
        <i onclick="expandRow(this)" class="fa-solid fa-pen-to-square" style="cursor: pointer;font-size: 20px; padding-right: 1rem"></i>
    </div>
</td>

<script>
    $(document).ready(function() {
        $('.txtForeignModel').on('change', function() {
            model = $('.txtForeignModel').val();
            end_point = model.split("\\")
            url = "getForeignKeys/" + end_point[end_point.length - 1];
            $.get(url, function(data, status) {
                if (status == 'success') {
                    $('.txtForeignKey').empty();
                    $.each(data, function(key, value) {
                        $('.txtForeignKey').append('<option value="' + value + '">' +
                            value +
                            '</option>');
                    });
                    $('.txtForeignKey').removeAttr('disabled');
                }
            });
        });
    });
</script>
