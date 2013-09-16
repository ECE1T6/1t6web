<!DOCTYPE html>
<html>
    <head>
        <title>Home of The Crew!</title>
        <link rel="stylesheet" href="/styles/main.css">
        <script src="/js/jquery-1.10.2.js"></script>
        <script src="/js/init.js"></script>
        <script src="/js/utils.js"></script>
    </head>
    <body>
        <div class="container">
            <?php
                $root = $_SERVER['DOCUMENT_ROOT'];
                include_once($root . "/header.php");
            ?>
            <div class="content">
                <div>Home of The Crew!</div>
								<img src="ECE_Crew.png" alt="Crew" width="575" height="338">
            </div>
            <?php
                include_once($root . "/footer.php");
            ?>
        </div>
    </body>
</html>
