<script src="{{ asset('js/app.js') }}"></script>

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
        <!-- <div class="form-group">
            {{ Form::label('body') }}
            {{ Form::text('body', $post->body, ['class' => 'form-control' . ($errors->has('body') ? ' is-invalid' : ''), 'placeholder' => 'Body']) }}
            {!! $errors->first('body', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->

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


<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>


@push('javascript')
    <script>
        $(document).ready(function() {
            // var route_prefix = "http://localhost/laravel-filemanager/";
            // $('#lfm').filemanager('image', {prefix: route_prefix});
            // var editor_config = {
            //     path_absolute : "/",
            //     selector: 'textarea.richTextBox[name="abc"]',
            //     height:350,
            //     relative_urls: false,
            //     plugins: [
            //     "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            //     "searchreplace wordcount visualblocks visualchars code fullscreen",
            //     "insertdatetime media nonbreaking save table directionality",
            //     "emoticons template paste textpattern"
            //     ],
            //     toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            //     file_picker_callback : function(callback, value, meta) {
            //     var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            //     var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            //     var cmsURL = editor_config.path_absolute + 'TinyMCE5/laravel-filemanager?editor=' + meta.fieldname;
            //     if (meta.filetype == 'image') {
            //         cmsURL = cmsURL + "&type=Images";
            //     } else {
            //         cmsURL = cmsURL + "&type=Files";
            //     }

            //     tinyMCE.activeEditor.windowManager.openUrl({
            //         url : cmsURL,
            //         title : 'Filemanager',
            //         width : x * 0.8,
            //         height : y * 0.8,
            //         resizable : "yes",
            //         close_previous : "no",
            //         onMessage: (api, message) => {
            //         callback(message.content);
            //         }
            //     });
            //     }
            // };
            // tinymce.init(window.voyagerTinyMCE.getConfig(editor_config));

            var additionalConfig = {
                selector: 'textarea.richTextBox[name="body"]',
            }
            $.extend(additionalConfig, {!! json_encode($options->tinymceOptions ?? '{}') !!})
            tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));
        });
    </script>
@endpush