var offset = 0;
var itemToLoad = 4;

$(function () {

    loadArt(itemToLoad);

});

// $(window).scroll(function () {
//
//     if ($(window).scrollTop() >= $(document).height() - $(window).height() - 100){
//
//         loadArt(1);
//
//     }
//
// });

function loadArt(itemToLoad) {

    var data = {offset: offset, itemToLoad: itemToLoad};

    $.ajax({
        url: "api.php",
        type: "POST",
        data: data,
        dataType: "json",
        success: function (data) {
            console.log(54646546464);
            console.log(data);

            /*
                every time we load new item
                increment the offset
             */

            for (var i = 0; i < data.content.length; i++){

                offset ++;

                var item = data.content[i];
                var html = '<div data-item-id="' +item.id + '" class="box">' + item.content;
                html += ' ' + item.created_at + '</div>';

                $("#content").append(html);

            }

        }
    });

}

