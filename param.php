<?php
include "head.php";
include "functions_param.php"
?>

<br><br><br>
        <div class="inner-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            
                        </div>
                        <div class="col-sm">
                                <div class="form-group">
                                        <label for="parameter">
                                        <?php
                                            echo $nazevParametru;
                                        ?>    
                                        </label>
                                        <input type="text" class="form-control" id="parameter" placeholder=<?php echo $puvodniHodnota; ?> >
                                    </div>
                        </div>
                        <div class="col-sm">
     
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="inner-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    
                                </div>
                                <div class="col-sm">
                                        <a href=<?php echo $odkazZpet; ?>> <button type="button" class="list-btn-default">Zpět</button></a> 
                                </div>
                                <div class="col-sm">
                                      <a href=<?php echo $odkazDalsi; ?>> <button type="button" class="list-btn-default"><?php echo $nazevDalsi; ?></button></a> 
                                </div>
                            </div>
                        </div>
                    </div>    
                    <br><br><br><br><br>
              


<?php
include "foot.php";
?>