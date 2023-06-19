<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="../images/logo-dark.png" alt="">
                        <h3><b>Sunny</b> Admin</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li>
                <a href="{{ route('adminDash') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Slider</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('slider') }}"><i class="ti-more"></i>Slider</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Header Image</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('header.image') }}"><i class="ti-more"></i>Update Header Image</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Home</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('home.section') }}"><i class="ti-more"></i>Update Home Top Part</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Issue</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('add.new.issue') }}"><i class="ti-more"></i>Add New Issue</a></li>
                    <li><a href="{{ route('issue.view') }}"><i class="ti-more"></i>All Issues</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>All Comment Slider</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('comment.slider') }}"><i class="ti-more"></i>Comment Slider</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Therapy</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('view.therapy') }}"><i class="ti-more"></i>All Therapy</a></li>
                    <li><a href="{{ route('add.therapy') }}"><i class="ti-more"></i>Add new Therapy</a></li>

                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Menu</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('menu.view') }}"><i class="ti-more"></i>All Menu</a></li>
                    <li><a href="{{ route('post.view') }}"><i class="ti-more"></i>All Menu Post</a></li>
                    <li><a href="{{ route('post.add') }}"><i class="ti-more"></i>Add New Post</a></li>


                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Register Users</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.reg') }}"><i class="ti-more"></i>All User</a></li>



                </ul>
            </li>


            <li>
                <a href="{{ route('site.setting') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Site Setting</span>
                </a>
            </li>

        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
</aside>
