<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MENU</li>
  <!-- Optionally, you can add icons to the links -->

    <!--<li class="active">
      <a href="{{route('productos.index')}}"><i class="fa fa-link"></i> <span>Productos</span>
    </a>-->
    </li>

  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-link"></i> <span><b>Productos</b></span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-search-plus"></i>Buscar</a></li>
      <li><a href="#"><i class="fa fa-plus"></i>Crear</a></li>
      <li><a href="{{route('productos.importar')}}"><i class="fa fa-cloud-upload"> Importar</a></i></li>
      <li><a href="#"><i class="fa fa-wrench"></i>Editar</a></li>
      <li><a href="#"><i class="fa fa-trash"></i>Eliminar</a></li>
    </ul>
  </li>

</ul>
