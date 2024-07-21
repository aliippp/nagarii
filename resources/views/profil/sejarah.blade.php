@extends('layouts.main')

@section('container')
<div class="container">
  <nav aria-label="breadcrumb" class="my-4">
    <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
      <li class="breadcrumb-item"><a href="{{
        url('/')
      }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
    </ol>
</nav>
</div>
@endsection