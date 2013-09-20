<html>
    <head>
        <title>Welcome to the Gallery of the Unknown</title>
        <link rel="stylesheet" href="/styles/main.css">
        <link rel="stylesheet" href="/styles/gotu.css">
    </head>

    <body>
        <div class="container">
            <h1>Welcome to the Gallery of the Unknown</h1>
            <div class="gotu_container">
                <?php
                    $gotu_images = array();
                    foreach (glob("images/*.*") as $img) {
                        $gotu_images[] = $img;
                    }
                    shuffle($gotu_images);
                    foreach ($gotu_images as $img) {
                        echo '<img class="gotu_img" src="' . $img . '">';
                    }
                ?>
            </div>
        </div>
    </body>
</html>
