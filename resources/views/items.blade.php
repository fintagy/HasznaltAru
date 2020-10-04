<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">    
  <div class="p-6 ">
    <table class="table table-sm table-striped table-hover ">
      <thead>
        <tr class="text-center" >
          <th class="border ">Típus</th>
          <th class="border">Név</th>          
          <th class="border">Ár</th>
          <th class="border">Darab</th>
          <th class="border">Aktív</th>
          <th class="border">Szerkeszt</th>
          <th class="border">Töröl</th>
        </tr>
      </thead>
      <tbody>
        @foreach($titems as $item)
          <tr > <!--onclick="window.location='/dashboard/{{ $item->id}}'"-->
            <td  >{{ $item->nev2 }}</td>
            <td>{{ $item->nev1 }}</td>
            <td>{{ $item->ar }}</td>
            <td class="text-center" >{{ $item->db }}</td>             
            <td class="text-center" >      
              <input type="checkbox" value="" id="aktiv">                  
            </td>            
            <td class="text-center">
              <button type="button" class="btn btn-outline-secondary" onclick="window.location='/dashboard/{{ $item->id}}'"><i class="fa fa-edit"></i></button>
            </td>
            <td class="text-center">
              <button type="button" class="btn btn-outline-warning"><i class="fa fa-trash-alt"></i></button>
            </td>
          </tr>                     
        @endforeach
      </tbody>
    </table>
  </div>    
<div class="p-6">
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
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">@if (isset($titem1[0])){{$titem1[0] -> leiras}}@else echo 'teli';@endif</textarea>
      </div>
    </form>
    </div>
</div>