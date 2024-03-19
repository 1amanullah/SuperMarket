@if ($message = Session::get('success'))
<div class ="alert alert-primary" role="alert">
   {{$message}}
</div>
@elseif ($message = Session::get('error'))
<div class ="alert alert-danger" role="alert">
   {{$message}}
</div>       
@endif

@foreach ($errors->all() as $message) 
    <div class ="alert alert-primary" role="alert">
     {{$message}}
   </div>
@endforeach