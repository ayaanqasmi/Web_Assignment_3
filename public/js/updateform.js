const editButtons = document.querySelectorAll(".service .edit");

// Add click event listener to each edit button
editButtons.forEach((button) => {
    button.addEventListener("click", (event) => {
        // Prevent default behavior (if any)
        event.preventDefault();

        // Find the closest .service div
        const serviceDiv = button.closest(".service");

        // Find the hidden form within this service div
        const editForm = serviceDiv.querySelector(".service__edit--form");

        // Toggle the 'hidden' class
        if (editForm) {
            editForm.classList.toggle("hidden");
        }
    });
});
