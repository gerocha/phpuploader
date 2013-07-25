<?php

define('DESTINATION', '/tmp');

$hasFile = false;

if (isset($_FILES['file']['name'])) {
    $hasFile = true;
    $tmpname = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];

    rename(
        $tmpname,
        DESTINATION . "/$filename"
    );
}

?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Simple File Uploader</title>
    </head>
    <body>
        <h1>File Uploader</h1>
        <?php if ($hasFile) : ?>
            <div style="background-color: #8F8; padding: 5px;">
                <p>File uploaded: <?php echo $filename; ?></p>
            </div>
        <?php endif; ?>
        <form method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Choose file to upload</legend>
                <input type="file" name="file" />
                <br />
                <input type="submit" value="Send file" />
            </fieldset>
        </form>
    </body>
</html>
