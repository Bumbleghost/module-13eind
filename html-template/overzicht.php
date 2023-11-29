<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<?php include 'conection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio Website - Overzichtspagina</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>


  $zoekenop =

  <?php
  $stmt = $conn->prepare("SELECT * FROM portfolio");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach ($stmt->fetchALL() as $k => $v) { ?>
    <a href="detail.php?id=<?php echo $v["id"]; ?>">
      <div id="project1" class="project card shadow-sm card-body m-2"><?php
                                                                      echo $v["id"]; ?><br><?php
                              echo $v["title"]; ?><br><?php
                                  echo $v["lange-omschrijving"]; ?><br><?php
                                              echo $v["jaar"]; ?><br><?php
                                echo $v["type"]; ?><br><?php
                                echo '</div>'; ?>
    </a>
  <?php } ?>
  <main>


  
  <form method="get" action="">
    <input type="search" name="zoeken" placeholder="zoeken naar.... ">
    <input type="submit" value="zoeken">
  </form>

  <?php

  if (isset($_GET["zoeken"])) 
  {
      $zoekenop =  "%" .$_GET ["zoeken"]."%";
      $stmt = $conn->prepare("SELECT* FROM portfolio WHERE title  LIKE :zoeken ORDER BY id DESC");
      $stmt-> bindParam(':zoeken' , $zoekenop);
  } 
  else {
      $stmt = $conn->prepare("SELECT * FROM portfolio");
  }


  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach ($stmt->fetchAll() as $k => $v)
?> 


      <div class="container">
      <div class="d-flex justify-content-center align-items-center m-4">
        <nav aria-label="search and filter">
          <input type="search" class="form-control ds-input" id="search-input" 
          placeholder="Search..." aria-label="Search for..." autocomplete="off" spellcheck="false" 
          role="combobox" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" 
          dir="auto" style="position: relative; vertical-align: top;">
        </nav>
      </div>


      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-1 projects">


        <?php

        for ($a = 0; $a < 10; $a++) {

        ?>


        <?php }; ?>


        <div class="d-flex justify-content-center align-items-center m-4">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>

      </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>