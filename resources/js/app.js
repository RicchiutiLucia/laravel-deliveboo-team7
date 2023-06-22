import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import { forEach } from 'lodash';
import.meta.glob([
    '../img/**'
])



const deleteButtons = document.querySelectorAll('.form_delete_post button[type="submit"]');


deleteButtons.forEach(button => {
    button.addEventListener('click', event => {
        event.preventDefault();

        const modal = document.getElementById('confirmModal');

        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        const confirmDeleteBtn = modal.querySelector('.btn.btn-danger')

        confirmDeleteBtn.addEventListener('click', () => {
            button.parentElement.submit();
        });
    })
});



// funzione di validazione per il form di Restaurant

function validateFormRestaurant() {
    let status = true;
    const name = document.getElementById('name').value;
    const address = document.getElementById('address').value;
    const vat_number = document.getElementById('vat_number').value;
    const phone = document.getElementById('phone').value;
    const categories = document.querySelectorAll('input[type = "checkbox"]');
    const category = checkCategory(categories);
    if (name === '') {

        status = false
        displayError('requiredName');

    }
    if (name.length > 200) {

        status = false
        displayError('nameTooLong');

    }
    if (address === '') {

        status = false
        displayError('requiredAddress');
    }
    if (address > 100) {

        status = false
        displayError('addressTooLong');
    }
    if (vat_number === '') {

        status = false
        displayError('requiredVat');

    }
    if (vat_number.length > 0 && (vat_number.length != 11 || isNaN(vat_number))) {

        status = false
        displayError('vatMustbe');

    }
    if (phone === '') {

        status = false
        displayError('requiredPhone');

    }
    if (phone.length > 0 && (phone.length > 15 || phone.length < 10)) {

        status = false
        displayError('phoneMustBe');

    }
    if (category.length == 0) {
        console.log(category)
        status = false
        displayError('requiredCategory');

    }


    return status;

};

if (document.getElementById('restaurant_submit')) {

    const submitButton = document.getElementById('restaurant_submit');
    submitButton.addEventListener('click', function (event) {
        event.preventDefault();

        const errors = document.querySelectorAll('.text-danger');
        errors.forEach(error => { error.classList.add('d-none') })


        if (validateFormRestaurant()) {
            const form = document.getElementById('create_restaurant_form')

            console.log('form valido');
            form.submit();
        }


    });

};


// Serve a controllare se delle checkbox sono spuntate
function checkCategory(categories) {
    const category = [];
    categories.forEach(i => {
        if (i.checked) {
            category.push(i);

        }
    })
    return category
}


//  funzione di validazione per il form di Dish

function validateFormDish() {
    let status = true;

    const nameDish = document.querySelector('.my-dish-name').value;
    const price = document.querySelector('.my-dish-price').value;

    if (nameDish === '') {

        status = false;
        displayError('requiredDishName');
    }
    if (price === '') {

        status = false
        displayError('requiredDishPrice');

    }

    return status
}

if (document.querySelector('.my-dish-submit')) {

    const submitButtonDish = document.querySelector('.my-dish-submit');
    submitButtonDish.addEventListener('click', function (event) {
        event.preventDefault();

        const errors = document.querySelectorAll('.text-danger');
        errors.forEach(error => { error.classList.add('d-none') })



        if (validateFormDish()) {
            const form = document.querySelector('.my-dish-form')
            form.submit();

        };

    });

};


//bottone di cancellazione 

if (document.getElementById('btn-delete')) {
    const btnDelete = document.getElementById('btn-delete')
    btnDelete.addEventListener('click', function () {
        const formDelete = document.getElementById('form-delete');
        formDelete.submit();
    });
}

//funzione per far comparire gli errori

function displayError(error) {
    const errorMessage = document.getElementById(error);
    errorMessage.classList.remove('d-none')

}

