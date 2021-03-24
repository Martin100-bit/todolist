<div>
    <ol class="list-group">
    @foreach($tasks as $task)
            @livewire('task', ['task' => $task], key($task->id))
    @endforeach
    </ol>
</div>
