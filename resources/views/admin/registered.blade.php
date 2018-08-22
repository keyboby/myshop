@extends('adminLayouts.app')
@section('title','注册用户')
@section('content')


    <div class="col-md-12">
        <div ba-panel="" ba-panel-title="Editable Rows" ba-panel-class="with-scroll">
            <div class="panel panel-blur with-scroll animated zoomIn" zoom-in="" ba-panel-blur=""
                 style="background-size: 1913px 1076px; background-position: 0px -200px;">
                <div class="panel-heading clearfix"><h3 class="panel-title">Editable Rows</h3></div>
                <div class="panel-body" ng-transclude="">
                    <div include-with-scope="app/pages/tables/widgets/editableRowTable.html" class="ng-scope">
                        <div class="add-row-editable-table">
                            <button class="btn btn-primary" ng-click="addUser()">Add row</button>
                        </div>
                        <table class="table table-bordered table-hover table-condensed">
                            <tbody>
                            <tr>
                                <td></td>
                                <td>名称</td>
                                <td>头像</td>
                                <td>创建时间</td>
                                <td>类别</td>
                                <td>分组</td>
                                <td>操作</td>
                            </tr>
                            @if (count($users))
                            @foreach ($users as $user)
                            <tr ng-repeat="user in users" class="editable-row ng-scope">
                                <td class="ng-binding">{{ $user->id }}</td>
                                <td><span editable-text="user.name" e-name="name" e-form="rowform" e-required=""
                                          class="ng-scope ng-binding editable">{{ $user->name }}</span></td>
                                <td><span editable-text="user.avatar" e-name="avatar" e-form="rowform" e-required=""
                                          class="ng-scope ng-binding editable"><img style="width: 60px;height: 40px;" src="{{ $user->avatar }}"></span></td>
                                <td><span editable-text="user.created_at" e-name="created_at" e-form="rowform" e-required=""
                                          class="ng-scope ng-binding editable">{{ $user->created_at }}</span></td>
                                <td class="select-td"><span editable-select="user.status" e-name="status"
                                                            e-form="rowform" e-selectpicker=""
                                                            e-ng-options="s.value as s.text for s in statuses"
                                                            class="ng-scope ng-binding editable">{{ $user->is_admin==1?'Admin':'user' }}</span></td>
                                <td class="select-td"><span editable-select="user.group" e-name="group"
                                                            onshow="loadGroups()" e-form="rowform" e-selectpicker=""
                                                            e-ng-options="g.id as g.text for g in groups"
                                                            class="ng-scope ng-binding editable">vip</span></td>
                                <td>
                                    <!-- <form editable-form="" name="rowform" ng-show="rowform.$visible"
                                          class="form-buttons form-inline ng-pristine ng-valid ng-hide"
                                          shown="inserted == user">
                                        <button type="submit" ng-disabled="rowform.$waiting"
                                                class="btn btn-primary editable-table-button btn-xs">Save
                                        </button>
                                        <button type="button" ng-disabled="rowform.$waiting"
                                                ng-click="rowform.$cancel()"
                                                class="btn btn-default editable-table-button btn-xs">Cancel
                                        </button>
                                    </form> -->
                                    @if($user->is_admin!=1)
                                    <div class="buttons" ng-show="!rowform.$visible">
                                        <button class="btn btn-primary editable-table-button btn-xs"
                                                ng-click="rowform.$show()">Edit
                                        </button>
                                        <!-- <button class="btn btn-danger editable-table-button btn-xs"
                                                ng-click="removeUser($index)">Delete
                                        </button> -->
                                    </div>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                        {{-- 分页 --}}
                        {!! $users->appends(Request::except('page'))->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop