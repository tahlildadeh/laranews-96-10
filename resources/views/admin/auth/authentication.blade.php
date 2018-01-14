@extends('admin.layouts.auth')

@section('title', 'Backoffice | Authentication');
@section('content')
<div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
        @include('admin.auth.slots.login')
        @include('admin.auth.slots.register')
    </div>
</div>
@endsection


@push('before-body-end')
<script>

    if('{{Route::currentRouteName()}}'==='register'){
        window.location = window.location.href.replace(/#.*$/, '') + '#toregister'
    }
</script>
@endpush