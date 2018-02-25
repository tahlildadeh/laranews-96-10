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
                    <a class="btn btn-default" href="{{ route('categories.edit', ['id' => $category->id]) }}"><i
                                class="fa fa-edit"></i> Edit</a>
                    <button class="btn btn-danger destroy-model"
                            type="button" data-destroy-url="{{ route('categories.destroy', ['id' => $category->id]) }}">
                        <i class="fa fa-remove"></i> Delete
                    </button>
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

@push('before-body-end')
<script>
    jQuery(function () {
        jQuery('.destroy-model').on('click', function (e) {
            e.preventDefault();
            var url = jQuery(this).data('destroy-url');
            if (!confirm('Are yousure that you want to remove this record')) {
                return;
            }
            var token = jQuery('meta[name="csrf-token"]').attr('content');
            var html = '<form method="post" action="' + url + '">' +
                '<input type="hidden" name="_token" value="'+ token +'" >' +
                '<input type="hidden" name="_method" value="DELETE" >' +
                '</form>';
            var form = jQuery(html);
            jQuery('body').append(form);
            setTimeout(function () {
                form.submit()
            }, 100);
        })
    });
</script>
@endpush