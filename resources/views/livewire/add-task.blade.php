<div>
    <form wire:submit.prevent="save">
        <div class="form-group my-3">
            <p> </p>
            <p> </p>
            <h1> </h1>
            <input wire:model="name" type="text" class="form-control" name="todo" id="todo" aria-describedby= "todoHelpText" placeholder="Enter task here">
            <small id="todoHelpText" class="form-text text-muted"></small>
        </div>
    </form>
</div>