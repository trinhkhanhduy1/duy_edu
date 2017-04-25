<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2031.less', 'css/2031.css');
        ?> 
        <link href="css/2031.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/js.js" type="text/javascript"></script>
    </head> 

    <body>
        <div class="bg-color">

            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?php
                        include './2031-content.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>