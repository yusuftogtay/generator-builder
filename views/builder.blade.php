<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.2/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/all.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css') }}">
</head>
<style>
    .chk-align {
        padding-right: 10px;
    }

    .chk-label-margin {
        margin-left: 5px;
    }

    .required {
        color: red;
        padding-left: 5px;
    }

    .btn-green {
        background-color: #00A65A !important;
    }

    .btn-blue {
        background-color: #2489C5 !important;
    }

    .expanded-row {
        display: table-row;
        /* Satırı yeniden görünür yapar */
    }

    .expanded-content {
        display: block;
        /* İçeriği blok düzenlemesi yapar */
    }
</style>

<body class="skin-blue" style="background-color: #ecf0f5">
    <div class="col-md-10 col-md-offset-1">
        <section class="content">
            <div id="info" style="display: none"></div>
            <div class="box box-primary col-lg-12">
                <div class="box-header" style="margin-top: 10px">
                    <h1 class="box-title" style="font-size: 30px">{{ config('app.name') }}</h1>
                </div>
                <div class="box-body">
                    <div
                        class="form-group col-12 d-flex flex-column flex-md-row justify-content-md-end justify-content-sm-center border-top pt-4">
                        <form id="form">
                            <input type="hidden" name="_token" id="token" value="{!! csrf_token() !!}" />
                            <div class="d-flex flex-column col-sm-12 col-md-6">
                                <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                                    <label class="col-md-3 control-label text-md-right mx-1"
                                        for="txtModelName">{{ __('generatorBuilder.model_name') }}<span
                                            class="required">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" required id="txtModelName"
                                            placeholder='{{ __('generatorBuilder.model_name_place_holder') }}'>
                                        <div class="form-text text-muted">
                                            {{ __('generatorBuilder.model_name_helper') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                                    <label class="col-md-3 control-label text-md-right mx-1"
                                        for="drdCommandType">{{ __('generatorBuilder.generation_type') }}</label>
                                    <div class="col-md-9">
                                        @include('generator-builder::components.commandTypeSelect')
                                        <div class="form-text text-muted">
                                            {{ __('generatorBuilder.generation_type_helper') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                                    <label class="col-md-3 control-label text-md-right mx-1"
                                        for="txtCustomTblName">{{ __('generatorBuilder.table_name') }}</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="txtCustomTblName"
                                            placeholder="{{ __('generatorBuilder.table_name_helper') }}">
                                        <div class="form-text text-muted">
                                            {{ __('generatorBuilder.table_name_helper') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                                    <label class="col-md-3 control-label text-md-right mx-1"
                                        for="txtPrefix">{{ __('generatorBuilder.prefix') }}</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="txtPrefix"
                                            placeholder="{{ __('generatorBuilder.prefix_place_holder') }}">
                                        <div class="form-text text-muted">
                                            {{ __('generatorBuilder.prefix_helper') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                                    <label class="col-md-3 control-label text-md-right mx-1"
                                        for="txtPaginate">{{ __('generatorBuilder.paginate') }}</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" value="10" id="txtPaginate"
                                            placeholder="">
                                        <div class="form-text text-muted">
                                            {{ __('generatorBuilder.paginate_helper') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column col-sm-12 col-md-6">
                                <label for="txtModelName">{{ __('generatorBuilder.options.title') }}</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="border-color: transparent">
                                            <div class="checkbox chk-align">
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="chkDelete"><span
                                                        class="chk-label-margin">
                                                        {{ __('generatorBuilder.options.soft_delete') }} </span>
                                                </label>
                                            </div>
                                            <div class="checkbox chk-align">
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="chkSave"> <span
                                                        class="chk-label-margin">{{ __('generatorBuilder.options.save_schema') }}</span>
                                                </label>
                                            </div>
                                            <div class="checkbox chk-align" id="chSwag">
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="chkSwagger"> <span
                                                        class="chk-label-margin">{{ __('generatorBuilder.options.swagger') }}</span>
                                                </label>
                                            </div>
                                            <div class="checkbox chk-align" id="chLocalized">
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="chkLocalized"> <span
                                                        class="chk-label-margin">{{ __('generatorBuilder.options.localized') }}</span>
                                                </label>
                                            </div>
                                            <div class="checkbox chk-align" id="chTest">
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="chkTestCases"> <span
                                                        class="chk-label-margin">{{ __('generatorBuilder.options.test_cases') }}</span>
                                                </label>
                                            </div>
                                            <div class="checkbox chk-align" id="chDataTable">
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="chkDataTable"> <span
                                                        class="chk-label-margin">{{ __('generatorBuilder.options.datatables') }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" style="border-color: transparent">
                                            <div class="checkbox chk-align" id="chMigration">
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="chkMigration"> <span
                                                        class="chk-label-margin">{{ __('generatorBuilder.options.migration') }}</span>
                                                </label>
                                            </div>
                                            <div class="checkbox chk-align" id="chForceMigrate">
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="chkForceMigrate">
                                                    <span
                                                        class="chk-label-margin">{{ __('generatorBuilder.options.force_migrate') }}</span>
                                                </label>
                                            </div>
                                            <div class="checkbox chk-align" id="chActivtyLog">
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="chkActivityLog">
                                                    <span
                                                        class="chk-label-margin">{{ __('generatorBuilder.options.activity_log') }}</span>
                                                </label>
                                            </div>
                                            <div class="checkbox chk-align" id="chMedia">
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="chkMedia"> <span
                                                        class="chk-label-margin">{{ __('generatorBuilder.options.media') }}</span>
                                                </label>
                                            </div>
                                            <div class="checkbox chk-align" id="chFactory">
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="chkFactory"> <span
                                                        class="chk-label-margin">{{ __('generatorBuilder.options.factory') }}</span>
                                                </label>
                                            </div>
                                            <div class="checkbox chk-align" id="chLadaCache">
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="chkLadaCache"> <span
                                                        class="chk-label-margin">{{ __('generatorBuilder.options.lada_cache') }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12" style="margin-top: 7px">
                                <div class="form-control" style="border-color: transparent;padding-left: 0px">
                                    <label
                                        style="font-size: 18px">{{ __('generatorBuilder.fields_title') }}</label>
                                </div>
                            </div>
                            <div class="table-responsive col-md-12">
                                <table class="table table-striped table-bordered" id="table">
                                    <thead class="no-border">
                                        <tr>
                                            <th>{{ __('generatorBuilder.field_name') }}</th>
                                            <th>{{ __('generatorBuilder.db_type') }}</th>
                                            <th>{{ __('generatorBuilder.html_type') }}</th>
                                            <th style="width: 68px">{{ __('generatorBuilder.primary') }}
                                            </th>
                                            <th style="width: 80px">{{ __('generatorBuilder.is_foreign') }}
                                            </th>
                                            <th style="width: 87px">{{ __('generatorBuilder.searchable') }}
                                            </th>
                                            <th style="width: 63px">{{ __('generatorBuilder.fillable') }}
                                            </th>
                                            <th style="width: 65px">{{ __('generatorBuilder.in_form') }}
                                            </th>
                                            <th style="width: 67px">{{ __('generatorBuilder.in_index') }}
                                            </th>
                                            <th>{{ __('generatorBuilder.actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody id="container" class="no-border-x no-border-y ui-sortable">

                                    </tbody>
                                </table>
                            </div>

                            <div class="form-inline col-md-12" style="padding-top: 10px">
                                <div class="form-group chk-align" style="border-color: transparent;">
                                    <button type="button" class="btn btn-success btn-flat btn-green" id="btnAdd">
                                        Add
                                        Field
                                    </button>
                                </div>
                                <div class="form-group chk-align" style="border-color: transparent;">
                                    <button type="button" class="btn btn-success btn-flat btn-green"
                                        id="btnPrimary">
                                        Add
                                        Primary
                                    </button>
                                </div>
                                <div class="form-group chk-align" style="border-color: transparent;">
                                    <button type="button" class="btn btn-success btn-flat btn-green"
                                        id="btnTimeStamps">
                                        Add
                                        Timestamps
                                    </button>
                                </div>
                            </div>

                            <div class="table-responsive col-md-12" id="relationShip"
                                style="margin-top:35px;display: none">
                                <table class="table table-striped table-bordered" id="table">
                                    <thead class="no-border">
                                        <tr>
                                            <th>Relation Type</th>
                                            <th>Foreign Model<span class="required">*</span></th>
                                            <th>Foreign Key</th>
                                            <th>Local Key</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="rsContainer" class="no-border-x no-border-y ui-sortable">

                                    </tbody>
                                </table>
                            </div>
                            <div class="form-inline col-md-12" style="padding-top: 10px">
                                <div class="form-group" style="border-color: transparent;">
                                    <button type="button" class="btn btn-success btn-flat btn-green"
                                        id="btnRelationShip">
                                        Add
                                        RelationShip
                                    </button>
                                </div>
                            </div>

                            <div class="form-inline col-md-12" style="padding:15px 15px;text-align: right">
                                <div class="form-group" style="border-color: transparent;padding-left: 10px">
                                    <button type="submit" class="btn btn-flat btn-primary btn-blue"
                                        id="btnGenerate">Generate
                                    </button>
                                </div>
                                <div class="form-group" style="border-color: transparent;padding-left: 10px">
                                    <button type="button" class="btn btn-default btn-flat" id="btnReset"
                                        data-toggle="modal" data-target="#confirm-delete"> Reset
                                    </button>
                                </div>
                            </div>


                            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Confirm Reset</h4>
                                        </div>

                                        <div class="modal-body">
                                            <p style="font-size: 16px">This will reset all of your fields. Do you want
                                                to
                                                proceed?</p>

                                            <p class="debug-url"></p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-flat btn-default"
                                                data-dismiss="modal">No
                                            </button>
                                            <a id="btnModelReset" class="btn btn-flat btn-danger btn-ok"
                                                data-dismiss="modal">Yes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <section class="content">
            <div id="rollbackInfo" style="display: none"></div>
            <div class="box box-primary col-lg-12">
                <div class="box-header" style="margin-top: 10px">
                    <h1 class="box-title" style="font-size: 30px">Rollback</h1>
                </div>
                <div class="box-body">
                    <form id="rollbackForm">
                        <input type="hidden" name="_token" id="rbToken" value="{!! csrf_token() !!}" />

                        <div class="form-group col-md-4">
                            <label for="txtRBModelName">Model Name<span class="required">*</span></label>
                            <input type="text" class="form-control" required id="txtRBModelName"
                                placeholder="Enter name">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="drdRBCommandType">Command Type</label>
                            <select id="drdRBCommandType" class="form-control" style="width: 100%">
                                <option value="api_scaffold">API Scaffold Generator</option>
                                <option value="api">API Generator</option>
                                <option value="scaffold">Scaffold Generator</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="txtRBPrefix">Prefix</label>
                            <input type="text" class="form-control" id="txtRBPrefix" placeholder="Enter prefix">
                        </div>
                        <div class="form-inline col-md-12" style="padding:15px 15px;text-align: right">
                            <div class="form-group" style="border-color: transparent;padding-left: 10px">
                                <button type="submit" class="btn btn-flat btn-primary btn-blue"
                                    id="btnRollback">Rollback
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <section class="content">
            <div id="schemaInfo" style="display: none"></div>
            <div class="box box-primary col-lg-12">
                <div class="box-header" style="margin-top: 10px">
                    <h1 class="box-title" style="font-size: 30px">Generate CRUD From Schema</h1>
                </div>
                <div class="box-body">
                    <form method="post" id="schemaForm" enctype="multipart/form-data">
                        <input type="hidden" name="_token" id="smToken" value="{!! csrf_token() !!}" />
                        <div class="form-group col-md-4">
                            <label for="txtSmModelName">Model Name<span class="required">*</span></label>
                            <input type="text" name="modelName" class="form-control" id="txtSmModelName"
                                placeholder="Enter Model Name">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="schemaFile">Schema File<span class="required">*</span></label>
                            <input type="file" name="schemaFile" class="form-control" required id="schemaFile">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="drdSmCommandType">Command Type</label>
                            <select name="commandType" id="drdSmCommandType" class="form-control"
                                style="width: 100%">
                                <option value="infyom:api_scaffold">API Scaffold Generator</option>
                                <option value="infyom:api">API Generator</option>
                                <option value="infyom:scaffold">Scaffold Generator</option>
                            </select>
                        </div>
                        <div class="form-inline col-md-12" style="padding:15px 15px;text-align: right">
                            <div class="form-group" style="border-color: transparent;padding-left: 10px">
                                <button type="submit" class="btn btn-flat btn-primary btn-blue"
                                    id="btnSmGenerate">Generate
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>

<script>
    var field_cell_counter = 0;

    $("select").select2({
        width: '100%'
    });
    var fieldIdArr = [];
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });

        $("#drdCommandType").on("change", function() {
            if ($(this).val() == "infyom:scaffold") {
                $('#chSwag').hide();
                $('#chTest').hide();
            } else {
                $('#chSwag').show();
                $('#chTest').show();
            }
        });

        $("#chkForceMigrate").on("ifChanged", function() {
            if ($(this).prop('checked') == true) {
                $('#chkMigration').iCheck("check", true);
                $('#chkMigration').iCheck("disable", true);
            } else {
                $('#chkMigration').iCheck("enable", true);
            }
        });

        $(document).ready(function() {
            var htmlStr = '<tr class="item" id="field' + field_cell_counter +
                '" style="display: table-row;"></tr>';
            var commonComponent = $(htmlStr).filter("tr").load('{{ route('io_field_template') }}');
            var relationStr = '<tr class="relationItem" style="display: table-row;"></tr>';
            var relationComponent = $(relationStr).filter("tr").load(
                '{{ route('io_relation_field_template') }}');

            $("#btnAdd").on("click", function() {
                var item = $(commonComponent).clone();
                initializeCheckbox(item);
                $("#container").append(item);
                field_cell_counter++
            });

            $("#btnTimeStamps").on("click", function() {
                var item_created_at = $(commonComponent).clone();
                $(item_created_at).find('.txtFieldName').val("created_at");
                renderTimeStampData(item_created_at);
                initializeCheckbox(item_created_at);
                $("#container").append(item_created_at);


                var item_updated_at = $(commonComponent).clone();
                $(item_updated_at).find('.txtFieldName').val("updated_at");
                renderTimeStampData(item_updated_at);
                initializeCheckbox(item_updated_at);
                $("#container").append(item_updated_at);
            });

            $("#btnPrimary").on("click", function() {
                var item = $(commonComponent).clone();
                renderPrimaryData(item);
                initializeCheckbox(item);
                $("#container").append(item);
            });

            $("#btnRelationShip").on("click", function() {
                $("#relationShip").show();
                var item = $(relationComponent).clone();

                $(item).find("select").select2({
                    width: '100%'
                });

                var relationType = $(item).find('.drdRelationType');

                $(relationType).select2().on('change', function() {
                    if ($(relationType).val() == "mtm")
                        $(item).find('.foreignTable').show();
                    else
                        $(item).find('.foreignTable').hide();
                });

                $("#rsContainer").append(item);
            });

            $("#btnModelReset").on("click", function() {
                $("#container").html("");
                $('input:text').val("");
                $('input:checkbox').iCheck('uncheck');

            });

            $("#form").on("submit", function() {
                var fieldArr = [];
                var relationFieldArr = [];
                $('.item').each(function() {

                    var htmlType = $(this).find('.drdHtmlType');
                    var htmlValue = "";
                    if ($(htmlType).val() == "select" || $(htmlType).val() == "radio") {
                        htmlValue = $(this).find('.drdHtmlType').val() + ',' + $(this)
                            .find('.txtHtmlValue').val();
                    } else {
                        htmlValue = $(this).find('.drdHtmlType').val();
                    }

                    fieldArr.push({
                        name: $(this).find('.txtFieldName').val(),
                        dbType: $(this).find('.txtdbType').val(),
                        htmlType: htmlValue,
                        validations: $(this).find('.txtValidation').val(),
                        foreignTable: $(this).find('.txtForeignTable').val(),
                        isForeign: $(this).find('.chkForeign').prop('checked'),
                        searchable: $(this).find('.chkSearchable').prop(
                            'checked'),
                        fillable: $(this).find('.chkFillable').prop('checked'),
                        primary: $(this).find('.chkPrimary').prop('checked'),
                        inForm: $(this).find('.chkInForm').prop('checked'),
                        inIndex: $(this).find('.chkInIndex').prop('checked')
                    });
                });

                $('.relationItem').each(function() {
                    relationFieldArr.push({
                        relationType: $(this).find('.drdRelationType').val(),
                        foreignModel: $(this).find('.txtForeignModel').val(),
                        foreignTable: $(this).find('.txtForeignTable').val(),
                        foreignKey: $(this).find('.txtForeignKey').val(),
                        localKey: $(this).find('.txtLocalKey').val(),
                    });
                });

                var data = {
                    modelName: $('#txtModelName').val(),
                    commandType: $('#drdCommandType').val(),
                    tableName: $('#txtCustomTblName').val(),
                    migrate: $('#chkMigration').prop('checked'),
                    options: {
                        softDelete: $('#chkDelete').prop('checked'),
                        localized: $('#chkLocalized').prop('checked'),
                        save: $('#chkSave').prop('checked'),
                        prefix: $('#txtPrefix').val(),
                        paginate: $('#txtPaginate').val(),
                        forceMigrate: $('#chkForceMigrate').prop('checked'),
                    },
                    addOns: {
                        swagger: $('#chkSwagger').prop('checked'),
                        tests: $('#chkTestCases').prop('checked'),
                        datatables: $('#chkDataTable').prop('checked')
                    },
                    fields: fieldArr,
                    relations: relationFieldArr
                };

                data['_token'] = $('#token').val();

                $.ajax({
                    url: '{{ route('io_generator_builder_generate') }}',
                    // type: "POST",
                    method: "POST",
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify(data),
                    success: function(result) {
                        $("#info").html("");
                        $("#info").append(
                            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>' +
                            result + '</strong></div>');
                        $("#info").show();
                        var $container = $("html,body");
                        var $scrollTo = $('#info');
                        $container.animate({
                            scrollTop: $scrollTo.offset().top - $container
                                .offset().top,
                            scrollLeft: 0
                        }, 300);
                        setTimeout(function() {
                            $('#info').fadeOut('fast');
                        }, 3000);
                        location.reload();
                    },
                    error: function(result) {
                        var result = JSON.parse(JSON.stringify(result));
                        var errorMessage = '';
                        if (result.hasOwnProperty('responseJSON') && result
                            .responseJSON.hasOwnProperty('message')) {
                            errorMessage = result.responseJSON.message;
                        }

                        $("#info").html("");
                        $("#info").append(
                            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Fail! </strong>' +
                            errorMessage + '</div>');
                        $("#info").show();
                        var $container = $("html,body");
                        var $scrollTo = $('#info');
                        $container.animate({
                            scrollTop: $scrollTo.offset().top
                        }, 300);
                        setTimeout(function() {
                            $('#info').fadeOut('fast');
                        }, 3000);
                    }
                });

                return false;
            });

            $('#rollbackForm').on("submit", function(e) {
                e.preventDefault();

                var data = {
                    modelName: $('#txtRBModelName').val(),
                    commandType: $('#drdRBCommandType').val(),
                    prefix: $('#txtRBPrefix').val(),
                    _token: $('#rbToken').val()
                };

                $.ajax({
                    url: '{{ route('io_generator_builder_rollback') }}',
                    method: "POST",
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify(data),
                    success: function(result) {
                        var result = JSON.parse(JSON.stringify(result));

                        $("#rollbackInfo").html("");
                        $("#rollbackInfo").append(
                            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>' +
                            result.message + '</strong></div>');
                        $("#rollbackInfo").show();

                        var $container = $("html,body");
                        var $scrollTo = $('#rollbackInfo');
                        $container.animate({
                            scrollTop: $scrollTo.offset().top - $container
                                .offset().top,
                            scrollLeft: 0
                        }, 300);
                        setTimeout(function() {
                            $('#rollbackInfo').fadeOut('fast');
                        }, 3000);
                        location.reload();
                    },
                    error: function(result) {
                        var result = JSON.parse(JSON.stringify(result));
                        var errorMessage = '';
                        if (result.hasOwnProperty('responseJSON') && result
                            .responseJSON.hasOwnProperty('message')) {
                            errorMessage = result.responseJSON.message;
                        }

                        $("#rollbackInfo").html("");
                        $("#rollbackInfo").append(
                            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Fail! </strong>' +
                            errorMessage + '</div>');
                        $("#rollbackInfo").show();
                        setTimeout(function() {
                            $('#rollbackInfo').fadeOut('fast');
                        }, 3000);
                    }
                });
            });

            $('#schemaFile').change(function() {
                var ext = $(this).val().split('.').pop().toLowerCase();
                if (ext != 'json') {
                    $("#schemaInfo").html("");
                    $("#schemaInfo").append(
                        '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Schema file must be json</strong></div>'
                    );
                    $("#schemaInfo").show();
                    $(this).replaceWith($(this).val('').clone(true));
                    setTimeout(function() {
                        $('div.alert').fadeOut('fast');
                    }, 3000);
                }
            });

            $('#schemaForm').on("submit", function(e) {
                e.preventDefault();

                $.ajax({
                    url: '{{ route('io_generator_builder_generate_from_file') }}',
                    type: 'POST',
                    data: new FormData($(this)[0]),
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        var result = JSON.parse(JSON.stringify(result));

                        $("#schemaInfo").html("");
                        $("#schemaInfo").append(
                            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>' +
                            result.message + '</strong></div>');
                        $("#schemaInfo").show();
                        var $container = $("html,body");
                        var $scrollTo = $('#schemaInfo');
                        $container.animate({
                            scrollTop: $scrollTo.offset().top - $container
                                .offset().top,
                            scrollLeft: 0
                        }, 300);
                        setTimeout(function() {
                            $('#schemaInfo').fadeOut('fast');
                        }, 3000);
                        location.reload();
                    },
                    error: function(result) {
                        var result = JSON.parse(JSON.stringify(result));
                        var errorMessage = '';
                        if (result.hasOwnProperty('responseJSON') && result
                            .responseJSON.hasOwnProperty('message')) {
                            errorMessage = result.responseJSON.message;
                        }

                        $("#schemaInfo").html("");
                        $("#schemaInfo").append(
                            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Fail! </strong>' +
                            errorMessage + '</div>');
                        $("#schemaInfo").show();
                        setTimeout(function() {
                            $('#schemaInfo').fadeOut('fast');
                        }, 3000);
                    }
                });
            });

            function renderPrimaryData(el) {

                $('.chkPrimary').iCheck(getiCheckSelection(false));

                $(el).find('.txtFieldName').val("id");
                $(el).find('.txtdbType').val("increments");
                $(el).find('.chkSearchable').attr('checked', false);
                $(el).find('.chkFillable').attr('checked', false);
                $(el).find('.chkPrimary').attr('checked', true);
                $(el).find('.chkInForm').attr('checked', false);
                $(el).find('.chkInIndex').attr('checked', false);
                $(el).find('.drdHtmlType').val('number').trigger('change');
            }

            function renderTimeStampData(el) {
                $(el).find('.txtdbType').val("timestamp");
                $(el).find('.chkSearchable').attr('checked', false);
                $(el).find('.chkFillable').attr('checked', false);
                $(el).find('.chkPrimary').attr('checked', false);
                $(el).find('.chkInForm').attr('checked', false);
                $(el).find('.chkInIndex').attr('checked', false);
                $(el).find('.drdHtmlType').val('date').trigger('change');
            }

        });

        function initializeCheckbox(el) {
            $(el).find('input:checkbox').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue'
            });
            $(el).find("select").select2({
                width: '100%'
            });

            $(el).find(".chkPrimary").on("ifClicked", function() {
                $('.chkPrimary').each(function() {
                    $(this).iCheck('uncheck');
                });
            });

            $(el).find(".chkForeign").on("ifChanged", function() {
                if ($(this).prop('checked') == true) {
                    $(el).find('.foreignTable').show();
                } else {
                    $(el).find('.foreignTable').hide();
                }
            });

            $(el).find(".chkPrimary").on("ifChanged", function() {
                if ($(this).prop('checked') == true) {
                    $(el).find(".chkSearchable").iCheck('uncheck');
                    $(el).find(".chkFillable").iCheck('uncheck');
                    $(el).find(".chkInForm").iCheck('uncheck');
                }
            });

            var htmlType = $(el).find('.drdHtmlType');

            $(htmlType).select2().on('change', function() {
                if ($(htmlType).val() == "select" || $(htmlType).val() == "radio")
                    $(el).find('.htmlValue').show();
                else
                    $(el).find('.htmlValue').hide();
            });

        }

    });

    function getiCheckSelection(value) {
        if (value == true)
            return 'checked';
        else
            return 'uncheck';
    }

    function removeItem(e) {
        e.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode);
    }

    function expandRow(button) {
        var row = button.parentNode.parentNode.parentNode; // Tıklanan butonun üst satırını alır
        var expandedContent = document.createElement("div"); // Yeni bir <div> öğesi oluşturur
        expandedContent.className = "expanded-content"; // <div> öğesine "expanded-content" sınıfını ekler
        $(expandedContent).load(
            '{{ route('io_field_template_detail') }}');; // İçeriği belirlemek için istediğiniz metni kullanabilirsiniz

        if (row.nextSibling && row.nextSibling.className === "expanded-row") {
            // Eğer satır zaten genişletilmişse, genişlemiş içeriği kaldırır
            row.parentNode.removeChild(row.nextSibling);
        } else {
            // Eğer satır genişletilmemişse, yeni bir genişletilmiş satır ekler
            var expandedRow = document.createElement("tr");
            expandedRow.className = "expanded-row";
            var expandedCell = document.createElement("td");
            expandedCell.setAttribute("colspan", row.children.length);
            expandedCell.appendChild(expandedContent);
            expandedRow.appendChild(expandedCell);
            row.parentNode.insertBefore(expandedRow, row.nextSibling);
        }
    }
</script>

</html>
