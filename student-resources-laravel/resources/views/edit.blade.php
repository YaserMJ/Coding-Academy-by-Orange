@extends('layouts.master')

@section('title')
    Update a topic
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a topic</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('topic.update', $topic->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="name">First Name:</label>
                <input type="text" class="form-control" name="name" value={{ $topic->name }} />
            </div>

            <div class="form-group">
                <label for="description">description:</label>
                <input type="text" class="form-control" name="description" value={{ $topic->description }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
