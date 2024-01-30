<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
@can('view student')
<li class="nav-item">
    <a href="{{ route('student.index') }}" class="nav-link {{ Request::is('student') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-graduate"></i>
        <p>Student</p>
    </a>
</li>
@endcan
@can('view teacher')
<li class="nav-item">
    <a href="{{ route('teacher.index') }}" class="nav-link {{ Request::is('teacher') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chalkboard-teacher"></i>
        <p>Teacher</p>
    </a>
</li>
@endcan
@can('view degree')
<li class="nav-item">
    <a href="{{ route('degree.index') }}" class="nav-link {{ Request::is('degree') ? 'active' : '' }}">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>Degree</p>
    </a>
</li>
@endcan
@can('view course')
<li class="nav-item">
    <a href="{{ route('course.index') }}" class="nav-link {{ Request::is('course') ? 'active' : '' }}">
        <i class="nav-icon fas fa-book-open"></i>
        <p>Course</p>
    </a>
</li>
@endcan
@can('view marks')
<li class="nav-item">
    <a href="{{ route('mark.index') }}" class="nav-link {{ Request::is('mark') ? 'active' : '' }}">
        <i class="nav-icon fas fa-sticky-note"></i>
        <p>Mark Sheet</p>
    </a>
</li>
@endcan
@can('view course')
<li class="nav-item">
    <a href="{{ route('fee.index') }}" class="nav-link {{ Request::is('fee') ? 'active' : '' }}">
        <i class="nav-icon fas fa-money-bill-wave"></i>
        <p>Fee</p>
    </a>
</li>
@endcan
@role('student')
<li class="nav-item">
    <a href="{{ route('fee.index') }}" class="nav-link {{ Request::is('fee') ? 'active' : '' }}">
        <i class="nav-icon fas fa-money-bill-wave"></i>
        <p>Fee</p>
    </a>
</li>
@endrole
@can('view course')
<li class="nav-item">
    <a href="{{ route('email') }}" class="nav-link {{ Request::is('email') ? 'active' : '' }}">
        <i class="nav-icon fas fa-envelope"></i>
        <p>Email</p>
    </a>
</li>
@endcan
