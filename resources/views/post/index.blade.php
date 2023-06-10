@extends('voyager::master')

@section('template_title')
    Post
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Post') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<!-- <th>Author Id</th> -->
										<th>Title</th>
										<th>Category</th>
										<th>Seo Title</th>
										<th>Image</th>
										<th>Slug</th>
										<th>Meta Description</th>
										<th>Meta Keywords</th>
										<th>Status</th>
										<!-- <th>Featured</th> -->
										<th>Post Type</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<!-- <td>{{ $post->author_id }}</td> -->
											<td>{{ $post->title }}</td>
											<td>{{ $post->category->name }}</td>
											<td>{{ $post->seo_title }}</td>
											<!-- <td>{{ $post->excerpt }}</td> -->
											<!-- <td>{{ $post->body }}</td> -->
											<td>{{ Html::image('storage/'.$post->image, 'alt text', array('class' => 'css-class', 'style' => 'width:100px;')) }}</td>
											<td>{{ $post->slug }}</td>
											<td>{{ $post->meta_description }}</td>
											<td>{{ $post->meta_keywords }}</td>
											<td>{{ $post->status }}</td>
											<!-- <td>{{ $post->featured }}</td> -->
											<td>{{ $post->post_type }}</td>

                                            <td>
                                                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('posts.show',$post->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('posts.edit',$post->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection
