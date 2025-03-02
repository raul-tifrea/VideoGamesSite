<?php

function AfisareMesaje()
    {
        if(!isset($_SESSION['mesaje']))
            return;
        foreach($_SESSION['mesaje'] as $mesaj)
        {
            ?>
            <div class="alert alert-<?=$mesaj['tip_mesaj']?>">
                <?=$mesaj['mesaj']?>
            </div>
            <?php
        }
        $_SESSION['mesaje'] = [];
    }
function AdaugaMesaj($mesaj, $tip_mesaj='success')
    {
        if(! isset($_SESSION['mesaje']))
            $_SESSION['mesaje'] = [];
        $_SESSION['mesaje'][] = [
            'mesaj' => $mesaj,
            'tip_mesaj' => $tip_mesaj
        ];
    }

