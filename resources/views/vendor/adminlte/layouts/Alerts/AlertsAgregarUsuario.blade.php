        @if ($message = Session::get('error'))
		    <div class="master alert alert-danger alert-dismissable" role="alert">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <i class="fa fa-times" aria-hidden="true"></i>  {{ Session::get('error') }}
			</div>
		@endif
			
				
		@if ($message = Session::get('success'))
         <div class="master alert alert-success alert-dismissable" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <i class="fa fa-check" aria-hidden="true"></i> {{ Session::get('success') }}
         </div>
         @endif