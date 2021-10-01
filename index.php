<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li>
                <a href="index.php?id=HTML">HTML</a>
            </li>
            <li>
                <a href="index.php?id=CSS">CSS</a>
            </li>
            <li>
                <a href="index.php?id=JavaScript">JavaScript</a>
            </li>
        </ol>
        <h2>
            <?php 
                echo $_GET["id"];
            ?>
        </h2>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore dolores vel nostrum tempore expedita beatae reiciendis autem quaerat libero temporibus, eius aperiam maiores magnam voluptatem ipsum hic. Unde, eos est.
        
    </body>
</html>