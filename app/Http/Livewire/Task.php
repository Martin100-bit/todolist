<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Task extends Component
{
    public $task;
    public $isDone;
    public $name;

    public function mount(\App\Models\Task $task)
    {
        $this->task = $task;
        $this->isDone = $this->task->is_done;
        $this->name = $this->name;
    }

    public function render()
    {
        return view('livewire.task');
    }

    public function toggle()
    {
        $this->isDone = !$this->isDone;
        $this->task->is_done = $this->isDone;
        $this->task->save();
    }

    public function delete(){
        $this->task->delete();
        $this->emit('taskDeleted');
    }

    public function edit(){
    }
}
