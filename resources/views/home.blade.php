@extends('layouts.app')

@section('windows')
    @include('window.create')
    <div>
    @foreach($windows as $window)
      <div>
        <a href="{{ route('post.show', $window->id ) }}">
            {{$window}}     
        </a>  
     </div>
    @endforeach
</div>
@endsection

