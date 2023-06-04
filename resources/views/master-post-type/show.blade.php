@extends('voyager::master')

@section('template_title')
    {{ $masterPostType->name ?? "{{ __('Show') Master Post Type" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Master Post Type</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('master-post-type.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Code:</strong>
                            {{ $masterPostType->Code }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $masterPostType->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $masterPostType->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $masterPostType->Status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
