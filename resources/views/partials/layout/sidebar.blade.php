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
        <li class="{{!Route::is('home') ?: 'active'}}">
          <a href="#"><i class="fa fa-users"></i> <span>Tareas pendientes</span></a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>