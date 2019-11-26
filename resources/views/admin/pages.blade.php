@extends('admin.adminmaster')
<style>
.contact{
	margin-left: 10%;
	width: 80%;
}

</style>

@section('content')

	<div class="contact">
		<h2> <b>Page Update</b> </h2>
		
			<div class="form-group">
					<label for="sel1">Select Pages:</label>

					<select class="form-control" id="page">
					  <option>Term Condition</option>
					  <option>Privacy and Term</option>
					  <option>About Us</option>
					  <option>FAQs</option>
					</select>

			</div>

		<form action="/action_page.php">
						
			<div class="form-group">
				<label for=""></label>
				<textarea class="form-control" name="" id="" rows="10"></textarea>
			</div>
		

		  <button type="submit" class="btn btn-primary">Submit</button>


		</form>
	  </div>

@endsection

