const input = document.querySelector('.js-message-input');
const button = document.querySelector('.js-send-message');

input.addEventListener('input', function(event) {
    button.disabled = !event.target.value;
});