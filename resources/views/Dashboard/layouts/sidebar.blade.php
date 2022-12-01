<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar ">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('Dashboard') ? 'active' : '' }}" href="/Dashboard">
          <i style="color: #0E5E6F" class="bi bi-grid"></i>
          <span style="color: #8EC3B0">Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link "  href="/Dashboard/guru">
          <i style="color: #0E5E6F" class="bi bi-menu-button-wide" ></i>
          <span style="color: #8EC3B0">Data Guru</span>
        </a>

      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link  {{ Request::is('Dashboard/siswa') ? 'active' : '' }}"  href="/Dashboard/siswa">
          <i style="color: #0E5E6F" class="bi bi-journal-text"></i>
          <span style="color: #8EC3B0">Data Siswa</span>
        </a>

      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link " href="/Dashboard/loker">
          <i style="color: #0E5E6F" class="bi bi-layout-text-window-reverse">
        </i><span style="color: #8EC3B0">Data Loker</span>
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
