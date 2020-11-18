<?php
    $string = file_get_contents("https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json");
    $result = json_decode($string);
    $list = $result->tracks->items;
        foreach ($list as $key) {
          echo  '<div class="col-md-4">';
          echo '<div class="card mt-3 mb-3">';
          echo '<img class="card-img-top" src="'.$key->album->images[0]->url.'" alt="Card image cap">';
          echo '<div class="card-body">';
          echo '<b>'.$key->album->name.'</b><br>';
          echo '<p> Artists : '.$key->album->artists[0]->name.'</p>';
          echo '<p> Release date : '.$key->album->release_date.'</p>';
          $arr = $key->album->available_markets;
          echo '<p> Available'.sizeof($arr).'</p>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
        }
    ?>