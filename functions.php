<?php

	/* SIVUT taulukossa. scandir() olisi ajanut saman asian,
	mutta koska haluamme että linkit eriävät tiedostoista niin teemme
	tälläisen key-value jutskan.
	Esimerkkinä: aaltohelsinki.com/index.php?page=joukkue-ja-derp
	Tiedosto haetaan: joukkue-ja-derp.txt
	Linkki näkyy "Joukkue" */
	$sivut = array(
		"etusivu"=>"Etusivu",
		"projekti"=>"Projekt",
		"joukkue"=>"Joukkue",
		"partnerit"=>"Partnerit",
		"blogi"=>"Blogi"
	);


	/* funktio tarkastelee GET muuttujaa page, ja lataa sen perusteella .html tiedoston /text/ kansiosta */
	function show_page(){
		global $sivut;
		/* GET datan käsittely */
		if (!isset($_GET['page'])){
			reset($sivut);
			$page = key($sivut); /* eka sivu defaulttina */
		}else{
			$page = $_GET['page'];
			/* Tässä on perjaatteessa security check ettei kysellä mitä tahansa */
			if (!array_key_exists($page, $sivut)){
				$page = "404";
			}
			// Onko nyt kyseistä sivua vielä tiedostona?
			if (!file_exists("./text/".$page.'.html'))
				$page = "404";
		}
		/* include */
		include("./text/".$page.'.html');
	}

	function show_menu(){
		global $sivut;
		foreach ($sivut as $sivu => $linkki){
			echo '<a href="index.php?page='.$sivu.'">'.$linkki.'</a>'."\n";
		}
	}

?>
