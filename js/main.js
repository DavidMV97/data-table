 
  let informe1 = document.querySelector('#informe1') ;
  informe1.addEventListener('click' , cargar) ;  
  


        function cargar(e){
          e.preventDefault() ; 


          let url="index1.php" ; 
          $.ajax({   
          type: "POST",
          url:url,
          data:{},
          success: function(datos){       
         $('#tabla').html(datos);
     }
 });

         
        
}



informe1.addEventListener('click' , ocultarInformacion) ; 
let contenido = document.getElementsByClassName('#contenido-principal') ; 

  function ocultarInformacion(e){
    e.preventDefault() ; 

    contenido.style.display = 'none' ; 


  }