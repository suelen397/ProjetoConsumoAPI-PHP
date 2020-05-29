<?php
$input=$_GET['search'];
$validate= explode(" ", $input);
$search = join("-", $validate);
$channel = "movie";
include_once "conf/info.php";
$title = 'Result Search | '.$input;
include_once "header.php";
include_once "api/api_search.php";
?>
    <h3>Resultados da Busca: <em><?php echo $input?></em></h3>
    <hr>
    <ul>
<?php
	
	foreach($search->results as $results){
		$title 		= $results->title; //propiedade do objeto 
		$id 		= $results->id; 
		$release	= $results->release_date; 
		if (!empty($release) && !is_null($release)){ //exclamação faz a negação da condição
			$tempyear 	= explode("-", $release); // explode vai separa a string em um array dado a condição "-" ["ano","mes","dia"]
			$year 		= $tempyear[0];
			if (!is_null($year)){
				$title = $title.' ('.$year.')';
			}
		}
		$backdrop 	= $results->backdrop_path;
		if (empty($backdrop) && is_null($backdrop)){
			$backdrop =  dirname($_SERVER['PHP_SELF']).'/image/no-gambar.jpg';
		} else {
			$backdrop = 'http://image.tmdb.org/t/p/w185'.$backdrop;
		}
		echo '<li><a href="movie.php?id=' . $id . '"><img src="'.$backdrop.'"><h4>'.$title.'</h4></a></li>';
	}
        ?>
        </ul>
 <?php
include_once('footer.php');
?>
