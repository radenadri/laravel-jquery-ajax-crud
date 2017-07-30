<table class="table table-bordered">
    <thead>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Operation</td>
        </tr>
    </thead>
    <tbody id="new-row">
        @if(count($states) > 0)
            @foreach($states as $state)
                <tr class="state{{ $state->id }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $state->name }}</td>
                    <td>
                        <button class="edit-modal btn btn-warning"
                                data-id="{{ $state->id }}" 
                                data-name="{{ $state->name }}">
                                Edit
                        </button>
                        <button class="delete-modal btn btn-danger"
                                data-delete-id="{{ $state->id }}">
                                Delete
                        </button>
                    </td>
                </tr>
            @endforeach
            @else
                <tr>
                    <td>No posts found..</td>
                </tr>
        @endif
    </tbody>
</table>
{{ $states->links() }}