<!DOCTYPE html>
<html>
<head>
	<title>Paginacion</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h1>Articulos</h1>

		<section class="articulos">
			<ul>
				
				<?php foreach ($articulos as $articulo ): ?>
					<li> <?php echo $articulo['id'] . ' - '  . $articulo['articulo'] ?> </li>

					
				<?php endforeach ?>

			</ul>
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
		
	</div>

</body>
</html>