@extends('layouts.app')
<style>

.list_rent li{
    background-color: whitesmoke;
    border-top: 0.1px;
    margin-top: 30px;
    padding-top: 10px;
    border-top-style: groove;   

}
.contact{
    margin:0 auto;
    width: 60%;
}


</style>

@section('content')
<div class="container">
    
    <div id="form" >
     
            <h1 style="text-align:center; margin-bottom:30px;" > My Profile </h1> 
           
           
            <div class="contact">
                    <h2> Update Profile : <b> {{ Auth::user()->email  }}</b> </h2>

                   
                    <div>
                        <i> Signed up at : <b>{{ Auth::user()->created_at  }}</b></i>  
                    </div>
                    
                   
                    <form action="/action_page.php">
                      @csrf 
           
                      <div class="form-group">
                        <label for="Name">Name : <b> {{ Auth::user()->name  }}</b></label> 
                        <input type="text" class="form-control" id="Name" placeholder="Update Name" name="Name">
                      </div>
            
                      <div class="form-group">
                        <label for="Phone">Contact Number : <b>{{ Auth::user()->phone  }}</b></label> 
                        <input type="text" class="form-control" id="Phone" placeholder="Update phone" name="Phone">
                      </div>
            
                      <div class="form-group">
                        <label for="dob">Date Of Birth : <b>{{ Auth::user()->dob  }}</b></label> 
                        <input type="date" class="form-control" id="dob" placeholder="Update Date Of Birth" name="dob">
                      </div>
            
                    
                     
                      <button type="submit" id="btnUpdate" class="btn btn-primary">Submit</button>
            
            
                    </form>

                  </div>
            


    </div>
</div>

<script type="application/javascript">

      $.ajaxSetup({

          headers: {

              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

          }

      });



  $("#btnUpdate").click(function(e){

    e.preventDefault();

    //the input name la ten 
    var name = $("input[name=Name]").val();
    var phone = $("input[name=Phone]").val();
    var dob = $("input[name=dob]").val();
    var email ='{{  Auth::user()->email }}' ;

  
  $.ajax({

      type:'POST',

      url:'{{ route('profile') }}',

      data:{name:name, phone:phone, email:email ,dob:dob},

      success:function(data){

          alert("gui thanh cong");

      }

    });



  });

</script>


@endsection
