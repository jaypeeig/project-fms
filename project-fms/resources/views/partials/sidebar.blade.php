<!-- sidebar.blade.php -->

<aside class="main-sidebar">
    <section class="sidebar">    
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('img/user8-128x128.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p> {{ Auth::user()->name }} </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>AWS Module</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>EC2</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>S3</a></li>
                </ul>
            </li> 
        </ul>
    </section>
</aside>
