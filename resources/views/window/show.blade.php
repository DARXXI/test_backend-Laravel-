@extends('layouts.app')

@section('windows')
    <div>
        <div>  {{$window}}</div>
    </div>

    <div tyle="color: green">
        <a href="{{ route('post.edit', $window->id) }}">Edit</a>
    </div> 

    <form action="{{ route('post.delete', $window->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="button">
    </form>

    <div style="color: green"> 
        <a href="{{ route('post.index') }}">Back</a>
    </div>
@endsection