<div class="page-top clearfix ng-isolate-scope" scroll-position="scrolled" max-height="50" style="">
    <a href="index" class="al-logo clearfix">
        <span>MyShop</span>Admin
    </a>
    <!-- <a href="" class="collapse-menu-link ion-navicon" ba-sidebar-toggle-menu=""></a> -->
    <!-- <div class="search">
        <i class="ion-ios-search-strong" ng-click="startSearch()"></i>
        <input id="searchInput" type="text" placeholder="Search for...">
    </div> -->

    <div class="user-profile clearfix">
        <div class="al-user-profile" uib-dropdown="">
            <a  class="profile-toggle-link menu_toggle" aria-haspopup="true"
               aria-expanded="false">
                <img src="{{ Auth::user()->avatar }}"></a>
            <ul class="top-dropdown-menu profile-dropdown dropdown-menu menu_head" style="left: -80px;">
                <li><i class="dropdown-arr"></i></li>
                <li><a href="#/profile"><i class="fa fa-user"></i>Profile</a></li>
                <li><a href=""><i class="fa fa-cog"></i>Settings</a></li>
                <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="signout"><i class="fa fa-power-off"></i>退出登录</a></li>
            </ul>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

    <div class="questions-section">Have questions? <a href="{{ Auth::user()->email }}">{{ Auth::user()->email }}</a>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $('.menu_toggle').click(function(){
            $('.menu_head').toggle();
        });
    })
</script>