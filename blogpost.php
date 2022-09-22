<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container margin-20">
    <?php
        require_once __DIR__ . '/vendor/autoload.php';
        $filename = $_GET['name'];
        $text = file_get_contents('./articles/'.$filename);
        $parser = new Mni\FrontYAML\Parser;
        $document = $parser->parse($text);
        $yaml = $document->getYAML();
        $html = $document->getContent();
        echo $html;
    ?>
</body>
</html>