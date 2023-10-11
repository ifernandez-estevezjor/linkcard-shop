@if ($message = Session::get('success'))
    <div class="alert alter-success alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alter-danger alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>
    </div>
@endif