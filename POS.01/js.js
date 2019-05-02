// Tablice z produktami

var pizza = [
    {
        id: 001,
        name: 'Margheritta'
    },
    {
        id: 002,
        name: 'Funghi'
    },
    {
        id: 003,
        name: 'Capriccioza'
    },
    {
        id: 004,
        name: 'Hawaii'
    },
    {
        id: 005,
        name: 'Salami'
    },
    {
        id: 006,
        name: 'Pollo'
    },
    {
        id: 007,
        name: 'Diavola'
    },
    {
        id: 008,
        name: 'Vegetariana'
    },
    {
        id: 009,
        name: 'Capresse'
    },
    {
        id: 010,
        name: 'Diversa'
    },
    {
        id: 011,
        name: 'Barbecue'
    },
    {
        id: 012,
        name: 'Carbonara'
    },
    {
        id: 013,
        name: 'Wiejska'
    },
    {
        id: 014,
        name: 'Quattro formaggi'
    },
    {
        id: 015,
        name: 'Tonno'
    },
    {
        id: 016,
        name: 'Góralska'
    },
    {
        id: 017,
        name: 'Pizza Fresh'
    },
    {
        id: 018,
        name: 'Salmone'
    },
    {
        id: 019,
        name: 'Manzo'
    },
    {
        id: 019,
        name: 'Pizza MIX'
    },
    {
        id: 019,
        name: 'Własna kompozycja'
    },
]

var pizzaSize = [
    {
        id: 101,
        name: '35 cm'
    },
    {
        id: 102,
        name: '45 cm'
    }
]


var burger = [
    {
        id: 005,
        name: 'Klasyczny'
    },
    {
        id: 006,
        name: 'Cheesburger'
    },
    {
        id: 007,
        name: 'WypasBurger'
    },
]


var tost = [
    {
        id: 008,
        name: 'Ser + pieczarki'
    },
    {
        id: 009,
        name: 'Ser + pieczarki + 1 składnik'
    },

]

var sos = [
    {
        id: 201,
        name: 'Czosnkowy'
    },
    {
        id: 202,
        name: 'Śmietanowy'
    },
    {
        id: 203,
        name: 'BBQ'
    },
    {
        id: 204,
        name: 'Ketchup'
    },
    {
        id: 205,
        name: 'Sos chilli'
    },
    {
        id: 206,
        name: 'Pesto bazyliowe'
    },
    {
        id: 207,
        name: 'Oliwa extra vergine'
    },

]

/* DOM list*/

function getValue() {
    var category = document.getElementById(category);
    var chosenCategory = document.getElementById(chosen__category);
    var choseSize = document.getElementById(chose__size);
    var sosSet = document.getElementById(sos);

}



function changeCat(s1, s2) {
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    var s3 = document.getElementById("chose__size");

    s2.innerHTML = "";

    if (s1.value == '01') {
        var optionArray = pizza;
        s3.style.display = "inline";
    } else if (s1.value == '02') {
        optionArray = burger;
        s3.style.display = "none";
    } else if (s1.value == '03') {
        optionArray = tost;
        s3.style.display = "none";
    }

    for (var option in optionArray) {
        var pair = optionArray[option];
        var newOption = document.createElement("option");
        newOption.value = optionArray[option].id;
        newOption.innerHTML = optionArray[option].name;
        s2.options.add(newOption);
    }
}

function setDefault() {
    var s4 = document.getElementById("sos");
    var optionSos = sos;


    for (var option in optionSos) {
        var pair = optionSos[option];
        var newOption = document.createElement("option");
        newOption.value = optionSos[option].id;
        newOption.innerHTML = optionSos[option].name;
        s4.options.add(newOption);
    }

}
setDefault();


function printValue() {

}
