<div>
    <form wire:submit="addLocation">
        <div class="form-group">
            <label for="name"></label>
            <input wire:model="name" name="name" id="name" type="text" class="form-group-input" placeholder="Insert your location..."/>
            <button class="form-group-btn">Add</button>
        </div>
    </form>
    @if (session()->has('message'))
        <div class="toast toast--success m-0 u-absolute u-left-0 u-right-0 u-bottom-0">
            <p>{{ session('message') }}</p>
        </div>
    @endif
</div>



