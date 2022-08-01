<div>
  @if(Auth::user())
  @if(auth()->user()->name=='admin')
  <form action="{{route('post.create')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title: </label>  
        <input type="text" name="title" class="form-control" id="title" placeholder="Title">
    </div> 
    <div class="form-group">
        <label for="title">banner_filename: </label>  
        <input type="text" name="banner_filename" class="form-control" id="title" placeholder="Title">
    </div> 
    <div class="form-group">
        <label for="title">Genres: </label>  
        <input type="text" name="genre" class="form-control" id="title" placeholder="Title">
    </div>  
    <div class="form-group">
        <label for="title">author_id: </label>  
        <input type="text" name="author_id" class="form-control" id="title" placeholder="Title">
    </div>  
    <div class="form-group">
        <label for="title">Actors: </label>  
        <input type="text" name="actors" class="form-control" id="title" placeholder="Title">
    </div>  
    <div class="form-group">
        <label for="title">Description: </label>  
        <input type="text" name="description" class="form-control" id="title" placeholder="Title">
    </div> 
    <div class="form-group">
        <label for="title">rating: </label>  
        <input type="text" name="rating" class="form-control" id="title" placeholder="Title">
    </div> 
    <button type="submit" class="btn btn-primary">Create</button>
  </form>

    @if ( session()->has('status') )
        <div class="text-green-400">{{ session() -> get('status') }}</div>
    @endif

    <form action="{{ route('image.upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="image">
        </div>
        <button  class="btn btn-default" type="submit">Save image</button>
    </form>

    

    @isset ($path)
        <img class="img-fluid" src="{{ asset('/storage/' . $path) }}">
    @endisset

  @endif
  @endif
</div>

