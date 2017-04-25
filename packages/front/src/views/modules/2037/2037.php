<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2037.less', 'css/2037.css');
        ?> 
        <link href="css/2037.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/2037.js" type="text/javascript"></script>
    </head> 

    <body> 
        <?php include '../2037/2037-content.php'; ?>
    </body>
</html>