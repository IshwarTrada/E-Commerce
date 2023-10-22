document.addEventListener('DOMContentLoaded', function () {
    const quantityElements = document.querySelectorAll('.quantity input');
    const incrementButtons = document.querySelectorAll('.quantity .increment');
    const decrementButtons = document.querySelectorAll('.quantity .decrement');
    const totalPrices = document.querySelectorAll('.pro_total_price');

    function updateQuantityButtons(element) {
        const quantityValue = parseInt(element.value);
        const productId = element.dataset.productId;
        const incrementButton = document.querySelector(`.pro_total_price[data-product-id="${productId}"]`);

        if (quantityValue >= 10) {
            incrementButton.disabled = true;
        } else if (quantityValue <= 1) {
            incrementButton.disabled = true;
        } else {
            incrementButton.disabled = false;
        }
    }

    function incrementQuantity(element) {
        const currentQuantity = parseInt(element.value);
        if (currentQuantity < 10) {
            element.value = currentQuantity + 1;
        }
    }

    function decrementQuantity(element) {
        const currentQuantity = parseInt(element.value);
        if (currentQuantity > 1) {
            element.value = currentQuantity - 1;
        }
    }

    incrementButtons.forEach((button) => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            const quantityInput = this.parentElement.querySelector('input');
            incrementQuantity(quantityInput);
            updateQuantityButtons(quantityInput);
            updateTotalPrice(quantityInput);
        });
    });

    decrementButtons.forEach((button) => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            const quantityInput = this.parentElement.querySelector('input');
            decrementQuantity(quantityInput);
            updateQuantityButtons(quantityInput);
            updateTotalPrice(quantityInput);
        });
    });

    quantityElements.forEach((element) => {
        element.addEventListener('input', function () {
            updateQuantityButtons(this);
            updateTotalPrice(this);
        });
    });

    function updateTotalPrice(element) {
        const quantityValue = parseInt(element.value);
        const productId = element.dataset.productId;
        const totalPriceElement = document.querySelector(`.pro_total_price[data-product-id="${productId}"]`);

        const unitPrice = parseInt(totalPriceElement.getAttribute('data-total'));

        if (!isNaN(quantityValue) && !isNaN(unitPrice)) {
            const totalPrice = quantityValue * unitPrice;
            totalPriceElement.innerText = 'Rs. ' + totalPrice;
        }
    }

    // Initialize the buttons and quantities
    for (let i = 0; i < quantityElements.length; i++) {
        updateQuantityButtons(quantityElements[i]);
        updateTotalPrice(quantityElements[i]);
    }
});

// Show total price
function updateTotal() {
    let total = 0;
    document.querySelectorAll('.cart-item').forEach(item => {
        const price = parseFloat(item.querySelector('.pro_total_price').getAttribute('data-total'));
        const quantity = parseInt(item.querySelector('.quantity input').value);
        total += price * quantity;
    });
    document.getElementById('total').textContent = total.toFixed(2);
}

document.querySelectorAll('.quantity input').forEach(input => {
    input.addEventListener('input', updateTotal);
});

// Initial calculation on page load
updateTotal();