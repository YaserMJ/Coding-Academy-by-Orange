@extends('layouts.app')
@section('content')

<form action="{{route('tasks.store') }}" method="POST">
    {{csrf_field()}}

    <div class="form-group">
      <label for="task">Task title:</label>
      <input name="task" type="text" class="form-control" id="task"  placeholder="Buy coffee">
    </div>
    <button type="submit" class="btn btn-primary">Add Task</button>
  </form>
  @endsection
