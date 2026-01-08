@extends('layouts.app')

@section('content')
<x-header />

<!-- Social Media Panel -->
<x-social-panel />

<main>
  @include('partials._hero')
  @include('partials._about')
  @include('partials._services')
  @include('partials._values')
  @include('partials._portfolio')

  <!-- Dynamic Sections -->
  @foreach($sections as $section)
    @include('partials._section', ['section' => $section])
  @endforeach

  @include('partials._blog')
  @include('partials._social-proof')
  @include('partials._testimonials')
</main>

<x-footer />
@endsection