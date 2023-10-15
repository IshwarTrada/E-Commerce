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

// Quantity incrementer
document.addEventListener('DOMContentLoaded', function() {
    var quantityElement = document.getElementById('quantity');
    var incrementButton = document.getElementById('increment');
    var decrementButton = document.getElementById('decrement');
    var quantityMessage = document.getElementById('quantity-message');

    function updateQuantityButtons() {
        var quantityValue = parseInt(quantityElement.value);

        if (quantityValue >= 10) {
            incrementButton.disabled = true;
            quantityMessage.innerText = "You can't order more than 10 items.";
            quantityMessage.style.color = "red";
        } else if (quantityValue <= 1) {
            decrementButton.disabled = true;
            quantityMessage.innerText = "";
        } else {
            incrementButton.disabled = false;
            decrementButton.disabled = false;
            quantityMessage.innerText = "";
        }
    }

    incrementButton.addEventListener('click', function() {
        quantityElement.stepUp();
        updateQuantityButtons();
    });

    decrementButton.addEventListener('click', function() {
        quantityElement.stepDown();
        updateQuantityButtons();
    });

    quantityElement.addEventListener('input', function() {
        updateQuantityButtons();
    });
});
