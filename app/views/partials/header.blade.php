<header class="header">
    <a href="../index.html" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
       PHONEBOOK 
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">

        <a role="button" data-toggle="offcanvas" class="navbar-btn sidebar-toggle" href="#">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <!-- Sidebar toggle button-->

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Notess: style can be found in dropdown.less-->


                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span> Hello @if(Auth::check()) {{ ucwords(Auth::user()->username) }}   @endif<i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="../img/avatar3.png" class="img-circle" alt="User Image"/>

                            <p>
                               @if(Auth::check())  {{ ucwords(Auth::user()->username) }} TUNÇ 
							   @else    
							   GUEST         
							   @endif
                                <small><a href="http://almsaeedstudio.com/AdminLTE/"> Thanks AdminLTE theme</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="https://github.com/stnc">github</a>
                            </div>

                            <div class="col-xs-4 text-center">
                                <a href="https://www.facebook.com/s.stnc">facebook</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="https://twitter.com/selmantunc">twitter</a>
                            </div>

                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
							@if(Auth::check())
                            <div class="pull-right">
                                <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                            </div>
						    @endif
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>