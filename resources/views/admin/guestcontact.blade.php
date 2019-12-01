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
					<h2> <b>Guest Contact</b> </h2>
			</div>
			<div  class="col-md-6">
					<form id="searchForm" action="{{ route('admin.guestcontact') }}"  method="get" class="form-inline my-2 my-lg-0">
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
                                <th> Guest Name</th>
                                <th> Guest Email</th>
                                <th>Contact Number </th>
                                <th>Message</th>
                                <th>Posting Date</th>
                           
                            </tr>
                            </thead>
                            <tbody>
                                
                               @foreach ($contact as $item)
                                <tr>
                                        <td scope="row">{{ $item->id }}</td>                                        
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->EmailId }}</td>
                                        <td>{{ $item->ContactNumber }}</td>
                                        <td>
                                            <textarea name="textarea" id="" cols="30" rows="5">
                                                    {{ $item->Message }}
                                            </textarea>
                                        </td>
                                        <td>{{ $item->PostingDate }}</td>
                                        
                                        
                
                                    </tr>
        
                               @endforeach
                               
                              
                            </tbody>
                          

             </table>

             {{ $contact->links() }}

	</div>

	<script>
            function submitform(){
                document.getElementById('searchForm').submit();
    
            }
    </script>	

@endsection
	




