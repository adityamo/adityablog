@extends('admin.layout.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('main-content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Text Editors
      <small>Advanced form element</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Titles</h3>
          </div>
          @include('includes.message')
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('tag.store')}}" method="post">
          {{ csrf_field() }}
          <div class="box-body">
          <div class="col-lg-offset-3 col-lg-6">
            <div class="form-group">
              <label for="name" class="">Tag Title</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Tag title">
            </div>

            <div class="form-group">
              <label for="slug" class="">Tag Slug</label>
              <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
            </div>

            <div class="form-group">
              <a href="{{ route('tag.index')}}" class="btn btn-warning">Back</a>
              <button type="submit" class="btn btn-primary">Submit</button>
              
            </div>

          </div>
          </div>
          
          </form>
               

             
           
          </form>
        </div>
        <!-- /.box -->

        
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->    

@endsection