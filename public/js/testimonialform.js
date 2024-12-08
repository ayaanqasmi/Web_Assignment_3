const form = document.querySelector("#add-testimonial-form");

form.addEventListener("submit", async function (event) {
    event.preventDefault();

    const formData = new FormData(form);

    // Add an id field to the form data
    const id = "12345"; // Replace with the actual id value you want to send
    formData.append("user_id", id);

    try {
        const response = await fetch("/api/testimonials", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": form.querySelector('input[name="_token"]').value,
                Accept: "application/json",
            },
            body: formData,
        });

        const result = await response.json();

        if (response.ok) {
            alert("Success!");
            form.reset();
            window.location.reload();
        } else {
            alert(`Error: ${result.message || "An error occurred"}`);
        }
    } catch (error) {
        console.error("Error submitting the form:", error);
        alert("An error occurred. Please try again.");
    }
});

document.querySelectorAll(".testimonial__delete").forEach((deleteButton) => {
    deleteButton.addEventListener("click", async function () {
        const id= deleteButton.getAttribute("id-to-delete");
       

        if (id && confirm("Are you sure you want to delete this testimonial?")) {
            try {
                const response = await fetch(`/api/testimonials/${id}`, {
                    method: "DELETE",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector(
                            'input[name="_token"]'
                        ).value,
                        Accept: "application/json",
                    },
                });

                if (response.ok) {
                    alert("Testimonial deleted successfully!");
                    window.location.reload();
                } else {
                    const result = await response.json();
                    alert(`Error: ${result.message}`);
                }
            } catch (error) {
              alert(`Error: ${error.message}`);
            }
        }
    });
});
