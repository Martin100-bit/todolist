<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tasklist extends Component
{
    public $tasks;
    
    protected $listeners = [
        'taskDeleted' => 'refreshTasks',
        'taskAdded' => 'refreshTasks',
        'taskUpdated' => 'refreshTasks'
    ];        

    public function mount(){
        $this->tasks = \App\Models\Task::all();
    }
    
    public function tasks(){
        return \App\Models\Task::all();
    }

    public function render()
    {
        return view('livewire.tasklist');
    }

    public function refreshTasks(){
         $this->tasks = \App\Models\Task::all();
    }
}
