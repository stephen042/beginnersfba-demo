<div>
    <!-- Vertical Form -->
    <form class="row g-3" wire:submit='add'>
        <div class="col-12">
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Upload Photos of Product :</label>
                <div class="col-sm-10">
                    <input type="file" id="photos" wire:model="photos" multiple class="form-control">
                    @error('photo.*')
                    <em class="text-danger">{{ $message }}</em>
                    @enderror
                </div>
            </div>
        </div>
        <div class="modal-footer">
            @if (!$errors->any())
            <button type="reset" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary btn-sm">
                Upload
                <x-spinner />
            </button>
            @else
            <div class="col-sm-6 col-md-4 col-xl-3">
                <button class="btn btn-danger" disabled>Error</button>
            </div>
            @endif
        </div>
    </form><!-- Vertical Form -->
</div>