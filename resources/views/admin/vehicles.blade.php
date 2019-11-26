@extends('admin.adminmaster')
<style>
.container{

}
#table_header{
	margin-top:30px; 
	margin-bottom:30px; 

}

</style>


@section('content')

	<div class="container">
		
		<div id="table_header" class="row">
			<div class="col-md-8">
					<h2> <b>Manage Vehicle</b> </h2>
			</div>
			<div class="col-md-4">
					<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="text" placeholder="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
			</div>


		</div>
		
	
		


		<table class="table table-hover table-inverse table-responsive">
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
					<th>Tranmission</th>
					<th>Paint Color</th>
					<th>Description</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td scope="row"> 
                            <a href="http://">
                                <i class="fa fa-edit"> asdasdas</i>
                            </a>
                        </td>
						<td>asd</td>
						<td>asda</td>
						<td>sad</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
								
						</td>

					</tr>
					<tr>
						<td scope="row"></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
		</table>

	</div>

	

@endsection
	




