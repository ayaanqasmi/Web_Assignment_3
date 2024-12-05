// Select buttons and elements
const darkModeToggle = document.getElementById('darkModeToggle');
const textFormatToggle = document.getElementById('textFormatToggle');
const body = document.body;

// Toggle dark mode
darkModeToggle.addEventListener('click', () => {
  body.classList.toggle('dark-mode');
  darkModeToggle.textContent = body.classList.contains('dark-mode')
    ? 'Light Mode'
    : 'Dark Mode';
});

document.addEventListener('DOMContentLoaded', function () {
    const textFormatToggle = document.getElementById('textFormatToggle');
    const headerLinks = document.querySelectorAll('.header__nav-link');
    let isTextFormatted = false;  // Track if the text format is applied
  
    textFormatToggle.addEventListener('click', function () {
      // Toggle the text color to yellow and apply italic style, and change button text
      if (isTextFormatted) {
        // Reset to original color and remove italic style
        headerLinks.forEach(link => {
          link.style.color = ''; // Remove yellow color
          link.style.fontStyle = ''; // Remove italic style
        });
        textFormatToggle.textContent = 'Change Text Format'; // Reset button text
      } else {
        // Change text color to yellow and apply italic style
        headerLinks.forEach(link => {
          link.style.color = '#ffa500'; // Apply yellow color
          link.style.fontStyle = 'italic'; // Apply italic style
        });
        textFormatToggle.textContent = 'Reset Text Format'; // Update button text
      }
  
      // Toggle the state
      isTextFormatted = !isTextFormatted;
    });
  });
  
  
  