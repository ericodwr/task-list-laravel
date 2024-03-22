@extends('layout.app')

@section('title', $task->title)


@section('content')
  <div class="mb-4">
    <a href="{{route('tasks.index')}}" class="link">Go back to Task List!</a>
  </div>

 <p class="mb-4 text-slate-900">Description: {{$task->title}}</p>

@if($task->long_description)
  <p class="mb-4 text-slate-900">{{$task->long_description}}</p>
@endif

<p class="mb-4 text-sm text-slate-700">Created {{$task->created_at->diffForHumans()}} - Updated {{$task->updated_at->diffForHumans()}}</p>


<p class="mb-4">
@if($task->completed)
<span class='font-medium text-green-600'>
Task Completed
</span>
@else
<span class='font-medium text-red-600'>
Task not Completed
</span>
@endif
</p>
<div class="flex gap-12">
  <a href="{{route('tasks.edit', ['task' => $task])}}" class="btn">Edit</a>
  <form method="POST" action="{{route('tasks.toggle-complete', ['task' => $task])}}">
    @csrf
    @method('PUT')
    <button type="submit" class="btn">{{$task->completed ? 'Undo Completed' : 'Completed'}}</button>
  </form>
  
  <form method="post" action="{{route('tasks.destroy', ['task' => $task->id])}}">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn">Delete</button>
  </form>
</div>

@endsection