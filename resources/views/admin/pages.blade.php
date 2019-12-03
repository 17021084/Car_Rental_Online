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
		
		<ul>

			@foreach ($page as $item)


			<li>	
				<h4> <b> {{ $item->PageName }} </b> </h4>
				
				<p> {!! $item->detail !!}  </p>
			
			
			</li>
				
			@endforeach

		</ul>
		


		<h1>  Edit pages </h1>
		<form action="{{ route('admin.postpages') }}" method="POST">
		
			@csrf

			<div class="form-group">
					<label for="sel1">Select Pages:</label>

					<select name="type" class="form-control" id="pageType">
					  <option  value="terms">Term Condition</option>
					  <option  value="privacy"> Privacy and Term</option>
					  <option 	value="aboutus">About Us</option>
					  <option  value="faqs">FAQs</option>
					</select>

			</div>
		
	
			<div class="form-group">
				<label for="summary-ckeditor"> Edit </label>
			
				<textarea class="form-control" id="summary-ckeditor"  name="summary-ckeditor">
					
				</textarea>
			</div>
	

		  <button type="submit" class="btn btn-primary">Submit</button>

		  
		  
		</form>
	</div>
	
	
	
	
	<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
	<script>CKEDITOR.replace( 'summary-ckeditor' );</script>
		  



@endsection

