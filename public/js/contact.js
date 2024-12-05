document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');
    const serviceType = document.getElementById('serviceType');
    const experienceLevelGroup = document.getElementById('experienceLevelGroup');

    // Show/hide experience level based on service type
    serviceType.addEventListener('change', function() {
        const selectedService = this.value;
        if (['course-group', 'course-online', 'one-on-one'].includes(selectedService)) {
            experienceLevelGroup.style.display = 'block';
        } else {
            experienceLevelGroup.style.display = 'none';
            document.getElementById('experienceLevel').value = '';
            clearError('experienceLevel');
        }
    });

    // Function to validate email format
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Function to validate phone number
    function isValidPhone(phone) {
        const phoneRegex = /^\d{10}$/;  // Assumes 10-digit phone number
        return phoneRegex.test(phone.replace(/\D/g, ''));
    }

    // Function to display error message
    function showError(elementId, message) {
        const errorElement = document.getElementById(elementId + 'Error');
        errorElement.textContent = message;
        errorElement.style.display = 'block';
        errorElement.style.color = 'white';
    }

    // Function to clear error message
    function clearError(elementId) {
        const errorElement = document.getElementById(elementId + 'Error');
        errorElement.textContent = '';
        errorElement.style.display = 'none';
    }

    // Form submission handler
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        let isValid = true;

        // Clear all previous error messages
        const errorElements = document.querySelectorAll('.error');
        errorElements.forEach(element => element.style.display = 'none');
        successMessage.style.display = 'none';

        // Validate name
        const name = document.getElementById('name').value.trim();
        if (!name) {
            showError('name', 'Name is required');
            isValid = false;
        }

        // Validate email
        const email = document.getElementById('email').value.trim();
        if (!email) {
            showError('email', 'Valid Email is required');
            isValid = false;
        } else if (!isValidEmail(email)) {
            showError('email', 'Please enter a valid email address');
            isValid = false;
        }

        // Validate phone
        const phone = document.getElementById('phone').value.trim();
        if (!phone) {
            showError('phone', 'Phone number is required');
            isValid = false;
        } else if (!isValidPhone(phone)) {
            showError('phone', 'Please enter a valid 10-digit phone number');
            isValid = false;
        }

        // Validate service type
        const selectedService = serviceType.value;
        if (!selectedService) {
            showError('serviceType', 'Please select a service type');
            isValid = false;
        }

        // Validate experience level if course-related service is selected
        if (['course-group', 'course-online', 'one-on-one'].includes(selectedService)) {
            const experienceLevel = document.getElementById('experienceLevel').value;
            if (!experienceLevel) {
                showError('experienceLevel', 'Please select your experience level');
                isValid = false;
            }
        }

        // If all validations pass
        if (isValid) {
            successMessage.textContent = 'Thank you for your interest! I will get back to you shortly.';
            successMessage.style.display = 'block';
            form.reset();
            experienceLevelGroup.style.display = 'none';
        }
    });

    // Reset form handler
    document.getElementById('reset-btn').addEventListener('click', function() {
        const errorElements = document.querySelectorAll('.error');
        errorElements.forEach(element => element.style.display = 'none');
        successMessage.style.display = 'none';
        experienceLevelGroup.style.display = 'none';
    });
}); 