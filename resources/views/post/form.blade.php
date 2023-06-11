<script src="{{ asset('js/app.js') }}"></script>

<div class="box box-info padding-1">
    <div class="box-body">
        
        {{-- <div class="form-group">
            {{ Form::label('author_id') }}
            {{ Form::text('author_id', $post->author_id, ['class' => 'form-control' . ($errors->has('author_id') ? ' is-invalid' : ''), 'placeholder' => 'Author Id']) }}
            {!! $errors->first('author_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        {{-- <div class="form-group">
            {{ Form::label('category_id') }}
            {{ Form::text('category_id', $post->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $post->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('category_id') }}
            <select class="form-control" id="category_id" name="category_id">
                @foreach($categories AS $category)
                <option value="{{ $category->id }}" @if ($category->id == $post->category_id) selected="selected"@endif>{{ $category->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('seo_title') }}
            {{ Form::text('seo_title', $post->seo_title, ['class' => 'form-control' . ($errors->has('seo_title') ? ' is-invalid' : ''), 'placeholder' => 'Seo Title']) }}
            {!! $errors->first('seo_title', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        {{-- <div class="form-group">
            {{ Form::label('excerpt') }}
            {{ Form::text('excerpt', $post->excerpt, ['class' => 'form-control' . ($errors->has('excerpt') ? ' is-invalid' : ''), 'placeholder' => 'Excerpt']) }}
            {!! $errors->first('excerpt', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        {{-- <div class="form-group">
            {{ Form::label('body') }}
            {{ Form::text('body', $post->body, ['class' => 'form-control' . ($errors->has('body') ? ' is-invalid' : ''), 'placeholder' => 'Body']) }}
            {!! $errors->first('body', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}

        <div class="form-group">
            {{ Form::label('body') }}
            <!-- {{ Form::textarea('body', $post->body, ['class' => 'form-control' . ($errors->has('body') ? ' is-invalid' : ''), 'placeholder' => 'Body', 'rows' => 10, 'cols' => 50]) }} -->
            <textarea class="form-control richTextBox" name="body" id="body">
                {{ $post->body }}
            </textarea>
            
            {!! $errors->first('body', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

        <div class="form-group">
            {{ Form::label('image') }}
            @if(isset($post->image) && $post->image)
                {{ Html::image('storage/'.$post->image, 'alt text', array('id' => 'preview', 'class' => 'css-class', 'style' => 'width:200px;')) }}
            @else
                <img id="preview" src="#" alt="your image" class="mt-3" style="display:none;width:200px;"/>
            @endif

            {{ Form::file('image')}}
            <!-- {{ Form::text('image', $post->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }} -->
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('slug') }}
            {{ Form::text('slug', $post->slug, ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Slug']) }}
            {!! $errors->first('slug', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        {{-- <div class="form-group">
            {{ Form::label('meta_description') }}
            {{ Form::text('meta_description', $post->meta_description, ['class' => 'form-control' . ($errors->has('meta_description') ? ' is-invalid' : ''), 'placeholder' => 'Meta Description']) }}
            {!! $errors->first('meta_description', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        {{-- <div class="form-group">
            {{ Form::label('meta_keywords') }}
            {{ Form::text('meta_keywords', $post->meta_keywords, ['class' => 'form-control' . ($errors->has('meta_keywords') ? ' is-invalid' : ''), 'placeholder' => 'Meta Keywords']) }}
            {!! $errors->first('meta_keywords', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('post_type') }}
            <!-- {{ Form::text('post_type', $post->post_type, ['class' => 'form-control' . ($errors->has('post_type') ? ' is-invalid' : ''), 'placeholder' => 'Post Type']) }} -->
            <select class="form-control" id="post_type" name="post_type">
                @foreach($postTypes AS $postType)
                <option value="{{ $postType }}" @if ($postType == $post->post_type) selected="selected"@endif>{{ $postType }}</option>
                @endforeach
            </select>
            {!! $errors->first('post_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            <!-- {{ Form::text('status', $post->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }} -->
            <select class="form-control" id="status" name="status">
                @foreach($statuss AS $status)
                <option value="{{ $status }}" @if ($status == $post->status) selected="selected"@endif>{{ $status }}</option>
                @endforeach
            </select>
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>


<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>


@push('javascript')
    <script>
        $(document).ready(function() {
            var additionalConfig = {
                selector: 'textarea.richTextBox[name="body"]',
            }
            $.extend(additionalConfig, {!! json_encode($options->tinymceOptions ?? '{}') !!})
            tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));

            image.onchange = evt => {
                preview = document.getElementById('preview');
                preview.style.display = 'block';
                const [file] = image.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        });
    </script>
@endpush