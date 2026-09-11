<div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Edit Advocate Profile</h3>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="save">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" wire:model.defer="advocate.name" placeholder="Enter advocate's name">
                                @error('advocate.name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <input type="text" class="form-control" id="role" wire:model.defer="advocate.role" placeholder="e.g., Senior Partner, Associate">
                                @error('advocate.role') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Biography/Description</label>
                                <textarea class="form-control" id="content" rows="5" wire:model.defer="advocate.content" placeholder="Enter a brief biography or description"></textarea>
                                @error('advocate.content') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Profile Image</label>
                                <input type="file" class="form-control" id="image" wire:model="newImage">
                                @error('newImage') <span class="text-danger">{{ $message }}</span> @enderror

                                @if ($advocate->image)
                                    <div class="mt-2">
                                        <p>Current Image:</p>
                                        <img src="{{ asset('storage/' . $advocate->image) }}" alt="{{ $advocate->name }}" class="img-thumbnail" style="max-width: 150px;">
                                    </div>
                                @endif
                                @if ($newImage)
                                    <div class="mt-2">
                                        <p>New Image Preview:</p>
                                        <img src="{{ $newImage->temporaryUrl() }}" class="img-thumbnail" style="max-width: 150px;">
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
