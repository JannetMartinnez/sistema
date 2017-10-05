<header class="main-header">
        <!-- Logo -->
    <a href="<?php echo e(url('/admin/home')); ?>" class="logo"
       style="font-size: 16px;">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
           <i class="fa fa-home" aria-hidden="true"></i></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
           <i class="fa fa-home" aria-hidden="true"></i></span>
    </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top text-center" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="<?php echo e(url('/adminlte/img/avatar5.png')); ?>"
                                 class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?php echo Auth::user()->name; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php echo e(url('/adminlte/img/avatar5.png')); ?>"
                                     class="img-circle" alt="User Image"/>
                                <p>
                                    <?php echo Auth::user()->name; ?>

                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat"><?php echo app('translator')->getFromJson('global.app_profile'); ?></a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo url('/logout'); ?>" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <?php echo app('translator')->getFromJson('global.app_logout'); ?>
                                    </a>
                                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST"
                                          style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


