@extends('layouts.app')
<style>

.list_rent li{
    background-color: whitesmoke;
    border-top: 0.1px;
    margin-top: 30px;
    padding-top: 10px;
    border-top-style: groove;   

}



</style>

@section('content')
<div class="container">
    <div >
            <h1 style="text-align:center; margin-bottom:30px;" > My Booking </h1> 
           
            <div class="profile_info">
                <h4> Sign up Day : 12/30/2019 </h4> 
            
                <h4>  Name :</h4> <input type="text" name="name" id="" placeholder="Name">
                <h4> Date of Birth :</h4> <input type="date" name="name" id="" value="11/11/1999"> 
                <h4> Email :</h4> <input type="email" name="name" id="" placeholder="abc">
                <h4> number phone :</h4> <input type="text" name="name" id="" placeholder="Name">
                

            </div>

    </div>
</div>





<script>
  


</script>




@endsection
