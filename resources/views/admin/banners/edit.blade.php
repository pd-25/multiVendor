
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
    <form action="{{route('banner.update',$banner->slug)}}" method="PUT" enctype="multipart/form-data">
      @csrf
      
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control"  placeholder="Title" value="{{$banner->title}}">
              </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label for="exampleInputFile">Photo</label>
            <div class="row">
            <div class="input-group">
                
                <div class="col-md-5">
                    <p>Old Photo</p>
                    <img height="100px" width="200px" src="/{{$banner->photo}}">
                </div>
                    
                <div class="col-md-7 custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="photo" value="/{{$banner->photo}}">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              
            </div>
        </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Condition</label>
                      <select name="condition" class="form-control select2bs4" style="width: 100%;">
                        <option  @php $banner->condition == 'promo' ? $banner->condition : "" ; @endphp >Promote</option>

                        <option @php $banner->condition == 'banner' ? $banner->condition : "" ; @endphp >Banner</option>
                        
                        <option disabled="disabled">California (disabled)</option>
                        
                      </select>
                    </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control select2bs4" style="width: 100%;">
                        <option value ="@php $banner->status == 'active' ? $banner->status : "" ; @endphp">Active</option>
                        <option value ="@php $banner->status == 'inactive' ? $banner->status : "" ; @endphp">Inactive</option>
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
                <textarea name="description" id="description" class="form-control">{{$banner->description}}</textarea>
                
              </div>
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div >
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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
