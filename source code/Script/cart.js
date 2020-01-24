ready();


function ready() {
    var removebtn = document.getElementsByClassName('btn-danger');
    for (var i = 0; i < removebtn.length; i++) {
        var button = removebtn[i];
        button.addEventListener('click', removeCartItem);
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input');
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked);
}


function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    
}

function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    
}

