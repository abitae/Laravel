<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Configuracion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
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
                <input wire:model="path_favicon" type="file" class="form-control" id="path_favicon">
                @error('path_favicon') 
                <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group">
                <label for="path_logo"></label>
                <input wire:model="path_logo" type="file" class="form-control" id="path_logo">
                @error('path_logo') 
                <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="description_logo"></label>
                <input wire:model="description_logo" type="text" class="form-control" id="description_logo" placeholder="Description Logo">@error('description_logo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>