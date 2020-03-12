<?php require_once '../core/init.php' ?>

<?php

//Create DB object
$db = new DB();

//Run query
$db->query('SELECT * FROM contacts');

print_r($db->resultset());
die();

?>

<div class="row col-md-12">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Group</th>
                <th scope="col" style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><a href="contact.html">John Doe</a></th>
                <td>999-999-9999</td>
                <td>johndoe@gmail.com</td>
                <td>
                    <ul class="address-details">
                        <li>55 Main Street</li>
                        <li>Asmeur, MA 00312</li>
                    </ul>
                </td>
                <td>Family</td>
                <td>
                    <ul>
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </ul>
                </td>
            </tr>

            <tr>
                <th><a href="contact.html">John Doe</a></th>
                <td>999-999-9999</td>
                <td>johndoe@gmail.com</td>
                <td>
                    <ul class="address-details">
                        <li>55 Main Street</li>
                        <li>Asmeur, MA 00312</li>
                    </ul>
                </td>
                <td>Family</td>
                <td>
                    <ul>
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </ul>
                </td>
            </tr>

            <tr>
                <th><a href="contact.html">John Doe</a></th>
                <td>999-999-9999</td>
                <td>johndoe@gmail.com</td>
                <td>
                    <ul class="address-details">
                        <li>55 Main Street</li>
                        <li>Asmeur, MA 00312</li>
                    </ul>
                </td>
                <td>Family</td>
                <td>
                    <ul>
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </ul>
                </td>
            </tr>

            <tr>
                <th><a href="contact.html">John Doe</a></th>
                <td>999-999-9999</td>
                <td>johndoe@gmail.com</td>
                <td>
                    <ul class="address-details">
                        <li>55 Main Street</li>
                        <li>Asmeur, MA 00312</li>
                    </ul>
                </td>
                <td>Family</td>
                <td>
                    <ul>
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>
