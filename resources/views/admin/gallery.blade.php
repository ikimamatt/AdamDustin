@extends('Layout.admindash')

@section('dashboard')

<div class="row">
    <div class="col-12">
        <h1>Gallery Section</h1>
    </div>

    <div class="separator mb-5"></div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Gallery</h5>

                <!-- Loop through each gallery -->
                @foreach($galleries as $gallery)
                    <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Using PUT method for update -->

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                                @if($gallery->image)
                                    <div class="mt-2">
                                        <a href="{{ asset('storage/' . $gallery->image) }}" data-toggle="lightbox" data-gallery="example-gallery">
                                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery Image" width="100" class="img-thumbnail">
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary d-block mt-3">Update</button>
                    </form>

                    <!-- Delete Button Form -->
                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger d-block mt-3">Delete</button>
                    </form>
                    <hr> <!-- Optional: adds a line between each form -->
                @endforeach

            </div>
        </div>
    </div>
</div>

<!-- Modal for Add New Gallery -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Gallery</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary d-block mt-3">Save</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script>
        // Initialize modal logic for adding new gallery
        var editModal = document.getElementById('exampleModal');
        editModal.addEventListener('show.bs.modal', function (event) {
            // Set form action or other dynamic data if needed
        });
    </script>
@endpush
