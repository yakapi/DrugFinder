
var medicine_select = document.getElementById('medicinal');
var no_medicine_select = document.getElementById('no_medicinal');



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

var global_name_product = [];
var product_id = [];
var product_name = [];

fetch('https://health-products.canada.ca/api/natural-licences/ProductLicence/?lang=fr&type=json', {
  cache: "force-cache"
})
.then((response) => {
  return response.json();
})
.then((myJsonName) => {
  for (let i = 0; i < myJsonName.length; i++) {
    var name_prod = myJsonName[i].product_name;
    var id_prod = myJsonName[i].lnhpd_id;
        product_name[i] = name_prod;
        product_id[i] = id_prod;
      }
      global_name_product.push(product_name, product_id);
      console.log(global_name_product);
    });

        
