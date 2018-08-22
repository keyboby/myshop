@extends('adminLayouts.app')
@section('title','车辆品牌列表')
@section('content')


    <div class="col-md-12">
        <div ba-panel="" ba-panel-title="Editable Rows" ba-panel-class="with-scroll">
            <div class="panel panel-blur with-scroll animated zoomIn" zoom-in="" ba-panel-blur=""
                 style="background-size: 1913px 1076px; background-position: 0px -200px;">
                <div class="panel-heading clearfix"><h3 class="panel-title">车辆品牌列表</h3></div>
                <div class="panel-body" ng-transclude="">
                    <div include-with-scope="app/pages/tables/widgets/editableRowTable.html" class="ng-scope">
                        <div class="add-row-editable-table">
                            <button class="btn btn-primary" onclick="addUser()">新增</button>
                        </div>
                        <!--新增-->
                        <div class="row addUser" style="display: none;">
                            <div class="col-md-12" ba-panel="" ba-panel-title="Inline Form"
                                 ba-panel-class="with-scroll">
                                <div class="panel panel-blur with-scroll animated zoomIn" zoom-in="" ba-panel-blur=""
                                     style="background-size: 1913px 1076px; background-position: 0px -200px;">
                                    <div class="panel-heading clearfix"><h3 class="panel-title">新增</h3></div>
                                    <div class="panel-body" ng-transclude="">
                                        <div ng-include="'app/pages/form/layouts/widgets/inlineForm.html'"
                                             class="ng-scope">
                                            <form class="row form-inline ng-pristine ng-valid ng-scope" action="{{ route('admin.car_brand_save') }}" method="POST">
                                                @csrf
                                                <div class="form-group col-sm-3 col-xs-6">
                                                    <input type="text" class="form-control" name="car_brand_name_add" placeholder="Name">
                                                </div>
                                                <div class="form-group col-sm-1 col-xs-6">
                                                    <select name="car_brand_status_add" style="background-color:#FFFFFF; color:red;height: 35px;">
                                                        <option value="-1">请选择</option>
                                                        <option value="1">启用</option>
                                                        <option value="0">不启用</option>
                                                    </select>

                                                </div>
                                                <button type="submit" class="btn btn-primary">保存</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-hover table-condensed">
                            <tbody>
                            <tr>
                                <td></td>
                                <td>名称</td>
                                <td>创建时间</td>
                                <td>启用状态</td>
                                <td>操作</td>
                            </tr>
                            @if (count($carBrands))
                                @foreach ($carBrands as $carBrand)
                                    <tr ng-repeat="carBrand in carBrands" class="editable-row ng-scope">
                                        <td class="ng-binding">{{ $carBrand->id }}</td>
                                        <td><span editable-text="user.name" e-name="name" e-form="rowform" e-required=""
                                                  class="ng-scope ng-binding editable">{{ $carBrand->brand_name }}</span>
                                            <input type="text" name="edit_name" value=""
                                                   style="background-color:#5E5E5E;display: none;" placeholder="请输入名称">
                                        </td>

                                        <td><span editable-text="user.created_at" e-name="created_at" e-form="rowform"
                                                  e-required=""
                                                  class="ng-scope ng-binding editable">{{ $carBrand->created_at }}</span>
                                        </td>

                                        <td><span editable-text="user.status" e-name="status" e-form="rowform"
                                                  e-required=""
                                                  class="ng-scope ng-binding editable">{{ $carBrand->status?'启用':'未启用' }}</span>
                                            <select style="background-color:#5E5E5E;display: none;" name="edit_select">
                                                <option value="1">启用</option>
                                                <option value="0">不启用</option>
                                            </select>
                                        </td>

                                        <td>
                                            <form name="rowform" action="{{ route('admin.car_brand_edit') }}"
                                                  method="get"
                                                  class="form-buttons form-inline ng-pristine ng-valid ng-hide"
                                                  style="display: none;">
                                                <input type="hidden" name="brand_name" value="">
                                                <input type="hidden" name="status" value="">
                                                <input type="hidden" name="car_brand_id" value="{{ $carBrand->id }}">
                                                <button type="button" ng-disabled="rowform.$waiting"
                                                        class="btn btn-primary editable-table-button btn-xs btn_save">保存
                                                </button>
                                                <button type="button" ng-disabled="rowform.$waiting"
                                                        ng-click="rowform.$cancel()"
                                                        class="btn btn-default editable-table-button btn-xs btn_centl">
                                                    取消
                                                </button>
                                            </form>

                                            <div class="buttons" ng-show="!rowform.$visible">
                                                <button class="btn btn-primary editable-table-button btn-xs btn_edit"
                                                        ng-click="rowform.$show()">编辑
                                                </button>
                                                <!-- <button class="btn btn-danger editable-table-button btn-xs"
                                                        ng-click="removeUser($index)">Delete
                                                </button> -->
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        {{-- 分页 --}}
                        {!! $carBrands->appends(Request::except('page'))->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $('.btn_edit').click(function () {
                var _this = $(this);
                _this.parent().parent().siblings().find('select[name="edit_select"]').show();
                _this.parent().parent().siblings().find('input[name="edit_name"]').show();
                _this.parent().prev().show();
                _this.hide();
            });
            $('.btn_centl').click(function () {
                window.location.reload();
            });

            $('.btn_save').click(function () {
                var _this = $(this);
                var car_brand_status = _this.parent().parent().siblings().find('select[name="edit_select"]').val();
                var car_brand_name = _this.parent().parent().siblings().find('input[name="edit_name"]').val();

                _this.parent().find('input[name="brand_name"]').val(car_brand_name);
                _this.parent().find('input[name="status"]').val(car_brand_status);

                _this.parent().submit();
            });
        });

        function addUser(){
            $('.addUser').toggle();
        }
    </script>

@stop