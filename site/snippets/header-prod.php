<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * This header snippet is reused in all templates. 
 * It fetches information from the `site.txt` content file and contains the site navigation.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- The title tag we show the title of our site and the title of the current page -->
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <meta name="description" content="<?= $site->descr()->html() ?>">

  <!-- Stylesheets can be included using the `css()` helper. Kirby also provides the `js()` helper to include script file. 
        More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers -->
  <?= css(['assets/css/index.css', '@auto']) ?>
    <?= css(['assets/css/style.min.css', '@auto']) ?>
<?= css(['assets/css/flickity.min.css', '@auto']) ?>



  <?= js(['assets/js/jquery.min.js']) ?>
  <?= js(['assets/js/flickity.pkgd.min.js']) ?>
  <?= js(['assets/js/app.min.js']) ?>




</head>
<div class="global-wrapper">
<body class="chamaleon internal-bg-color">

    <?php snippet('menu-full') ?>

  <div id="swup" class="page-override">
    <header class="header-x dark-menu remove-after">
      <a href="javascript:history.back()">
        <button 
        class="menu-full-caller menu-blur-caller button-return prod-return" alt="back to main page">
            
        </button></a>
      

      <nav id="menu" class="menu-override article-menu">
        <a class="logo menu-full-caller"> <img src="<?php echo url('assets/images/cana-logo-icon-bk.svg') ?>" class="avoid-mobile"></a>
        <div class="buttons-wrapper buttons-internal">

        </div>
      </nav>

    </header>



