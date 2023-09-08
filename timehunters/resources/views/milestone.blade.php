@extends('template')

@section('content')
    <x-branding.header />
    <x-form.milestone :projects="$projects"/>    
@endsection