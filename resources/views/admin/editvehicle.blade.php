@extends('admin.adminmaster')
<style>
.contact{
	margin-left: 10%;
	width: 80% ;
}

</style>


@section('content')

	<div class="contact">
		<h2> <b>Vehicle Details</b> </h2>
		<form action="/action_page.php">
          
            <div class="row">
                <div class="col-xl-6">
                        <div class="form-group">
                                <label for="number">ID:</label>
                                <input type="text" class="form-control" id="id" placeholder="vehicleID" name="vehicleID">
                              </div>
                              
                              <div class="form-group">
                                  <label for="number">Manufacturer :</label>
                                  <input type="text" class="form-control" id="manufacturer" placeholder="Manufacturer" name="Manufacturer">
                                </div>
                                
                                <div class="form-group">
                                        <label for="number">Category :</label>
                                        <input type="text" class="form-control" id="Category" placeholder="Category" name="Category">
                               </div>
                                          
                                <div class="form-group">
                                  <label for="number">Year :</label>
                                  <input type="text" class="form-control" id="number" placeholder="Year" name="Year">
                                </div>
                                
                             
                              
                              <div class="form-group">
                                <label for="number">Price :</label>
                                <input type="text" class="form-control" id="Price" placeholder="Contact" name="Price">
                              </div>
                             
                              <div class="form-group">
                                <label for="number">Odometer :</label>
                                <input type="text" class="form-control" id="Odometer" placeholder="Odometer" name="Odometer">
                              </div>
                              <div class="form-group">
                                <label for="Status">Status :</label>
                                <input type="text" class="form-control" id="Status" placeholder="Status" name="Status">
                              </div>
                              <div class="form-group">
                                <label for="Tranmission">Tranmission :</label>
                                <input type="text" class="form-control" id="Tranmission" placeholder="Tranmission" name="Tranmission">
                              </div>



                </div>
                <div class="col-xl-6">
                        <div class="form-group">
                                <label for="number">Fuel :</label>
                                <input type="text" class="form-control" id="number" placeholder="Fuel" name="Fuel">
                        </div>
                        <div class="form-group">
                                <label for="number">Drive :</label>
                                <input type="text" class="form-control" id="number" placeholder="Drive" name="Drive">
                        </div>
                        <div class="form-group">
                                <label for="number">Size :</label>
                                <input type="text" class="form-control" id="number" placeholder="Size" name="Size">
                        </div>
                        <div class="form-group">
                                <label for="number">Seats :</label>
                                <input type="number" min="1" class="form-control" id="number" placeholder="Fuel" name="Seats">
                        </div>
                        
                        <div class="form-group">
                                <label for="number">Paint Color :</label>
                                <input type="text" class="form-control" id="PaintColor" placeholder="Paint Color" name="Paint Color">
                        </div>
                        
                        <div class="form-group">
                                <label for="number">Description :</label>
                                <input type="text" class="form-control" id="Description" placeholder="Description" name="Description">
                        
                        </div>
                        <div class="form-group">
                                <label for="number">Image URL :</label>
                                <input type="text" class="form-control" id="Image URL" placeholder="Image URL" name="ImageURL">
                        
                        </div>
                        <div class="form-group">
                                <label for="Cylinders">Cylinders</label>
                                <input type="number" class="form-control" id="Cylinders" placeholder="Cylinders" name="Cylinders">               
                        </div>
                        


                </div>
                
            </div>
		 
		  <button type="submit" class="btn btn-success">Submit</button>
          

          {{-- goi den thang khac  link o formaction --}}
          <button id="delete"  onclick="" class="btn btn-warning"  formaction="/action_page2.php">Delete</button>

          
        </form>

       

	  </div>

@endsection
    
<script >

   
    
</script>




