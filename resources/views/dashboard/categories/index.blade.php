@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-6">
        <a class="btn btn-primary my-3 text-white" data-toggle="modal" data-target="#categoryModal">Create new category</a>
        </button>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a class="badge bg-warning text-white" data-toggle="modal" data-target="#categoryModal"
                                data-category-name="{{ $category->name }}" data-category-slug="{{ $category->slug }}">
                                <span data-feather="edit"></span></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="categoryModal" role="dialog">
        <form method="POSt" action="/dashboard/categories" class="mb-5" id="category-form">
            @csrf
            <input id="method" type="hidden">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Category:</label>
                            <input type="text" class="form-control" id="name" name="name" required autofocus>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        $('#categoryModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var name = button.data('category-name') // Extract info from data-* attributes
            var slug = button.data('category-slug') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            var form = document.getElementById("category-form");
            var method = document.getElementById("method");

            if (typeof name !== 'undefined' && typeof slug !== 'undefined') {
                modal.find('.modal-title').text('Update Category')

                modal.find('.modal-body input').val(name)

                form.action = "/dashboard/categories/" + slug;

                method.name = '_method';
                method.value = 'PUT';
            } else {
                modal.find('.modal-title').text('Add Category')
                modal.find('.modal-body input').val('')
                form.action = "/dashboard/categories/";
                method.name = '_method';
                method.value = 'POST';
            }
        })
    </script>
@endsection
