$(document).ready(function(){

    const source = $("#entry-template").html();
    const template = Handlebars.compile(source);

    $.ajax({
        url: 'dischi.php',
        method: 'GET',
        success: function(data){
            var arrayGenre = [];
            for (var i = 0; i < data.length; i++) {

                var context = {
                    poster: data[i].poster,
                    title:  data[i].title,
                    author: data[i].author,
                    year: data[i].year
                };

                var html = template(context);
                $('.cards').append(html);

                if(!arrayGenre.includes(data[i].genre)){
                    arrayGenre.push(data[i].genre);
                }
            }


            for (var i = 0; i < arrayGenre.length; i++) {
                $('#select').append(`<option value="${arrayGenre[i]}">
                    ${arrayGenre[i]}
                    </option>`);
            }

        },
        error: function(){
            console.log('errore');
        }
    });


    $('#select').change(function(){    // intercetto cambio value nella select
        $('.cards').empty();  // svuoto contenitore
        var selectedGenre = $(this).val();  //recupero genere
        

        $.ajax({
            url: 'dischi.php',
            method: 'GET',
            data: {
                genre: selectedGenre
            },
            success: function(data){
                for (var i = 0; i < data.length; i++) {

                    var context = {
                        poster: data[i].poster,
                        title:  data[i].title,
                        author: data[i].author,
                        year: data[i].year
                    };

                    var html = template(context);
                    $('.cards').append(html);

                }

            },
            error: function(){
                console.log('errore');
            }
        });
    });
});
