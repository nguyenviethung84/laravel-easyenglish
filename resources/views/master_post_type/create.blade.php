@extends('voyager::master')
@section('page_title', 'Master Post Type')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ 'voyager-person' }}"></i>
        {{ 'Create Master Post Type' }}
    </h1>
    <a href="{{ route('master-post-type.index') }}" class="btn btn-warning btn-add-new">
        <i class="fa fa-arrow-left"></i> <span>Back</span>
    </a>
@stop

@section('content')
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form" action="{{ route('master-post-type.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">           
            @csrf

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-bordered">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="panel-body">
                            <div class="form-group">
                                <label for="code">Mã Nhân Viên <span class="text-red">*</span></label>
                                <input type="text" class="form-control" id="code" name="code" placeholder="Mã Nhân Viên" value="">
                            </div>

                            <div class="form-group">
                                <label for="name">Tên Nhân Viên <span class="text-red">*</span></label>
                                <input type="name" class="form-control" id="name" name="name" placeholder="Tên Nhân Viên" value="">
                            </div>                                                                                                            
                        </div>
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>           
        </form>
    </div>
@stop

@section('javascript')
    <script>
        console.log('log here !!!!');
    </script>
@stop