@extends('layouts.app')

@section('content')
    <h1>Create post</h1>
    <form method="POST" action="{{url('/store-form')}}">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Enter Title">
        </div>
        <div class="form-group">
          <label for="body">Body Text</label>
          <textarea class="form-control ckeditor" id="body" name="body" placeholder="Body"> </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

@endsection
