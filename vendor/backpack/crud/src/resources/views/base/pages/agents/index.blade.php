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
      AGENTS
      <small>{{ config('backpack.base.project_name') }}</small>
    </h1>
    <ol class="breadcrumb">
      <li>
          <a href="{{ url('/admin/dashboard') }}">{{ config('backpack.base.project_name') }} <i class="fa fa-dashboard"></i><strong> Dashboard</strong></a>
      </li>
      <li class="active"><a href="{{ route('agents.index') }}"><strong>Agents</strong></a></li>

    </ol>


  </section>
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">


  <!-- Main content -->
<div class="box">
  <div class="box-header">
                      <div class="pull-left">
                          <a href="{{route('agents.create')}}" class="btn-bold btn btn-success">Add New Agent</a>
                      </div>
                  </div>
  <div class="box-body adminpro">
@include('backpack::myincludes.messages')

  <table class="table table-striped jambo_table bulk_action">

      <thead>

          <tr>
            <th>Photo</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Location</th>
            <th>Agent Code</th>
            <th>Created At</th>
            <th width="100">Action</th>
          </tr>
      </thead>

      <tbody>
        @foreach ($agents as $agent)
          <tr>

            <td><img alt="" src="{{asset('uploads')}}/{{$agent->image}}" height="60" width="60"></td>
            <td>{{$agent->firstname}} {{$agent->lastname}}</td>
            <td>{{$agent->email}}</td>
            <td>{{$agent->mobile}}</td>
            <td>{{$agent->address}}</td>
            <td>{{$agent->location}}</td>
            <td>{{$agent->agent_code}}</td>
            <td>{{$agent->created_at}}</td>
            <td>
              {!! Form::open( [
                 'method' => 'DELETE',
                 'route' => [ 'agents.destroy', $agent->id ] ]) !!}
              <a href="{{route('agents.show', $agent->id)}}" class="btn btn-xs btn-success">
                  <i class="fa fa-eye"></i>
              </a>
              <a href="{{route('agents.edit', $agent->id)}}" class="btn btn-xs btn-default">
                  <i class="fa fa-edit"></i>
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
  {{ $agents->render() }}
</div>
<div class="pull-right">
  <small>{{$agents->count() }} Agents</small>
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
