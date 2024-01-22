@extends('layouts.main')
@section('content')
    
<h1>Ini adalah halaman about</h1>
@endsection

@php
    $title = pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME);
@endphp