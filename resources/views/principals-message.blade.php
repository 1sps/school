@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light o-overlaid p-0">
  <div class="o-overlay">
    <div class="container py-4">
      <h1 class="display-4 text-light">Principals Message</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              Message from our principal
            </span>
          </p>
        </div>
        <div class="col-md-6">
          @if (false)
          <img src="{{ asset('img/hero-1.jpg') }}" alt="Card image foo" class="img-fluid">
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@if ($principalsMessage !== null)
  <div class="container-fluid my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          {{ $principalsMessage->message }}
        </div>
        <div class="col-md-4">
          <img src="{{ asset('storage/' . $principalsMessage->image_path) }}" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
@else
  <p class="text-danger m-3">
    No principals message.
  </p>
@endif

@endsection