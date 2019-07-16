@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('info'))
                <p class="alert alert-info">{{session('info')}}</p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            @foreach($posts as $post)
                <p>
                    <strong>{{$post->title}}</strong>
                    <a href="{{ route('admin.edit', ['id' => $post->id]) }}">Edit</a>
                    <a href="{{ route('admin.delete', ['id' => $post->id]) }}">Delete</a>
                </p>
            @endforeach
        </div>
    </div>
@endsection