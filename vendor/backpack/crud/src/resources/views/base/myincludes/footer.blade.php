
</div>
<!-- /.row (main row) -->

</section>
<footer class="main-footer">

  <strong>Copyright &copy; {{date('Y')}} <a href="#"> {!! config('backpack.base.logo_lg') !!} </a>.</strong> All rights
  reserved.


  @if (config('backpack.base.developer_link') && config('backpack.base.developer_name'))
  <div class="pull-right hidden-xs">
      {{ trans('backpack::base.handcrafted_by') }} <a target="_blank" href="{{ config('backpack.base.developer_link') }}">{{ config('backpack.base.developer_name') }}</a>.
</div>
  @endif
</footer>
