@extends('admin.adminmaster')
<style>
.container{
   
}
#table_header{
	margin-top:30px; 
	margin-bottom:30px; 
	padding-top: 30px;
}
.table{
	width: 70%;

}

</style>


@section('content')

	<div class="container">
		
		<div id="table_header" class="row">
			<div class="col-md-6">
					<h2> <b>Manage Testimonials</b> </h2>
			</div>
			<div   class="col-md-6">
					<form  id="searchForm"  action="{{ route('admin.testimonials') }}"  method="get" class="form-inline my-2 my-lg-0">
							{{-- onkeyup="submitform()"  --}}
							<input  name="search" class="form-control mr-sm-2" type="text" placeholder="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
			</div>


		</div>
		
		<div class="table">


				<table class="table table-hover table-inverse table-responsive">
						<thead class="thead-inverse">
							<tr>
								<th>id</th>
								
								<th>Email</th>
								<th>Messages</th>
								<th>Posting Date</th>
								<th>Status</th>
								<th>Action</th>
								
							</tr>
							</thead>
							<tbody>
							
								@foreach ($test as $item)
									<tr>
										<td scope="row">{{ $item->id }}</td>								
										<td>{{ $item->UserEmail }}</td>
										<td>{{ $item->Testimonial }}</td>
										<td>{{ $item->PostingDate }}</td>
										<td>
											@if ( $item->status ==1)
												<i style="color:green">Show </i>
											@else
												
												<i style="color:red">Hidden</i>
										
											@endif
										
										</td>
										<td>
												@if ( $item->status ==1)
												{{-- status la show --}}
												<button type="button" class="btn btn-danger">Hidden</button>
											@else
												
												{{-- status hidden  --}}
												<button type="button" class="btn btn-success">Show</button>
										
											@endif
											
											

										</td>
										
									</tr>

								@endforeach


							</tbody>
					</table>
					{{ $test->links() }}

		</div>
	
		

	</div>

	
	<script>
            function submitform(){
                document.getElementById('searchForm').submit();
    
            }




			
    </script>

@endsection
	




