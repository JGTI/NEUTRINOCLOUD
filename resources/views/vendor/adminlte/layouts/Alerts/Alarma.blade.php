<div style="display: none;">
   <audio id="Alerta" src="" controls autoplay loop></audio>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
   function parar(){
       document.getElementById("Alerta").pause();
   }
   function reproducir(sonido){
       document. getElementById("Alerta").src = "../Sonidos/"+sonido+".mp3";
       document.getElementById("Alerta").autoplay = true;
	   document.getElementById("Alerta").load();
   }
Notificaciones();
function Notificaciones() {
		$.ajax({ 
                    url: '{{url("Alertas")}}',
                    type: 'POST',
                    data: {_token: "{{ csrf_token() }}"},
                    dataType: 'JSON',
                    success: function (ResultArray) {					
                       if(ResultArray[1]!=""){ 
					     document. getElementById("Alerta").src = "../Sonidos/"+ResultArray[0]+"";
                         document.getElementById("Alerta").autoplay = true;
	                     document.getElementById("Alerta").load();
                         document.getElementById("SensoresAlerta").style.display = 'block';
						 document.getElementById("AlertaProblemas").innerHTML = ResultArray[1];
                       }
					   else
					   {
					    document.getElementById("SensoresAlerta").style.display = 'none';
						document.getElementById("Alerta").pause();
                       }						   
                    }
                }); 
				
				
		
		
     setTimeout('Notificaciones()',10000);
}



</script>