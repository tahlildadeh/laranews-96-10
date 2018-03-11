@extends('admin.layouts.panel')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Parent</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $offset = $categories->perPage() * ($categories->currentPage() - 1) ?>
        @forelse($categories as $category)
            <tr>
                <th scope="row">{{ $offset + $loop->iteration }}</th>
                <td>{{ $category->name }}</td>
                <td>{{ $category->parentCategory->name ?? '-' }}</td>
                <td>
                    @can('update', $category)
                    <a class="btn btn-default" href="{{ route('categories.edit', ['id' => $category->id]) }}"><i
                                class="fa fa-edit"></i> Edit</a>
                    @endcan
                    @can('delete', $category)
                    <button class="btn btn-danger destroy-model"
                            type="button" data-destroy-url="{{ route('categories.destroy', ['id' => $category->id]) }}">
                        <i class="fa fa-remove"></i> Delete
                    </button>
                    @endcan
                </td>
            </tr>
        @empty
            <tr>
                <th colspan="4">No record found</th>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4">{{ $categories->appends(['q' => Request::get('q')])->links() }}</td>
        </tr>
        </tfoot>
    </table>
@endsection