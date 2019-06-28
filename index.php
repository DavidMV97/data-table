<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Automatizacion</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
     <script> 
        function cargar(){
            var url="index1.php"
            $.ajax({   
                type: "POST",
                url:url,
                data:{},
                success: function(datos){       
                    $('#tabla').html(datos);
                }
            });
        }
     </script>

</head>

<body>
   <!-- <header class="encabezado-sitio">
         Supongamos que aqui iria una imagen 
    </header> -->
   
    <nav class="navegacion">
        <ul>
            <li><a href="#"> <i class="fas fa-bicycle"></i> </a></li>
            <li><a href="#">Sistema de Automatizacion </a></li>
            
        </ul>
    </nav>

    <div class="contenido">
        <main class="contenido-principal">
            <h1> </h1>

            <hr> <br>

            <img src="img/banner.jpg" alt="" class="imagen-destacada">

            <div class="contenedor-imagenes">
                <div>
                    <img src="img/1.jpg" alt="imagen1" >
                    <p>lorem ipsum amet consectetur, adipisicing elit. Nemo recusandae</p>
                    
                </div>

                <div>
                   <img src="img/2.jpg" alt="imagen2" >
                   <p>lorem ipsum amet consectetur, adipisicing elit. Nemo recusandae</p>
                    
                </div>

                <div>
                    <img src="img/3.jpg" alt="imagen3" >
                    <p>lorem ipsum amet consectetur, adipisicing elit. Nemo recusandae</p>
                    
                </div>
                
            </div>

             <div id="tabla">
    
            </div>

        </main>
        <aside class="sidebar">
            
            <ul>
                <li> <a href="" onclick="cargar();"> Informe 1   </a> </li>
                
                <li> <a href="">Informe 2 </a> </li>
                <li> <a href="">Informe 3 </a> </li>
                <li> <a href="">Informe 4 </a> </li>
                <li> <a href="">Informe 5 </a> </li>
            </ul>

        </aside>
       
    </div>
    <!--Contenido-->

    <footer class="footer">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo recusandae,</p>
    </footer>



</body>

</html>