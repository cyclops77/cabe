<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Register Perusahaan</title>
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

<div class="card border-info float-center">
  <div class="card-header">Buat Beasiswa
    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
      Tambah Persyaratan
    </button>
  </div>
  <div class="card-body text-info">
    
   <form method="POST" action="{{url('/send/buat-beasiswa')}}">
          {{csrf_field()}}
          
          <div class="row">
            <div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Beasiswa</label>
    <input type="text" class="form-control" placeholder="Masukkan Nama Beasiswa" name="nama_beasiswa" maxlength="191">
  </div>


<div class="form-group" id="inputanFormIPK" style="display: block">
    <label for="exampleInputEmail1">Index Prestasi Kumulatif / Point</label>
  <div class="row">
  <div class="col-md-8">
    <input type="number" class="form-control" name="ipk" id="inputIPK">
  </div>
  <div class="col-md-3">
    <input type="number" class="form-control" name="point_ipk" id="pointIPK">
  </div>
  <a class="btn-sm btn btn-danger text-white"  onclick="FunctionIPK()">
    X
  </a>
  </div>
</div>

<div class="form-group" id="inputanFormGAJI" style="display: block">
    <label for="exampleInputEmail1">Gaji Orang Tua / Point</label>
  <div class="row">
  <div class="col-md-8">
    <input type="number" class="form-control"  id="inputGAJI" name="gaji">
  </div>
  <div class="col-md-3">
    <input type="number" class="form-control"  id="pointGAJI" name="point_gaji">
  </div>
  <a class="btn-sm btn btn-danger text-white" onclick="FunctionGAJI()">
    X
  </a>
  </div>
</div>

<div class="form-group" id="inputanFormUMUR" style="display: block">
    <label for="exampleInputEmail1">Umur / Point</label>
  <div class="row">
  <div class="col-md-8">
    <input type="number" class="form-control" id="inputUMUR" name="umur">
  </div>
  <div class="col-md-3">
    <input type="number" class="form-control" id="pointUMUR" name="point_umur">
  </div>
  <a class="btn-sm btn btn-danger text-white" onclick="FunctionUMUR()">
    X
  </a>
  </div>
</div>

  

<!-- //right -->
</div>
<div class="col-md-6">
  
  </div>
  
</div>
  <button type="submit" class="btn btn-primary float-left">
    Buat Sekarang !
  </button>
</div>
</div>
</form>
  </div>
</div>
</div>
  </div>

<!-- MODAL  -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Input Name</th>
      <th scope="col">Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Gaji Orang Tua</td>
      <td>Angka</td>
      <td>
        <button class="btn-sm btn btn-primary" onclick="FunctionGAJI()"><i class="fa fa-plus"></i> Tambahkan Input Gaji</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Umur</td>
      <td>Angka</td>
      <td>
        <button class="btn-sm btn btn-primary" onclick="FunctionUMUR()"><i class="fa fa-plus"></i> Tambahkan Input Umur</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>IPK</td>
      <td>Angka</td>
      <td>
        <button class="btn-sm btn btn-primary" onclick="FunctionIPK()"><i class="fa fa-plus"></i> Tambahkan IPK</button>
      </td>
    </tr>
    <tr>
  </tbody>
</table>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



  <script type="text/javascript">
  
  function FunctionIPK(){
    var x = document.getElementById("inputanFormIPK");
    var y = document.getElementById("inputIPK");
    var z = document.getElementById("pointIPK");
    if (x.style.display === "none") {
      x.style.display = "block";
      y.value = '';
      z.value = '';
    }else{
      x.style.display = "none";
      y.value = '';
      z.value = '';
    }
  };

 function FunctionGAJI(){
    var x = document.getElementById("inputanFormGAJI");
    var y = document.getElementById("inputGAJI");
    var z = document.getElementById("pointGAJI");
    if (x.style.display === "none") {
      x.style.display = "block";
      y.value = '';
      z.value = '';
    }else{
      x.style.display = "none";
      y.value = '';
      z.value = '';
    }
  };
function FunctionUMUR(){
    var x = document.getElementById("inputanFormUMUR");
    var y = document.getElementById("inputUMUR");
    var z = document.getElementById("pointUMUR");
    if (x.style.display === "none") {
      x.style.display = "block";
      y.value = '';
      z.value = '';
    }else{
      x.style.display = "none";
      y.value = '';
      z.value = '';
    }
  };

  </script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>