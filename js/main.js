 
let informe1 = document.getElementById('informe1') ;

let padre ; 

let contenidoPrincipal = document.getElementById("contenido-principal") ; 



informe1.addEventListener('click', remover) ; 


                                               
  informe1.addEventListener('click' , cargar) ;  
  

        function cargar(e){


          e.preventDefault() ;
          let url="index1.php" ; 
          $.ajax({   
          type: "POST",
          url:url,
          data:{},
          success: function(datos){ 
          $('#tabla').css( {"margin" : "auto" , "margin-top" : "100px" });      

         $('#tabla').html(datos);

     }
 });

          informe1.classList.remove('color-sidebar-a') ; 
          informe1.classList.add('active') ; 


          
      
}

function remover(e){
  e.preventDefault(); 

   

   console.log(contenidoPrincipal) ; 
   
   contenidoPrincipal.style.display = 'none'  ; 

}









  

