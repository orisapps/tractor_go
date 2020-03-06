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
           Farmer
           <small>Add New Consultant</small>
         </h1>
         <ol class="breadcrumb">
           <li>
               <a href="{{ backpack_url('/dashboard') }}">{{ config('backpack.base.project_name') }} <i class="fa fa-dashboard"></i><strong> Dashboard</strong></a>
           </li>
           <li><a href="{{ route('farmers.index') }}"><strong>Farmers</strong></a></li>
           <li class="active"><strong>New Consultant</strong></li>
         </ol>
       </section>
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">


  <!-- Main content -->
<div class="box">
  <div class="box-header">
                      <div class="pull-left">
                          <a href="{{route('farmers.index')}}" class="btn-bold btn btn-success">Go Back</a>
                      </div>
                  </div>
  <div class="box-body">
<div class="wrappuserform">
  {!! Form::open( [
                     'method' => 'POST',
                     'route' => 'farmers.store',

                 ]) !!}




                 <div class="form-group {{ $errors->has('fullname') ? 'has-error' : '' }}">
                     {!! Form::label('Consultant Full Name ') !!}
                     {!! Form::text('fullname', null, ['class' => 'form-control']) !!}

                     @if($errors->has('fullname'))
                         <span class="help-block">{{ $errors->first('fullname') }}</span>
                     @endif
                 </div>
                 <div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
                     {!! Form::label('Phone Number') !!}
                     {!! Form::number('mobile', null, ['class' => 'form-control']) !!}

                     @if($errors->has('mobile'))
                         <span class="help-block">{{ $errors->first('mobile') }}</span>
                     @endif
                 </div>

                 <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                     {!! Form::label('Consultant Email') !!}
                     {!! Form::email('email', null, ['class' => 'form-control']) !!}

                     @if($errors->has('email'))
                         <span class="help-block">{{ $errors->first('email') }}</span>
                     @endif
                 </div>


                 <div class="form-group">
                   <label for="birthday" >Date Of Birth (Optional) </label>

                     <input id="birthday"  name="birthday" class="date-picker form-control" type="text">
                   </div>

                 <div class="form-group">
                   <label for="gender">Select Gender </label>

                     <p> Male:
                       <input type="radio" class="flat" name="gender" id="genderM" value="Male" checked="" required />
                       Female:
                       <input type="radio" class="flat" name="gender" id="genderF" value="Female" />
                     </p>

                 </div>


                   @include('backpack::myincludes.country')

                   <div class="form-group">
                     <label  for="state">Consultant State </label>

                       <input id="state" class="form-control"  name="state" required type="text" >

                   </div>

                   <div class="form-group">
                     <label  for="city">Consultant City</label>

                       <input id="city" class="form-control"  data-validate-words="2" name="city" required type="text">

                   </div>


                     <div class="form-group">
                       <label  for="address">Consultant Address </label>

                    <textarea id="address"  name="address" class="form-control"></textarea>

                     </div>

                     <div class="form-group">
                       <label for="refid">Referer ID <span class="required">*</span> </label>

                         <input type="text" id="referer" name="refid" readonly required class="form-control" value="{{ backpack_auth()->user()->username}}">
                       </div>

                 <div class="form-group {{ $errors->has('bank ') ? 'has-error' : '' }}">
                     {!! Form::label('Bank Name ') !!}
                     {!! Form::text('bank', null, ['class' => 'form-control']) !!}

                     @if($errors->has('bank'))
                         <span class="help-block">{{ $errors->first('bank ') }}</span>
                     @endif
                 </div>
                 <div class="form-group {{ $errors->has('bankname ') ? 'has-error' : '' }}">
                     {!! Form::label('Account Name ') !!}
                     {!! Form::text('bankname', null, ['class' => 'form-control']) !!}

                     @if($errors->has('bankname '))
                         <span class="help-block">{{ $errors->first('bankname ') }}</span>
                     @endif
                 </div>
                 <div class="form-group {{ $errors->has('banknumber') ? 'has-error' : '' }}">
                     {!! Form::label('Account Number') !!}
                     {!! Form::number('banknumber', null, ['class' => 'form-control']) !!}

                     @if($errors->has('banknumber'))
                         <span class="help-block">{{ $errors->first('banknumber') }}</span>
                     @endif
                 </div>





                 <hr>

                 {!! Form::submit('Create Consultant', ['class' => 'btn btn-primary']) !!}

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
