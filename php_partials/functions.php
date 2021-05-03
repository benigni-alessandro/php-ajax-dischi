<?php
  function stampa_card($database){
    for ($i=0; $i < count($database) ; $i++) {?>
      <div class="card">
        <div class="card-info">
          <div class="copertina">
            <img src="<?php echo $database[$i]['poster']; ?>" alt="">
          </div>
          <p class="title"><?php echo $database[$i]['title']; ?></p>
          <p class="autore"><?php echo $database[$i]['author']; ?></p>
          <p><?php echo $database[$i]['year']; ?></p>
        </div>
      </div>
  <?php } ?>
  <?php }  ?>
