<?php
    session_start();
    require_once("module/m-functii.php");

    require_once("module/m-connect.php");
    $pagina = "index";
    if(isset($_GET['pagina']))
    {
        if(true) 
            $pagina = $_GET['pagina'];
    }
    if($pagina == 'parerisite-sql' && isset($_POST['nume']))
    {
        $clean = [];
        $clean['nume'] = mysqli_real_escape_string($mysql_link, $_POST['nume']);
        $clean['continut'] = mysqli_real_escape_string($mysql_link, $_POST['continut']);
        if(Empty($clean['nume']) || empty($clean['continut']))
        {
            AdaugaMesaj('Numele si mesajul nu pot fi vide.', 'danger');
            header("Location: ./?pagina=parerisite-sql");
            die();
        }
        
        $q = "INSERT INTO reviews VALUES (NULL, '{$clean['nume']}', '{$clean['continut']}', NOW())";
        mysqli_query($mysql_link, $q);
        AdaugaMesaj('Mesajul dumneavoastră a fost adăugat.');
        header("Location: ./?pagina=parerisite-sql");
        die();
    }
     
    if($pagina == 'jocuri' && isset($_POST['submit']))
    {
        $var = [];
        $var['nume'] = mysqli_real_escape_string($mysql_link1, $_POST['nume']);
        $var['joc'] = mysqli_real_escape_string($mysql_link1, $_POST['joc']);
        $var['info']= mysqli_real_escape_string($mysql_link1, $_POST['info']);
        if(Empty($var['nume']) || empty($var['joc']) || empty($var['info']))
            {
                AdaugaMesaj('Numele, jocul si informatiile generale nu pot fi vide.', 'danger');
                header("Location: ./?pagina=jocuri");
                die();
            }
      
      
      
        if($fileSize > 1000000)
        {
                AdaugaMesaj('Dimensiunea imaginii este prea mare!','danger');
                header("Location: ./?pagina=jocuri");
        }
        else
        {
          
          $fileName = $_FILES["image"]["name"];
          $fileSize = $_FILES["image"]["size"];
          $tmpName = $_FILES["image"]["tmp_name"];
          if(empty($tmpName))
            {
              $v = "INSERT INTO jocuri VALUES (NULL, '{$var['nume']}', '{$var['joc']}','{$var['info']}',NULL, NOW())";
            mysqli_query($mysql_link1, $v);
            AdaugaMesaj('Mesajul dumneavoastră a fost adăugat.');
            header("Location: ./?pagina=jocuri");
            die();
            }
          else{
              $validImageExtension = ['jpg', 'jpeg', 'png'];
              $imageExtension = explode('.', $fileName);
              $imageExtension = strtolower(end($imageExtension));
                if ( !in_array($imageExtension, $validImageExtension) ){
                      AdaugaMesaj("Poți încărca numai imagini", 'danger');
                      header("Location: ./?pagina=jocuri");
                      die();
                }
          else 
              {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;
          
                move_uploaded_file($tmpName, 'img/' . $newImageName);
              $v = "INSERT INTO jocuri VALUES (NULL, '{$var['nume']}', '{$var['joc']}','{$var['info']}','$newImageName', NOW())";
              mysqli_query($mysql_link1, $v);
              AdaugaMesaj('Mesajul dumneavoastră a fost adăugat.');
              header("Location: ./?pagina=jocuri");
              die();
          
              }
        }
        }
      }
            
     


        
  
                
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumea Jocurilor Video</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylemain.css" rel="stylesheet">
    

    <style>
        nav {
        box-shadow: 0 15px 5px 0 rgba(0,0,0,.2);
    }
        
        .carousel-inner{
          box-shadow: 4px 5px 5px 3px rgba(0,0,0,.2), 4px 6px 3px 2px rgba(0, 0, 0, 0.19);;
        }
        .image-container {
        max-width: 100%;
        max-height: 100%;
        overflow: hidden;
        }
        .imagine-containermid{
          text-align: center;
          height: 300px; 
          line-height: 300px;
        }
        img {
          max-width: 100%;
          max-height: 100%;
          vertical-align: middle;
      }
      ::-webkit-scrollbar-track{
         background-color: #141414;
        }
      ::-webkit-scrollbar{
        width: 12px;
        background-color:#0b0145;
        }
      ::-webkit-scrollbar-thumb{
        background : linear-gradient(45deg, #3b3b3b, #535353);
        }
      body{
            font-family:helvetica;
        }
        
    </style>
    
  </head>
  <body>
 
    <header class="sticky-top">
      <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="./">Lumea Jocurilor Video</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./?pagina=parerisite-sql">Păreri Site</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./?pagina=jocuri">Recomandari Jocuri</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Clasamente
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="./?pagina=top2022">Top Jocuri 2022</a></li>
                    <li><a class="dropdown-item" href="./?pagina=top2010-2020">Top Jocuri 2010-2020</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="./?pagina=jocuripref">Jocuri Preferate</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
     </header>
     <?php
            AfisareMesaje();
        ?>
     <div class="container py-4">
            <?php
                include "pagini/p-{$pagina}.php";
            ?>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
  </body>
</html> 