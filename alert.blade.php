@if(Session::get('result') != '')
<div class="alert {{ Session::get('type') }} alert-dismissible show fade">
    {{ Session::get('result') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
