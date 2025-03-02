<?php
    session_start();
    
    require_once("module/modul-functii.php");


    if(! login())
    {
        header("Location: https://www.google.com");
        die();
    }
    /// preia fisierul trimise
    /// il muta in floderul jocuri
    /// redirectioneaza browserul pe pagina cu jocurile!!!

    ///  $_FILES

    

    if(! isset($_FILES['fisier']))
    {
        AdaugaMesaj("Folosește acest formular!!", 'danger');
        header("Location: ./?pagina=jocuri");
        die();
    }

    if($_FILES['fisier']['error'] != 0)
    {
        AdaugaMesaj("Ai apasat browse?", 'danger');
        header("Location: ./?pagina=jocuri");
        die();
    }

    if(strpos($_FILES['fisier']['type'], "image") !== 0) 
    {
        AdaugaMesaj("Poți încărca numai imagini", 'danger');
        header("Location: ./?pagina=jocuri");
        die();
    }

    if(move_uploaded_file($_FILES['fisier']['tmp_name'], "./jocuri/".$_FILES['fisier']['name']))
    {
        AdaugaMesaj("Fișierul a fost salvat!", 'success');
        header("Location: ./?pagina=jocuri");
    }
    else
    {
        AdaugaMesaj("Eroare la mutarea fisierului pe server!", 'danger');
        header("Location: ./?pagina=jocuri");
    }
    die();

    print "<pre>";
    var_dump($_FILES);
    print "</pre>";