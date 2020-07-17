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
                    
                    {{-- id="sumitform" action="{{ route('updateprofile') }} }}" method="get" --}}
                    <div >
                      @csrf 
           
                      <div class="form-group">
                        <label  for="Name">Name : <b id="lbName"> {{ Auth::user()->name  }}</b></label> 
                        <input type="text"  value = "{{ Auth::user()->name  }}" class="form-control" id="Name" placeholder="Update Name" name="Name">
                      </div>
            
                      <div class="form-group">
                        <label  for="Phone">Contact Number : <b id="lbPhone">{{ Auth::user()->phone  }}</b></label> 
                        <input type="text" value="{{ Auth::user()->phone  }}" class="form-control" id="Phone" placeholder="Update phone" name="Phone">
                      </div>
            
                      <div class="form-group">
                        <label  for="dob">Date Of Birth : <b id="lbDob">{{ Auth::user()->dob  }}</b></label> 
                        <input type="date" value="{{ Auth::user()->dob }}"  class="form-control" id="dob" placeholder="Update Date Of Birth" name="dob">
                      </div>
            
                    
                     
                      <button   class="btn btn-primary btn-submit">Submit</button>
            
            
                    </div>

              </div>
            


    </div>
</div>

<script type="application/javascript">
      $.ajaxSetup({

          headers: {

              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

          }

      });



  $(".btn-submit").click(function(e){
   

    e.preventDefault();

    //the input name la ten 
    let name = $("input[name=Name]").val();
    let phone = $("input[name=Phone]").val();
    let email ='{{  Auth::user()->email }}' ;
    let date = new Date($("input[name=dob]").val());
    let dob = (date.getMonth()+1) +"/"+date.getDay()+ "/"+date.getFullYear() ;
    
  $.ajax({

      type:'POST',

      url:'{{ route('updateprofile') }}',

      data:{name:name, phone:phone, email:email ,dob:dob},

      success:function(user){
        
        $("#lbPhone").html(user.phone);
        $("#lbDob").html(user.dob);
        $("#lbName").html(user.name);
        $("input[name=Name]").val(user.name);
         $("input[name=Phone]").val(user.phone);
         $("input[name=dob]").val(user.dob);
      }

    });



  });

</script>


@endsection
