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
                    success: function (result) { 
                       if(result=="Alerta"){ 
					     document. getElementById("Alerta").src = "../Sonidos/Amoniaco.mp3";
                         document.getElementById("Alerta").autoplay = true;
	                     document.getElementById("Alerta").load();
                         document.getElementById("SensoresAlerta").style.display = 'block';
                       }
					   else
					   {
						   alert(result);
						document.getElementById("Alerta").pause();
                       }						   
                    }
                }); 
				
				
		
		
     setTimeout('Notificaciones()',10000);
}



</script>