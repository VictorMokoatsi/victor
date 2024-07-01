<?php
    //Initializing variables / storeing data
    $compony_name = $_POST['compony_name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $msg = $_POST['msg'];

    echo "Company name : $compony_name <br>";
    echo "Last name : $lname <br>";
    echo "email Address : $email <br>";
    echo "phone number : $number <br>";
    echo "Message : $msg <br>";

    $header = "FROM : "  . $email . "\r\n";

    $receiver = "mokoatsivictor950416@gmail.com";

    if(mail($receiver, $header, $msg))
    {
        echo'
            <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Message</title>
                </head>
                <body>

                    <div class="container">
                        <h1>Thank you for contacting me.</h1>
                        <p class="back">Go back to the <a href="index.php">Contact page</a>.</p>

                        </div>
                    </div>
                    
                </body>
            </html>
            ';
    }
    else
    {
        // header("Location: index.php");
        echo'
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Message</title>
            </head>
            <body>

                <div class="container">
                    <h1>Connection failed.</h1>
                    <p class="back">Something went wrong, Please try again <a href="index.php">Contact page</a>.</p>

                    </div>
                </div>
                
            </body>
        </html>
        ';
    }

?>