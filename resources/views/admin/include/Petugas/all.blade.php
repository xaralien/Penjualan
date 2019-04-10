@extends('admin.layout.master')

@section('nama')
Petugas
@endsection

@section('nama3')
Preview
@endsection

@section('nama2')
<li><a href="#">Data Penjualan</a></li>
@endsection

@section('nama1')
Petugas
@endsection


@section('content')
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Petugas</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
      <form action="{{route('simpan_petugas')}}" method="post">
      @csrf
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Petugas</label>
                <input type="text" class="form-control select2" name="namapetugas" placeholder="Nama Petugas">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Alamat</label>
               <input type="text" class="form-control select2" name="alamat" placeholder="Alamat">
                </select>
              </div>  

            </div>
            <!-- /.col -->
             <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control select2" name="email"  placeholder="Email">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Telepon</label>
               	<input type="text" class="form-control select2" name="telpon" placeholder="Telepon">
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- /.box-body -->
      </form>
        <div class="box-footer">
          
        </div>
      </div>

<div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Preview Petugas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Petugas</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Telepon</th>
                  <th>Hapus</th>
                </tr>
                </thead>
                @foreach($petugas as $value)
                <tbody>
                <tr>
                  <td>{{ $value->id }}</td>
                  <td>{{ $value->namapetugas }}</td>
                  <td>{{ $value->alamat }}</td>
                  <td>{{ $value->email }}</td>
                  <td>{{ $value->telpon }}</td>
                  <td><a href="delete/{{$value->id}}">Hapus</a></td>
                </tr>
                </tbody>
                @endforeach
                <tfoot>
                <tr>
                <th>ID</th>
                  <th>Nama Petugas</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Telepon</th>
                  <th>Hapus</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
@endsection

@section('table')

<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection