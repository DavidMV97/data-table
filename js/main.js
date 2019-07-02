 /*
  
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


let contenido = document.getElementsByClassName('.contenido-principal') ; 

informe1.addEventListener('click' , ocultarInformacion) ;  

  function ocultarInformacion(e){
    e.preventDefault() ; 

    console.log('se ejecuto la funcion ocultar Informacion') ; 
    informe1.classList.remove("color-sidebar-a") ; 
    informe1.classList.add("active") ; 

    informe1 = informe1.id ; 

    console.log( informe1)   ; 


     contenido.style.display = "none"; 




  }
  
  */

