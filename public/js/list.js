
/*************Adding/Removing testimonials**************/
const testimonialsSection = document.getElementById("testimonials");

const addForm = document.getElementById("add-testimonial-form");
const removeButton = document.getElementById("remove-testimonial");

addForm.addEventListener("submit", function(event) {
    event.preventDefault();
    
    const imageUrl = document.getElementById("image-url").value;
    const quote = document.getElementById("quote").value;

    const newTestimonial = document.createElement("blockquote");
    newTestimonial.classList.add("testimonials__item");

    const newImage = document.createElement("img");
    newImage.src = imageUrl;
    newImage.alt = "Testimonial Image";

    const newText = document.createElement("p");
    newText.textContent = `"${quote}"`;

    newTestimonial.appendChild(newImage);
    newTestimonial.appendChild(newText);

    testimonialsSection.appendChild(newTestimonial);

    addForm.reset();
});

removeButton.addEventListener("click", function() {
    const lastTestimonial = testimonialsSection.querySelector(".testimonials__item:last-child");

    if (lastTestimonial) {
        testimonialsSection.removeChild(lastTestimonial);
    }
});
