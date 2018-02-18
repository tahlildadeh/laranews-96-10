@extends('admin.layouts.panel')

@section('content')
    <form class="form-horizontal form-label-left" action="{{ route('categories.update', ['category' => $category->id]) }}" method="post">
        {{ method_field('PUT') }}
        @include('admin.categories.form')
    </form>
@endsection