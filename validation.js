document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('firstform');
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      const nameInput = document.getElementById('name');
      const emailInput = document.getElementById('email');
      const passwordInput = document.getElementById('password');
      const passwordConfirmationInput = document.getElementById('password_confirmation');
      
      if (nameInput.value.trim() === '') {
        displayErrorMessage('Please fill out the Name field.');
        return;
      }
      
      if (emailInput.value.trim() === '') {
        displayErrorMessage('Please fill out the Email field.');
        return;
      }
      
      if (passwordInput.value.trim() === '') {
        displayErrorMessage('Please fill out the Password field.');
        return;
      }
      
      if (passwordConfirmationInput.value.trim() === '') {
        displayErrorMessage('Please fill out the Repeat Password field.');
        return;
      }
      
      form.submit();
    });
  });
  
  function displayErrorMessage(message) {
    const errorElement = document.createElement('div');
    errorElement.classList.add('error-message');
    errorElement.textContent = message;
    const form = document.getElementById('firstform');
    form.appendChild(errorElement);
    
    setTimeout(function() {
      errorElement.remove();
    }, 3000);
  }
  