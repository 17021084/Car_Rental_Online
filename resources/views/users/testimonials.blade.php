@extends('layouts.app')
<style>

.list_rent li{
    background-color: whitesmoke;
    border-top: 0.1px;
    margin-top: 30px;
    padding-top: 10px;
    border-top-style: groove;   

}
.testimonials{
    margin:0 auto;
    width: 60%;
}
.test{
    background-color: whitesmoke;
    border-bottom: 0.1px;
    margin-bottom: 30px;
    padding-top: 10px;
    border-bottom-style: groove;   


}
#form_post{
    margin-top: 30px;
}

</style>

@section('content')
<div class="container">
    
    <div id="form" >
     
            <h1 style="text-align:center; margin-bottom:30px;" > My Testimonials </h1> 
           
           
            <div class="testimonials">
                
                <div class="row">
                     <div class="col-xl-12">
                        <div class="test" >
                             <p>

                                        bla bla bla
                            </p>
                            <i>Post at : .........</i>

                        </div>
                     </div>
                     <div class="col-xl-12">
                        <div class="test" >
                             <p>

                                        bla bla bla
                            </p>
                            <i>Post at : .........</i>

                        </div>
                     </div>
                     
                    
                    

                </div>

                
                
                <form id="form_post" action="" method="post">
                  
                    <div class="form-group">
                        <label for="Testimonials"> <b>Post Testimonials</b></label>
                        <textarea class="form-control" name="Testimonials" id="Testimonials" rows="3"></textarea>
      
                        
                    </div>    
                    
                    <button type="submit" id="btnUpdate" class="btn btn-primary">Submit</button>
                       
                </form>

            </div>
            


    </div>
</div>

{{-- <script type="application/javascript">

</script> --}}


@endsection
