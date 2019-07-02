<?php 

  try {

    $conexion = new PDO('mysql:host=localhost;dbname=paginacion' , 'david' , '12345') ;  
  } 

  catch (PDOException $e) {

  	echo "ERROR AL CONECTARSE A LA BASE DE DATOS:  "  .$e->getMessage() ; 
  	die() ;   	
  }
  
   

   $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;  //obtiene el valor de la pagina en la que estamos 

   //$postPorPagina = 5 ; 


   //$inicio = ($pagina > 1 ) ? ($pagina * $postPorPagina - $postPorPagina) : 0  ; 

 //en esta variable almacenanos la consulta sql que nos traera los articulos : 
  $articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS  * FROM articulos ") ; 

  $articulos->execute() ; 
  $articulos = $articulos->fetchAll() ; 

  
  if(!$articulos){
  	header('Location: index.php') ;    // si no hay paginas me redirecciona al header 

  }

  $totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total') ; 
  $totalArticulos = $totalArticulos->fetch()['total'] ;

  $numeroPaginas = ceil($totalArticulos / $postPorPagina) ;  


  require 'index.view.php' ; 

  
?>