@if (Auth::user()->admin)
<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        <li class="sidebar-title">
            Main
        </li>
        <li>
            <a href="{{route('dashboard')}}"><i data-feather="home"></i>Dashboard</a>
        </li>
        <li class="sidebar-title">
            Fitur
        </li>
        <li>
            <ra href="{{route('laporan.index')}}"><i data-feather="inbox"></i>Laporan</a>
        </li>
    </ul>
</div>

@else
<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        <li class="sidebar-title">
            Main
        </li>
        <li>
            <a href="{{route('dashboard.user')}}"><i data-feather="home"></i>Dashboard</a>
        </li>
        <li class="sidebar-title">
            Fitur
        </li>
        <li>
            <ra href="{{route('laporan.index')}}"><i data-feather="inbox"></i>Laporan saya</a>
        </li>
    </ul>
</div>
@endif
