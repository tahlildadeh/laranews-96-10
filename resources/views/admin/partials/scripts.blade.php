<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>

<!--[if lt IE 9]>
<!--<script src="../assets/js/ie8-responsive-file-warning.js"></script>-->
<![endif]-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>

<!-- bootstrap progress js -->
<script src="{{ asset('assets/admin/js/progressbar/bootstrap-progressbar.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/nicescroll/jquery.nicescroll.min.js') }}"></script>
<!-- icheck -->
<script src="{{ asset('assets/admin/js/icheck/icheck.min.js') }}"></script>
<!-- tags -->
<script src="{{ asset('assets/admin/js/tags/jquery.tagsinput.min.js') }}"></script>
<!-- switchery -->
<script src="{{ asset('assets/admin/js/switchery/switchery.min.js') }}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('assets/admin/js/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/datepicker/daterangepicker.js') }}"></script>
<!-- richtext editor -->
<script src="{{ asset('assets/admin/js/editor/bootstrap-wysiwyg.js') }}"></script>
<script src="{{ asset('assets/admin/js/editor/external/jquery.hotkeys.js') }}"></script>
<script src="{{ asset('assets/admin/js/editor/external/google-code-prettify/prettify.js') }}"></script>
<!-- select2 -->
<script src="{{ asset('assets/admin/js/select/select2.full.js') }}"></script>
<!-- form validation -->
<script type="text/javascript" src="{{ asset('assets/admin/js/parsley/parsley.min.js') }}"></script>
<!-- textarea resize -->
<script src="{{ asset('assets/admin/js/textarea/autosize.min.js') }}"></script>
<script>
    autosize($('.resizable_textarea'));
</script>
<!-- Autocomplete -->
<script type="text/javascript" src="{{ asset('assets/admin/js/autocomplete/countries.js') }}"></script>
<script src="{{ asset('assets/admin/js/autocomplete/jquery.autocomplete.js') }}"></script>
<!-- pace -->

<script src="{{ asset('assets/admin/js/custom.js') }}"></script>

<!-- pace -->
<script src="{{ asset('assets/admin/js/pace/pace.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/app.js') }}"></script>

@stack('scripts')