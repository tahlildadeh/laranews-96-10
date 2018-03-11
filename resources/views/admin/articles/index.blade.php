@extends('admin.layouts.panel')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>title</th>
            <th>category</th>
            <th>Author</th>
            <th>Excerpt</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $offset = $articles->perPage() * ($articles->currentPage() - 1) ?>
        @forelse($articles as $article)
            <tr>
                <th scope="row">{{ $offset + $loop->iteration }}</th>
                <td><div>{{ $article->title }}</div></td>
                <td><div>{{ $article->category->name }}</div></td>
                <td>{{ $article->author->name }}</td>
                <td>{!! $article->excerpt !!}</td>
                <td>
                    @can('update', $article)
                    <a class="btn btn-default" href="{{ route('articles.edit', ['id' => $article->id]) }}"><i
                                class="fa fa-edit"></i> Edit</a>
                    @endcan
                    @can('delete', $article)
                    <button class="btn btn-danger destroy-model"
                            type="button" data-destroy-url="{{ route('articles.destroy', ['id' => $article->id]) }}">
                        <i class="fa fa-remove"></i> Delete
                    </button>
                    @endcan
                </td>
            </tr>
        @empty
            <tr>
                <th colspan="6">No record found</th>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="6">{{ $articles->appends(['q' => Request::get('q')])->links() }}</td>
        </tr>
        </tfoot>
    </table>
@endsection