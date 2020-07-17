@extends('admin.adminmaster')
<style>
      .contact{
                   margin-left: 10%;
                 width: 80% ;
                 margin-top: 30px;
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
                        <form action="{{ route('admin.posteditvehicle') }}" method="POST">
                                        @csrf
                                
                                <div class="row">
                                        <div class="col-xl-6">
                                        
                                                
                                                <div class="form-group">
                                                                <label for="ID">ID: <b>{{ $vehicle->vehicleID }}</b> </label>
                                                                <input type="text" class="form-control"  name="Id" id="Id" placeholder="Can not modify" style="display:none"  value="{{ $vehicle->vehicleID }}" >
                                        
                                                        </div>
                                                <div class="form-group">
                                                        <label for="Manufacturer">Manufacturer : <b>{{ $vehicle->manufacturer }}</b></label>
                                                        <input  value="{{ $vehicle->manufacturer }}" type="text"    class="form-control" id="manufacturer" placeholder="Manufacturer" name="Manufacturer">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <label for="Category">Category : <b>{{ $vehicle->make }}</b></label>
                                                                <input value="{{ $vehicle->make }}" type="text" class="form-control" id="Category" placeholder="Category" name="Category">
                                                </div>
                                                                
                                                        <div class="form-group">
                                                        <label for="Year">Year : <b>{{ $vehicle->year }}</b></label>
                                                        <input value="{{ $vehicle->year }}" type="text" class="form-control" id="Year" placeholder="Year" name="Year">
                                                        </div>
                                                        
                                                
                                                
                                                <div class="form-group">
                                                        <label for="Price">Price :<b>{{ $vehicle->price }}</b></label>
                                                        <input value="{{ $vehicle->price }}" type="text" class="form-control" id="Price" placeholder="Price" name="Price">
                                                </div>
                                                
                                                <div class="form-group">
                                                        <label  for="Odometer">Odometer :<b>{{ $vehicle->odometer}} </b></label>
                                                        <input value="{{ $vehicle->odometer}}" type="text" class="form-control" id="Odometer" placeholder="Odometer" name="Odometer">
                                                </div>
                                                <div class="form-group">
                                                        <label for="Status">Status :<b>{{ $vehicle->title_status }}</b></label>
                                                        <input value="{{ $vehicle->title_status }}" type="text" class="form-control" id="Status" placeholder="Status" name="Status">
                                                </div>
                                                <div class="form-group">
                                                        <label for="Tranmission">Tranmission :<b>{{ $vehicle->transmission }}</b></label>
                                                        <input value="{{ $vehicle->transmission }}" type="text" class="form-control" id="Transmission" placeholder="Transmission" name="Transmission">
                                                </div>

                                                <div class="form-group">
                                                                        <label for="number">Description : </label>
                                                                <textarea value=" {{ $vehicle->desc }}" class="form-control" name="Description" placeholder="Description" id="Description" rows="10">{{ $vehicle->desc }}
                                                       
                                                                </textarea>
                                                        
                                                        </div>


                                        </div>
                                        <div class="col-xl-6">
                                                <div class="form-group">
                                                        <label for="Fuel">Fuel : <b>{{ $vehicle->fuel }}</b></label>
                                                        <input  value="{{ $vehicle->fuel }}" type="text" class="form-control" id="Fuel" placeholder="Fuel" name="Fuel">
                                                </div>
                                                <div class="form-group">
                                                        <label for="Drive">Drive :<b>{{ $vehicle->drive }}</b></label>
                                                        <input value="{{ $vehicle->drive }}" type="text" class="form-control" id="Drive" placeholder="Drive" name="Drive">
                                                </div>
                                                <div class="form-group">
                                                        <label for="Size">Size : <b>{{ $vehicle->size }} </b></label>
                                                        <input value="{{ $vehicle->size }}" type="text" class="form-control" id="Size" placeholder="Size" name="Size">
                                                </div>
                                                <div class="form-group">
                                                        <label for="Seats">Seats : <b>{{ $vehicle->seats }}</b> </label>
                                                        <input value="{{ $vehicle->seats }}" type="text" class="form-control" id="number" placeholder="Seats" name="Seats">
                                                </div>
                                                
                                                <div class="form-group">
                                                        <label for="PaintColor">Paint Color :<b>{{ $vehicle->paint_color }}</b></label>
                                                        <input value="{{ $vehicle->paint_color }}" type="text" class="form-control" id="PaintColor" placeholder="Paint Color" name="PaintColor">
                                                </div>
                                                
                                                <div class="form-group">
                                                        <label for="Cylinders">Cylinders :<b>{{ $vehicle->cylinders }}</b></label>
                                                        <input value="{{ $vehicle->cylinders }}" type="text" class="form-control" id="Cylinders" placeholder="cylinders" name="Cylinders">               
                                                </div>
                                                
                                        
                                                
                                                <div class="form-group">
                                                        <label for="ImageURL">Image URL :</label>
                                                        <input value="{{ $vehicle->image_url }}" type="text" class="form-control" id="ImageURL" placeholder="Image URL" name="ImageURL">
                                                        <div id="preview">
                                                        <img src="{{ $vehicle->image_url }}" id="previewImage" class="img-fluid " alt="nothing to preview">
                                                        
                                                </div>

                                                </div>

                                        </div>
                                        
                                </div>
                                        
                                <button type="submit" id="btnsubmit" class="btn btn-success">Submit</button>
                                

                                {{-- goi den thang khac  link o formaction --}}
                                
                                <button id="delete"  onclick="return confirm('Are you sure you want to delete this Car ?');" class="btn btn-warning"  formaction="{{ route('admin.deletevehicle' , ['id'=>  $vehicle->vehicleID ]) }}">Delete</button>
                                
                                
                        </form>

       

	</div>


<script type="text/javascript" >
     $('#ImageURL').keyup(function(){
                 let link =$('#ImageURL').val()
                 $('#previewImage').attr('src',link);
                
        });

      
                   
</script>
@endsection
    





