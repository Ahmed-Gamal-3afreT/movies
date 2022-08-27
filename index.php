<?php
@include('layout\header.php');
?>
<main id="main" class="smaller  subtle show_search_false">

<section class="inner_content">
<div id="media_v4" class="media discover">
  <div class="column_wrapper">
    <div class="content_wrapper">
      <div class="title">
        <h2>Popular Movies</h2>
      </div>

      <div class="content">
        <div class="">







            <section id="media_results" class="panel results">

<div class="media_items results">
  <div id="page_1" class="page_wrapper">
    
<?php

  function curl_get_contents($url)
  {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $output = curl_exec($ch);
      curl_close($ch);
      return $output;
  }

  //echo $baseUrl;
  $category = "/3/movie/popular";
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = 1;
  }

  $url = $apiUrl . $category ."?api_key=" . $kye . "&language=" . $lang . "&page=" . $page;

$object = json_decode(curl_get_contents($url));




foreach($object->results as $result){
  $img = $baseUrl. "/t/p/w220_and_h330_face".$result->poster_path;
  $percent = str_replace(".","", $result->vote_average);
  echo "
  <div class='card style_1'>
  <div class='image'>
    <div class='wrapper'>
      <a class='image' href='movie.php/?id={$result->id}' title='{$result->original_title}'>
              <img loading='lazy' class='poster' src='{$img}' srcset='{$img} 1x, {$img} 2x' alt='{$result->original_title}'>

      </a>
    </div>
    <div class='options' data-id='616037' data-object-id='5d2e0ea0a294f042db37558d' data-media-type='movie'>
      <a class='no_click' href='#'><div class='glyphicons_v2 circle-more white'></div></a>
    </div>
  </div>
  <div class='content'>
    <div class='consensus tight'>
      <div class='outer_ring'>
        <div class='user_score_chart 5d2e0ea0a294f042db37558d' data-percent='{$percent}.0' data-track-color='#423d0f' data-bar-color='#d2d531'>
          <div class='percent'>
              <span class='icon icon-r{$percent}'></span>
          </div>
        </div>
      </div>
    </div>

    <h2><a href='/movie/616037' title='{$result->original_title}'>{$result->original_title}</a></h2>
    <p>{$result->release_date}</p>
  </div>

  <div class='hover 616037'></div>
</div>";
   
}

?>


     

    <div class="card style_1 page_1_filler filler"></div>
    <div class="card style_1 page_1_filler filler"></div>
    <div class="card style_1 page_1_filler filler"></div>

    <div id="pagination_page_<?php echo $page; ?>" data-next-page="<?php echo $page+1; ?>" data-current-page="<?php echo $page; ?>" class="pagination infinite background_color light_blue">
      <div class="loading_wrapper hide">
        <div class="ball-scale-multiple loader">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <p class="load_more"><a class="no_click load_more" data-next-page="<?php echo $page+1; ?>" data-current-page="<?php echo $page; ?>" href="/movies?page=<?php echo $page+1; ?>">Load More</a></p>
    </div>
</div>


<?php
@include('layout\footer.php');
?>