@extends('layouts.default')
@section('title', 'Contact Page')

@section('content')
<body class="body contact__body">
<main class="main">
      <section id="contact" class="contact">
        <div class="form-container">
          <form id="contactForm" class="form">
            <span class="heading">Get in touch</span>
            <div class="form-group">
              <input placeholder="Name" type="text" id="name" class="input" />
              <span class="error" id="nameError"></span>
            </div>
            <div class="form-group">
              <input placeholder="Email" id="email" type="email" class="input" />
              <span class="error" id="emailError"></span>
            </div>
            <div class="form-group">
              <input placeholder="Phone Number" id="phone" type="tel" class="input" />
              <span class="error" id="phoneError"></span>
            </div>
            <div class="form-group">
              <select id="serviceType" class="input">
                <option value="">Select Service Type</option>
                <option value="web-design">Web Design</option>
                <option value="print-design">Print Design</option>
                <option value="course-group">Group Course</option>
                <option value="course-online">Online Training</option>
                <option value="one-on-one">1-on-1 Training</option>
                <option value="consultation">Coffee & Consultation</option>
              </select>
              <span class="error" id="serviceTypeError"></span>
            </div>
            <div class="form-group" id="experienceLevelGroup" style="display: none;">
              <select id="experienceLevel" class="input">
                <option value="">Select Experience Level</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
              </select>
              <span class="error" id="experienceLevelError"></span>
            </div>
            <textarea
              placeholder="Tell me about your project or questions"
              rows="10"
              cols="30"
              id="message"
              name="message"
              class="textarea"
            ></textarea>
            <div class="button-container">
              <button type="submit" class="send-button">Submit</button>
              <div class="reset-button-container">
                <button type="reset" id="reset-btn" class="reset-button">Reset</button>
              </div>
            </div>
            <div id="successMessage" class="success-message"></div>
          </form>
        </div>
      </section>
    </main>
</body>
@endsection