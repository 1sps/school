@extends('adminlte::page')

@section('title', 'Dashboard')

@if (false)
@section('content_header')
    <h1>Section</h1>
@stop
@endif

@section('content')
  @livewire('section-component')
@stop
