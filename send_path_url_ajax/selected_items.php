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

<table>
    <thead>
        <tr>
            <td>test1</td>
            <td>test2</td>
            <td>test3</td>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td  class="event">
            <select class="ticket">
                <option></option>
                <option value="1"selected>1</option>
                <option value="2">2</option>
            </select>
            <a href="">Press</a>
        </td>
    </tr>
    <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td  class="event">
            <select class="ticket">
                <option></option>
                <option value="1">1</option>
                <option value="2" selected>2</option>
            </select>
            <select class="ticket">
                <option></option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <a href="">Press</a>
        </td>
    </tr>
    <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td class="event">
            <select class="ticket">
                <option></option>
            </select>
            <select class="ticket">
                <option></option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <select class="ticket">
                <option></option>
            </select>
            <a href="">Press</a>
        </td>
    </tr>
    <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td  class="event">
            <select class="ticket">
                <option selected value="3">3</option>
            </select>
            <a href="">Press</a>
        </td>
    </tr>
    <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td  class="event">
            <select class="ticket">
                <option></option>
            </select>
            <select class="ticket">
                <option></option>
            </select>
            <select class="ticket">
                <option></option>
            </select>
            <a href="">Press</a>
        </td>
    </tr>
    <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td  class="event">
            <select class="ticket">
                <option></option>
            </select>
            <a href="">Press</a>
        </td>
    </tr>
    </tbody>
</table>

<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

<script>

    //if in select have only one element

    $(function() {
       f();

        $('tr .event').change(f);

    });

    function f(){

        $('tr .event').each(function(){

            var a_tag =  $(this).children('a');

            var num_select_each_column = $(this).children("select").length;
            var x = 0;

            $(this).children("select").each(function(){



                if ( $(this).children("option:selected").text().trim().length === 0){

                    x++;
                }

            });

            if (x === num_select_each_column) {

                console.log($(this).children('a').css("display", "none"));

            }else{

                $(this).children('a').css("display", "")

            }


        });

    }






</script>

</body>
</html>