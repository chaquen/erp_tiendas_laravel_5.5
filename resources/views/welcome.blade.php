<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

    </head>
    <body>
        {{--config('app.url')--}}
        <div class="dropzone"></div>    
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
                }    

            });
            dz.on('error',function(file,rs){
                console.log(rs.errors.file[0]);
                var msg=rs.errors.file[0];

                document.querySelector(".dz-error-message > span").innerHTML=msg; 
            });
            Dropzone.autoDiscover=false;   
          
        </script>
    </body>
</html>
