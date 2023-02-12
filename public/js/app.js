document.addEventListener('DOMContentLoaded', () => {

    // Delete notification message when we click on (X) button
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
        const $notification = $delete.parentNode;

        $delete.addEventListener('click', () => {
        $notification.parentNode.removeChild($notification);
        });
    });

});
