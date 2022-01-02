import axios from "axios";

const accordItems = document.querySelectorAll('.js-accordItem');
accordItems.forEach((item) => {
    item.addEventListener('click', function() {
        this.classList.toggle('active');
    });
    const id = item.getAttribute('data-id');
    const remove = item.querySelector('.js-accordItem-remove');
    if (!remove) {
        return;
    }
    remove.addEventListener('click', function(event) {
        event.stopPropagation();
        axios.post('/remove-item', { id })
            .then((response) => {
                if (response?.data?.success) {
                    window.location.reload();
                }
            }
        );
    });
});
