<!DOCTYPE html>
<html>
<head>
	<title>Gaji Karyawan</title>
	<!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    


    {{-- dataTables --}}
    <link href="{{ asset('assets/datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/jquery/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    {{-- dataTables --}}
    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
    	$('#contact-table').DataTable({
    	});
    </script>
    
</head>
<body>
	<div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Gaji Karyawan
              	<button type="button" class="btn btn-primary pull-right" style="margin-top: -8px;" data-toggle="modal" data-target="#modal-form">Tambah Karyawan</button>
              </h4>
            </div>
            <div class="panel-body">
              <table id="contact-table" class="table table-striped">
                <thead>
                  <tr>
                    <th>ID Karyawan</th>
                    <th>Nama Karyawan</th>
                    <th>Golongan</th>
                    <th>Gaji Bersih</th>
                    <th>Tunjangan</th>
                    <th>Terima Gaji</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                	@foreach($data_karyawan as $data)
                	<tr>
                		<td>{{$data -> id}}</td>
                		<td>{{$data -> nama}}</td>
                		<td>{{$data -> golongan}}</td>
                		<td>{{$data -> gaji_bersih}}</td>
                		<td>{{$data -> tunjangan}}</td>
                		<td>{{$data -> terima_gaji}}</td>
                		<td>
	                		<a href="/{{$data->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
	                		<a href="/{{$data->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah yakin ingin dihapus?')">Hapus</a>
                		</td>
						
                	</tr>
                	@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
            @include('form')
    </div>
</body>
</html>