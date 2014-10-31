@extends('layouts.default')
@section('content')
  <h1>
    {{{ $task->title }}}
  </h1>

  {{{ $task->description }}}
@stop