<?php
if (isset($_REQUEST["file"])) {
    // Get para
    $file = urldecode($_REQUEST["file"]); //decode URL-encoded string

    # test weather the file name contains illegal char
    if (preg_match('/^[^.][-a-z0-9_.]+[a-z]$/i', $file)) {
        $filepath = "images/" . $file;
        # process downloading
        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
            header('Expires: 0');
            header('Cash-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            flush(); // Flush sys output buffer
            readfile($filepath);
            die();
        } else {
            http_response_code(404);
            die();
        }
    } else {
        die("Invaild file name");
    }
}
