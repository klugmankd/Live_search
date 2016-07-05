<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
<!--    <script src="js/search.js"></script>-->
    <script>
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

            $(".search_result").hover(function(){
                $(".who").blur(); //Убираем фокус с input
            })

            //При выборе результата поиска, прячем список и заносим выбранный результат в input
            $(".search_result").on("click", "li", function(){
                s_user = $(this).text();
                // $(".who").val(s_user).attr('disabled', 'disabled'); //деактивируем input, если нужно
                $(".search_result").fadeOut();
            })

        });
    </script>
</head>
<body>
    <input type="text" name="word" placeholder="Живой поиск" value="" class="who"  autocomplete="off">
    <ul class="search_result"></ul>
</body>
</html>