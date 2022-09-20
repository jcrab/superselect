<?php session_start();

// TODO: include w3schools form validation function here...

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // TODO: sanitize the input vars and set cookie and/or session value
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Superglobal output</h2>
        TODO: dump all superglobals here similar to ENV...
        <h2>ENV</h2>
        <?php print_r($_ENV) ?>
        <hr/>
        <!-- TODO: include menu -->
    </body>
</html>
