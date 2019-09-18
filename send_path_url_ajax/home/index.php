<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>




<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>


<script>

    var data = [1,2,3,4,5];

    $.post(
        "ajax/url_path_ajax.php",
        {data: data},
        function (data) {
            //console.log(data);
            window.open("google.com",'_blank');
            window.open(data,'_blank');
        }
    )

</script>


</body>
</html>