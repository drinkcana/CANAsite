<nav class="menu-full">

    <div class="nav-top">
      <button class="menu-full-caller menu-blur-caller" alt="close this menu"></button>
      <a class="cana-home" href="<?= $site->url() ?>"><img src="<?php echo url('assets/images/cana-logotype.svg') ?>" alt="CÃNA Logo in Written"></a>
      <button class="cart-future soon"><img src=""></button>
    </div>

          <div class="menu-list">
            <a href="https://www.drinkcana.com/product" target="_blank">Shop</a>
            <?php 
              foreach ($site->children()->visible() as $item): ?>
          
                <?= $item->title()->link() ?>

              <?php endforeach ?>
              
           <a href="/campaigns" >Campaigns</a>    
          <a href="/stockists" class="">Stockists</a>
              
          <a href="/" class="soon">Our Suppliers (soon)</a>
         


        </div>

        <div class="menu-social">
          <a class="talk" href="https://open.spotify.com/playlist/2sc6aaRsuU2SHB3qRvDD2c?si=WJXwFqTcTNyICtJOSdHghg" target="_blank">Listen</a>
          <a class="stalk" href="https://www.instagram.com/drinkcana/" target="_blank">Stalk</a>
        </div>
      </nav>
