<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">
        <title>Homework 8</title>
    </head>
    <body>
        <div class="container border border-2 py-3 mt-3">
            <?php include "forms/registration.html" ?>
        </div>
        <?php
            if (!is_null($_POST["formRegistration"])) {
                $passwordLength = strlen($_POST["userPassword"]);
                echo "<div class='container border border-top-0 border-2 py-3'>";
                echo "<div class='fw-bold'>Your data has been sent successfully!</div>";
                echo "<div class='ps-3'>";
                echo "<div>Name: ". $_POST["userName"]. "</div>";
                echo "<div>Email: ". $_POST["userEmail"]. "</div>";
                echo "<div>Country: ". $_POST["userCountry"]. "</div>";
                echo "<div>Password: ";
                for ($i = 0; $i < $passwordLength; $i++) echo "*";
                echo "</div>";
                echo "<div>User agreement: ";
                echo $_POST["userAgreement"] ? "Accepted</div>" : "Not accepted</div>";
                echo "</div></div>";
            }
        ?>
    </body>
</html>