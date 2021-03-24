@extends('layouts.app')
    
@section('content')
    <div class="container">
      @livewire('add-task')
        
        <h2 class="mt-5"> MEET YOUR OBJECTIVES TODAY </h2>
        @livewire('tasklist')
    </div>
@endsection