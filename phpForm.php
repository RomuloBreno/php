
<?php
    if(array_key_exists('nome', $_POST)) :
        $nome=$_POST["nome"];
        
        ?>

        
        <h3 class="nome"><?php echo $nome ?></h3> 
        <span>Deseja aumentar a fonte?</span>
        <button class="btn-1">+</button>
        <button class="btn-2">-</button>
        
        
        <?php
      endif;
  ?>
