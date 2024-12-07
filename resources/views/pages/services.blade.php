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
        <i class="fas fa-pen edit"></i>
        <div class="service_content">

          <h3 class="service__title">{{ $service->title }}</h3>
          <p class="service__description">{{ $service->summary }}</p>
          <a href="#" class="service__cta link__hover-effect link__hover-effect--white" data-service-details="{{ $service->description }}">Learn More</a>
        </div>
        <div class="service__edit--form hidden">
          @include('partials.forms.service',['id'=>$service->id])
        </div>
      </div>
      @endforeach

      <div class="details hidden">
        <p class="details__text"></p>
        <button class="details__button">Hide Details</button>
      </div>

    </section>

    @include('partials.forms.service',['id'=>""])

    <section id="tutorial" class="tutorial">
      <h1 class="services_section-title">Graphic Design Tutorials</h1>

      <ul class="tutorial__list">
        {{-- Loop through tutorials --}}
        @foreach($tutorials as $tutorial)
        <li class="tutorial__item">
          <h2 class="tutorial__link">{{ $tutorial->title }}</h2>
          <iframe src="{{ $tutorial->url }}" frameborder="0"></iframe>
        </li>
        @endforeach
      </ul>
    </section>

    @include('partials.forms.tutorial')
  </main>
  <script src="{{ asset('js/updateform.js') }}" ></script>
  <script src="{{ asset('js/serviceform.js') }}" ></script>
</body>
@endsection