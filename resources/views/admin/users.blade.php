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
			<div class="col-md-6">
					<h2> <b>List Users</b> </h2>
			</div>
			<div  class="col-md-6">
					<form id="searchForm" action="{{ route('admin.users') }}"  method="get" class="form-inline my-2 my-lg-0">
                            {{-- onkeyup="submitform()" --}}
                            <input id="search"  name="search" class="form-control mr-sm-2" type="text" placeholder="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
			</div>

		</div>
        
        
        <table class="table table-hover table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date Of Birth</th>
                                <th>Created Date</th>
                                <th>Updated Date</th>
                            
                            </tr>
                            </thead>
                            <tbody>
                                
                               @foreach ($user as $item)
                                <tr>
                                        <td scope="row">{{ $item->id }}</td>                                        
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->dob }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        
                
                                    </tr>
        
                               @endforeach
                               
                              
                            </tbody>
                          

             </table>

             {{ $user->links() }}

	</div>

	<script>
            function submitform(){
                document.getElementById('searchForm').submit();
    
            }
    </script>	

@endsection
	




