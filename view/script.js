// Afficher les réservations du soir

const tonightReservation = document.getElementById('tonightReservation');
const titleReservation = document.getElementById('titleReservation');

titleReservation.addEventListener("click", () => {
    if (tonightReservation.style.display == 'none') {
        tonightReservation.style.display = "block";
    } else {
        tonightReservation.style.display = "none";
    }
    });


// Afficher les réservations des jours d'après

const titleFutureReservation = document.getElementById('titleFutureReservation');
const futureReservation = document.getElementById('futureReservation');

titleFutureReservation.addEventListener("click", () => {
    if (futureReservation.style.display == 'none') {
        futureReservation.style.display = "block";
    } else {
        futureReservation.style.display = "none";
    }
    });


// Afficher le panneau pour gérer les images

const imageQuai = document.getElementById('imageQuai');
const titleImage = document.getElementById('titleImage');

titleImage.addEventListener("click", () => {
    if (imageQuai.style.display == 'none') {
        imageQuai.style.display = "block";
    } else {
        imageQuai.style.display = "none";
    }
    });


// Afficher le panneau pour gérer les horaires

const titleSchedule = document.getElementById('titleSchedule');
const scheduleQuai = document.getElementById('scheduleQuai');

titleSchedule.addEventListener("click", () => {
    if (scheduleQuai.style.display == 'none') {
        scheduleQuai.style.display = "block";
    } else {
        scheduleQuai.style.display = "none";
    }
    });


//Afficher le formulaire de rajout d'image

const imageForm = document.getElementById('addImage');
const buttonImage = document.getElementById('imageAddButton');

buttonImage.addEventListener("click", () => {
    if (imageForm.style.display == 'none') {
        imageForm.style.display = "block";
    } else {
        imageForm.style.display = "none";
    }
    });


// Afficher le formulaire des ajouts des horaires

const addSchedule = document.getElementById('addSchedule');
const buttonAdd = document.getElementById('add');

buttonAdd.addEventListener("click", () => {
    if (addSchedule.style.display == 'none') {
        addSchedule.style.display = "block";
    } else {
        addSchedule.style.display = "none";
    }
    });


//Afficher le formulaire de modification des horaires

const modifySchedule = document.getElementById('modifySchedule');
const buttonModify = document.getElementById('modify');

buttonModify.addEventListener("click", () => {
    if (modifySchedule.style.display == 'none') {
        modifySchedule.style.display = "block";
    } else {
        modifySchedule.style.display = "none";
    }
    });


// Afficher le formulaire de suppression des horaires

const deleteSchedule = document.getElementById('deleteSchedule');
const buttonDelete = document.getElementById('delete');

buttonDelete.addEventListener("click", () => {
    if (deleteSchedule.style.display == 'none') {
        deleteSchedule.style.display = "block";
    } else {
        deleteSchedule.style.display = "none";
    }
    });


// Rend le formulaire des modifications d'horaire flexibles

const titles = footer.getElementsByClassName('titleSchedule');
const titleFields = document.getElementById('deleteForm');
const titleSelect = document.getElementById ('deleteSelect');
let creationInput = document.createElement ('input');
let creationLabel = document.createElement ('label');
let creationOption = document.createElement ('option');

for (let j=0; j < titles.length; j++) { 
    console.log (titles[j].innerHTML.length)
    let creationOption = document.createElement ('option');
    creationOption.setAttribute ('value', titles[j].innerHTML)
    creationOption.textContent = titles[j].innerHTML
    titleSelect.appendChild (creationOption)

}

const modifySelect = document.getElementById('modifySelect');

for (let j=0; j < titles.length; j++) { 
    console.log (titles[j].innerHTML.length)
    let creationOption = document.createElement ('option');
    creationOption.setAttribute ('value', titles[j].innerHTML)
    creationOption.textContent = titles[j].innerHTML
    modifySelect.appendChild (creationOption)

}

function selectDay () {

    let reservationDay = document.getElementById("reservationDay");
    if (typeof reservationDay !== 'undefined') {
        let weekDays = ['Lundi', 'Mardi', 'Mecredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
        for (let i = 0; i < weekDays.length; i++) {
            if (weekDays[i] = reservationDay) {
                return reservationDay;
            }
        }

    }

}


function makeCategories(titleCategories) {

    const result = {};
  
    for (let i = 0; i < titleCategories.length; i++) {
      const expression = titleCategories[i];
      if (expression.indexOf('-')) {
        const range = expression.split('-').map(j => j.trim());
        result.debut = range[0];
        result.fin = range[1];
        break;
      }
    }
  
    return result;
  }