   <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title">Navigation</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <!-- ========================================================= -->
                <div id="left-nav" class="nano">
                    <div class="nano-content">
                        <nav>
                            <ul class="nav nav-left-lines" id="main-nav">
                                <!--HOME-->
                                <li class="active-item"><a href="{{URL::to('/dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                                <!--USERS-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-users" aria-hidden="true"></i><span>Users</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('all-users')}}">All Users</a></li>
                                    </ul>
                                </li>
                   
                                <!--BOOKS-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-book" aria-hidden="true"></i><span>Book</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="">All Books</a></li>
                                    </ul>
                                </li>
                                  <!--BOOKS-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-exchange" aria-hidden="true"></i><span>Transaction</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="">Somthing</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>