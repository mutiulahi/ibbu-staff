<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        {{-- <span class="badge rounded-pill bg-info float-end">04</span> --}}
                        <span key="t-dashboards">Dashboards</span>
                    </a> 
                </li> 
                <li>
                    <a href="{{route('calendar')}}" class="waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-calendar">Calendar</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Staff </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Staff</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> 
                        <li><a href="{{route('view_staff')}}" key="t-user-list">Staff List</a></li>
                        <li><a href="{{route('add_staff')}}" key="t-profile">Add Staff</a></li>
                    </ul>
                </li> 
                <li class="menu-title" key="t-apps">Promotions </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Staff Promotion</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false"> 
                        <li><a href="{{route('applied')}}" key="t-user-list">Applications</a></li>
                        <li><a href="{{route('accept')}}" key="t-profile">Approved Application</a></li>
                        {{-- <li><a href="contacts-profile.html" key="t-profile">Generate Application</a></li> --}}

                    </ul>
                </li> 

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>