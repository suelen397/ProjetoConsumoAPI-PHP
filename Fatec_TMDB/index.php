<?php
  include "conf/info.php";
  $title="Bem-Vindos";
  include_once "header.php";
?>
  <div class="bodyIndex">
    <h1>Filmes Mais Votados</h1>
    <hr>
    <ul class="listIndex">
      <?php
        include_once "api/api_toprated.php";
        foreach($toprated->results as $p){
          echo '
          <li class="itemlistIndex">
            <a class="itemlistAncor" href="movie.php?id=' . $p->id . '">
            <img src="http://image.tmdb.org/t/p/w185'. $p->poster_path . '">
            <h5 class="itemlistText">' . $p->original_title . '(' . substr($p->release_date, 0, 4) . ')</h5>
            <h6><em>Rate : ' . $p->vote_average . ' |  Vote : ' . $p->vote_count . '</em></h6>
            </a>
          </li>';
        }
      ?>
    </ul>
 </div>
<?php
  include_once "footer.php";
?>