@extends('admin.layout.masterLayout')
@section('title', 'Banner Page')

@section('content')
<div class="content-wrapper">
    <section class="content">
  <!-- SELECT2 EXAMPLE -->
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Add Banner</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="col-md-12">
      @if ($errors->any())
<div class="alert alert-danger">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
      @include('admin.components.successFalureMsg')
    </div>
    <!-- /.card-header -->
    <form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
      @csrf
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title">
              </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label for="exampleInputFile">Photo</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="photo">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Condition</label>
                      <select name="condition" class="form-control select2bs4" style="width: 100%;">
                        <option selected="selected">Banner</option>
                        <option >Promote</option>
                        
                        <option disabled="disabled">California (disabled)</option>
                        
                      </select>
                    </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control select2bs4" style="width: 100%;">
                        <option>Active</option>
                        <option  selected="selected">Inactive</option>
                        <option disabled="disabled">California (disabled)</option>
                        
                      </select>
                    </div>
              </div>
            </div>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" id="description" class="form-control"  placeholder="Enter ..." >ddgdfg</textarea>
                {{-- <div class="row">
                  <div class="col-md-12">
                    <div class="card card-outline card-info">
                      <div class="card-header">
                        <h3 class="card-title">
                          Summernote
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <textarea id="summernote">
                          Place <em>some</em> <u>text</u> <strong>here</strong>
                        </textarea>
                      </div>
                      <div class="card-footer">
                        Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin.
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                </div> --}}
              </div>
          <!-- /.form-group -->
          
          
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div >
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>
</section>
</div> 
                
@endsection
@section('summernote')
    
<!-- Summernote -->
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
      // Summernote
      $('#description').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
</script>
@endsection
