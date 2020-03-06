@if (session()->has('success'))
<div class="card text-center" style="margin-top: 20px;">
   <div class="card-body">
<span class="lnr lnr-checkmark-circle" style="font-size: 100px;">

</span><br><hr>
<h4 class="card-title" style="line-height: 24px !important;">
  {!! session()->get('success') !!}</h4> 
<hr><a href="{{ route('login') }}" class="btn btn-success input-lg" style="font-size: large !important; padding: 10px 12px !important;">Login to Dashboard</a>
</div>
</div>

@endif
