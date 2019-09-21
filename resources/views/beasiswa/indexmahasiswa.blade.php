<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">
	 <div class="col-md-12">

    @if(session('sukses'))
    <div class="alert alert-success" >
      {{session('sukses')}}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-success" >
      {{session('gagal')}}
    </div>
    @endif

<br>
<div class="row">
 @foreach($beasiswanya as $b)
  <div class="col-sm-4">
 
    <div class="card">
 
    <img class="card-img-top" src="{{asset('profil_beasiswa/contoh.jpg')}}" alt="the image alt text here">
 
      <div class="card-body text-center">
 
        <h5 class="card-title">{{ $b->nama_beasiswa}}</h5>
 
        <p class="card-text text-left">Place some text for the service 1 here. </p>
 
        <a href=" /beasiswa/{{$b->slug}}" class="btn btn-warning">More info</a>
 
      </div>
 
    </div>
 

  </div>
 @endforeach
 
<!--  -->
  
 </div>

 
  </div>
</div>
</body>
</html>