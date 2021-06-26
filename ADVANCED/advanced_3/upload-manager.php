<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # check if file was uploaded without error
    ### Once the form is submitted, the information about the uploaded file can be accessed via PHP superglobal array called $_FILES. 
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"]/*  This array value specifies error or status code associated with the file upload, e.g. it will be 0, if there is no error */ == 0) {
        $allowed = array('jpg' => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "PNG" => "image/PNG");
        ### This array value specifies the original name of the file, including the file extension. It doesn't include the file path.
        $filename = $_FILES["photo"]["name"];
        echo "File Name: " . $_FILES["photo"]["name"] . "<br>";
        ###  This array value specifies the MIME type of the file.
        $filetype = $_FILES["photo"]["type"];
        echo "File Type: " . $_FILES["photo"]["type"] . "<br>";
        ### This array value specifies the file size, in bytes.
        $filesize = $_FILES["photo"]["size"];
        echo "File Size: " . ($_FILES["photo"]["size"] / 1024) . " KB<br>";
        echo "Stored in: " . $_FILES["photo"]["tmp_name"];

        #verify file extentsion
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed)) die("Error: select a vaild format");


        # verfiy MYME type of file
        if (in_array($filetype, $allowed)) {
            # check weather exist before uploading
            if (file_exists("upload/" . $filename)) {
                echo $filename . " already exist";
                header('Refresh: 3; URL=index.html');
            } else {
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "file was uploaded successfully";
                header('Refresh: 3; URL=index.html');
            }
        } else {
            echo "problem with uploading the file, try later";
            header('Refresh: 3; URL=index.html');
        }
    } else {
        echo "Error: There was a problem uploading your file. Please try again.";
        header('Refresh: 3; URL=index.html');
    }
} else {
    echo "Error: " . $_FILES["photo"]["error"];
    header('Refresh: 5; URL=index.html');
}
