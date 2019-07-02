<!DOCTYPE html>
<html>
<head>
	<title>Paginacion</title>
	 <link rel="stylesheet" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="css//all.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  


</head>


<body>
	
<section class="articulos ">
			<table class="table table-striped table-hover table-bordered" id="datatable" >
				<thead>
					<tr>
						<th>Id Estacion</th>
						<th>Nombre Estacion</th>
						<th>

						<select>
							<option>Estacion Activa</option>
							<option>S</option>
							<option>N</option>
						</select>	

						</th>
						<th>Direccion Estacion</th>
					</tr>
				</thead>

				<tbody>
				<?php foreach ($articulos as $articulo ): ?>
				
					<tr>
						<td> <?php echo $articulo['EstacionId'] ; ?> </td>
						<td> <?php echo  $articulo['EstacionNmb'] ;  ?> </td> 
						<td> <?php echo  $articulo['EstacionAct'] ;  ?> </td> 
						<td> <?php echo  $articulo['EstacionDir'] ;  ?> </td> 
					</tr>
				
				

				<?php endforeach ?>
				</tbody>

			</table>
</section>
  <br><br><br><br> 

		<section class="paginacion">
           <ul>  

				 <!--Establecemos cuando el boton "anterior" estara deshabilitado --> 


				<?php /* if ($pagina == 1 ) : ?>
					<li class="disable"> &laquo; </li>
				<?php else:  ?> 

					<li> <a href="?pagina=<?php echo $pagina -1 ?>"> &laquo; </a> </li>

				<?php endif ;  ?> 

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


				

				<?php /* if ($pagina == $numeroPaginas) : ?> 
					<li class="disable"> &raquo; </li>
				<?php else: ?> 

					<li> <a href="?pagina=<?php echo $pagina +1 ?>"> &raquo;  </a> </li>

				<?php endif ;  */ ?>  




			</ul>
         
		</section>



    <!--Contenido-->

		
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

	<script type="text/javascript">
		$(document).ready( function () {
    $('#datatable').DataTable();
} );
	</script>
</body>
</html>