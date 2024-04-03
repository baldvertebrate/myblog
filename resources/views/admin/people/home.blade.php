@extends('adminlte::page')

@section('title', 'People')

@section('content_header')
    <h1>People</h1>
@stop

@section('content')
        <div class="card">
        <div class="card-header">
                <h3 class="card-title">People List</h3>
                <div class="card-tools">
                    <a href="{{route('admin.people.create')}}" class="btn btn-primary form-control float-right">Add New Person</a>
                </div>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible auto-close">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('status')}}
                </div> 
            @endif
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">Person ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Sex</th>
                        <th>Contact Number</th>
                        <th>Category</th>
                        <th>Specifics</th>
                        <th>Email</th>
                        <th>License Code</th>
                        <th>Town Name</th>
                        <th>Barangay Name</th>
                        <th>Actions<th>
                </thead>
                <tbody>
                       @foreach($people as $people)
                            <tr>
                                <td>{{$people->id}}</td>
                                <td>{{$people->first_name}}</td>
                                <td>{{$people->middle_name}}</td>
                                <td>{{$people->last_name}}</td>
                                <td>{{$people->sex}}</td>
                                <td>{{$people->contact_number}}</td>
                                <td>{{$people->category}}</td>
                                <td>{{$people->specifics}}</td>
                                <td>{{$people->email}}</td>
                                <td>{{$people->license_code}}</td>
                                <td>{{$people->Town}}</td>
                                <td>{{$people->barangay->name}}</td>
                                

                                <td>
                                    <a href="{{route('admin.people.modify', $people)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
                                    <a href="{{route('admin.people.delete', $people)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>&nbsp;
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
</div>
<script> console.log('Hi!'); </script> 
<script src="http://127.0.0.1:8000/vendor/jquery/jquery.min.js"></script>
<script src="http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://127.0.0.1:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="http://127.0.0.1:8000/vendor/adminlte/dist/js/adminlte.min.js"></script> 
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
<script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" ></script>
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
    $("#example2").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example3').DataTable({
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