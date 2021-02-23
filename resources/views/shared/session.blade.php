
@if(session('status_success'))

    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {!! session('status_success') !!}
    </div>

@endif

@if(session('status_remove'))

    <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {!! session('status_remove') !!}
    </div>

@endif


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ $error }}
        </div>
    @endforeach
@endif
