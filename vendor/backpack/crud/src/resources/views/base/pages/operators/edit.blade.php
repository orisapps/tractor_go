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
           Properties
           <small>Edit Property</small>
         </h1>
         <ol class="breadcrumb">
           <li>
               <a href="{{ backpack_url('/dashboard') }}">{{ config('backpack.base.project_name') }} <i class="fa fa-dashboard"></i><strong> Dashboard</strong></a>
           </li>
           <li><a href="{{ route('properties.index') }}"><strong>Properties</strong></a></li>
           <li class="active"><strong>Edit Property</strong></li>
         </ol>
       </section>
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">


  <!-- Main content -->
<div class="box">
  <div class="box-header">
                      <div class="pull-left">
                          <a href="{{route('properties.index')}}" class="btn btn-success">Go Back</a>
                      </div>
                  </div>
  <div class="box-body adminedit">

    {!! Form::open( [
                       'method' => 'PUT',
                       'route' => ['properties.update', $propers->id],
                       'files'  => TRUE
                   ]) !!}
                    <div class="imageedit">
                   <img alt="" src="{{asset('uploads')}}/{{$propers->image}}">
                    </div>

                   <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                       {!! Form::label('property name ') !!}
                       {!! Form::text('name', null, ['class' => 'form-control']) !!}

                       @if($errors->has('name'))
                           <span class="help-block">{{ $errors->first('name') }}</span>
                       @endif
                   </div>
                   <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                       {!! Form::label('property location') !!}
                       {!! Form::text('location', null, ['class' => 'form-control']) !!}

                       @if($errors->has('location'))
                           <span class="help-block">{{ $errors->first('location') }}</span>
                       @endif
                   </div>

                   <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                       {!! Form::label('state') !!}
                       {!! Form::text('state', null, ['class' => 'form-control']) !!}

                       @if($errors->has('state'))
                           <span class="help-block">{{ $errors->first('state') }}</span>
                       @endif
                   </div>
                   <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                       {!! Form::label('price') !!}
                       {!! Form::number('price', null, ['class' => 'form-control']) !!}

                       @if($errors->has('price'))
                           <span class="help-block">{{ $errors->first('price') }}</span>
                       @endif
                   </div>
                   <div class="form-group">
                       {!! Form::label('description') !!}
                       {!! Form::textarea('description', null, ['class' => 'form-control textarea']) !!}
                   </div>


                   <div class="form-group">
                       {!! Form::label('document') !!}
                       {!! Form::textarea('document', null, ['class' => 'textarea form-control ']) !!}
                   </div>




                   <hr>

                   {!! Form::submit('Save Property Now !', ['class' => 'btn btn-primary']) !!}

                   {!! Form::close() !!}
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
