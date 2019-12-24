@extends('layouts.metronic')
@section('title', __('options'))
@section('content')

  <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
      <div class="col-md-12">
        @include('option::partials.list')
      </div>
    </div>
  </div>

@endsection
