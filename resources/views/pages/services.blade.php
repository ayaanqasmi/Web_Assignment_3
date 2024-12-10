@extends('layouts.default')
@section('title', 'Services Page')

@section('content')

<body class="body service_body">
  <main class="main">
    <h1 class="services_section-title">What We Offer</h1>
    <section id="services" class="services">
      {{-- Loop through services --}}
      @foreach($services as $service)
      <div class="service">

        <i class="{{ $service->icon }} service__icon"></i>
        @if ($auth)
        <i class="fas fa-pen edit"></i>
        @endif
        <div class="service_content">

          <h3 class="service__title">{{ $service->title }}</h3>
          <p class="service__description">{{ $service->summary }}</p>
          <a href="#" class="service__cta link__hover-effect link__hover-effect--white" data-service-details="{{ $service->description }}">Learn More</a>
        </div>
        @if ($auth)
        <div class="service__edit--form hidden">
          @include('partials.forms.serviceupdate',['service'=>$service])
        </div>
        @endif
      </div>
      @endforeach

      <div class="details hidden">
        <p class="details__text"></p>
        <button class="details__button">Hide Details</button>
      </div>

    </section>
    @if($auth)
    @include('partials.forms.service')
    @endif

    <section id="tutorial" class="tutorial">
      <h1 class="services_section-title">Graphic Design Tutorials</h1>

      <ul class="tutorial__list">
        {{-- Loop through tutorials --}}
        @foreach($tutorials as $tutorial)
        <li class="tutorial__item">
          @if($auth)
          <i class="fas fa-x tutorial__delete" id-to-delete="{{ $tutorial->id }}"></i>
          @endif
          <h2 class="tutorial__link">{{ $tutorial->title }}</h2>
          <iframe src="{{ $tutorial->url }}" frameborder="0"></iframe>
        </li>
        @endforeach
      </ul>
    </section>
    @if($auth)
    @include('partials.forms.tutorial')
    @endif
  </main>
  <script src="{{ asset('js/updateform.js') }}"></script>
  <script src="{{ asset('js/serviceform.js') }}"></script>
</body>
@endsection