<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
  <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"><span class="sr-only"></span></i>
  </a>
  <nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.php">
        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
          <g>
            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
          </g>
        </svg>
      </a>
    </div>
    <!-- SIDEBAR -->
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item w-100">
        <a class="nav-link" href="index.php">
          <br>
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3 item-text">Dashboard</span>
          <br>
          <br>
        </a>
      </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
      <span>CRUD</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-box fe-16"></i>
          <span class="ml-3 item-text">Tambah Data</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
          <li class="nav-item">
            <a class="nav-link pl-3" href="./karyawan.php"><span class="ml-1 item-text">karyawan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="./user.php"><span class="ml-1 item-text">User</span>
            </a>
          </li>

        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-credit-card fe-16"></i>
          <span class="ml-3 item-text">Tambah Menu</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="forms">
          <li class="nav-item">
            <a class="nav-link pl-3" href="./menu.php"><span class="ml-1 item-text">Menu</span></a>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-grid fe-16"></i>
          <span class="ml-3 item-text">Data Barang</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="tables">
          <li class="nav-item">
            <a class="nav-link pl-3" href="./barang.php"><span class="ml-1 item-text">Barang</span></a>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
          <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-book fe-16"></i>
            <span class="ml-3 item-text">Income</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="contact">
            <a class="nav-link pl-3" href="./penghasilan.php"><span class="ml-1">Penghasilan Perhari</span></a>
          </ul>
        </li>
      <li class="nav-item dropdown">
        <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-pie-chart fe-16"></i>
          <span class="ml-3 item-text">Absen</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="charts">
          <li class="nav-item">
            <a class="nav-link pl-3" href="./absen.php"><span class="ml-1 item-text">Karyawan</span></a>
          </li>
          
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
          <span> LANDING PAGE</span>
        </p>
      <li class="nav-item w-100">
        <a class="nav-link" href="../index.php">
          <br>
          <i class="fe fe-external-link"></i>
          <span class="ml-3 item-text">Lingkar Cafe</span>
        <br>
        <br>  
        </a>
        <p class="text-muted nav-heading mt-4 mb-1">
      <span> USER SETTINGS</span>
    </p>
      </li>
      </li>
    </ul>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-user"></i>
          <span class="ml-3 item-text">User Setting</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="user">
          
          <li class="nav-item">
            <a class="nav-link pl-3" href="./profil.php"><span
                class="ml-1 item-text">Profile</span></a>
          </li>
        </ul>
      <li class="nav-item w-100">
        <a class="nav-link" href="logout.php">
          <i class="fe fe-power"></i>
          <span class="ml-3 item-text">Log Out</span>
        </a>
      </li>
      </li>
    </ul>



</aside>
<!-- END DARI SIDEBAR -->