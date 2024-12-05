
/*************Showing And Hiding Details About Services**************/
const serviceCtas = document.querySelectorAll(".service__cta");
const detailsPopup = document.querySelector(".details");
const detailsText = document.querySelector(".details__text");
const hideDetailsButton = document.querySelector(".details__button");

serviceCtas.forEach(button => {
    button.addEventListener('click', () => {
        // Fetch the specific details from the data attribute
        const details = button.getAttribute('data-service-details');
        
        // Update the popup text and show the popup
        detailsText.textContent = details;
        detailsPopup.classList.remove('hidden');
    });
});

// Add an event listener to hide the details popup
hideDetailsButton.addEventListener('click', () => {
    detailsPopup.classList.add('hidden');
});

