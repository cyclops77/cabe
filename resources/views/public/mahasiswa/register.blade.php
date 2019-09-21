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
   <form method="POST" action="{{url('/send/registration')}}">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_lengkap">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Semester</label>
    <input type="number" class="form-control" placeholder="Masukkan Semester" name="semester">
  </div>		
  <div class="form-group">
    <label for="exampleInputEmail1">IPK</label>
    <input type="number" class="form-control" placeholder="Masukkan IPK" name="ipk">
  </div>
  
</div>
<div class="col-md-6">
  <div class="input-group mb-3">
  <div class="input-group">
    <label for="exampleInputEmail1">Jenis Jurusan</label>
  </div>
  <select class="custom-select" id="fakultas" name="fakultas">
    <option value="0" selected="true" disabled="true">PIlih Fakultas Anda . . . </option>
    @foreach($fak as $f)
        <option value="{{$f->id}}">{{$f->nama}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
          <select name="prodi" id="prodi" class="form-control">
            <option value="0" selected="true" disabled="true">Pilih Prodi Anda . . . </option>
          </select>
        </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" placeholder="Masukkan Email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nomor HP</label>
    <input type="text" class="form-control" placeholder="Masukkan Nomor HP" name="nohp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" placeholder="Masukkan Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">
    Kirim Registrasi
  </button>
</div></div>
</form>
</div>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript">
    $('#fakultas').on('change',function(e){
        console.log(e);
        var id_fakultas = e.target.value;
        $.get('/json-prodi?fakultas_id=' + id_fakultas, function(data){
          $('#prodi').empty();
          $('#prodi').append('<option value="0" selected="true" disabled="true">Pilih Prodi Anda . . . </option>')
        $.each(data, function(index, prodiObj){
          $('#prodi').append('<option value="'+ prodiObj.id +'">'+prodiObj.nama+'</option>')  
        })
        });
    });



  </script>
</body>
</html>