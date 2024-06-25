<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
  <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-5 d-none d-sm-inline">Menu</span>
    </a>
    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
      <li class="nav-item">
        <a href="#" class="nav-link align-middle px-2">
          <i class="fas fa-tachometer-alt"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
        </a>
      </li>
      <li>
        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-2 align-middle">
          <i class="fas fa-cart-arrow-down"></i> Vendas<small style="float:right;opacity:0.50">Diferencial</small> <i class="fas fa-chevron-down float-end"></i>
        </a>
        <ul class="collapse nav flex-column ms-1" id="submenu2">
          <li class="nav-item">
            <a href="{{ route('vendas-diferencial') }}" class="nav-link px-0">Diferencial</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('vendas-padrao')}}" class="nav-link px-0">Padrão</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" class="nav-link px-2 align-middle">
          <i class="fas fa-shopping-basket"></i> <span class="ms-1 d-none d-sm-inline">Pedidos</span></a>
      </li>
      <li>
        <a href="{{ route('produtos-index') }}" class="nav-link px-2 align-middle">
          <i class="fas fa-box-open"></i> <span class="ms-1 d-none d-sm-inline">Produtos</span> </a>
      </li>
      <li>
        <a href="#submenu3" class="nav-link px-2 align-middle">
          <i class="fas fa-file-contract"></i> <span class="ms-1 d-none d-sm-inline">Relatorios</span> </a>
      </li>
      @auth
      @if (auth()->user()->cargo == 'admin')
      <li>
        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-2 align-middle">
          <i class="fas fa-user-tie"></i> Admin <i class="fas fa-chevron-down float-end"></i>
        </a>
        <ul class="collapse nav flex-column ms-1" id="submenu1">
          <li class="nav-item">
            <a href="{{ route('usuarios-index') }}" class="nav-link px-0">Usuarios</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-0">Empresas</a>
          </li>
        </ul>
      </li>
      @endif
      @endauth
    </ul>
    <hr>
    <div class="dropdown pb-4">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        @auth
        <span class="d-none d-sm-inline mx-1">{{ auth()->user()->nome }}</span>
        @endauth
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        @auth
        <li><a class="dropdown-item" href="{{ route('usuarios-edit' , ['id'=>auth()->user()->id]) }}">Profile</a></li>
        @endauth
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="{{ route('login.logout') }}">Sign out</a></li>
      </ul>
    </div>
  </div>
</div>