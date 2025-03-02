<style>

    #zoomA {
            --b: 3px; 
            --c: #0000 25%,#2c3333 0; 
            padding: 5px;
    background:
        conic-gradient(from 90deg  at top    var(--b) left  var(--b),var(--c)) 0    0,
        conic-gradient(from 180deg at top    var(--b) right var(--b),var(--c)) 100% 0,
        conic-gradient(from 0deg   at bottom var(--b) left  var(--b),var(--c)) 0    100%,
        conic-gradient(from -90deg at bottom var(--b) right var(--b),var(--c)) 100% 100%;
    background-size: 50px 50px; 
    background-repeat: no-repeat;
    transition: .6s;
    cursor: pointer;
        }
 

    #zoomA:hover {
         transform: scale(2.2); 
         background-size: 51% 51%;
        }
    .img{
        width:325px;
    }
</style>
<h2 class="my-5">
    Adaugare Joc
</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nume" class="form-label">
            Nume
        </label>
        <input type="text" name="nume" id="nume" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="joc" class="form-label">
            Joc
        </label>
        <input type="text" name="joc" id="joc" class="form-control">
    </div>
    <div class="mb-3">
        <label for="info" class="form-label">
            Informatii generale
        </label>
        <textarea name="info" id="info" class="form-control" style="height:200px;" ></textarea>
    </div>
    <div class="mb-3">
        <label>Adauga o imagine a jocului: </label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png "> 
    </div>
    <div class="mb-3">
        <button type="submit" name="submit"  class="btn btn-primary">
            Adaugare
        </button>
    </div>
</form>


<h1>
    Jocurile Vizitatorilor
</h1>
<?php
    $poza= mysqli_query($mysql_link1, "SELECT * FROM jocuri WHERE `image`");
    $rez = mysqli_query($mysql_link1, "SELECT * FROM jocuri ORDER BY data_adaugare DESC");
    if($rez)
    {
        $nr_rez = mysqli_num_rows($rez);
        if($nr_rez == 0)
        {
            ?>
            <div class="alert alert-warning">
                Niciun joc adaugat!
            </div>
            <?php
        }
        else
        {   
                while($row = mysqli_fetch_assoc($rez))
                {
                    if($row["image"]===NULL)
                    {
                        ?>
                        <div class="card mb-4">
                        <div class="card-header bg-secondary">
                            <h3 style="font-size: 33px;"class="card-title-1">
                                <?=htmlentities($row['nume'])?>
                            </h3>
                        </div>
                        <div class="card-header bg-info">
                            <h4 style="font-size: 25px;"><?=nl2br(htmlentities($row['joc']))?><h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="font-size: 20px;"><?=nl2br(htmlentities($row['info']))?></p>
                        </div>
                        <div class="card-footer">
                            <?=htmlentities($row['data_adaugare'])?>
                        </div>
                    </div>
                
            
                
                    <?php
                    }
                    else
                    {
                        ?>
                    <div class="card mb-4">
                        <div class="card-header bg-secondary">
                            <h3 style="font-size: 33px;"class="card-title-1">
                                <?=htmlentities($row['nume'])?>
                            </h3>
                        </div>
                        <div class="card-header bg-info">
                            <h4 style="font-size: 25px;"><?=nl2br(htmlentities($row['joc']))?><h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="font-size: 20px;"><?=nl2br(htmlentities($row['info']))?></p>
                            <p><img class="img" id="zoomA" src="img/<?php echo $row["image"]; ?>"  title="<?php echo $row['image']; ?>"></p>
                        </div>
                        <div class="card-footer">
                            <?=htmlentities($row['data_adaugare'])?>
                        </div>
                    </div>
                
            
                
                    <?php
                    }
                }
        }
    }

?>