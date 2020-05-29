<?php
  include "conf/info.php";
  
  $id_movie = $_GET['id'];
    include_once "api/api_movie_id.php";
    include_once "api/api_movie_video_id.php";
       $title = "Detail Movie (".$movie_id->original_title.")";
    include_once "header.php";
  
?>

    <?php 
      if(isset($_GET['id'])){
      $id_movie = $_GET['id']; 
      ?>
    <h1><?php echo $movie_id->original_title ?></h1>
    <?php
      echo "<h5> ".$movie_id->tagline." </h5>";
    ?>

    <?php 

      foreach($movie_video_id->results as $video){
                    echo '<iframe width="560" height="315" src="'."https://www.youtube.com/embed/".$video->key.'" frameborder="0" allowfullscreen></iframe>';
      }
     ?>"

    <hr>
          <img src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>">
          <p>Título : <?php echo $movie_id->original_title ?></p>
          <p>Tagline : <?php echo $movie_id->tagline ?></p>
          <p>Gêneros : 
              <?php
                foreach($movie_id->genres as $g){
                  echo '<span>' . $g->name . '</span> ';
                }
              ?>
          </p>
          <p>Sinopses : <?php echo $movie_id->overview ?></p>
          <p>Data de Lançamento : <?php $rel = date('D M Y', strtotime($movie_id->release_date)); echo $rel ?>
          <p>Companhias de Produção :
              <?php
                foreach($movie_id->production_companies as $pc){
                  echo $pc->name." ";
                }
              ?>
          </p>
          <p>Países de Produção:
              <?php
                foreach($movie_id->production_countries as $pco){
                  echo $pco->name. "&nbsp;&nbsp;" ;
                }
              ?>
          </p>
          <p>Orçamento: $ <?php echo $movie_id->budget ?> </p>
          <p>Médio de Votos : <?php echo $movie_id->vote_average ?></p>
          <p>Contagem de Votos : <?php echo $movie_id->vote_count ?></p>

    <hr>

    <?php 
    } else{
      echo "<h5>Filme Não Encontrado</h5>";
    }
    ?>

<?php
  include_once "footer.php";
?>