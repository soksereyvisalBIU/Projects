<div>


    
    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-between">
            <h3>Books List</h3>
            <!-- Button trigger modal -->
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Create Book
                </button>   
            </div>
        </div>
        
        <div class="card-body">
            @foreach ($books as $book)
                
            @endforeach
        </div>
    </div>





<!-- Modal -->
<div class="modal fade @if($showModal) show @endif" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="@if($showModal) display: block; @else display: none; @endif">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create New Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="d-flex flex-wrap" wire:submit.prevent="submit">
                    <div class="form-floating col-12 mb-3">
                        <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Book Name">
                        <label for="floatingInput">Book Name</label>
                        @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    
                    <div class="form-floating col-md-6 col-12 mb-3">
                        <select wire:model="author" id="author" class="form-control @error('author') is-invalid @enderror">
                            <option value="">Select Author</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <label for="author">Author</label>
                        @error('author') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    
                    <div class="form-floating col-md-6 col-12 mb-3">
                        <select wire:model="category" id="category" class="form-control @error('category') is-invalid @enderror">
                            <option value="">Select Category</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <label for="category">Category</label>
                        @error('category') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    
                    <div class="form-group col-12 mb-3">
                        <label for="description">Description</label>
                        <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror" id="description" cols="30" rows="5"></textarea>
                        @error('description') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    
                    <div class="form-group col-md-6 col-12 mb-3">
                        <label for="cover">Cover</label>
                        <input wire:model="cover" type="file" class="form-control @error('cover') is-invalid @enderror" id="cover">
                        @error('cover') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    
                    <div class="form-group col-md-6 col-12 mb-3">
                        <label for="pdf">Pdf</label>
                        <input wire:model="pdf" type="file" class="form-control @error('pdf') is-invalid @enderror" id="pdf">
                        @error('pdf') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    
                    <div class="modal-footer col-12">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="closeModal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('showModal', () => {
            $('#exampleModalCenter').modal('show');
        });
        Livewire.on('hideModal', () => {
            $('#exampleModalCenter').modal('hide');
        });
    });
</script>
@endpush


</div>
