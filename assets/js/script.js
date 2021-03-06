
const siteurl = document.querySelector("#hidden_url");



$('#recherche').autocomplete({
    source: function (requete, reponse) {
        $.ajax({
            url: siteurl.value + '/searchbar/',
            dataType: 'json',
            data: {
                start: $('#recherche').val(), // on donne la chaîne de caractère tapée dans le champ de recherche
                max: 15
            },
            success: function (donnee) {
                reponse($.map(donnee, function (objet) {
                    return objet;
                }));
            }
        });
    }
});

let screen_block = document.getElementById('screen-block');
let product_screen = document.getElementById('product-screen');
let isRemplit = false;


let titre_champ = ['Code', 'Produit', 'Forme', 'Voie', 'Commercialisation', 'Laboratoire', 'Composition', 'Ingrédient', 'Dosage', 'Unité', 'Délivrance', 'Générique', 'Présentation'];

let statusLoad = false;

$('#search-form').submit(function (e) {
    e.preventDefault();
    let image_screen = document.getElementById('image-screen-block');
    let product_screen_blk = document.getElementById('product-screen-block');
    image_screen.classList.add('dis-none');
    let loader_content = document.getElementById('loader');
    loader_content.classList.remove('dis-none');    
        product_screen_blk.classList.remove('dis-none');
        if (isRemplit == true) {

            new Promise(function (resolve, reject) {
                product_screen = document.getElementById('product-screen');
                resolve(product_screen.remove());
            }).then(function () {
                loader_content.classList.remove('dis-none');

                let product_screen = document.createElement('div');
                product_screen.setAttribute('id', 'product-screen');
                screen_block.appendChild(product_screen);
                return product_screen;
            }).then(function (product_screen) {


                let postdata = $('#search-form').serialize();
                $.ajax({
                    type: 'POST',
                    url: siteurl.value + '/produit',
                    data: postdata,
                    dataType: 'json',
                    success: function (result) {
                        for (let i = 0; i < result.length; i++) {
                            let parent_para = document.createElement('div');
                            parent_para.setAttribute('id', "parent" + i);
                            parent_para.classList.add('block-content');
                            let title_para = document.createElement('h3');
                            let paragraphe = document.createElement('p');
                            title_para.innerHTML = titre_champ[i];
                            paragraphe.innerHTML = result[i]; 
                            parent_para.appendChild(title_para); 
                            parent_para.appendChild(paragraphe); 
                            product_screen.appendChild(parent_para); 

                        }

                    }

                }).then(function(){                 
                   statusLoad = true;
                   if (statusLoad === true) {
                    loader_content.classList.add('dis-none');            
                   }     
                });  

            })
        }
        if (isRemplit == false) {
            isRemplit = true;
            let postdata = $('#search-form').serialize();
            $.ajax({
                type: 'POST',
                url: siteurl.value + '/produit',
                data: postdata,
                dataType: 'json',
                success: function (result) {
                    for (let i = 0; i < result.length; i++) {
                        let parent_para = document.createElement('div');
                        parent_para.setAttribute('id', "parent" + i);
                        parent_para.classList.add('block-content');
                        let title_para = document.createElement('h3');
                        let paragraphe = document.createElement('p');
                        title_para.innerHTML = titre_champ[i];
                        paragraphe.innerHTML = result[i];
                        parent_para.appendChild(title_para);
                        parent_para.appendChild(paragraphe);
                        product_screen.appendChild(parent_para);

                    }
                    

                }

            }).then(function(){
                statusLoad = true;
                if (statusLoad === true) {
                 loader_content.classList.add('dis-none');            
                }      
            })

        }


})


// Apparition au défilement

const ratio = .1;

const options = {
    root: null,
    rootMargin: "0px",
    threshold: ratio
}

const handleIntersect = function(entries, observer) {
    entries.forEach(function (entry) {
        if(entry.intersectionRatio > ratio) {
            entry.target.classList.add('reveal-visible');
            observer.unobserve(entry.target);
        }
    })
}

const observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll('[class*="reveal-"]').forEach(function(r) {
    observer.observe(r);
})