<!DOCTYPE html>
<html>
<head>
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
  <div class="card-header">Header</div>
  <div class="card-body text-info">
   <form method="POST" action="{{url('/send/regis-perusahaan')}}">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Perusahaan</label>
    <input type="text" class="form-control" placeholder="Masukkan Nama Perusahaan" name="nama_perusahaan">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Perusahaan</label>
    <input type="text" class="form-control" placeholder="Masukkan Email Perusahaan" name="email_perusahaan">
  </div>
  <div class="input-group mb-3">
  <div class="input-group">
    <label for="exampleInputEmail1">Jenis Perusahaan</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="jenis_perusahaan">
    <option selected>Choose...</option>
    <option value="Bank">perBank</option>
    <option value="Koperasi">Koperasi</option>
  </select>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" placeholder="Masukkan Password Perusahaan" name="password">
  </div>


<!-- //right -->
</div>
<div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Penanggung Jawab</label>
    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda" name="nama_penanggung">
  </div>
  </div>
  
</div>
  <button type="submit" class="btn btn-primary float-right">
    Kirim Registrasi
  </button>
</div>
</div>


</form>
    
  </div>
</div>


</div>
  </div>
</body>
</html>