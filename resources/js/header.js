
    const services = document.getElementById('services');
    const contact = document.getElementById('contact');
    const servicesDropdown = document.getElementById('servicesDropdown');
    const contactDropdown = document.getElementById('contactDropdown');

    services.addEventListener('mouseenter', () => {
    servicesDropdown.classList.add('flex');
    servicesDropdown.classList.remove('hidden');
});

    servicesDropdown.addEventListener('mouseleave', () => {
    servicesDropdown.classList.remove('flex');
    servicesDropdown.classList.add('hidden');

});

    contact.addEventListener('mouseenter', () => {
    contactDropdown.classList.add('flex');
    contactDropdown.classList.remove('hidden');
});

    contactDropdown.addEventListener('mouseleave', () => {
    contactDropdown.classList.remove('flex');
    contactDropdown.classList.add('hidden');

});

    document.addEventListener('DOMContentLoaded', function () {
    // Toggle the sidebar when the burger menu button is clicked
    const burgerMenuBtn = document.getElementById('burgerMenuBtn');
    const sidebar = document.getElementById('sidebar');

    burgerMenuBtn.addEventListener('click', function () {
    sidebar.classList.toggle('-translate-x-full');
});

    const close = document.getElementById('close');
    close.addEventListener('click', function () {
    sidebar.classList.toggle('-translate-x-full');
});
});
