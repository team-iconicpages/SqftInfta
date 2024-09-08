// Slider toggle
const menuBtn = document.getElementById('menuBtn');
const closeBtn = document.getElementById('closeBtn');
const sidebar = document.getElementById('sidebar');

menuBtn.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-full');
});

closeBtn.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-full');
});
// downdown menu items
const dropdownBtn = document.getElementById('dropdownBtn');
const dropdownMenu = document.getElementById('dropdownMenu');

dropdownBtn.addEventListener('click', () => {
    dropdownMenu.classList.toggle('hidden');
});

document.addEventListener('click', (event) => {
    if (!dropdownBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.add('hidden');
    }
});