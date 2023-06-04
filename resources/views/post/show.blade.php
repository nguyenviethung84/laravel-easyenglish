@extends('voyager::master')

@section('template_title')
    {{ $post->name ?? "{{ __('Show') Post" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Post</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('posts.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <!-- <div class="form-group">
                            <strong>Author Id:</strong>
                            {{ $post->author_id }}
                        </div> -->
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $post->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $post->title }}
                        </div>
                        <div class="form-group">
                            <strong>Seo Title:</strong>
                            {{ $post->seo_title }}
                        </div>
                        <div class="form-group">
                            <strong>Excerpt:</strong>
                            {{ $post->excerpt }}
                        </div>
                        <div class="form-group">
                            <strong>Body:</strong>
                            {{ $post->body }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ Html::image('storage/'.$post->image, 'alt text', array('class' => 'css-class', 'style' => 'width:200px;')) }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $post->slug }}
                        </div>
                        <div class="form-group">
                            <strong>Meta Description:</strong>
                            {{ $post->meta_description }}
                        </div>
                        <div class="form-group">
                            <strong>Meta Keywords:</strong>
                            {{ $post->meta_keywords }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $post->status }}
                        </div>
                        <!-- <div class="form-group">
                            <strong>Featured:</strong>
                            {{ $post->featured }}
                        </div> -->
                        <div class="form-group">
                            <strong>Post Type:</strong>
                            {{ $post->post_type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
