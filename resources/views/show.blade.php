<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>    
    @include('Includes.head')
  </head>
  <body>
      <div class="container">
        <h1><a  href="login">Metripond Plus börze</a></h1>
        <div class="row equal">
		@foreach ($ttermek as $kartyatermek)
		<div class="col-lg-4 col-md-6 col-sm-12 col-12 d-flex">		
		  <div class="card ">		  
			<h5 class="card-header bg-transparent">{{ $kartyatermek->nev2 }}
			  <span style="float:right;">{{ $kartyatermek->ar }}</span>
			</h5>
			<div class="card-body">
			  <h4 class="card-title">{{$kartyatermek->nev1 }}</h4>
			  <div class="keptarto" >
			    <img id="termfoto"  alt="kép helye" src="{{ $kartyatermek->termkeputvonal }}">
			  </div>
			  <div >
				  <p class="card-text">{{ $kartyatermek->leiras }}</p>
				  <p class="card-text" style="margin-top: 1em;">Állapot: {{ $kartyatermek->allapot }}</p>
				  <p class="card-text" style="font-size: 10px; float:right;">Frissítve: {{ $kartyatermek->updated_at }}</p>				  
			  </div>
			</div>
			<div class="card-footer bg-transparent">
			  <ul class="list-group ">
				<li class="list-group-item">{{$kartyatermek->nev}}
				  <img id="kapcsfoto" src="{{ $kartyatermek->kapcskeputvonal }}">
				  </li>
				<li class="list-group-item">
				  <i class="icon-phone"></i>
				  <a class="kapcsref" href="tel:{{ $kartyatermek->telefonsz }}">{{ $kartyatermek->telefonkiir }}</a>
				</li>
				<li class="list-group-item">
				  <i class="icon-envelope-alt"></i>
				  <a class="kapcsref" href="mailto:{{ $kartyatermek->imel }}">{{ $kartyatermek->imel }}</a>
				</li>
			  </ul>
			</div>         
		  </div>
		 </div>
		@endforeach
        </div>
      </div>  
      @include('Includes.footer')
  </body>
</html>