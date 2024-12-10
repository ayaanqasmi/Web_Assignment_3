@extends('layouts.default')
@section('title', 'About Page')

@section('content')
<body class="body about__body">
<main class="main">
    <section id="hero" class="hero">
        <div class="hero__content">
            <h1 class="hero__title">Bring Your Vision to Life</h1>
            <h2 class="hero__subtitle">
                Your Partner in Professional Graphic Design
            </h2>
            <a href="/contact" class="about__cta home__cta">Get Started</a>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <h1 class="testimonials__title">Testimonials</h1>
        @if($testimonials->isEmpty())
            <p>No testimonials available at the moment.</p>
        @else
            @foreach($testimonials as $testimonial)
                <blockquote class="testimonials__item">
                    <img
                        src="{{ $testimonial->url }}"
                        alt="{{ $testimonial->name }}"
                        onerror="this.src='default-placeholder.png';"
                    />
                    <p>
                        "{{ $testimonial->description }}" - {{ $testimonial->name }}
                    </p>
                    @if($auth)
                    <i class="fas fa-x testimonial__delete" id-to-delete="{{ $testimonial->id }}"></i>
                    @endif
                </blockquote>
                
            @endforeach
        @endif
    </section>

    @if($auth)
    @include('partials.forms.testimonial')
    @endif
</main>
<script src="{{ asset('js/testimonialform.js') }}" defer></script>
</body>
@endsection
