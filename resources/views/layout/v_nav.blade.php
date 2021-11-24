<!-- Nav Item - Dashboard -->
<li class="nav-item" class="{{ request()->is('/') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class="fa fa-home"></i>
        <span>Home</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item" class="{{ request()->is('/administrasi') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="/administrasi" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-book"></i>
        <span>Administrasi</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Choose:</h6>
            <a class="collapse-item" href="/KTP">Buat KTP</a>
            <a class="collapse-item" href="/akte">Buat Akte Kelahiran</a>
        </div>
    </div>
</li>
<li class="nav-item" class="{{ request()->is('/petugas') ? 'active' : '' }}">
    <a class="nav-link" href="/petugas">
        <i class="fa fa-plus"></i>
        <span>Petugas</span></a>
</li>



<!-- Divider -->
<hr class="sidebar-divider">


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

