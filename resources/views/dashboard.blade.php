@extends('layout.app')

@section('content')
    

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('dashboard')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('layout.header.nav')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >

    @include('layout.header.sidebar')
  </aside>
<div class="pt-5"></div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @include('layout.sections.info')
        


        <!-- Main row -->
        <div class="row">
        <!-- TABLE: LATEST TASKS -->
        @include('layout.sections.last_taskes')
          
        <!-- Projects Boxes -->
        @include('layout.sections.projects')

        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

 


  @endsection