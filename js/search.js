$(function(){

    //Живой поиск
    $('.who').bind("change keyup input click", function() {
        $.ajax({
            type: 'get',
            url: "controllers/searchController.php", //Путь к обработчику
            data: {'word':this.value},
            response: 'text',
            success: function(data){
                $(".search_result").html(data).fadeIn(); //Выводим полученые данные в списке
            }
        })
    })

    // $("select[name='category']").bind("change", function () {
    //     $.ajax({
    //         type: 'get',
    //         url: "controllers/searchController.php",
    //         data: {'category': this.value},
    //         response: 'text',
    //         success: function (data) {
    //             $(".search_result").html(data).fadeIn();
    //         }
    //     })
    // });
    
    $(".category").bind("change", function () {
        $.ajax({
            type: 'get',
            url: "controllers/searchController.php",
            data: {'category': $("select[name='category']").val(), 'kind': $("select[name='kind']").val()},
            response: 'text',
            success: function (data) {
                $(".search_result").html(data).fadeIn();
            }
        })
    })

    $(".search_result").hover(function(){
        $(".who").blur(); //Убираем фокус с input
    });

    //При выборе результата поиска, прячем список и заносим выбранный результат в input
    $(".search_result").on("click", "li", function(){
        s_user = $(this).text();
        // $(".who").val(s_user).attr('disabled', 'disabled'); //деактивируем input, если нужно
        $(".search_result").fadeOut();
    });

});