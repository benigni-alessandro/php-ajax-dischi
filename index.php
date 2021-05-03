<?php include './php_partials/template/header.php' ?>

      <div class="container canzoni">
        <div class="row">
          <div class="col-12">
            <div class="card-list">
              <!-- CON VUE -->
              <div class="card"
               v-for="(card, i, key) in genere_filtered">
                <div class="card-info">
                  <div class="copertina">
                    <img :src="`${card.poster}`" alt="">
                  </div>
                  <p class="title">{{card.title}}</p>
                  <p class="autore">{{card.author}}</p>
                  <p>{{card.year}}</p>
                </div>
              </div>
              <!-- CON PHP -->
              <?php stampa_card($database) ?>
            </div>
          </div>
        </div>
      </div>
<?php include './php_partials/template/footer.php' ?>
