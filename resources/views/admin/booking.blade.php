@extends('admin.adminmaster')
<style>
.container{
	padding-top:10px; 
}
#table_header{
	margin-top:30px; 
	margin-bottom:30px; 

}

</style>


@section('content')

	<div class="container">
		
		<div id="table_header" class="row">
			<div class="col-md-6">
					<h2> <b>Manage Booking</b> </h2>
			</div>
			<div class="col-md-6">
					<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="text" placeholder="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
			</div>


		</div>
		
		
	
		


		<table class="table table-hover table-inverse table-responsive">
			<thead class="thead-inverse">
				<tr>
					<th>Booking id</th>
					<th>User Email</th>
					<th>Vehicle</th>
					<th>From Date</th>
					<th>To Date</th>
					<th>Duaration</th>
					<th>Total Money</th>
					<th>Messages</th>
					<th>Status</th>
					<th>Posting Date</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
					@foreach ($booking as $item)
						
						<tr>
								<td scope="row">{{ $item->id }}</td>
								<td>{{ $item->userEmail }}</td>
								<td> <a href="#"> 
									<b style="text-transform:capitalize" >{{ $item->vehicle()->first()->manufacturer }} </b>
									</a> 
								</td>
								<td>{{ $item->FromDate }}</td>
								<td>{{ $item->ToDate }}</td>
								<td>
									
										<?php  $FromDate = date_create($item->FromDate); 
										$ToDate = date_create($item->ToDate); 
										$interval = date_diff($FromDate, $ToDate);
										echo $interval->format('%R%a days'); 
										?>
								</td>
								<td> <?php 
									echo $interval->format('%a')* $item->vehicle()->first()->price ;   
									?>
									 </td>
									 
								<td> {{ $item->message }}</td>
								<td> 
										@if ($item->Status ==0)
										<span class="badge badge-pill badge-primary">Waitting </span>  
								   @else
									   @if($item->Status ==1)
										<span class="badge badge-pill badge-success">Accept</span>
										@else
										{{-- 2 la bi huy --}}
										<span class="badge badge-pill badge-warning">Decline</span>
										
										@endif
								   @endif
								
								</td>
								<td> {{ $item->PostingDate }}</td>
								<td>
										<button type="button" class="btn btn-success">Accept</button>
										<button type="button" class="btn btn-warning">Decline</button>
								</td>
									
						</tr>
								
							
							
					@endforeach

				</tbody>
		</table>

	</div>

	

@endsection
	




