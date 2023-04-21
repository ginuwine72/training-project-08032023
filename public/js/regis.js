const form = document.querySelector('form');
const passwordInput = document.querySelector('#password');
const confirmPasswordInput = document.querySelector('#confirm_password');

// Match password and confirm password
confirmPasswordInput.addEventListener('input', () => {
if (passwordInput.value !== confirmPasswordInput.value) {
confirmPasswordInput.setCustomValidity('Passwords do not match');
} else {
confirmPasswordInput.setCustomValidity('');
}
});

// Submit form
form.addEventListener('submit', (event) => {
event.preventDefault();
// Here you can add code to submit the form data to the server
alert('Form submitted!');
});