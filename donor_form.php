<?php

if (isset($_POST['submit1'])) {
    $filename = "assets/doc/donor_form.pdf";

    // Header content type
    header("Content-type: application/pdf");

    header("Content-Length: " . filesize($filename));

    // Send the file to the browser.
    readfile($filename);
}
