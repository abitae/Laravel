@section('title', __('Configs'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Configuracion </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i') }}</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Configs">
						</div>
						<!-- B0ton Crear configuracion
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus"></i>  Add Configs
						</div>
						-->
					</div>
				</div>
				
				<div class="card-body">
					
						@include('livewire.configs.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Titulo</th>
								<th>Tema</th>
								<th>Empresa</th>
								<th>Autor</th>
								<th>Path Favicon</th>
								<th>Path Logo</th>
								<th>Description Logo</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($configs as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->titulo }}</td>
								<td>{{ $row->tema }}</td>
								<td>{{ $row->empresa }}</td>
								<td>{{ $row->autor }}</td>
								<td>{{ $row->path_favicon }}</td>
								<td>{{ $row->path_logo }}</td>
								<td>{{ $row->description_logo }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $configs->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>