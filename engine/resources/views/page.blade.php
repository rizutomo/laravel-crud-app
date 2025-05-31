@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    <h1>Welcome to out website!</h1>
    <p>This is a sample page using layout inheritance.</p>
@endsection

@push('additional-css')
    <link rel="stylesheet" href="path-to-additional-css.css">
@endpush

@push('additional-js')
    <script src="path-to-additional-js.css"></script>
@endpush
