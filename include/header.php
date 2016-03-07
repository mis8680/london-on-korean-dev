
<div class="brand">
    <!-- toggle offscreen menu -->
    <a href="javascript:;" class="ti-menu off-left visible-xs" data-toggle="offscreen" data-move="ltr"></a>
    <!-- /toggle offscreen menu -->

    <!-- logo -->
    <a href="<?php echo WEB_ROOT; ?>/landing-page.php" class="navbar-brand">
                    <span class="heading-font">
                        Dev 0.0
                    </span>
    </a>
    <!-- /logo -->
</div>

<ul class="nav navbar-nav">
    <li class="hidden-xs">
        <!-- toggle small menu -->
        <a href="javascript:return false;" class="toggle-sidebar">
            <i class="ti-menu"></i>
        </a>
        <!-- /toggle small menu -->
    </li>
    <li id="search-bar-list" class="search-bar-list header-search">
        <!-- toggle search -->
        <a class="toggle-search">
            <i class="ti-search"></i>
        </a>
        <!-- /toggle search -->
        <div class="search-container">
            <form role="search">
                <div class="input-group">
                    <input id="dt-list-filter" type="text" class="form-control search" placeholder=" Search...">
                    <span class="input-group-addon" style="cursor: pointer;" id="advanced-search-anchor">Advanced Search</span>
                </div>
            </form>
        </div>
    </li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <li class="off-right">
        <a href="javascript:;" data-toggle="dropdown">
            <img src="images/avatar.jpg" class="header-avatar img-circle" alt="user" title="user">
            <span class="hidden-xs ml10 user-login">Hello User !!</span>
            <i class="ti-angle-down ti-caret hidden-xs"></i>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="">My Profile</a>
            </li>
            <li>
                <a href="">Logout</a>
            </li>
        </ul>
    </li>
</ul>