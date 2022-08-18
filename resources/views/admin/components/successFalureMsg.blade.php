@if(Session::has('success'))

    <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">@time;</span>
        </button>
    </div>

@elseif(Session::has('error'))

    <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
        {{Session::get('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">@time;</span>
        </button>
    </div>
      
@endif
