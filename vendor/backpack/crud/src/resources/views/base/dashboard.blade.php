

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
        TractorOnTheGo
        <small>Control panel</small>
      </h1>

      <ol class="breadcrumb">
        <li>
            <a href="{{ backpack_url('/dashboard') }}"> {{ config('backpack.base.project_name') }} <i class="fa fa-dashboard"></i><strong> Dashboard</strong></a>
        </li>

      </ol>



    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

    <!-- Main content -->
  @include('backpack::pages.maincontent')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('backpack::myincludes.footer')

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->

  @include('backpack::myincludes.footerscripts')
</body>
</html>
