        @if ($message = Session::get('success'))
         <div class="master alert alert-success alert-dismissable" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <i class="fa fa-check" aria-hidden="true"></i> {{ Session::get('success') }} Ultima Actualización <i class="fa fa-clock-o" aria-hidden="true"></i> {{ $last_update->updated_at }}
         </div>
         @endif
         @if ($message = Session::get('error'))
         <div  class="master alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <i class="fa fa-times" aria-hidden="true"></i>  {{ Session::get('error') }}
         </div>
         @endif
		 
		 @if (Session::get('success')=="" and $last_update=="")
          <div  class="master alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <i class="fa fa-meh-o" aria-hidden="true"></i> No existen Registros en la Base de Datos
         </div>
         @elseif(Session::get('success')=="")
		   <div  class="master alert alert-warning alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Ultima Actualización <i class="fa fa-clock-o" aria-hidden="true"></i> {{ $last_update->updated_at }}
         </div>
		 @endif