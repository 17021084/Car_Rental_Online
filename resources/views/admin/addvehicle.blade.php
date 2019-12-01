@extends('admin.adminmaster')
<style>
.contact{
	margin-left: 10%;
	width: 80% ;
}
#preview{
        margin-top: 50px;
        width: 300px;
        height: 300px;
}
</style>


@section('content')

	<div class="contact">
		<h2> <b>Vehicle Details</b> </h2>
	<form action="{{ route('admin.postaddvehicle') }}">
          
                        <div class="row">
                                        <div class="col-xl-6">
                                
                                
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
                                        <input type="text" class="form-control" id="Price" placeholder="Price" name="Price">
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
                                

                                        <div class="form-group">
                                                <label for="number">Description :</label>
                                        <textarea class="form-control" name="Description" placeholder="Description" id="Description" rows="10"></textarea>
                                       
                                </div>


                        </div>

                        <div class="col-xl-6">
                                <div class="form-group">
                                        <label for="Fuel">Fuel :</label>
                                        <input type="text" class="form-control" id="Fuel" placeholder="Fuel" name="Fuel">
                                </div>
                                <div class="form-group">
                                        <label for="Drive">Drive :</label>
                                        <input type="text" class="form-control" id="Drive" placeholder="Drive" name="Drive">
                                </div>
                                <div class="form-group">
                                        <label for="Size">Size :</label>
                                        <input type="text" class="form-control" id="Size" placeholder="Size" name="Size">
                                </div>
                                <div class="form-group">
                                        <label for="Seats">Seats :</label>
                                        <input type="text"class="form-control" id="Seats" placeholder="Seats" name="Seats">
                                </div>
                                
                                <div class="form-group">
                                        <label for="PaintColor">Paint Color :</label>
                                        <input type="text" class="form-control" id="PaintColor" placeholder="Paint Color" name="PaintColor">
                                </div>
                                
                        
                        
                                <div class="form-group">
                                        <label for="Cylinders">Cylinders</label>
                                        <input type="text" class="form-control" id="Cylinders" placeholder="Cylinders" name="Cylinders">               
                                </div>
                                
                                <div class="form-group">
                                                <label for="ImageURL">Image URL :</label>
                                                <input type="text" class="form-control" id="ImageURL" placeholder="Image URL" name="ImageURL">
                                                
                                        </div>
                                        
                                <div id="preview">
                                        <img src="" id="previewImage" class="img-fluid " alt="nothing to preview">
                                
                                </div>

                        </div>
                        
                 </div>
                        
                        <button type="submit" class="btn btn-success">Submit</button>
                


                
        </form>

       

	</div>

<script >


$('#ImageURL').keyup(function(){
        let link =$('#ImageURL').val()
        $('#previewImage').attr('src',link);

});
   

    

</script>
@endsection
    




