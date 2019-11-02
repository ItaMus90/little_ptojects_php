$(document).ready(function () {

    //Shpw loader gif
    $('#loader_gif').show();

    //Show contents on page laod
    showContents();


});


//load table contacts via ajax after 1 sec
function showContents(){

    console.log('Show contents.....');
    setTimeout("$('#page_content').load('inc/table_contacts.php',function(){$('#loader_gif').hide();})"
    ,1000);

}