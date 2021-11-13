<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Config</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="titulo"></label>
                <input wire:model="titulo" type="text" class="form-control" id="titulo" placeholder="Titulo">@error('titulo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tema"></label>
                <input wire:model="tema" type="text" class="form-control" id="tema" placeholder="Tema">@error('tema') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="empresa"></label>
                <input wire:model="empresa" type="text" class="form-control" id="empresa" placeholder="Empresa">@error('empresa') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="autor"></label>
                <input wire:model="autor" type="text" class="form-control" id="autor" placeholder="Autor">@error('autor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="path_favicon"></label>
                <input wire:model="path_favicon" type="text" class="form-control" id="path_favicon" placeholder="Path Favicon">@error('path_favicon') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="path_logo"></label>
                <input wire:model="path_logo" type="text" class="form-control" id="path_logo" placeholder="Path Logo">@error('path_logo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description_logo"></label>
                <input wire:model="description_logo" type="text" class="form-control" id="description_logo" placeholder="Description Logo">@error('description_logo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>