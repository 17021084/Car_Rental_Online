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
                    <h2> <b>Update Profile</b> </h2>

                    <div>
                        <i> Sign up at :</i> 15/11/1999 
                    </div>

                    <form action="/action_page.php">
                      

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="Email" placeholder="Enter email" name="Email">
                          </div>
            
                      <div class="form-group">
                        <label for="Name">Name  :</label>
                        <input type="text" class="form-control" id="Name" placeholder="Name" name="Name">
                      </div>
            
                      <div class="form-group">
                        <label for="Contact">Contact Number :</label>
                        <input type="text" class="form-control" id="Contact" placeholder="Contact" name="Contact">
                      </div>
            
                      <div class="form-group">
                        <label for="dob">Date Of Birth :</label>
                        <input type="date" class="form-control" id="dob" placeholder="15/11/1999" name="dob">
                      </div>
            
                    
                     
                      <button type="submit" class="btn btn-primary">Submit</button>
            
            
                    </form>
                  </div>
            


    </div>
</div>





<script>
  


</script>




@endsection
