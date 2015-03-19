<?php 
if (isset($eng_url)) {
  $eng_link =  "/en/".$eng_url;
} else {
  $eng_link =  "/en/";
}

if (isset($fin_url)){
  $fin_link = "/".$fin_url;
} else {
  $fin_link = "/";
}
?>

<body>
  <header class="color1">
    <div class="row" data-equalizer>
      <div class="large-7 columns small-12 columns" data-equalizer-watch>
        <a href="index.php"><h1>Aleksi Taipale</h1></a>
      </div>
      <div class="large-5 columns small-12 columns" data-equalizer-watch>
        <nav>
          <div class="row">
            <a href="index.php"><div class="large-4 columns small-12 columns">Etusivu</div></a>
            <a href="mina.php"><div class="large-4 columns small-12 columns">Minä</div></a>
            <a href="<?php echo $fin_link; ?>"><div class="large-2 columns small-6 columns language">FI</div></a>
            <a href="<?php echo $eng_link; ?>"><div class="large-2 columns small-6 columns language">EN</div></a>
          </div>
        </nav>
      </div>
    </header>
