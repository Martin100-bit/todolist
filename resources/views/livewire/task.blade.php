<div>
    <li class="list-group-item d-flex py-2">
    
        <div class="form-check">
            <label class="form-check-label" @if($isDone) style="text-decoration:line-through;" @endif for="taskCheck{{$task->id}}">    
            <input wire:click="toggle" @if($isDone) checked @endif type="checkbox" class="form-check-input" id="taskCheck{{$task->id}}"/> {{ $task->name }} </label>
        </div>

            <div class="container btn-inline btn-group btn-group-sm float-right" role="group" aria-label="Basic example">
                  
                <button wire:click="edit" class="btn btn-primary btn-sm d-flex">
                <i class="icon-remove-sign"></i> Edit
                </button>
            
                <button wire:click="delete" type="button" class="btn btn-info btn-sm btn-block py-0 d-flex">
                    <i class="icon-remove-sign"></i> Delete
                </button>
            </div>
    </li>
</div>