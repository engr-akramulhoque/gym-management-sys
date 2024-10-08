<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}"> <img alt="image" src="{{ asset('static/assets/img/logo.png') }}"
                    class="header-logo" />
                <span class="logo-name">DBCalling IT</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            @if (auth()->user()->hasAnyPermission(['view schedule']))
                <li class="menu-header">Schedule</li>
            @endif
            @can('view schedule')
                <li class="{{ Request::routeIs('schedule.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('schedule.index') }}">
                        <i data-feather="user"></i>
                        <span>My Schedule</span>
                    </a>
                </li>
            @endcan

            @if (auth()->user()->hasAnyPermission(['bookings', 'classes', 'view trainee', 'view trainer']))
                <li class="menu-header">Business</li>
            @endif
            @can('view trainee')
                <li class="{{ Request::routeIs('trainee.list') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('trainee.list') }}"><i data-feather="user"></i><span>All
                            Trainees</span>
                    </a>
                </li>
            @endcan
            @can('view trainer')
                <li class="{{ Request::routeIs('trainer.list') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('trainer.list') }}"><i data-feather="user"></i>
                        <span>All
                            Trainers</span>
                    </a>
                </li>
            @endcan
            @can('bookings')
                <li
                    class="dropdown {{ Request::routeIs('booking.index') ? 'active' : '' }} || {{ Request::routeIs('booking.create') ? 'active' : '' }} || {{ Request::routeIs('booking.edit') ? 'active' : '' }}">
                    <a href="#"
                        class="menu-toggle nav-link has-dropdown {{ Request::routeIs('booking.index') ? 'toggled' : '' }} || {{ Request::routeIs('booking.create') ? 'toggled' : '' }} || {{ Request::routeIs('booking.edit') ? 'toggled' : '' }}"><i
                            data-feather="copy"></i><span>Bookings</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('view booking')
                            <li
                                class="{{ Request::routeIs('booking.index') ? 'active' : '' }} || {{ Request::routeIs('booking.edit') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('booking.index') }}">Bookings</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('classes')
                <li
                    class="dropdown {{ Request::routeIs('class.index') ? 'active' : '' }} || {{ Request::routeIs('class.create') ? 'active' : '' }} || {{ Request::routeIs('class.edit') ? 'active' : '' }}">
                    <a href="#"
                        class="menu-toggle nav-link has-dropdown {{ Request::routeIs('class.index') ? 'toggled' : '' }} || {{ Request::routeIs('class.create') ? 'toggled' : '' }} || {{ Request::routeIs('class.edit') ? 'toggled' : '' }}"><i
                            data-feather="copy"></i><span>Sessions</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('create class')
                            <li class="{{ Request::routeIs('class.create') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('class.create') }}">Add Session</a>
                            </li>
                        @endcan
                        @can('view class')
                            <li
                                class="{{ Request::routeIs('class.index') ? 'active' : '' }} || {{ Request::routeIs('class.edit') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('class.index') }}">Session</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan


            @if (auth()->user()->hasAnyPermission(['users', 'roles', 'view permission']))
                <li class="menu-header">User Management</li>
            @endif
            @can('users')
                <li
                    class="dropdown {{ Request::routeIs('users.index') ? 'active' : '' }} || {{ Request::routeIs('users.create') ? 'active' : '' }} || {{ Request::routeIs('users.edit') ? 'active' : '' }}">
                    <a href="#"
                        class="menu-toggle nav-link has-dropdown {{ Request::routeIs('users.index') ? 'toggled' : '' }} || {{ Request::routeIs('users.create') ? 'toggled' : '' }} || {{ Request::routeIs('users.edit') ? 'toggled' : '' }}"><i
                            data-feather="copy"></i><span>Users</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('create user')
                            <li class="{{ Request::routeIs('users.create') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('users.create') }}">Add User</a>
                            </li>
                        @endcan
                        @can('users')
                            <li
                                class="{{ Request::routeIs('users.index') ? 'active' : '' }} || {{ Request::routeIs('users.edit') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('roles')
                <li
                    class="dropdown {{ Request::routeIs('roles.index') ? 'active' : '' }} || {{ Request::routeIs('roles.create') ? 'active' : '' }} || {{ Request::routeIs('roles.edit') ? 'active' : '' }}">
                    <a href="#"
                        class="menu-toggle nav-link has-dropdown {{ Request::routeIs('roles.index') ? 'toggled' : '' }} ||
                        {{ Request::routeIs('roles.create') ? 'toggled' : '' }} || {{ Request::routeIs('roles.edit') ? 'toggled' : '' }}"><i
                            data-feather="shopping-bag"></i><span>Role</span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('create role')
                            <li class="{{ Request::routeIs('roles.create') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('roles.create') }}">Add Role</a>
                            </li>
                        @endcan

                        @can('view role')
                            <li
                                class="{{ Request::routeIs('roles.index') ? 'active' : '' }} || {{ Request::routeIs('roles.edit') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('view permission')
                <li class="{{ Request::routeIs('permissions.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('permissions.index') }}"><i
                            data-feather="file"></i><span>Permissions</span>
                    </a>
                </li>
            @endcan
        </ul>
    </aside>
</div>
