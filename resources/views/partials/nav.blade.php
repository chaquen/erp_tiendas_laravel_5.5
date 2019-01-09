<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MENU</li>
  <!-- Optionally, you can add icons to the links -->

    <!--<li class="active">
      <a href="{{route('productos.index')}}"><i class="fa fa-link"></i> <span>Productos</span>
    </a>-->
    </li>

  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-link"></i> <span>Productos</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="#">Buscar</a></li>
      <li><a href="#">Crear</a></li>
      <li><a href="{{route('productos.importar')}}">Importar</a></li>
      <li><a href="#">Editar</a></li>
      <li><a href="#">Eliminar</a></li>
    </ul>
  </li>

</ul>
