@extends('admin.adminmaster')
<style>
.container{

}
#table_header{
	margin-top:30px; 
	margin-bottom:30px; 
	padding-top: 30px;
}

</style>


@section('content')

	<div class="container">
		
		<div id="table_header" class="row">
			<div class="col-md-8">
					<h2 style="margin: 0 auto;"> <b>Manage Vehicle</b> </h2>
					
			</div>
			<div class="col-md-4" >
					<form id="searchForm" class="form-inline my-2 my-lg-0" action="{{ route('admin.vehicles') }}" method="get" >
						@csrf
							<input onkeyup="submitform()" id="search" class="form-control mr-sm-2" type="text" placeholder="Search  Vehicles" name="search" >
							{{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
					</form>
			</div>


		</div>
		
	
		


		<table id="table" class="table table-hover table-inverse table-responsive">
			<thead class="thead-inverse">
				<tr>			
					<th>Action </th>
					<th>Manufacturer</th>
					<th>Category</th>
					<th>Price</th>
					<th>Year</th>
					<th>Status</th>
					<th>Condition</th>
					<th>Cylinders</th>
					<th>Fuel</th>
					<th>Odometer</th>
					<th>Drive</th>
					<th>Size</th>
					<th>Seats</th>
					<th>Type</th>
					<th>Transmission</th>
					<th>Paint Color</th>
					<th>Description</th>
				</tr>
				</thead>
				<tbody>
					@foreach ($vehicles as $item)
					<tr>
							<td scope="row"> 
								<a href="http://">
									<i class="fa fa-edit"> {{ $item->vehicleID }}</i>
								</a>

							</td>
							<td>{{ $item->manufacturer }}</td>
							<td>{{ $item->make }}</td>
							<td>{{ $item->price }}</td>
							<td>{{ $item->year }}</td>
							<td>{{ $item->title_status }}</td>
							<td>{{ $item->condition }}</td>
							<td>{{ $item->cylinders }}</td>
							<td>{{ $item->fuel }}</td>
							<td>{{ $item->odometer }}</td>
							<td>{{ $item->drive }}</td>
							<td>{{ $item->size }}</td>
							<td>{{ $item->seats }}</td>
							<td>{{ $item->type }}</td>
							<td>{{ $item->transmission }}</td>
							<td>{{ $item->paint_color }}</td>
							<td>
								<textarea name="" id="" cols="40" rows="5">
										{{ $item->desc }}
								</textarea>
							</td>
							
							
						</tr>


					@endforeach
					
				
					

				</tbody>
		</table>	
			{{ $vehicles->links() }}
	</div>

	

	<script>
		
	
		function submitform(){
			
			document.getElementById('searchForm').submit();
		}

		

	</script>	

@endsection
	




