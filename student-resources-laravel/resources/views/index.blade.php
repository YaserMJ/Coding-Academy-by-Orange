@extends('layouts.app')
@section('title')
    Read topics
@endsection

@section('content')

<div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
    @endif
  </div>

<div class="row">
<div class="col-sm-12">
        <div>
            <a style="margin: 19px;" href="{{ route('topic.create')}}" class="btn btn-primary">New contact</a>
        </div>
    <h1 class="display-3">topics</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach($topics as $topic)
        <tr>
            <td>{{$topic->id}}</td>
            <td>{{$topic->name}} </td>
            <td>
                <a href="{{ route('topic.edit',$topic->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('topic.destroy', $topic->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
