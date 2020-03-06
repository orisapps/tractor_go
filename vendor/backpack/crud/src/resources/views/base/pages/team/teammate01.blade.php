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
      1st Generation Team mates
      <small>{{ config('backpack.base.project_name') }}</small>
    </h1>
    <ol class="breadcrumb">
      <li>
          <a href="{{ url('/admin/dashboard') }}">{{ config('backpack.base.project_name') }} <i class="fa fa-dashboard"></i><strong> Dashboard</strong></a>
      </li>
      <li class="active"><a href="{{ backpack_url('/generation1') }}"><strong>1st Generation</strong></a></li>

    </ol>



  </section>
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">


  <!-- Main content -->
<div class="box">

  <div class="box-header">
    <div class="pull-left">
        <a href="{{ url('/admin/dashboard') }}" class="btn-bold btn btn-success">Go Back</a>
    </div>
                  </div>
  <div class="box-body ">

    <table class="table table-striped jambo_table bulk_action">

      <thead>
 <tr class="headings">
   <th>
     <input type="checkbox" id="check-all" class="flat">
   </th>
   <th class="column-title">Date of Reg </th>
   <th class="column-title">Full Name</th>
   <th class="column-title">Gender </th>
   <th class="column-title">Mobile No </th>
   <th class="column-title">Country </th>
   <th class="column-title">Points </th>
   <th class="column-title">CID </th>
   <th class="column-title">Status </th>
   <th class="column-title no-link last"><span class="nobr">Referral CID 1st Generation to 5th Generations</span>
   </th>

 </tr>
 </thead>


 <tbody>
   @include('backpack::pages.team.teammaterecord')
 </tbody>


    </table>

  </div>
  <div class="box-footer clearfix">
    <div class="pull-left">
    <ul class="pagination no margin">

      <li><a href="#">&laquo;</a></li>

      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>

      <li><a href="#">&raquo;</a></li>
    </ul>
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
