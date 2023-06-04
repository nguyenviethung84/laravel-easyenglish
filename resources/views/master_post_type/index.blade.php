@extends('voyager::master')
@section('page_title', 'Master Post Type')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ 'voyager-person' }}"></i>
        {{ 'Master Post Type' }}
    </h1>
    <a href="{{ route('master-post-type.create') }}" class="btn btn-success btn-add-new">
        <i class="voyager-plus"></i> <span>Add New</span>
    </a>
@stop

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        
    <div class="page-content browse container-fluid">
        <table class="table table-bordered">
            <tr>
                <th>STT</th>
                <th>Mã</th>
                <th>Tên</th>
                <th></th>
            </tr>
            @foreach ($masterPostTypes as $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->MaNV }}</td>
                    <td>{{ $user->TenNV }}</td>
                    <td>
                        <form action="{{ route('master-post-type.destroy', $user->id) }}" method="POST">                        
                            <a class="btn btn-primary" href="{{ route('master-post-type.edit', $user->id) }}">Sửa</a>
    
                            @csrf
                            @method('DELETE')
    
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $masterPostTypes->links() !!}
    </div>
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();
        });
    </script>
@stop