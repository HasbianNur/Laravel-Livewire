<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Judul:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="title" autocomplete="off">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Isi:</label>
        <textarea type="email" class="form-control" id="exampleFormControlInput2" wire:model="body"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success"><i class="bi bi-send-fill"></i> Submit</button>
</form>
