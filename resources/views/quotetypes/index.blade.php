@extends('layouts.app')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
                  <div class="col-md-4">
        <div class="form-group">
          <h1 class="m-0 text-danger mt-3">Quote Types</h1>
        </div>
        </div><!-- /.col -->
                  <div class="col-md-8">
          <ol class="breadcrumb float-sm-right">
            <li class="">
                  <a class="btn btn-app text-success" id="" href="{{ route('quotetypes.create') }}">
                      <i class="fas  fa-plus-square"></i>  New
                  </a>
              </li><li class="">
                  <a class="btn btn-app text-danger" id="multi_delete" href="javascript:void(0)">
                      <i class="fas fa-trash"></i>  Delete
                  </a>
              </li>             </ol>
        </div><!-- /.col -->
        
      </div><!-- /.row -->
      <div class="row">
        <div class="col-sm-12"> </div><!-- /.col-sm-12 -->
      </div><!-- /.row -->
      
    </div><!-- /.container-fluid -->
  </div>

  <!-- Main content -->
  <section class="content">
<!-- Default box -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Advanced Search</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
        <form action="#">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <label>Quote Type Name</label>
                                <input type="text" class="form-control" placeholder="Type your keywords here" value="">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label> Status </label>
                                <select class="select2" style="width: 100%;">
                                    <option selected>Published</option>
                                    <option>Un-published</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label> SEARCH </label>
                                <button type="submit" name="btn_search" class="btn_search btn btn-block btn-primary btn-flat"><i class="fas  fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
  <!-- /.card -->
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">quote Type Infomation</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                       Quote Type
                    </th>
                    
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br/>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->

@endsection

