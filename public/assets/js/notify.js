document.addEventListener('DOMContentLoaded', function () {
    const notifyCloseButton = document.querySelector('.notify-close');
    const notifyContainer = document.querySelector('.notify');

    if (notifyCloseButton && notifyContainer) {
        function closeNotification() {
            notifyContainer.style.opacity = '0';
        }

        notifyCloseButton.addEventListener('click', closeNotification);

        setTimeout(closeNotification, 5000);
    }
});