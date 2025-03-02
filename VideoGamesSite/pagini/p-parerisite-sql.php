<h2 class="my-5">
    Adaugare Parere
</h2>
<form method="POST">
    <div class="mb-3">
        <label for="nume" class="form-label">
            Nume
        </label>
        <input type="text" name="nume" id="nume" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="continut" class="form-label">
            Mesaj
        </label>
        <textarea name="continut" id="continut" class="form-control" style="height:200px;" ></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Adaugare
        </button>
    </div>
</form>


<h1>
    Pareri Site
</h1>
<?php
    $rez = mysqli_query($mysql_link, "SELECT * FROM reviews ORDER BY data_adaugare DESC");
    if($rez)
    {
        $nr_rez = mysqli_num_rows($rez);
        if($nr_rez == 0)
        {
            ?>
            <div class="alert alert-warning">
                Nicio parere!
            </div>
            <?php
        }
        else
        {
            while($row = mysqli_fetch_assoc($rez))
            {
                ?>
                <div class="card mb-4">
                    <div class="card-header bg-secondary">
                        <h3 class="card-title">
                            <?=htmlentities($row['nume'])?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?=nl2br(htmlentities($row['continut']))?>
                    </div>
                    <div class="card-footer">
                        <?=htmlentities($row['data_adaugare'])?>
                    </div>
                </div>
                <?php
            }
        }
    }
?>
