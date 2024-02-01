function toggleScrollButtons() {
    const upButton = document.getElementById('upButton');
    const downButton = document.getElementById('downButton');

    const isAtTop = window.scrollY === 0;
    const isAtBottom = window.innerHeight + window.scrollY >= document.body.scrollHeight;

    upButton.style.display = isAtTop ? 'none' : 'flex';
    downButton.style.display = isAtBottom ? 'none' : 'flex';

    console.log('isAtTop', isAtTop);
}

// Listen for scroll events and toggle button display dynamically
window.addEventListener('scroll', toggleScrollButtons);

// Initial button display check
toggleScrollButtons();
