// Get references to the size, color, and quantity elements
var sizeButtons = document.querySelectorAll('.size-button');
var colorOptions = document.querySelectorAll('.color-option');
var quantityInput = document.getElementById('count');

// Add event listeners to the size buttons
sizeButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        document.querySelector('input[name="size"]').value = this.innerText;
    });
});

// Add event listeners to the color options
colorOptions.forEach(function(option) {
    option.addEventListener('click', function() {
        
        document.querySelector('input[name="color"]').value = this.innerText;
    });
});

// Add event listener to the quantity input
quantityInput.addEventListener('change', function() {
    var quantityForm = document.getElementById('quantity-form');
    document.querySelector('input[name="quantity"]').value = this.value;
    quantityForm.submit();
});

// Get reference to the "Add To Cart" button
var addToCartButton = document.querySelector('.add-cart-button');

// Add event listener to the "Add To Cart" button
addToCartButton.addEventListener('click', function(e)
{
    e.preventDefault();
    document.querySelector('form').submit();
});


var count = 0;
document.getElementById('minus').addEventListener('click', function(e)
{
    e.preventDefault();
    count = Math.max(1, count - 1);
    document.getElementById('count').value = count;
});
document.getElementById('plus').addEventListener('click', function(e) {
    e.preventDefault();
    count += 1;
    document.getElementById('count').value = count;
});

//option clicked hover
var sizeButtons = document.querySelectorAll('.size-button');
var colorOptions = document.querySelectorAll('.color-option');

function handleClick(option, inputName)
{
    if (option.classList.contains('clicked'))
    {
        option.classList.remove('clicked');
    } else
    {
        var allOptions = document.querySelectorAll('.' + option.className);
        allOptions.forEach(function(opt) {
            opt.classList.remove('clicked');
        });

        option.classList.add('clicked');
    }

    document.querySelector('input[name="' + inputName + '"]').value = option.innerText;
}

sizeButtons.forEach(function(button) {
    button.addEventListener('click', function()
    {
        handleClick(this, 'size');
    });
});

colorOptions.forEach(function(option) {
    option.addEventListener('click', function()
    {
        handleClick(this, 'color');
    });
});

