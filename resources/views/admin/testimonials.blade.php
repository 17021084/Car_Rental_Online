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
												<i id="status{{$item->id}}" style="color:green">Show </i>
											@else
												
												<i id="status{{$item->id}}" style="color:red">Hidden</i>
										
											@endif
										
										</td>
										<td>
												@if ( $item->status ==1)
												{{-- status la show --}}
												<div >
													{{-- <button  value="{{ $item->id }}" type="button" class="btn btn-danger btn-Submit">Hidden</button> --}}
													<button  id="button{{$item->id}}" value="{{ $item->id }}" type="button" class="btn-Submit">Hidden</button>
							
												</div>
											
												@else
												
												{{-- status hidden  --}}
												<div >
													{{-- <button  value="{{ $item->id }}"  type="button" class="btn btn-success btn-Submit">Show</button> --}}
													<button  value="{{ $item->id }}" id="button{{$item->id}}"  type="button" class="btn-Submit">Show</button>
												</div>
										
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
			$.ajaxSetup({

				headers: {

						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

						}

			});



			$(".btn-Submit").click(function(e){


			
			//the input name la ten 
			// let id = parseInt(this.value);
			var id = this.value;
			// alert(this.value)
				


			$.ajax({

			type:'POST',

			url:'{{ route('admin.testupdate') }}',

			data:{id:id},

				success:function(test){
					// alert(test.status);
					if( test.status == 1 ){
						$("#status"+test.id).html('Show');
						$("#status"+test.id).css('color','green');
					
						// $("#button"+test.id).html(`<button  value="${test.id}" type="button" class="btn btn-danger btn-Submit">Hidden</button>`);
						$("#button"+test.id).html(`Hidden`);
					
					
						
					}else{

						$("#status"+test.id).html('Hidden');
						$("#status"+test.id).css('color','red');
					
						$("#button"+test.id).html(`Show`);
						// $("#button"+test.id).html(`<button  value="${test.id}"  type="button" class="btn btn-success btn-Submit">Show</button>`);
						

					}
				}

				});



			});	





			
    </script>

@endsection
	




