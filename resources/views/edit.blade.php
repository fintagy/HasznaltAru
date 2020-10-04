    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
	
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">    
  <div class="mt-6 text-gray-500">
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Típus</label>
        <select class="form-control" id="exampleFormControlTipus">
            @foreach($tlists as $lista)
                <option>{{$lista -> nev2}}</option>
            @endforeach      
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Név</label>
        <select class="form-control" id="exampleFormControlNev">
         @foreach($tlists as $lista)
                <option>{{$lista -> nev1}}</option>
            @endforeach    
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">Example multiple select</label>
        <select multiple class="form-control" id="exampleFormControlSelect2">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </form>
  </div>
</div>