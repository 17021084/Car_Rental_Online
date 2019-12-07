@extends('admin.adminmaster')
<style>
.container{
	padding-top:10px; 
	background-color:aliceblue;
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
					<form action="{{ route('admin.booking') }}" method="GET" class="form-inline my-2 my-lg-0">
						@csrf 
							<input name="search" class="form-control mr-sm-2" type="text" placeholder="Search">
							<button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Search</button>
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
								<td> <a target="_blank" href="{{ route('admin.editvehicle',['id'=>  $item->vehicle()->first()->vehicleID  ]) }}"> 
									<b style="text-transform:capitalize" >{{ $item->vehicle()->first()->manufacturer }} </b>
									</a> 
								</td>
								<td>{{ $item->FromDate }}</td>
								<td>{{ $item->ToDate }}</td>
								<td>
									
										<?php  									
										$FromDate =  DateTime::createFromFormat('d/m/Y', $item->FromDate) ; 
										$ToDate =  DateTime::createFromFormat('d/m/Y', $item->ToDate) ; 
										$interval = date_diff($FromDate, $ToDate);
										echo $interval->format('%R%a days'); 
										?>
								</td>
								<td> 
									
									<?php 
									echo $interval->format('%a')* $item->vehicle()->first()->price ;   
									?>


									</td>
									 
								<td> 
										{{ $item->message }}
									
								</td>
								<td> 
										@if ($item->Status ==0)	
										<div id="{{ $item->id }}">
											<span class="badge badge-pill badge-primary" >Waitting </span>  
										</div>	
								   @else
									   @if($item->Status ==1)
										<div  id="{{ $item->id }}">
											<span class="badge badge-pill badge-success" >Accept</span>
										</div>
										@else
										{{-- 2 la bi huy --}}
										<div id="{{ $item->id }}" >
											<span class="badge badge-pill badge-warning" >Decline</span>
										</div>
										@endif
								   @endif
								
								</td>
								<td> {{ $item->PostingDate }}</td>
								<td>
										<button   value="acc{{ $item->id }}"  type="button" class="btn btn-success btn-Submit">Accept</button>
										<button   value="dec{{ $item->id  }}"   type="button" class="btn btn-warning btn-Submit">Decline</button>
								</td>
									
						</tr>
								
							
							
					@endforeach
						
				</tbody>
		</table>
		{{ $booking->links()  }}
	</div>

<script>
	$.ajaxSetup({

		headers: {

		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

		}

	});

	$(".btn-Submit").click(function(e){


						
	
		let btn = this.value.substring(0,3);// button  : acc dec
		let id = this.value.substring(3);	// id
		
		$.ajax({

			type:'POST',

			url:'{{ route('admin.bookingupdate') }}',

			data:{id:id,btn:btn },

				success:function(booking){
					if( booking.Status == 1 ){ //accept
							$(`#${booking.id}`).html('<span class="badge badge-pill badge-success" >Accept</span>');
						
							
						}
						if(booking.Status == 2){ // decline
							
							$(`#${booking.id}`).html('<span class="badge badge-pill badge-warning" >Decline</span>')
							
					}
					
				}

		});



	});	



</script>	

@endsection
	




