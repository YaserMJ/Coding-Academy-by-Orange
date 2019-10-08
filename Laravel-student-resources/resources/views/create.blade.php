@extends('layouts.app')

@section('title')
    Add topic
@endsection

@section('content')
<div class="container">
<form action="{{ route('topic.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Topic title</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="OOP classes..">
    </div>
    <div class="form-group">
      <label for="description">Description & Links</label>
      <textarea type="text" class="form-control" rows="10" name="description" placeholder="links go here..."></textarea>
    </div>

    <button type="submit" class="btn btn-success">Submit</button> <button type="reset" class="btn btn-danger">reset</button>

</div>
  </form>@endsection
