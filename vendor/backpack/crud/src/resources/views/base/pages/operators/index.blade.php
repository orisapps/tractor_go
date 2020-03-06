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
      OPERATORS
      <small>{{ config('backpack.base.project_name') }}</small>
    </h1>
    <ol class="breadcrumb">
      <li>
          <a href="{{ url('/admin/dashboard') }}">{{ config('backpack.base.project_name') }} <i class="fa fa-dashboard"></i><strong> Dashboard</strong></a>
      </li>
      <li class="active"><a href="{{ route('operators.index') }}"><strong>Operators</strong></a></li>

    </ol>


  </section>
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">


  <!-- Main content -->
<div class="box">
  <div class="box-header">
                      <div class="pull-left">
                          <a href="{{route('operators.create')}}" class="btn-bold btn btn-success">Add New operatorty</a>
                      </div>
                  </div>
  <div class="box-body adminpro">
@include('backpack::myincludes.messages')

  <table class="table table-striped jambo_table bulk_action">

      <thead>

          <tr>
          <th>Serial Number</th>
            <th>Photo</th>
            <th>Full Name</th>
            <th>Address></th>
              <th>State</th>
            <th>L.G.A</th>
            <th>Town</th>
            <th>Tractor Brand</th>
            <th width="100">Action</th>
          </tr>
      </thead>

      <tbody>
        @foreach ($operators as $operator)
          <tr>

            <td><img alt="" src="{{asset('uploads')}}/{{$operator->image}}" height="60" width="60"></td>
            <td>{{$operator->fullname}}</td>
            <td>{{$operator->description}}</td>
            <td>{{$operator->document}}</td>
            <td>{{$operator->location}}</td>
            <td>{{$operator->state}}</td>
            <td>{{$operator->price}}</td>
            <td>{{$operator->created_at}}</td>
            <td>
              {!! Form::open( [
                 'method' => 'DELETE',
                 'route' => [ 'operators.destroy', $operator->id ] ]) !!}
              <a href="{{route('operators.show', $operator->id)}}" class="btn btn-xs btn-success">
                  <i class="fa fa-eye"></i>
              </a>
              <a href="{{route('operators.edit', $operator->id)}}" class="btn btn-xs btn-default">
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
  {{ $operators->render() }}
</div>
<div class="pull-right">
  <small>{{$operators->count() }} operator</small>
</div>
  </div>
</div>
  <!-- /.content -->
</div>


  @include('backpack::myincludes.footer')

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->

  @include('backpack::myincludes.footerscripts')
</body>
</html>
