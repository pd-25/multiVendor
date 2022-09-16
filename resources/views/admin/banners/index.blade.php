@extends('admin.layout.masterLayout')
@section('title', 'Banner Page')

@section('content')
<div class="content-wrapper ">
    <section class="content ">
  
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Banner List</h3>
        </div>
        <div class="col-md-12">
          @include('admin.components.successFalureMsg')
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>SL.No</th>

              <th>Title</th>
              <th>Photo</th>
              <th>Description</th>
              <th>Status</th>
              <th>Condition</th>
              <th>action</th>
            </tr>
            </thead>
            <tbody>
            

            @foreach ($banner as $item)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->title}}</td>
              <td><img height="200px" width="200px" src="/{{$item->photo}}" alt="banner image"></td>
              <td>{{$item->description}}</td>
              <td>{{$item->status}}</td>
              <td>{{$item->condition}}</td>
              <td>
                <ul class="list-inline m-0">
                  <li class="list-inline-item">
                      <a href="{{route('banner.create')}}" class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-table"></i></a>
                  </li>
                  <li class="list-inline-item">
                      <a href="{{route('banner.edit',$item->slug)}}" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                  </li>
                  <li class="list-inline-item">
                      <a class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                  </li>
              </ul>
              </td>
            </tr>  
            @endforeach

            </tbody>
            <tfoot>
            <tr>
              <th>SL.No</th>

              <th>Title</th>
              <th>Photo</th>
              <th>Description</th>
              <th>Status</th>
              <th>Condition</th>
              <th>action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      
 
        </div>
        </div>
      </div>

    </section>
</div> 
                
@endsection

@section('scriptss')

<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>



<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
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
    
@endsection
