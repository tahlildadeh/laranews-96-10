@extends('layouts.app')

@section('content')
<pre>
    <?php print_r($article->toArray()) ?>
    <?php print_r($subComments? $subComments : []) ?>
</pre>
@endsection