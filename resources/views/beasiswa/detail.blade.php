<!DOCTYPE html>
<html>
<head>
	<title>LOL</title>
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

  @foreach($bea as $b)  
  
  <h3>{{$b->nama_beasiswa}}</h3>
  
  @if($b->maks_semester !== $data_mahasiswa->semester)
  
  <p class="text-danger">Tidak Sama Semesternya</p>
  
  @else
  
  <p>Semester Sama</p>
  
  @endif


  @endforeach
  
   </div>

 
  </div>
</div>
</body>
</html>