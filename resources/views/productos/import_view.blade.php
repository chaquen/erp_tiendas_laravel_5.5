@extends('layouts.admin')

@section('contenido_principal')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

<div class="container-fluid">
  <form>
    <div class="form-group">
      <label for="">Sede</label>
      <select class="form-control select2"  id="selSedes">
        <option value="0
        ">Todas las sedes</option>
        @foreach($sedes as $sede)
          <option value="{{$sede->id}}">{{$sede->nombre_sede}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="">Tipo de importación</label>
      <select class="form-control select2" id="selTipoImportacion">
        <option value="0" selected>Selecciona una opción</option>
        <option value="1">Crear productos</option>
        <option value="2">Editar productos</option>
        <option value="3">Ajustar inventario productos</option>
        <option value="4">Insertar inventario productos sede</option>
      </select>
    </div>
    <!--Div para mostrar las plantillas de los archivos-->
    <div class="form-group">
      <a style="display: none" id="anc_crear" href="{{asset('archivos/importar/plantilla_crear_archivos.rar')}}" target="_blank">Descargar</a>
      <a style="display: none" id="anc_ajustar" href="{{asset('archivos/importar/plantilla_editar_archivos.rar')}}" target="_blank">Descargar</a>
      <a style="display: none" id="anc_editar" href="{{asset('archivos/importar/plantilla_ajustar_archivos.rar')}}" target="_blank">Descargar</a>
       <a style="display: none" id="anc_inventario" href="{{asset('archivos/importar/inventario_sede.rar')}}" target="_blank">Descargar</a>
    </div>
    <div class="form-group">
      <div class="dropzone"></div>
    </div>
    <div form="form-group">
      <button type="submit" class="btn btn-primary">Importar</button>
    </div>
  </form>
</div>

<!--DEBE IR AL FINAL-->
<script type="text/javascript">
    window.onload=function(){
      //$('#selTipoImportacion').select2();

      document.getElementById("selTipoImportacion").addEventListener("change",function(){
        
        switch(this.value){
          case "0":
              document.getElementById('anc_crear').style.display="none";
              document.getElementById('anc_ajustar').style.display="none";
              document.getElementById('anc_editar').style.display="none"; 
              document.getElementById('anc_inventario').style.display="none"; 

            break;
          case "1":
              document.getElementById('anc_crear').style.display="";
              document.getElementById('anc_ajustar').style.display="none";
              document.getElementById('anc_editar').style.display="none";
              document.getElementById('anc_inventario').style.display="none"; 
              
            break;
          case "2":
              document.getElementById('anc_crear').style.display="none";
              document.getElementById('anc_ajustar').style.display="";
              document.getElementById('anc_editar').style.display="none";
              document.getElementById('anc_inventario').style.display="none";

            break;    
          case "3":
              document.getElementById('anc_crear').style.display="none";
              document.getElementById('anc_ajustar').style.display="none";
              document.getElementById('anc_editar').style.display="";
              document.getElementById('anc_inventario').style.display="none";

            break;      
        }

      });
    }
    
    var dz=new Dropzone('.dropzone',{
        //url:"/",
        url:"{{config('app.url')}}"+"/subir_archivo",
        dictDefaultMessage:"Sube tus archivos",
        maxFiles:1,
        maxFilesize:10,//MB
        acceptedFiles: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel",
        dictMaxFilesExceeded:"Solo esta permitido subir un archivo",
        dictInvalidFileType:"Este tipo de archivos no esta permitido",
        headers:{
          'X-CSRF-TOKEN':'{{csrf_token()}}'
        },

    });
    dz.on('error',function(file,rs){
        console.log(rs.errors.file[0]);
        var msg=rs.errors.file[0];

        document.querySelector(".dz-error-message > span").innerHTML=msg;
    });
    Dropzone.autoDiscover=false;

</script>
@endsection
