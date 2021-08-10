<div class="panel panel-primary"> 
	<div class="panel-heading">Menu</div>

	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
			@if (auth()->check())
			<li><a href="#">Dasboard</a></li>
			<li><a href="#">Ver incidencias </a></li>
			<li><a href="#">Reportar incidencias </a></li>
			
			<li>
				<div class="btn-group">
					<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Aministracion
					</button>
					<div class="dropdown-menu">
					  <a class="dropdown-item" href="/usuarios">Usuarios</a>
					  <a class="dropdown-item" href="/proyectos">Proyectos</a>
					  <a class="dropdown-item" href="/config">Configuracion</a>
					  
				  </div>
			</li>
				
			
				
			@else
			<li><a href="#">Bienvenidos</a></li>
			<li><a href="#">Instrucciones </a></li>
			<li><a href="#">Creditos</a></li>
				
			@endif
			
		  </ul>
	</div>
 </div>
