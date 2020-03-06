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
           <small>Add new agent</small>
         </h1>
         <ol class="breadcrumb">
           <li>
               <a href="{{ backpack_url('/dashboard') }}">{{ config('backpack.base.project_name') }} <i class="fa fa-dashboard"></i><strong> Dashboard</strong></a>
           </li>
           <li><a href="{{ route('agents.index') }}"><strong>Agents</strong></a></li>
           <li class="active"><strong>New Agent</strong></li>
         </ol>
       </section>
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">


  <!-- Main content -->
<div class="box">
  <div class="box-header">
        <div class="pull-left">
            <a href="{{route('agents.index')}}" class="btn-bold btn btn-success">Go Back</a>
        </div>
    </div>
<div class="box-body" style="margin:auto;">
<div class="col-md-4 p-t-10" >
{!! Form::open( [
         'method' => 'POST',
         'route' => 'agents.store',
         'files'  => TRUE,
     ]) !!}



<div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
{!! Form::label('First Name: ') !!}
{!! Form::text('firstname', null, ['class' => 'form-control']) !!}

@if($errors->has('firstname'))
<span class="help-block">{{ $errors->first('firstname') }}</span>
@endif
</div>

<div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
{!! Form::label('Last Name: ') !!}
{!! Form::text('lastname', null, ['class' => 'form-control']) !!}

@if($errors->has('lastname'))
<span class="help-block">{{ $errors->first('lastname') }}</span>
@endif
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('Email Address:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}

    @if($errors->has('email'))
        <span class="help-block">{{ $errors->first('email') }}</span>
    @endif
</div>


<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
 {!! Form::label('Phone Number: ') !!}
 {!! Form::number('phone', null, ['class' => 'form-control']) !!}

 @if($errors->has('phone'))
     <span class="help-block">{{ $errors->first('phone') }}</span>
 @endif
</div>

<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
    {!! Form::label('Agent Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}

    @if($errors->has('address'))
        <span class="help-block">{{ $errors->first('address') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    {!! Form::label('Agent Password:') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}

    @if($errors->has('password'))
        <span class="help-block">{{ $errors->first('password') }}</span>
    @endif
</div>

<div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
    {!! Form::label(' Agent Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}

    @if($errors->has('location'))
        <span class="help-block">{{ $errors->first('location') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
   {!! Form::label('image', 'Agent Photo') !!}
   {!! Form::file('image') !!}

   @if($errors->has('image'))
       <span class="help-block">{{ $errors->first('image') }}</span>
   @endif
</div>






                   <hr>

                   {!! Form::submit('Submit Now !', ['class' => 'btn btn-primary']) !!}

                   {!! Form::close() !!}
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
