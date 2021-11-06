<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="plantilla"></label>
                <input wire:model="plantilla" type="text" class="form-control" id="plantilla" placeholder="Plantilla">@error('plantilla') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="path_image1"></label>
                <input wire:model="path_image1" type="text" class="form-control" id="path_image1" placeholder="Path Image1">@error('path_image1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="path_image2"></label>
                <input wire:model="path_image2" type="text" class="form-control" id="path_image2" placeholder="Path Image2">@error('path_image2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="path_image3"></label>
                <input wire:model="path_image3" type="text" class="form-control" id="path_image3" placeholder="Path Image3">@error('path_image3') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="path_image4"></label>
                <input wire:model="path_image4" type="text" class="form-control" id="path_image4" placeholder="Path Image4">@error('path_image4') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="layer1"></label>
                <input wire:model="layer1" type="text" class="form-control" id="layer1" placeholder="Layer1">@error('layer1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="layer2"></label>
                <input wire:model="layer2" type="text" class="form-control" id="layer2" placeholder="Layer2">@error('layer2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="layer3"></label>
                <input wire:model="layer3" type="text" class="form-control" id="layer3" placeholder="Layer3">@error('layer3') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="layer4"></label>
                <input wire:model="layer4" type="text" class="form-control" id="layer4" placeholder="Layer4">@error('layer4') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="btn1"></label>
                <input wire:model="btn1" type="text" class="form-control" id="btn1" placeholder="Btn1">@error('btn1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="btn2"></label>
                <input wire:model="btn2" type="text" class="form-control" id="btn2" placeholder="Btn2">@error('btn2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="btn3"></label>
                <input wire:model="btn3" type="text" class="form-control" id="btn3" placeholder="Btn3">@error('btn3') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="btn4"></label>
                <input wire:model="btn4" type="text" class="form-control" id="btn4" placeholder="Btn4">@error('btn4') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="state"></label>
                <input wire:model="state" type="text" class="form-control" id="state" placeholder="State">@error('state') <span class="error text-danger">{{ $message }}</span> @enderror
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