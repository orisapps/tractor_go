
@if (isset($errors)&&count($errors) > 0)
<div id="p_errors_all" class="bs-callout bs-callout-warning">
    <div class="alert alert-warning" role="alert">

<p><span class="lnr lnr-warning"></span> 

  @foreach ($errors->all() as $error)
      <li><strong>{!! $error !!}</strong></li>
  @endforeach
 </p>
  </div>
</div>

@endif
