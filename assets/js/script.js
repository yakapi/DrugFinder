
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
