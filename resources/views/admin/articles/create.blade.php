@extends('admin.layouts.panel')

@section('content')
    <form class="form-horizontal form-label-left" action="{{ route('articles.store') }}" method="post">
        @include('admin.articles.form')
    </form>
@endsection

@push('scripts')
<script src="{{asset('assets/libraries/tinymce/js/tinymce/tinymce.min.js')}}"></script>
@endpush

@push('before-body-end')
<script>
    tinymce.init({
        selector: 'textarea',
        height: 500,
        theme: 'modern',
        plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
    });
</script>
@endpush