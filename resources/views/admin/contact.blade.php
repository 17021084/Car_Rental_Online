@extends('admin.adminmaster')
<style>
.contact{
	margin: 0 auto;
	padding-top: 5%;
	width: 300px;

}

</style>


@section('content')

	<div class="contact">
		<h2> <b>Update Contact</b> </h2>
		<div  >
		  
			<div class="form-group">
				<label for="email">Email: <b id="lbEmail"> {{ $contact[0]->EmailId }} </b>  </label>
				<input type="email" class="form-control" id="Email" placeholder=" Update new email" name="Email" value="{{ $contact[0]->EmailId }}" >
		  	</div>

		  <div class="form-group">
			<label for="Contact">Contact Number : <b id="lbContact">{{ $contact[0]->ContactNo }}</b></label>
			<input type="text" class="form-control" id="Contact" placeholder=" Update contact" name="Contact" value="{{ $contact[0]->ContactNo }}">
		  </div>
		  <div class="form-group">
			<label for="Address">Address : <b id="lbAddress">{{ $contact[0]->Address }}</b></label>
			<input type="text" class="form-control" id="Address" placeholder="Update address" name="Address" value="{{ $contact[0]->Address }}">
		  </div>

		  <h5 id="Alert" style="display:none"> <b style="color:green">  Updated Success !!!!   </b> </h5>
		 
		  <button type="submit" id="submit" class="btn btn-primary">Submit</button>


		</div>
	  </div>

	<script type="text/javascript">
		

		$.ajaxSetup({

			headers: {

					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

			}

		});



		$("#submit").click(function(e){


			// //ko cho form submit
			// e.preventDefault();


		//the input name la ten 
			let Address = $("input[name=Address]").val().trim();

			let Contact = $("input[name=Contact]").val().trim();

			let Email = $("input[name=Email]").val().trim();



			$.ajax({

			type:'POST',

			url:'{{ route('admin.updatecontact') }}',

			data:{Address:Address, Contact:Contact, Email:Email},

			success:function(data){
				$('#lbAddress').html(data.Address);
				$('#lbEmail').html(data.EmailId);
				$('#lbContact').html(data.ContactNo);
				$('#Alert').show()
				// alert(data.contact.)

			}

			});



		});	


	
	</script>

@endsection
	




