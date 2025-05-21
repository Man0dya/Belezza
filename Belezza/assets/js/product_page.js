
//price range
function updateValue(val) {
    document.getElementById('min').innerHTML = "Rs" + val;
}

 //filterbar click
var sidebar = document.getElementById("filterbar");
var toggleButton = document.getElementById("sidebarToggle");

toggleButton.addEventListener("click", function(event) {
    
    event.stopPropagation();

    sidebar.classList.toggle("active");
});

//filter bar hide
function toggleFilter() {
    var filter = document.querySelector('.product-filter');
    filter.style.display = filter.style.display === 'none' ? 'block' : 'none';
}

//scroll event to close the filter bar
window.addEventListener('scroll', function() {
    var filter = document.querySelector('.product-filter');
    if (filter.style.display === 'block') {
        toggleFilter();
    }
});

//uncheck filter
var uncheckAllButton = document.getElementById('uncheckAll');
uncheckAllButton.addEventListener('click', uncheckAll);

function uncheckAll() {
    inStockCheckbox.checked = false;
    outOfStockCheckbox.checked = false;
    priceRange.value = priceRange.max; 

    
    for (var i = 0; i < sortOptions.length; i++) {
        sortOptions[i].checked = false;
    }


    filterProducts();
} 



// Get filter elements
var inStockCheckbox = document.getElementById('inStock');
var outOfStockCheckbox = document.getElementById('outOfStock');
var priceRange = document.getElementById('priceRange');
var sortOptions = document.getElementsByName('sortOption');

// Add event listeners
inStockCheckbox.addEventListener('change', filterProducts);
outOfStockCheckbox.addEventListener('change', filterProducts);
priceRange.addEventListener('input', filterProducts);
for (var i = 0; i < sortOptions.length; i++) {
    sortOptions[i].addEventListener('change', filterProducts);
}

function filterProducts() {
    // Get filter values
    var inStock = inStockCheckbox.checked;
    var outOfStock = outOfStockCheckbox.checked;
    var price = priceRange.value;
    var sortOption = '';
    for (var i = 0; i < sortOptions.length; i++) {
        if (sortOptions[i].checked) {
            sortOption = sortOptions[i].id;
            break;
        }
    }
}



