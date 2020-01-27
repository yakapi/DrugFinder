
var company_name = document.getElementById('company-name');

// soit installer un plugin de mise en cache et où on peut sélectionner un élément à mettre
// soit intaller un service worker qui met en cache le script JS (tuto)
// sinon regarder prefetch, ajouter async au JS script js

fetch('https://health-products.canada.ca/api/drug/drugproduct/?lang=fr&type=json', {
  cache: "force-cache"
})
  .then((response) => {
    return response.json();
  })
  .then((myJson) => {
    for (let i = 0; i < myJson.length; i++) {
      var para_data = document.createElement('p');
      para_data.innerHTML = myJson[i].company_name;
      company_name.appendChild(para_data);
    }
    console.log(myJson[0].city_name);
  });