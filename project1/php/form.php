<?php 
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

// a more global check if a POST was sent
// if($_SERVER['REQUEST_METHOD']== 'POST') {
    if(isset($_POST["mail"]) && $_POST["mail"] != ""){
        // trim() eliminate unwanted whitespace (from cellphone typing mostly)
        // strip-tags deactivate tags & scripts / hacking attempts
        $first_name = trim(strip_tags($_POST["first-name"]));
        $last_name = trim(strip_tags($_POST["last-name"]));
        $email = trim(strip_tags($_POST["mail"]));
        $msg = trim(strip_tags($_POST["msg"]));

        $message = 'Enlarge your penis!';
        $message .= ' Ask me how.';
        $message .= "\n\nFirst name: $first_name"; // Double quotes accepts variables inside
        $message .= "\nLast name: $last_name";
        $message .= "\nEmail: $email";
        $message .= "\n\nMessage: $msg";

        $headers = "From: juarezkdvc@yahoo.com.br" . "\r\n" .
                    "Reply-To: juarezkdvc@yahoo.com.br" . "\r\n" .
                    "X-Mailer: PHP/" . phpversion();

        mail("juarezkdvc@yahoo.com.br", "Form Submission", $message, "From: $email");

        $myfile = fopen("formfile.txt", "w") or die("Unable to open file!");
        // fopen("formfile.txt", "a") -- the "a" makes you append the info, so it doesn't overwrite.
        $txt = $message;
        fwrite($myfile, $txt);
        fclose($myfile);

        echo 'OK';
    } else {
        echo 'Something went wrong';
    };
// }

    // echo("
    //     <h1>form data</h1>
    //     <p>First name: $first_name</p>
    //     <p>Last name: $last_name</p>
    //     <p>Email: $email</p>
    //     <p>Message: $message</p>
    // ");
?>