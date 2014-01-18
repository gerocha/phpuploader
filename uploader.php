<?php

/**
 * Configuration
 */
define('ENCODING', 'utf-8');
define('TITLE', 'PHP File Uploader');
define('DESTINATION', '/tmp'); // No trailing slash

/**
 * Magic starts here
 */
$hasFile = false;
$uploadOk = false;

if (isset($_FILES['file']['name'])) {
    $hasFile = true;
    $tmpname = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];

    $uploadOk = move_uploaded_file(
        $tmpname,
        DESTINATION . "/{$filename}"
    );
}

?>
<html>
    <head>
        <meta charset="<?php echo ENCODING; ?>" />
        <title><?php echo TITLE; ?></title>
    </head>
    <body>
    <h1><?php echo TITLE; ?></h1>
        <?php if ($hasFile) : ?>
            <?php if ($uploadOk) : ?>
                <div style="background-color: #8F8; padding: 5px;">
                    <p>File uploaded:
                        <strong><?php echo $filename; ?></strong>
                    </p>
                </div>
            <?php else: ?>
                <div style="background-color: #F88; padding: 5px;">
                    <p>The file could not be uploaded.</p>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <form method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Choose a file to upload</legend>
                <input type="file" name="file" />
                <br />
                <input type="submit" value="Send file" />
            </fieldset>
        </form>
    </body>
</html>
