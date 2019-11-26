@extends('admin.adminmaster')
<style>
.contact{
	margin-left: 10%;
	width: 300px;
}

</style>


@section('content')

	<div class="contact">
		<h2> <b>Update Contact</b> </h2>
		<form action="/action_page.php">
		  
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="Email" placeholder="Enter Email" name="Email">
		  	</div>

		  <div class="form-group">
			<label for="Contact">Contact Number :</label>
			<input type="text" class="form-control" id="Contact" placeholder="Contact" name="Contact">
		  </div>

		
		 
		  <button type="submit" class="btn btn-primary">Submit</button>


		</form>
	  </div>

@endsection
	




