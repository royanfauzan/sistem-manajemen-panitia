<div class="navbar navbar-vertical align-items-start col-auto col-md-3 col-xl-2 px-sm-0 px-0 bg-dark pt-0">
    <div class="d-flex flex-column mt-3 align-items-start align-items-sm-start px-3 text-white min-vh-100">
        <a href="/"
            class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none border-bottom border-light">
            <img class="img-center rounded me-2" src="http://127.0.0.1:8000/Looper.png" width="20" height="20">
            <span class="fs-5 d-none d-sm-inline">SimPanitia</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start align-items-sm-start"
            id="menu">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link text-white align-middle px-0">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link text-white px-0 align-middle">
                    <i class="fs-4 bi-bezier2"></i> <span
                        class="ms-1 d-none d-sm-inline">Kegiatan</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="/listkegiatan" class="nav-link text-secondary px-0"> <span class="d-none d-sm-inline">List</span> <i class="bi bi-body-text"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-secondary px-0"> <span class="d-none d-sm-inline">Diikuti</span> <i class="bi bi-bookmark-plus"></i>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="#" class="nav-link text-white px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Rekrutmen</span>
                </a>
            </li>
        </ul>
        <hr>
    </div>
</div>