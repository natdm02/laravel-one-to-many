<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal">
    <i class="fa-solid fa-trash-can fa-lg"></i>
</button>


<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 text-danger fw-bold" id="exampleModalLabel">Wait a Minute!</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                The project "<span class="fw-bold text-primary">{{ $project->name }}</span>" will be <span class="text-danger">deleted</span>, are you sure?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Back</button>
                <form
                    action="{{ route('admin.projects.destroy', $project) }}"
                    method="POST"
                    class="d-inline"
                >
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger fw-bold">
                        Delete
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>
