

// fetch('https://health-products.canada.ca/api/natural-licences/MedicinalIngredient/?lang=fr&type=json', {
//   cache: "force-cache"
// })
//   .then((response) => {
//     return response.json();
//   })
//   .then((myJsonMedicinal) => {
//     // console.log(myJson);
//     // for (let i = 0; i < myJson.length; i++) {
//     //   var para_data = document.createElement('option');
//     //   para_data.innerHTML = myJson[i].product_name;
//     //   medicine_select.appendChild(para_data);
//     // }

//   });

// var global_name_product = [];
// var product_id = [];
var ingredient_name = [];
var new_array = [];
var medic_use_btn = document.getElementById('MedicUse');
var noMedic_use_btn = document.getElementById('NoMedicUse');
var page = 0;


let medicine_select = document.getElementById('select-medic-use');
let no_medicine_select = document.getElementById('select-no-medic-use');


for (let i = 0; i < 5847; i++) {
  page++;  
  
  
  fetch('https://health-products.canada.ca/api/natural-licences/MedicinalIngredient/?page=' + page, {
    cache: "force-cache"
  })
  .then((response) => {
    return response.json();
  })
  .then((myJsonIngredient) => {
      
      for (let i = 0; i < 100; i++) {
        var name_ingredient = myJsonIngredient.data[i].ingredient_name;
        ingredient_name[i] = name_ingredient;
        
      }
      // let n = 0;
      
      for (let i = 0; i < ingredient_name.length; i++) {
        let boolean = false;
        
        for (let j = 0; j < i ; j++) {
          if (ingredient_name[j] == ingredient_name[i]) {
            boolean = true;
          }
        }
        if (boolean == false) {
          new_array.push(ingredient_name[i]);
          // new_array[n] = ingredient_name[i];
          // n++;
        }
        // console.log(new_array[0]);
      }
    })
    .then(() => {
      console.log(new_array.length);
      
      for (let i = 0; i < new_array.length; i++) {
        var para_data = document.createElement('option');
        para_data.innerHTML = new_array[i];
        medicine_select.appendChild(para_data);      
      }
    })
  }
    
    console.log(new_array);
    
    
    
    fetch('https://health-products.canada.ca/api/natural-licences/NonMedicinalIngredient/?lang=en&type=json', {
      cache: "force-cache"
  })
    .then((response) => {
      return response.json();
    })
    .then((myJsonIngredient) => {
      // for (let i = 0; i < myJsonIngredient.length; i++) {
      //   var para_data = document.createElement('option');
      //   para_data.innerHTML = myJsonIngredient[i].ingredient_name;
      //   no_medicine_select.appendChild(para_data);
      // }
    });

    
medic_use_btn.addEventListener('click', () => {
  console.log('hello');
  


});
noMedic_use_btn.addEventListener('click', () => {
  console.log('hello');


});

// fetch('https://health-products.canada.ca/api/natural-licences/ProductLicence/?lang=fr&type=json', {
//   cache: "force-cache"
// })
//   .then((response) => {
//     return response.json();
//   })
//   .then((myJsonName) => {
//     for (let i = 0; i < myJsonName.length; i++) {
//       var name_prod = myJsonName[i].product_name;
//       var id_prod = myJsonName[i].lnhpd_id;
//       product_name[i] = name_prod;
//       product_id[i] = id_prod;
//     }
//     global_name_product.push(product_name, product_id);
//     // console.log(global_name_product);
//   });


// var objectif = document.getElementById('objectif');
// var page = 0;
// var id = 5522478;
// var purpose = "N/A";


// for (let i = 0; i < 1071; i++) {
//   page++;

//   fetch('https://health-products.canada.ca/api/natural-licences/ProductPurpose/?page=' + page, {

//     cache: "force-cache"
//   })
//     .then((response) => {
//       return response.json();
//     })
//     .then((myJson) => {

//       for (let i = 0; i < myJson.data.length; i++) {
//         if(myJson.data[i].purpose == purpose) {
//         var para_data = document.createElement('p');
//         para_data.innerHTML = myJson.data[i].lnhpd_id;
//         objectif.appendChild(para_data);

//         console.log(myJson.data[i].lnhpd_id);

//         }

//       }

//     });

// }

