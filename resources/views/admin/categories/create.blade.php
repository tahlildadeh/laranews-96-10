@extends('admin.layouts.panel')

@section('content')
    <form class="form-horizontal form-label-left" action="{{ route('categories.store') }}" method="post">
        @include('admin.categories.form')
    </form>
@endsection