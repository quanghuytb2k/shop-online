import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.showSuccessToast = function (message) {
    $('#toast-success').removeClass('hidden');

    $('#toast-success').find('.content').html(message);

    setTimeout(function () {
        $('#toast-success').addClass('hidden');
    }, 4000);
}

window.addEventListener('showSuccessToast', (e) => {
    showSuccessToast(e.detail.message);
});
