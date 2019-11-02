
<?php require_once "inc/header.php";?>

    <div class="container">

        <div class="row pt-2">

            <div class="col-md-6">

                <h1>Address Book</h1>

            </div>

            <div class="col-md-6">

                <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#add_contact">Add Contact</a>

            </div>

        </div><!--row-->

        <!--Loading gif-->
        <div id="loader_gif">
            <img src="img/lodaing.gif" alt="">
        </div>

        <!--Main Content-->
        <div id="page_content"></div>


        <!--   load inc/table_contacts.php from ajax call in app js   -->
        <?php //require_once "inc/table_contacts.php";?>
    </div><!-- container-->-->

<?php require_once "inc/add_contact_modal.php";?>
<?php require_once "inc/footer.php";?>