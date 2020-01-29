
<!doctype html>
<html lang="en">
<head>

  
  <!--

DESIGN AND DEVELOPMENT BY
 
    ___       ___       ___       ___       ___       ___       ___       ___   
   /\  \     /\  \     /\  \     /\  \     /\  \     /\__\     /\__\     /\  \  
  /::\  \   /::\  \   /::\  \   /::\  \   /::\  \   /:/  /    /:/__/_   /::\  \ 
 /::\:\__\ /::\:\__\ /::\:\__\ /::\:\__\ /::\:\__\ /:/__/    /::\/\__\ /:/\:\__\
 \/\::/  / \/\::/  / \/\::/  / \;:::/  / \:\:\/  / \:\  \    \/\::/  / \:\/:/  /
   /:/  /     \/__/    /:/  /   |:\/__/   \:\/  /   \:\__\     /:/  /   \::/  / 
   \/__/               \/__/     \|__|     \/__/     \/__/     \/__/     \/__/  

www.aparelho.tv

-->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <meta name="description" content="<?= $site->descr()->html() ?>">


  <?= css(['assets/css/index.css', '@auto']) ?>
    <?= css(['assets/css/style.min.css', '@auto']) ?>
<?= css(['assets/css/flickity.min.css', '@auto']) ?>



  <?= js(['assets/js/jquery.min.js']) ?>
  <?= js(['assets/js/flickity.pkgd.min.js']) ?>
  <?= js(['assets/js/app.min.js']) ?>
    <?= js(['assets/js/instafeed.min.js']) ?>


  <?php snippet('header-social-snippets') ?>


</head>
<body class="chamaleon">

  <?php snippet('checker') ?>

    <?php snippet('menu-full') ?>

<div class="global-wrapper">

    
  <div id="swup" class="page-override">
    <header class="header-x">
      

      <nav id="menu" class="menu-override">
        <a class="logo menu-full-caller"> <img src="<?php echo url('assets/images/cana-logo-icon.svg') ?>"></a>
        <div class="buttons-wrapper">
        <?php 
        // In the menu, we only fetch listed pages, i.e. the pages that have a prepended number in their foldername
        // We do not want to display links to unlisted `error`, `home`, or `sandbox` pages
        // More about page status: https://getkirby.com/docs/reference/panel/blueprints/page#statuses
        foreach ($site->children()->listed() as $item): ?>
        <a href="<?= $item->url() ?>" class="menu-alternate"><?= $item->title() ?></a> 
        <?php endforeach ?>
        </div>
      </nav>

    </header>

