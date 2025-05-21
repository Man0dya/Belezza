//<!-- IT23187214 -->

//side bar
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



// Chart 1
const xValues1 = [200,300,400,500,600,700,800,900,1000];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues1, 
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "#023047",
      fill: false,
      label: 'Clothing' 
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "#219ebc",
      fill: false,
      label: 'Shoes' 
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "#8ecae6",
      fill: false,
      label: 'Bags' 
    },{ 
      data: [3200,1500,1800,2000,5000,2500,3000,3500,2600,3200],
      borderColor: "#4f6d7a",
      fill: false,
      label: 'Accessories' 
    },]
  },
  options: {
    title: {
        display: true,
        text: "Categories"
      }
     
  }
});

// Chart 2
const xValues2 = ["T-Shirts", "Denim Jeans", "Skirts", "Headgear", "Caps"];
const yValues = [60, 55, 48, 30, 22];
const barColors = [
  "#5E1675",
  "#86469C",
  "#BC7FCD",
  "#FB9AD1",
  "#FFCDEA"
];

new Chart("myChart2", {
  type: "doughnut",
  data: {
    labels: xValues2, 
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Best Selling Product"
    }
  }
});

//chart 3
const xValues3 = [200,300,400,500,600,700,800,900,1000];

new Chart("myChart3", {
  type: "line",
  data: {
    labels: xValues3, 
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "#023047",
      fill: false,
      label: 'Clothing' 
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "#219ebc",
      fill: false,
      label: 'Shoes' 
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "#8ecae6",
      fill: false,
      label: 'Bags' 
    },{ 
      data: [3200,1500,1800,2000,5000,2500,3000,3500,2600,3200],
      borderColor: "#4f6d7a",
      fill: false,
      label: 'Accessories' 
    },]
  },
  options: {
    title: {
        display: true,
        text: "Categories"
      }
     
  }
}); //Reference for charts :- https://www.w3schools.com/


//Order Details table checkbox
document.addEventListener('DOMContentLoaded', function() {
  var checkboxes = document.getElementsByClassName('row-checkbox');
  for (var i = 0; i < checkboxes.length; i++) {
    checkboxes[i].addEventListener('change', function(e) {
      var row = e.target.parentNode.parentNode;
      if (e.target.checked) {
        row.style.textDecoration = 'line-through';
      } else {
        row.style.textDecoration = 'none';
      }
    });
  }
});


// Loader
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("overlay").style.display = "none";
  
}

//logout
function confirmLogout() {
  if (confirm("Are you sure you want to log out?")) {
      window.location.href = '/fashion%20Store/assets/php/logout.php';
  }
}

