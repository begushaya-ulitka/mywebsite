require('./bootstrap');

const accordItems = document.getElementsByClassName('js-accordItem');
for (item of accordItems) {
    item.addEventListener('click', function() {
        this.classList.toggle('active');
    });
}
