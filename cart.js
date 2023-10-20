document.addEventListener('DOMContentLoaded', function () {
    const quantityElements = document.querySelectorAll('.quantity input');
    const incrementButtons = document.querySelectorAll('.quantity .increment');
    const decrementButtons = document.querySelectorAll('.quantity .decrement');
    const quantityMessages = document.querySelectorAll('.quantity-message');

    function updateQuantityButtons(index) {
        const quantityValue = parseInt(quantityElements[index].value);

        if (quantityValue >= 10) {
            incrementButtons[index].disabled = true;
            quantityMessages[index].innerText = "You can't order more than 10 items.";
            quantityMessages[index].style.color = "red";
        } else if (quantityValue <= 1) {
            decrementButtons[index].disabled = true;
            quantityMessages[index].innerText = "";
        } else {
            incrementButtons[index].disabled = false;
            decrementButtons[index].disabled = false;
            quantityMessages[index].innerText = "";
        }
    }

    function incrementQuantity(index) {
        const quantityInput = quantityElements[index];
        const currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity < 10) {
            quantityInput.value = currentQuantity + 1;
        }
    }

    function decrementQuantity(index) {
        const quantityInput = quantityElements[index];
        const currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    }

    incrementButtons.forEach((button, index) => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            incrementQuantity(index);
            updateQuantityButtons(index);
        });
    });

    decrementButtons.forEach((button, index) => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            decrementQuantity(index);
            updateQuantityButtons(index);
        });
    });

    quantityElements.forEach((element, index) => {
        element.addEventListener('input', function () {
            updateQuantityButtons(index);
        });
    });
});
