<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
	
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">    
  <div class="mt-6 text-gray-500">
    <table class="table table-sm table-striped table-hover">
      <thead>
        <tr>
          <th>Típus</th>
          <th>Név</th>
          <th>Bank Detail</th>
          <th>Ár</th>
          <th>Darab</th>
        </tr>
      </thead>
      <tbody>
        @foreach($titems as $item)
          <tr class='clickable-row' onclick="window.location='/edit/{{ $item->id}}'">
            <td>{{ $item->nev2 }}</td>
            <td>{{ $item->nev1 }}</td>
            <td>{{ isset($item->bank_id) ? "availible":"N/A" }}</td>
            <td>{{ $item->ar }}</td>
            <td>{{ $item->db }}</td>
          </tr>                     
        @endforeach
      </tbody>
    </table>
  </div>
</div>