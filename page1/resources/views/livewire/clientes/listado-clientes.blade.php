<div>
	<div class="row">
		<div class="col-12">
			<div class="card mb-30">
				<div class="card-body">
					<div class="d-sm-flex justify-content-between align-items-center">
						<h4 class="font-20">Extended Table</h4>
						<div class="d-flex flex-wrap">
							<div class="dashboard-date style--six mr-20 mt-3 mt-sm-0">
								
								<input name="search" type="text" class="theme-input-style" placeholder="Search Here">
								<span class="input-group-addon">
									<img src="{{ asset('assets/img/svg/search-icon.svg') }}" alt="" class="svg"> 
								</span>
							</div>
							<div class="dropdown-button mt-3 mt-sm-0"><button type="button" class="btn style--two orange" data-toggle="dropdown">Download <i class="icofont-simple-down"></i></button>
								<div class="dropdown-menu"><a class="dropdown-item" href="#">Print</a> <a class="dropdown-item" href="#">EXL</a> <a class="dropdown-item" href="#">PDF</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<table class="text-nowrap dh-table">
						<thead>
							<tr>
								<th>Code <img src="{{ asset('assets/img/svg/table-down-arrow.svg') }}" alt="" class="svg"></th>
								<th>Name <img src="{{ asset('assets/img/svg/table-down-arrow.svg') }}" alt="" class="svg"></th>
								<th>Email <img src="{{ asset('assets/img/svg/table-down-arrow.svg') }}" alt="" class="svg"></th>
								<th>Phone <img src="{{ asset('assets/img/svg/table-down-arrow.svg') }}" alt="" class="svg"></th>
								<th>Status <img src="{{ asset('assets/img/svg/table-down-arrow.svg') }}" alt="" class="svg"></th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
						@foreach ($clientes as $client)
							<tr>
								<td>{{$client->code}}</td>
								<td>{{$client->name}}</td>
								<td>{{$client->email}}</td>
								<td>{{$client->phone}}</td>
								<td><button type="button" class="status-btn un_paid">Unpaid</button></td>
								<td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>