<div style="display: none;">
   <audio id="Alerta" src="" controls autoplay loop></audio>
</div>
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
var x=1;
function Notificaciones() {
	 if(x==2){
	  
	document.getElementById("SensoresAlerta").style.display = 'block';
}	

	x++;
     setTimeout('Notificaciones()',10000);
}
</script>