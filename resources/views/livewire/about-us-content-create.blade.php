<div class="m-3">
  <h2 class="h5">Create Aboutus Content</h2>

  <div class="form-group">
    <label for="">Body</label>
    <textarea rows="5" class="form-control" wire:model.defer="body">
    </textarea>
    @error('body') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
      <label for="">Image</label>
      <input type="file" class="form-control" wire:model="image">
      @error('image') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="btn btn-primary" wire:click="store">Submit</button>
  <button type="submit" class="btn btn-danger" wire:click="$emit('exitCreate')">Cancel</button>
</div>
