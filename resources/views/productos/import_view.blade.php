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
        <option value="Crear productos">Crear productos</option>
        <option value="Editar productos">Editar productos</option>
        <option value="Ajustar inventario">Ajustar inventario productos</option>
      </select>
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
