@extends('admin.adminmaster')
<style>
.container{
   
}
#table_header{
	margin-top:30px; 
	margin-bottom:30px; 

}
.table{
	width: 70%;

}

</style>


@section('content')

	<div class="container">
		
		<div id="table_header" class="row">
			<div class="col-md-6">
					<h2> <b>Manage Feedback</b> </h2>
			</div>
			<div class="col-md-6">
					<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="text" placeholder="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
			</div>


		</div>
		
		<div class="table">


				<table class="table table-hover table-inverse table-responsive">
						<thead class="thead-inverse">
							<tr>
								<th>id</th>
								<th>Name</th>
								<th>Email</th>
								<th>Messages</th>
								<th>Posting Date</th>
								<th>Action</th>
								
							</tr>
							</thead>
							<tbody>
								<tr>
									<td scope="row"></td>
									<td>asd</td>
									<td>asda</td>
									<td>
										ádfasdfsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
									</td>
									<td></td>
									<td></td>
									
								</tr>
								<tr>
									<td scope="row"></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									
								</tr>
							</tbody>
					</table>
			



		</div>
	
		

	</div>

	

@endsection
	




