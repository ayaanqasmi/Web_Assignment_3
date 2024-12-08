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
                </blockquote>
            @endforeach
        @endif
    </section>

    <div class="list">
        <h2>Add a New Testimonial</h2>
        <form id="add-testimonial-form" method="POST" action="">
            @csrf
            <label for="image-url">Image URL:</label>
            <input
                type="url"
                id="image-url"
                name="url"
                required
                placeholder="Enter image URL"
            />

            <label for="quote">Testimonial Quote:</label>
            <textarea
                id="quote"
                name="description"
                required
                placeholder="Enter the testimonial quote"
            ></textarea>

            <label for="name">Name:</label>
            <input
                type="text"
                id="name"
                name="name"
                required
                placeholder="Enter the person's name"
            />

            <button type="submit">Add Testimonial</button>
        </form>

        <form id="remove-testimonial-form" method="DELETE" action="">
            @csrf
         
            <button type="submit">Remove Last Testimonial</button>
        </form>
    </div>
</main>
</body>
@endsection
