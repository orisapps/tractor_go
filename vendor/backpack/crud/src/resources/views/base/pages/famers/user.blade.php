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
      FAMERS
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

  <div class="box-header">
                      <div class="pull-left">
                          <a href="{{route('users.create')}}" class="btn-bold btn btn-success">Create New User</a>
                      </div>
                  </div>
  <div class="box-body ">
    @include('backpack::myincludes.messages')
    @if (! $users->count() )

    <div class="alert alert-danger">
        <strong> No User found !</strong>
    </div>

    @else
      <table class="table table-striped jambo_table bulk_action">

      <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>CID</th>
            <th>Password</th>
            <th>Country</th>
            <th>Registerd Date</th>

            <th>Action</th>
          </tr>
      </thead>

      <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{$user->fullname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->mobile}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->country}}</td>
            <td>{{$user->created_at}}</td>
            <td>
              {!! Form::open( [
                 'method' => 'DELETE',
                 'route' => [ 'users.destroy', $user->id ] ]) !!}
              <a href="{{route('users.show', $user->id)}}" class="btn btn-xs btn-success">
                  <i class="fa fa-eye"></i>
              </a>
              <a href="{{route('users.edit', $user->id)}}" class="btn btn-xs btn-default">
                  <i class="fa fa-edit"></i>
              </a>
              <button type="submit" class="btn btn-xs btn-danger">
                  <i class="fa fa-times"></i>
              </button>
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
  <small>{{$user->count()}} users</small>
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
