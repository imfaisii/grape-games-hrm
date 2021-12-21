<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="@if (Route::is('dashboard')) active @endif ">
                    <a href="{{ route('dashboard') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
                </li>

                <li class="menu-title">
                    <span>Department Section</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-building"></i> <span> Departments</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="@if (Route::is('dashboard.department-type.index') || Route::is('dashboard.departments.index')) display:block;@endif">
                        <li @if (Route::is('dashboard.department-type.index')) class="active" @endif><a href="{{ route('dashboard.department-type.index') }}">Add
                                Department Type</a></li>
                        <li @if (Route::is('dashboard.departments.index')) class="active" @endif><a href="{{ route('dashboard.departments.index') }}">Add
                                Department</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Designations Section</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-random"></i> <span> Designations</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="@if (Route::is('dashboard.department-type.index') || Route::is('dashboard.departments.index')) display:block;@endif">
                        <li @if (Route::is('dashboard.parent-designations.index')) class="active" @endif><a
                                href="{{ route('dashboard.parent-designations.index') }}">Parent Designations</a></li>
                        <li @if (Route::is('dashboard.designations.index')) class="active" @endif><a href="{{ route('dashboard.designations.index') }}">Employee
                                Designations</a></li>
                    </ul>
                </li>

                <li class="menu-title">
                    <span>Employees Section</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-user bx-tada"></i> <span> Employees</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="@if (Route::is('dashboard.employees.create') || Route::is('dashboard.employees.index')) display:block;@endif">
                        <li @if (Route::is('dashboard.employees.create')) class="active" @endif><a href="{{ route('dashboard.employees.create') }}">Add
                                Employee</a></li>
                        <li @if (Route::is('dashboard.employees.index')) class="active" @endif><a href="{{ route('dashboard.employees.index') }}">View
                                Employees</a></li>
                    </ul>
                </li>

                <li class="menu-title">
                    <span>Salaries Section</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-money bx-tada"></i> <span> Employees Salaries</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="@if (Route::is('dashboard.employee-salaries.index')) display:block;@endif">
                        <li @if (Route::is('dashboard.employee-salaries.index')) class="active" @endif><a href="{{ route('dashboard.employee-salaries.index') }}">
                                View and Generate Salary Slip</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
