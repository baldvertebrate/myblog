@extends('adminlte::page')

@section('title', 'Vehicles')

@section('content_header')
    <h1>Vehicle</h1>
@stop

@section('content')

        <div class="card">
        <div class="card-header">
                <h3 class="card-title">Vehicle List</h3>
                <div class="card-tools">
                    <a href="{{route('admin.vehicles.create')}}" class="btn btn-primary form-control float-right">Add New Vehicle</a>
                </div>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible auto-close">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('status')}}
                </div> 
            @endif
            <div class= "table-responsive"> 
            <table id="example1" class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Color</th>
                        <th>Type</th>
                        <th>PlateNumber</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vehicles as $vehicle)
                            <tr>
                                <td>{{$vehicle->id}}</td>
                                <td>{{$vehicle->make}}</td>
                                <td>{{$vehicle->model}}</td>
                                <td>{{$vehicle->year}}</td>
                                <td>{{$vehicle->color}}</td>
                                <td>{{$vehicle->type}}</td>
                                <td>{{$vehicle->plate_number}}</td>
                                <td>
                                    <a href="{{route('admin.vehicles.modify', $vehicle)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
                                    <a href="{{route('admin.vehicles.delete', $vehicle)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>&nbsp;
                                </td>
                            </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('footer')
Copyright &copy; 2024. <strong>RES Admin</strong>. All rights reserved.
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
</div>

<script> console.log('Hi!'); </script>
    <script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="../../dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@stop