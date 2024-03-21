<?php
        if (isset($_POST["submit"])) {
                $file_name = $_FILES["invoice"]["name"];
                $file_size = $_FILES["invoice"]["size"];
                $file_tmp = $_FILES["invoice"]["tmp_name"];
                $file_type = $_FILES["invoice"]["type"];
                $file_ext = strtolower(end(explode(".", $_FILES["invoice"]["name"])));

                move_uploaded_file($file_tmp, "/var/www/html/reverse-shell/uploads/" . $file_name);

                echo "File Uploaded";
                echo "<a href='uploads/" . $file_name . "'> Visit File </a>";
        }
?>

<html>
        <head>
                <title>Upload Invoice</title>
        </head>

        <body>
                <h1>Upload Invoice</h1>
                <form method="POST" action="upload.php" enctype="multipart/form-data">
                        <input type="file" name="invoice" id="invoice">
                        <input type="submit" value="Upload Invoice" name="submit">
                </form>
        </body>
</html>
