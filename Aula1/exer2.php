<?php
    require_once"cabecalho.php";
?>

<form action="exer2resp.php" method="post">
    <div class="row">
        <div class="col">
            <?php for ($i=1;$i<=7;$i++){?>
                <label for="valor" class="form-label">Informe o valor <?= $i ?></label>
                <input type="number" class="form-control" name="valor[]" id="valor">
            <?php } ?>
        </div>
    </div>
</form>




<?php   
    require_once"rodape.php";