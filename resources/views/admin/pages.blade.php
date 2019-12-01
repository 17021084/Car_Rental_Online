@extends('admin.adminmaster')
<style>
.contact{
	padding-top: 30px;
	margin-left: 10%;
	width: 80%;
}

</style>

@section('content')

	<div class="contact">
		<h2> <b>Page Update</b> </h2>
		
		
		<form action="/action_page.php">
			<div class="form-group">
					<label for="sel1">Select Pages:</label>

					<select class="form-control" id="page">
					  <option>Term Condition</option>
					  <option>Privacy and Term</option>
					  <option>About Us</option>
					  <option>FAQs</option>
					</select>

			</div>
		
		


			<div class="form-group">
				<label for=""></label>
				<textarea    class="form-control" name="" id="form"  rows="30">
						value="{!! $page[0]->detail !!}" 
				</textarea>
			</div>
		

		  <button type="submit" class="btn btn-primary">Submit</button>


		</form>
	  </div>

@endsection

