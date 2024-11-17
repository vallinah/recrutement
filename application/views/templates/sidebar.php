<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <!-- <li class="nav-item">
    <a class="nav-link " href="index.html">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
          <a href="<?= base_url('besoin/annonces'); ?>">
              <i class="bi bi-circle"></i><span>Annonces</span>
          </a>
      </li>
      <li>
          <a href="<?= base_url('besoin/poste'); ?>">
              <i class="bi bi-circle"></i><span>Poste</span>
          </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->
  <!-- Section RH -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#rh-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>RH</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="rh-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="<?= base_url('rh/capacites'); ?>">
                <i class="bi bi-circle"></i><span>Capacités</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url('welcome'); ?>">
                <i class="bi bi-circle"></i><span>Éligibles</span>
            </a>
        </li>
    </ul>

  </li><!-- End RH Nav -->

  <!-- Section Directeur -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#directeur-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Directeur</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="directeur-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="tables-general.html">
          <i class="bi bi-circle"></i><span>General Tables</span>
        </a>
      </li>
      <li>
        <a href="tables-data.html">
          <i class="bi bi-circle"></i><span>Data Tables</span>
        </a>
      </li>
    </ul>
  </li><!-- End Directeur Nav -->



  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.html">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-register.html">
      <i class="bi bi-card-list"></i>
      <span>Register</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-login.html">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li><!-- End Login Page Nav -->


</ul>

</aside><!-- End Sidebar-->