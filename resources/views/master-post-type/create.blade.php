@extends('voyager::master')

@section('template_title')
    {{ __('Create') }} Master Post Type
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Master Post Type</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('master-post-type.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('master-post-type.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
