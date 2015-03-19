<?php
$fin_url="aleksitaipalecom.php";
$eng_url="aleksitaipalecom.php";
include('head.php');
include("header.php");?>
<section class="color2 infoPage">
	<div class="row">
		<div class="large-6 columns small-12 columns">
			<div class="image-gallery hisrc">
				<img src="img/resized/aleksidesk-small.png" data-1x="img/resized/aleksidesk-large.png" data-2x="img/resized/aleksidesk-retina.png">
			</div>
		</div>
		<div class="large-6 columns small-12 columns">
			<h2>aleksitaipale.com</h2>
			<ul class="techList">
				<li>HTML</li>
				<li>SASS</li>
				<li>PHP</li>
				<li>JavaScript & JQuery</li>
			</ul>
			<p>Oma kotisivuni. Toteutettu <a href="http://sass-lang.com/">SASSilla</a> (jonka compile <a href="http://gruntjs.com/">Gruntilla</a>) ja
				<a href="http://foundation.zurb.com/grid.html">Foundation Gridiä</a> hyödyntäen. Mukana myös jonkin verran PHP:tä, jotta vältetään koodin
				turha toisto. Kuvat skaalautuvat käyttäjän laitteen perusteella <a href="https://github.com/teleject/hisrc">hisrc:n</a> avulla, ettei
				mobiilikäyttäjät joudu turhaan lataamaan isoja tiedostoja. Tässä oli aika paljon itselleni uutta teknologiaa (Grunt, Sass, Foundation), mutta
				loppujen lopuksi ne osoittautuivat lähinnä tekoprosessia helpottaviksi.
			</p>
		</div>
	</div>
</section>
<?php include("footer.php");?>


