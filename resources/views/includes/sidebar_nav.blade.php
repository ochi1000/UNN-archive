<nav id="sidebar">
  <div class="sidebar-header">
      <h3>Admin</h3>
      <button type="button" id="sidebarCollapse" class="btn btn-info">
        <i class="fa fa-bars"></i>
    </button>
  </div>

  <ul class="list-unstyled components">
      <li class="">
          <a href="/admin" aria-hidden="true" aria-expanded="false">
            <i class="fa fa-tachometer"></i>Dashboard
          </a>
      </li>
      <li>
          <a href="#">
              <i class="fas fa-user"></i>
              Users
          </a>
      </li>
      <li>
          <a href="/admin/files"  aria-expanded="false" class="dropdown-toggle">
              <i class="fas fa-files"></i>
              Manage Files
          </a>
      </li>
      <li>
          <a href="/admin/files/categories">
              <i class="fas fa-cabinet-filing"></i>
              Categories
          </a>
      </li>
      <li>
          <a href="#">
              <i class="fas fa-question"></i>
              Requests
          </a>
      </li>
      <li>
          <a href="#">
              <i class="fas fa-paper-plane"></i>
              Logout
          </a>
      </li>
  </ul>

</nav>

<div id="content">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h2>@yield('title')</h2>
  </nav>
