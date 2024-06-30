@extends('dashbroad.layout.main')

@section('container')
<div class="container_notepad">
<div class="notes" id="app">
</div>
<script src="{{ asset('js/main.js') }}" type="module"></script>
</div>
@endsection
