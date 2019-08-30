var App = (function(){


    function _submit(){

        //Create out XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        //Create some variables we need to send to our PHP file

        var url = "test.php";

        var first_name = document.getElementById('first_name').value;
        var last_name = document.getElementById('last_name').value;

        var parms = "first_name=" + first_name + "&last_name=" + last_name;

        xhr.open("POST", url, true);

        //Set Content type header information for sending url encode variables
        //in the request

        xhr.setRequestHeader('Content-type', "application/x-www-form-urlencoded");

        //Access the onreadystatechange event for XMLHttpRequest object

        xhr.onreadystatechange = function() {

            if (xhr.readyState === 4  && xhr.status === 200){

                var request_data = xhr.responseText;

                document.getElementById('status').innerHTML = request_data;

            }

        }


        //Send the data to PHP now ... and wait to response to upadte the status div

        xhr.send(parms);//Actually execute the request
        document.getElementById('status').innerHTML = "processing ....";


    }

    function _execute() {

        var submit = document.getElementById('btn_submit');

        submit.addEventListener('click', _submit);

    }

    return {

        exe: _execute

    }

}());


App.exe();