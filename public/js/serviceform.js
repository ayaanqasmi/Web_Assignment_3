document.querySelectorAll(".serviceForm").forEach((form) => {
    form.addEventListener("submit", async function (event) {
        event.preventDefault(); // Prevent the default form submission behavior

        const targetForm = event.target; // Avoid variable name conflicts
        const formData = new FormData(targetForm);
        const id = formData.get("id");
        const url = id ? `/api/services/${id}` : "/api/services"; // Set the URL dynamically
        const method = id ? "PUT" : "POST"; // Set the HTTP method dynamically
        
        try {
            const response = await fetch(url, {
                method: method,
                headers: {
                    "X-CSRF-TOKEN": targetForm.querySelector(
                        'input[name="_token"]'
                    ).value,
                    Accept: "application/json",
                },
                body: formData,
            });

            const result = await response.json();

            if (response.ok) {
                alert("Success!");
                targetForm.reset();
                window.location.reload(); // Correct casing
            } else {
                alert(`Error: ${result.message || "An error occurred"}`);
            }
        } catch (error) {
            alert(`Error: ${error.message}`);
        }
    });
});

// Apply the delete button event listener to each delete button
document.querySelectorAll(".deleteServiceButton").forEach((deleteButton) => {
    deleteButton.addEventListener("click", async function () {
        const id= deleteButton.getAttribute("id-to-delete");
       

        if (id && confirm("Are you sure you want to delete this service?")) {
            try {
                const response = await fetch(`/api/services/${id}`, {
                    method: "DELETE",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector(
                            'input[name="_token"]'
                        ).value,
                        Accept: "application/json",
                    },
                });

                if (response.ok) {
                    alert("Service deleted successfully!");
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
