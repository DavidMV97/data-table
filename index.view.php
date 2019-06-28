<!DOCTYPE html>
<html>
<head>
	<title>Paginacion</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css//all.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>


<body>
	
<section class="articulos">
			<table class="table table-striped table-bordered" >
				<tr class="">
					<th>id</th>
					<th>Articulo</th>
				</tr>
				<?php foreach ($articulos as $articulo ): ?>
				<tr>
					<td> <?php echo $articulo['id'] ; ?> </td>
					<td> <?php echo  $articulo['articulo'] ;  ?> </td> 
				</tr>

				<?php endforeach ?>

			</table>
		</section>

		<section class="paginacion">
           <ul>  

				 <!--Establecemos cuando el boton "anterior" estara deshabilitado --> 


				<?php if ($pagina == 1 ) : ?>
					<li class="disable"> &laquo; </li>
				<?php else: ?> 

					<li> <a href="?pagina=<?php echo $pagina -1 ?>"> &laquo; </a> </li>

				<?php endif ; ?> 

				<!-- Ejecutamos un ciclo para mostrar las paginas  -->
				<?php 

					for ($i=1; $i <= $numeroPaginas ; $i++) { 
						if ($pagina == $i) {

							echo "<li class= 'active'><a href='?pagina=$i'> $i </a></li>" ; 
						}else{
							echo "<li><a href='?pagina=$i'>$i</a></li>" ; 
						}
					}

				?> 

				<!-- Establecemos cuando el boton de siguiente estara deshabilitado -->

				<?php if ($pagina == $numeroPaginas) : ?>
					<li class="disable"> &raquo; </li>
				<?php else: ?> 

					<li> <a href="?pagina=<?php echo $pagina +1 ?>"> &raquo;  </a> </li>

				<?php endif ; ?> 




			</ul>
         
		</section>



    <!--Contenido-->

























		
		

		
	</div>

</body>
</html>