
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="col-lg-12">
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



    <form action="/data-pendaftaran/terima-perusahaan" method="POST">
        {{csrf_field()}}

    <div class="form-group">
            <table class="table table-stripped">
                <thead class="table-active">
                    <th width="3%" class="text-center">#</th>
                    <th width="3%" class="text-center">No</th>
                    <th width="20%" class="text-center">Nama Perusahaan</th>
                    <th width="30%" class="text-center">Jenis</th>
                    <th width="30%" class="text-center">Penanggung</th>
                </thead>
                <tbody>
                    
        @foreach($pendaftar as $sia)
                    <tr>
                    <td>
                    <input type="checkbox" name="reg[]" value="{{$sia->id}}">     
                    </td> 
                    <td class="text-center">
                        {{$sia->id}}
                    </td>
                    <td class="text-center">
                        {{$sia->nama_perusahaan}}
                    </td>
                    <td class="text-center">
                        {{$sia->jenis_perusahaan}}
                    </td>
                    <td class="text-center">
                        {{$sia->nama_penanggung}}
                    </td>
                    </tr>
        @endforeach
                </tbody>
            </table>    
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
  </form>
</div>

</body>
</html>






