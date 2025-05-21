//<!-- IT23187214 -->

var sidebar = document.getElementById("mySidebar");
var toggleButton = document.getElementById("sidebarToggle");

toggleButton.addEventListener("click", function(event) {
    
    event.stopPropagation();

    sidebar.classList.toggle("active");
});


document.addEventListener("click", function() {
    
    sidebar.classList.remove("active");
});



var links = document.querySelectorAll(".sidebar-link a");

for (var i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function() {
        
        for (var j = 0; j < links.length; j++) {
            links[j].classList.remove("clicked");
        }
        this.classList.add("clicked");
    });
}



// Loader
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("overlay").style.display = "none";
  
}




//add product selection
function addOptions(select) {
    var extraOptions = document.getElementById('extraOptions');
    extraOptions.innerHTML = ''; 

    var sizes = ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'];
    var colors = ['White', 'Black', 'Red', 'Pink','Brown','Blue','Silva','Yellow','Green'];

    if (select.value === 'clothing') {
        var sizeCheckboxes = sizes.map(size => `<span class="checkbox-inline"><input type="checkbox" id="${size}" name="size[]" value="${size}"><label for="${size}">${size}</label></span>`).join('');
        extraOptions.innerHTML += `<div class="checkbox-group"><label>Sizes</label></br>${sizeCheckboxes}</div>`;
    }

    if (select.value === 'clothing' || select.value === 'shoes' || select.value === 'bags' || select.value === 'accessories') {
        var colorCheckboxes = colors.map(color => `<span class="checkbox-inline"><input type="checkbox" id="${color}" name="color[]" value="${color}"><label for="${color}">${color}</label></span>`).join('');
        extraOptions.innerHTML += `<div class="checkbox-group"><label>Colors</label></br>${colorCheckboxes}</div>`;
    }
}






