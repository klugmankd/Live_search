<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/search.js"></script>
</head>
<body>
    <input type="text" name="word" placeholder="Живой поиск" value="" class="who"  autocomplete="off">
    <select class="category" name="category" id="">
        <option selected disabled></option>
        <option value="1">web</option>
        <option value="2">console</option>
    </select>
    <select class="category" name="kind" id="">
        <option selected disabled></option>
        <option value="1">client</option>
        <option value="2">server</option>
    </select>
    <ul class="search_result"></ul>
</body>
</html>