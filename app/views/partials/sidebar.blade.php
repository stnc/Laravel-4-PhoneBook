<!-- sidebar: style can be found in sidebar.less -->
<section
    class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="/../img/avatar3.png" class="img-circle" alt="User Image"/>
        </div>
        <div class="pull-left info">
            <p>Hello,   @if(Auth::check())  {{ ucwords(Auth::user()->username) }}  @endif</p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li><a href="/"> <i class="fa fa-dashboard"></i> <span>HomePage</span></a> </li>




        <li class="treeview"><a href="/phonebook"> <i class="fa fa-table"></i> <span>PhoneBook</span> <i
                    class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="/phonebook"><i class="fa fa-angle-double-right"></i>
                        Adress list</a></li>
                <li><a href="/phonebook/create"><i class="fa fa-angle-double-right"></i>
                        Adress Add</a></li>
						
						 <li><a href="/category"><i class="fa fa-angle-double-right"></i>
                        Category List</a></li>
						
						    <li><a href="/category/crate"><i class="fa fa-angle-double-right"></i>
                        Category Add</a></li>
						
                <li><a href="/logout"><i class="fa fa-angle-double-right"></i>
                        Logout</a></li>
            </ul>
        </li>

        <li><a href="/register"> <i class="fa fa-user"></i> <span>New Admin Add</span>
            </a>
        </li>

    </ul>
</section>
<!-- /.sidebar -->
