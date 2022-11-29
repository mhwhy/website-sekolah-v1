<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('Dashboard') ? 'active' : '' }}" href="/Dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link "  href="/Dashboard/guru">
          <i class="bi bi-menu-button-wide"></i><span>Data Guru</span>
        </a>

      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link  {{ Request::is('Dashboard/siswa') ? 'active' : '' }}"  href="/Dashboard/siswa">
          <i class="bi bi-journal-text"></i><span>Data Siswa</span>
        </a>

      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link " href="/Dashboard/loker">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data Loker</span>
        </a>

      </li><!-- End Tables Nav -->



      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->




      <li class="nav-item">
        <a class="nav-link collapsed" href="/home">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Keluar ke Halaman Home</span>
        </a>
      </li><!-- End Login Page Nav -->




    </ul>

  </aside><!-- End Sidebar-->
