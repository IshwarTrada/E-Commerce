document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
        document.body.classList.toggle('scrolled', window.scrollY > 0);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var welcomeMsg = document.querySelector('.welcome_msg');
    if (welcomeMsg) {
        welcomeMsg.style.cssText = `
            position: absolute;
            z-index: 100;
            left: 50%;
            top: 25%;
            transform: translateX(-50%);
            padding: 10px 50px;
            background-color: #47ec7083;
            border: 3px solid #00c531;
            color: #036017;
        `;
        welcomeMsg.style.display = 'block';
        setTimeout(function() {
            welcomeMsg.style.display = 'none';
        }, 5000);
    }
});