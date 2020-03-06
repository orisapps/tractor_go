<!DOCTYPE html>
<html>
<head>
  @include('backpack::myincludes.head')
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
  @include('backpack::myincludes.headerpage')

  <!-- Left side column. contains the logo and sidebar -->
@include('backpack::myincludes.leftmenu')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      FARMERS
      <small>{{ config('backpack.base.project_name') }}</small>
    </h1>
    <ol class="breadcrumb">
      <li>
          <a href="{{ url('/admin/dashboard') }}">{{ config('backpack.base.project_name') }} <i class="fa fa-dashboard"></i><strong> Dashboard</strong></a>
      </li>
      <li class="active"><a href="{{ route('users.index') }}"><strong>Farmers</strong></a></li>

    </ol>



  </section>
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">


  <!-- Main content -->
<div class="box">


  <div class="box-body ">
    @include('backpack::myincludes.messages')
    @if (! $users->count() )

    <div class="alert alert-danger">
        <strong> No Farmer found !</strong>
    </div>

    @else
      <table class="table table-striped jambo_table bulk_action">

      <thead>
          <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Account Type</th>
            <th>Registerd Date</th>

            <th>Action</th>
          </tr>
      </thead>

      <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{$user->firstname}} {{$user->lastname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->account_type}}</td>
            <td>{{$user->created_at}}</td>
            <td>
              {!! Form::open( [
                 'method' => 'DELETE',
                 'route' => [ 'users.destroy', $user->id ] ]) !!}
              <a href="{{route('users.show', $user->id)}}" class="btn btn-xs btn-success">
                  <i class="fa fa-eye"></i>
              </a>


               {!! Form::close() !!}
            </td>
          </tr>
            @endforeach
      </tbody>


    </table>

  </div>
  <div class="box-footer clearfix">
    <div class="pull-left">
    {{ $users->render() }}
</div>
<div class="pull-right">
  <small>@if ($users->count() == 1)
    {{$users->count()}} farmer

@else
{{$users->count()}} farmers
  @endif
</small>
</div>
  </div>
</div>
  <!-- /.content -->
</div>
@endif

  @include('backpack::myincludes.footer')

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->

  @include('backpack::myincludes.footerscripts')
</body>
</html>
