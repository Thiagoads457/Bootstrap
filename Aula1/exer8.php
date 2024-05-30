<?php
    require_once "cabecalho.php";
?>
     <form action="exer8resp.php" method="post">
    <div class="row">
        <div class="col">            
                <label for="area" class="form-label">Informe o tamanho da área em m²: </label>
                <input type="number" class="form-control" name="area" id="area">
        </div> 
        
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class=" btn btn-primary mt-2">
                Enviar
            </button>
        </div>
    </div>
</form>






<?php
    require_once "rodape.php";