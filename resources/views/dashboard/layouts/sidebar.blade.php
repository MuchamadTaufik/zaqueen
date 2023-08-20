<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">ZAQUEEN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-dark {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <svg class="bi"><use xlink:href="#house-fill"/></svg>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ Request::is('dashboard/product') ? 'active' : '' }}" href="/dashboard/product">
                    <svg class="bi"><use xlink:href="#cart"/></svg>
                    Products
                </a>
            </li>
            <li class="nav-item">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link text-dark"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
            </li>
        </ul>
        </div>
    </div>
    </div>