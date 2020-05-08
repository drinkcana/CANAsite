
<?php snippet('header-internal') ?>

<?php $cock = page('cocktails')->children()->visible(); ?>

<div class="campaign-list">
  <?php foreach($cock as $cocktail): ?>
    <button class="campaing-item transformed" type="button"><a href="<?= $cocktail->url() ?>">

          <?php foreach($cocktail->files()->sortBy('sort')->limit(1) as $image): ?>

          <div class="hover-img-container box">

            <div class="hover-img cursor" style="background-image: url('<?= $image->thumb('defautl')->url() ?>');"></div>
          
          </div>

            <?php endforeach ?>

            <div class="collapsed-campaign">

              <div class="campaign-title">
                <h1>
                  <?= $cocktail->title() ?>                  
                </h1>
              </div>
            </div>
        </a>
        
             

    </button>

      <?php endforeach ?>

</div>   

<script type="text/javascript">
$(document).on('mousemove', function(e){
    $('.hover-img').css({
       left:  e.pageX,
       top:   e.pageY
    });
});
</script>

<?php snippet('tipstricks') ?>

<?php snippet('footer-internal') ?>
