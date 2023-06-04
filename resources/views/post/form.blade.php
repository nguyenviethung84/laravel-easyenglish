<div class="box box-info padding-1">
    <div class="box-body">
        
        <!-- <div class="form-group">
            {{ Form::label('author_id') }}
            {{ Form::text('author_id', $post->author_id, ['class' => 'form-control' . ($errors->has('author_id') ? ' is-invalid' : ''), 'placeholder' => 'Author Id']) }}
            {!! $errors->first('author_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">
            {{ Form::label('category_id') }}
            {{ Form::text('category_id', $post->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $post->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('seo_title') }}
            {{ Form::text('seo_title', $post->seo_title, ['class' => 'form-control' . ($errors->has('seo_title') ? ' is-invalid' : ''), 'placeholder' => 'Seo Title']) }}
            {!! $errors->first('seo_title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('excerpt') }}
            {{ Form::text('excerpt', $post->excerpt, ['class' => 'form-control' . ($errors->has('excerpt') ? ' is-invalid' : ''), 'placeholder' => 'Excerpt']) }}
            {!! $errors->first('excerpt', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('body') }}
            {{ Form::text('body', $post->body, ['class' => 'form-control' . ($errors->has('body') ? ' is-invalid' : ''), 'placeholder' => 'Body']) }}
            {!! $errors->first('body', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('image') }}
            {{ Form::file('image')}}
            <!-- {{ Form::text('image', $post->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }} -->
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('slug') }}
            {{ Form::text('slug', $post->slug, ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Slug']) }}
            {!! $errors->first('slug', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('meta_description') }}
            {{ Form::text('meta_description', $post->meta_description, ['class' => 'form-control' . ($errors->has('meta_description') ? ' is-invalid' : ''), 'placeholder' => 'Meta Description']) }}
            {!! $errors->first('meta_description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('meta_keywords') }}
            {{ Form::text('meta_keywords', $post->meta_keywords, ['class' => 'form-control' . ($errors->has('meta_keywords') ? ' is-invalid' : ''), 'placeholder' => 'Meta Keywords']) }}
            {!! $errors->first('meta_keywords', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $post->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('post_type') }}
            {{ Form::text('post_type', $post->status, ['class' => 'form-control' . ($errors->has('post_type') ? ' is-invalid' : ''), 'placeholder' => 'Post Type']) }}
            {!! $errors->first('post_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('post_type') }}
            {{ Form::text('post_type', $post->post_type, ['class' => 'form-control' . ($errors->has('post_type') ? ' is-invalid' : ''), 'placeholder' => 'Post Type']) }}
            {!! $errors->first('post_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>