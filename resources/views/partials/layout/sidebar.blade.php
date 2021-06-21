  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('img/avatar/'.auth()->user()->avatar.'.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{auth()->user()->login}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="{{!Route::is('home') ?: 'active'}}">
          <a href="{{route('home')}}"><i class="fa fa-dashboard"></i> <span>Inicio</span></a>
        </li>
        {{-- <li class="header">GRUPO</li> --}}
        <li class="{{!Route::is('products.index') ?: 'active'}}">
          <a href="{{route('products.index')}}"><i class="fa fa-users"></i> <span>Productos</span></a>
        </li>
        <li class="{{!Route::is('tasks.index') ?: 'active'}}">
          <a href="{{route('tasks.index')}}"><i class="fa fa-users"></i> <span>Notificaciones</span></a>
        </li>
        
        <li class="header">PRODUCTOS</li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>DVD</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Anime</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Doramas</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Películas</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Reality Show</a></li>
          </ul>
        </li>

        <li class="{{!Route::is('tasks.index') ?: 'active'}}">
          <a href="{{route('tasks.index')}}"><i class="fa fa-users"></i> <span>Prendas</span></a>
        </li>

        <li class="{{!Route::is('tasks.index') ?: 'active'}}">
          <a href="{{route('tasks.index')}}"><i class="fa fa-users"></i> <span>Productos coreanos</span></a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Artículos y figuras</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Posters</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Botones</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Tazas</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Comestibles</a></li>
          </ul>
        </li>

        <li class="{{!Route::is('tasks.index') ?: 'active'}}">
          <a href="{{route('tasks.index')}}"><i class="fa fa-search"></i> <span>Buscar producto</span></a>
        </li>

        <li class="header">OPERACIONES</li>

        <li class="{{!Route::is('tasks.index') ?: 'active'}}">
          <a href="{{route('tasks.index')}}"><i class="fa fa-search"></i> <span>Ingresar productos</span></a>
        </li>        

        <li class="{{!Route::is('tasks.index') ?: 'active'}}">
          <a href="{{route('tasks.index')}}"><i class="fa fa-search"></i> <span>Vender</span></a>
        </li>

        <li class="header">REPORTES</li>

        <li class="{{!Route::is('tasks.index') ?: 'active'}}">
          <a href="{{route('tasks.index')}}"><i class="fa fa-pie-chart"></i> <span>Ventas diarias</span></a>
        </li>

        <li class="header">CONFIGURACIÓN</li>

        <li class="{{!Route::is('tasks.index') ?: 'active'}}">
          <a href="{{route('tasks.index')}}"><i class="fa fa-search"></i> <span>Usuarios</span></a>
        </li>

        <li class="{{!Route::is('tasks.index') ?: 'active'}}">
          <a href="{{route('tasks.index')}}"><i class="fa fa-search"></i> <span>Mi perfil</span></a>
        </li>

        <li class="{{!Route::is('tasks.index') ?: 'active'}}">
          <a href="{{route('tasks.index')}}"><i class="fa fa-search"></i> <span>Salir</span></a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
</aside>