@extends('layouts.master')



@section('content')


<div class="col-6 offset-sm-3">
    <h2 class="text-center">Create a Post</h2>
    <form method="post" action="{{route('posts.store')}}">
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input name="title" type="email" class="form-control" id="title" aria-describedby="emailHelp">
          
        </div>
      
        <div class="mb-3">
            <label for="body " class="form-label">Body </label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10">


                
            </textarea>
          
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>




</div>






@endsection