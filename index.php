<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
  <title>Document</title>
</head>

<body>
  <div class="container">
    <?php
        require_once __DIR__ . '/vendor/autoload.php';
        $parser = new Mni\FrontYAML\Parser;
        $directory = './articles';
        $docsarray = array_diff(scandir($directory), array('..', '.'));;
    ?>
    <div class="flex">

      <?php foreach ($docsarray as $doc){
           $text = file_get_contents('./articles/'.$doc);
           $document = $parser->parse($text);
           $yaml = $document->getYAML();
           $title = $yaml['title'];
           $description = $yaml['description'];
           $imgurl = $yaml['url'];
           $html = $document->getContent();
    ?>
      <div class="col-md-3">
        <div class="card mb-4 shadow-sm">
          <img src=<?php echo $imgurl?> width=100%, height="170px" alt="some company">
          <div class="card-body">
            <h6><?php echo $title?></h6>
            <p class="card-text"><?php echo $description?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a class="btn btn-sm btn-primary" href="./blogpost.php?name=<?php echo $doc?>">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php } ?>
  </div>

</body>

</html>