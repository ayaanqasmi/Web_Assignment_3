
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

document.querySelectorAll(".serviceCreate").forEach((form) => {
    form.addEventListener("submit", async function (event) {
        event.preventDefault(); // Prevent the default form submission behavior

        const targetForm = event.target; // Avoid variable name conflicts
        const formData = new FormData(targetForm);

        const url = "/api/services"; // Set the URL dynamically
        const method = "POST" // Set the HTTP method dynamically
        
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

document.querySelectorAll(".serviceUpdate").forEach((form) => {
    form.addEventListener("submit", async function (event) {
        event.preventDefault();

        const targetForm = event.target;
        const formData = new FormData(targetForm);
        const id = formData.get("id");

        const url = `/api/services/${id}`; 
        const method = "PUT";
        
        try {
            const response = await fetch(url, {
                method: "POST", // Use POST with method spoofing
                headers: {
                    "X-CSRF-TOKEN": targetForm.querySelector(
                        'input[name="_token"]'
                    ).value,
                    "Accept": "application/json",
                },
                body: (() => {
                    formData.append('_method', 'PUT');
                    return formData;
                })(),
            });

            const result = await response.json();

            if (response.ok) {
                alert("Service updated successfully!");
                targetForm.reset();
                window.location.reload();
            } else {
                alert(`Error: ${result.message || "An error occurred"}`);
            }
        } catch (error) {
            alert(`Error: ${error.message}`);
        }
    });
});

document.querySelectorAll(".tutorial__delete").forEach((deleteButton) => {
    deleteButton.addEventListener("click", async function () {
        const id= deleteButton.getAttribute("id-to-delete");
       

        if (id && confirm("Are you sure you want to delete this service?")) {
            try {
                const response = await fetch(`/api/tutorials/${id}`, {
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