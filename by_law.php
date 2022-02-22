<?php

if (isset($_POST['submit2'])) {
    $filename = "assets/doc/bylaws.pdf";

    // Header content type
    header("Content-type: application/pdf");

    header("Content-Length: " . filesize($filename));

    // Send the file to the browser.
    readfile($filename);
}
