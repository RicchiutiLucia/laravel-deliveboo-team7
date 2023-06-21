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

    const name = document.getElementById('name').value;
    const address = document.getElementById('address').value;
    const vat_number = document.getElementById('vat_number').value;
    const phone = document.getElementById('phone').value;
    const categories = document.querySelectorAll('input[type = "checkbox"]');
    const category = checkCategory(categories);
    if( name === ''){

        return false
    }
    if( address === ''){
        return false
    }
    if( vat_number === ''){
        return false
    }

    if( vat_number === ''){
        return false
    }

    if( phone === ''){
        return false
    }
    if( category === ''){
        return false
    }


    return true;

   };

   if(document.getElementById('restaurant_submit')){
    const submitButton = document.getElementById('restaurant_submit');
    submitButton.addEventListener('click', function(event){
        event.preventDefault();


        if(validateFormRestaurant()){
            const form = document.getElementById('create_restaurant_form')

            console.log('form valido');
            form.submit();
        };
        if(validateFormDish()){
            const form =  document.getElementsByClassName('my-dish-submit')

        }

       });

   };


    // Serve a controllare se delle checkbox sono spuntate
    function checkCategory(categories){
    const category = [];
     categories.forEach(i=>{if(i.checked){
        category.push(i) ;

    }
    })
        return category
    }


    //  funzione di validazione per il form di Dish

     function validateFormDish() {

         const nameDish = document.querySelector('.my-dish-name').value;
         const price = document.querySelector('.my-dish-price').value;

         if( nameDish === ''){
             return false
         }
         if( price === ''){
             return false
         }
         return true
        }
        if(document.querySelector('.my-dish-submit')){
            console.log('ciao')
            const submitButtonDish = document.querySelector('.my-dish-submit');
            submitButtonDish.addEventListener('click', function(event){
                event.preventDefault();



                if(validateFormDish()){
                    const form = document.querySelector('.my-dish-form')
                    form.submit();

                };

               });

           };

        // const submitButtonDish = document.getElementsByClassName('my-dish-submit');
        // submitButtonDish.addEventListener('click', function(event){
        //  event.preventDefault();

        //  if(validateFormDish()){
        //      console.log('form valido')
        //  }

        // });




