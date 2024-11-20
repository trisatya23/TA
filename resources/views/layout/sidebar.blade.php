<div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="../logo/logo.png"
                alt="navbar brand"
                class="navbar-brand"
                height="50"
              />
            </a>
            <div class="pl-2 text-white">
              <h4 style="margin: 10px">Perjalanan Dinas</h4>
            </div>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
                <a
                  href="/"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#user">
                  <i class="fas fa-layer-group"></i>
                  <p>User</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="user">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="/manajemen-user">
                        <span class="sub-item">Manajemen User</span>
                      </a>
                    </li>
                    <li>
                      <a href="/manajemen-role">
                        <span class="sub-item">Manajemen Role</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#perdi">
                  <i class="fas fa-layer-group"></i>
                  <p>Perjalanan Dinas</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="perdi">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="/request-perjalanan-dinas">
                        <span class="sub-item">Request</span>
                      </a>
                    </li>
                    <li>
                      <a href="/approval-perjalanan-dinas">
                        <span class="sub-item">Approve</span>
                      </a>
                    </li>
                    <li>
                      <a href="/validasi-perjalanan-dinas">
                        <span class="sub-item">Validasi</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#reimbursement">
                  <i class="fas fa-layer-group"></i>
                  <p>Reimbursement</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="reimbursement">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="/request-reimbursement">
                        <span class="sub-item">Request</span>
                      </a>
                    </li>
                    <li>
                      <a href="/approval-reimbursement">
                        <span class="sub-item">Approve</span>
                      </a>
                    </li>
                    <li>
                      <a href="/validasi-reimbursement">
                        <span class="sub-item">Validasi</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a
                  href="/manajemen-logo"
                >
                  <i class="fas fa-home"></i>
                  <p>Manajemen Logo</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>