@extends('layouts.app')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Task</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($tasks as $index=>$task)
      <tr>
        <td>{{$index+1}}</td>
        <td>{{$task->task}}</td>
        <td>
            <form action="{{route('tasks.destroy',$task->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete Task" class="btn btn-danger">
            </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  @endsection
