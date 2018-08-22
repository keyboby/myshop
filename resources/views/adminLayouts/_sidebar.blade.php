<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;overflow-y:auto;">
    <ul class="al-sidebar-list" style="overflow: hidden; width: auto; height: 100%;">

        <li class="al-sidebar-list-item ng-scope {{ Request::path()=='admin'?'selected':'' }}">
            <a class="al-sidebar-list-link ng-scope" href="{{ route('admin.index') }}"><i class="ion-android-home"></i><span class="ng-binding">首页</span></a>
        </li>
        <li class="al-sidebar-list-item ng-scope with-sub-menu" >
            <a class="al-sidebar-list-link ng-scope click_this"><i class="fa fa-male"></i><span class="ng-binding">用户管理</span>
                </a>
            <ul class="al-sidebar-sublist ng-scope" style="display: none;">
                <li class="ba-sidebar-sublist-item ng-scope {{ Request::path()=='registered'?'selected':'' }}">
                    <a target="_self" class="ng-binding ng-scope" href="{{ route('admin.registered') }}"><i class="fa fa-user"></i><span style="margin-left: 5px;">注册用户管理</span></a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/timeline"><i class="fa fa-vcard-o"></i><span style="margin-left: 5px;">用户认证管理</span>
                    </a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/tree"><i class="fa fa-bank"></i><span style="margin-left: 5px;">商家管理</span></a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/tree"><i class="fa fa-hand-o-up"></i><span style="margin-left: 5px;">商家资料审核</span></a>
                </li>
            </ul>
        </li>
        <li class="al-sidebar-list-item ng-scope with-sub-menu" >
            <a class="al-sidebar-list-link ng-scope click_this"><i class="fa fa-list-alt"></i><span class="ng-binding">任务管理</span>
                </a>
            <ul class="al-sidebar-sublist ng-scope" style="display: none;">
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/mail"><i class="fa fa-car"></i><span style="margin-left: 5px;">车刊任务</span></a>
                </li>
            </ul>
        </li>
        <li class="al-sidebar-list-item ng-scope" >
            <a class="al-sidebar-list-link ng-scope"><i class="fa fa-suitcase"></i><span class="ng-binding">任务订单</span>
                </a>
        </li>
        <li class="al-sidebar-list-item ng-scope with-sub-menu ba-sidebar-item-expanded" >
            <a class="al-sidebar-list-link ng-scope click_this"><i class="fa fa-btc"></i><span class="ng-binding">财务管理</span>
                </a>
            <ul class="al-sidebar-sublist ng-scope" style="display: none;">
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/mail"><i class="fa fa-jpy"></i><span style="margin-left: 5px;">商家任务流水</span></a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/timeline"><i class="fa fa-credit-card"></i><span style="margin-left: 5px;">用户提现管理</span>
                    </a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/tree"><i class="fa fa-stack-overflow"></i><span style="margin-left: 5px;">任务订单流水</span></a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/tree1"><i class="fa fa-reply"></i><span style="margin-left: 5px;">佣金流水</span></a>
                </li>
            </ul>
        </li>
        <li class="al-sidebar-list-item ng-scope" >
            <a class="al-sidebar-list-link ng-scope"><i class="fa fa-suitcase"></i><span class="ng-binding">banner管理</span>
                </a>
        </li>
        <li class="al-sidebar-list-item ng-scope with-sub-menu" >
            <a class="al-sidebar-list-link ng-scope click_this"><i class="fa fa-group"></i><span class="ng-binding">权限管理</span>
                </a>
            <ul class="al-sidebar-sublist ng-scope" style="display: none;">
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/mail"><i class="fa fa-user"></i><span style="margin-left: 5px;">角色管理</span></a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/timeline"><i class="fa fa-vcard-o"></i><span style="margin-left: 5px;">权限管理</span>
                    </a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/tree"><i class="fa fa-bank"></i><span style="margin-left: 5px;">管理员管理</span></a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/tree"><i class="fa fa-hand-o-up"></i><span style="margin-left: 5px;">管理员日志</span></a>
                </li>
            </ul>
        </li>
        <li class="al-sidebar-list-item ng-scope with-sub-menu" >
            <a class="al-sidebar-list-link ng-scope click_this"><i class="fa fa-th-large"></i><span class="">配置</span>
                </a>
            <ul class="al-sidebar-sublist ng-scope" style="display: none;">
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/mail"><i class="fa fa-fort-awesome"></i><span style="margin-left: 5px;">上刊网点管理</span></a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope {{ Request::path()=='car_brand'?'selected':'' }}">
                    <a target="_self" class="ng-binding ng-scope" href="{{ route('admin.car_brand') }}"><i class="fa fa-automobile"></i><span style="margin-left: 5px;">车辆品牌</span>
                    </a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/tree"><i class="fa fa-subway"></i><span style="margin-left: 5px;">车型管理</span></a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope {{ Request::path()=='car_color'?'selected':'' }}">
                    <a target="_self" class="ng-binding ng-scope" href="{{ route('admin.car_color') }}"><i class="fa fa-truck"></i><span style="margin-left: 5px;">车颜色管理</span></a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/tree"><i class="fa fa-sticky-note-o"></i><span style="margin-left: 5px;">车主协议</span></a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/tree"><i class="fa fa-cog"></i><span style="margin-left: 5px;">提现佣金配置</span></a>
                </li>
                <li class="ba-sidebar-sublist-item ng-scope">
                    <a target="_self" class="ng-binding ng-scope" href="#/components/tree"><i class="fa fa-file-text-o"></i><span style="margin-left: 5px;">商家协议</span></a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.click_this').click(function(){
            var _this = $(this).next();
            _this.toggle(250);
        });

        $('.ba-sidebar-sublist-item').each(function(){
            if ($(this).hasClass('selected')) {
                $(this).parent().show();
            }
        });
    })
</script>