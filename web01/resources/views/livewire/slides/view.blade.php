@section('title', __('Slides'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Slide Listing </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Slides">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus"></i>  Add Slides
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.slides.create')
						@include('livewire.slides.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Plantilla</th>
								<th>Path Image1</th>
								<th>Path Image2</th>
								<th>Path Image3</th>
								<th>Path Image4</th>
								<th>Layer1</th>
								<th>Layer2</th>
								<th>Layer3</th>
								<th>Layer4</th>
								<th>Btn1</th>
								<th>Btn2</th>
								<th>Btn3</th>
								<th>Btn4</th>
								<th>State</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($slides as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->plantilla }}</td>
								<td>{{ $row->path_image1 }}</td>
								<td>{{ $row->path_image2 }}</td>
								<td>{{ $row->path_image3 }}</td>
								<td>{{ $row->path_image4 }}</td>
								<td>{{ $row->layer1 }}</td>
								<td>{{ $row->layer2 }}</td>
								<td>{{ $row->layer3 }}</td>
								<td>{{ $row->layer4 }}</td>
								<td>{{ $row->btn1 }}</td>
								<td>{{ $row->btn2 }}</td>
								<td>{{ $row->btn3 }}</td>
								<td>{{ $row->btn4 }}</td>
								<td>{{ $row->state }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Slide id {{$row->id}}? \nDeleted Slides cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $slides->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>