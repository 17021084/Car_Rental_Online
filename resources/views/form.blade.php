form
asdfas
asfas


<form action="{{ route('post') }}" method="POST">
    
    <div class="form-group">
         @csrf
            
      <label for="">text</label>
      <input type="text" class="form-control" value="" name="text" id="" aria-describedby="helpId" placeholder="">
      

      <small id="helpId" class="form-text text-muted">Help text</small>

    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="radio" id="" value="1" checked>
        1 
      </label>
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="radio" id="" value="2" >
        2
      </label>

    </div>


</form>