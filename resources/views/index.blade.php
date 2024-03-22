@extends('layout.app')

@section('title', 'The list of tasks!')


@section('content')
<div>
  <!-- @if(count($tasks))
    @foreach($tasks as $task)
      <div>{{$task->title}}</div>
    @endforeach
  @else
    <div>There are no tasks!</div>
  @endif -->

  <nav class="mb-5">
    <a href="{{route('tasks.create')}}" class="link">Add Task!</a>
  </nav>

  @forelse($tasks as $task)
    <div>
      <a href="{{route('tasks.show', ['task'=> $task->id])}}"
      @class(['line-through' => $task->completed])
      >
        {{$task->title}}
      </a>
  </div>
  @empty
    <div>There are no tasks!</div>
  @endforelse


  @if($tasks->count())
    <nav class="mt-4">
      {{$tasks->links()}}
    </nav>
  @endif
</div>

@endsection
