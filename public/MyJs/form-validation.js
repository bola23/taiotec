// Example validation functions
function allowOnlyAlphabetic(inputField) {
    const inputValue = inputField.value;

    // Remove non-alphabetic characters using a regular expression
    const cleanValue = inputValue.replace(/[^a-zA-Z]/g, '');

    // Update the input value with the cleaned value
    inputField.value = cleanValue;
}
  
function validateNumericInput() {
    var inputElement = document.getElementById("PNUM");
    inputElement.value = inputElement.value.replace(/[^0-9]/g, '');
}
  
  // Validation function for the entire form
  function validateForm() {
    var form = document.getElementById('form');
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }
    form.classList.add('was-validated');
  }
  
  // Add event listeners for form validation
  document.getElementById('fname').addEventListener('input', function() {
    allowOnlyAlphabetic(this);
  });
  
  document.getElementById('lastname').addEventListener('input', function() {
    allowOnlyAlphabetic(this);
  });
  
  document.getElementById('PNUM').addEventListener('input', function() {
    validateNumericInput();
  });
  
  // Add submit event listener for the form
  document.getElementById('form').addEventListener('submit', function(event) {
    validateForm();
  });
  