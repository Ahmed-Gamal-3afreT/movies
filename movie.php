<?php
@include('layout\header.php');
?>

<main id="main" class="smaller  subtle show_search_false">
  <section class="inner_content movie_content backdrop poster">
    <style>
    html {
      --primaryColor: rgba(73.5, 52.5, 115.5, 1);
      --primaryColorContrast: #ffffff;
    }

    div.header {
      background: linear-gradient(to bottom right, rgba(73.5, 52.5, 115.5, 1), rgba(73.5, 52.5, 115.5, 0.84));
    }

    div.column_wrapper div.settings_panel h3 {
      color: var(--primaryColorContrast);
    }

    div.settings_panel h3.background_color {
      background-color: var(--primaryColor);
    }

    section.inner_content a, section.media_panel div.menu ul li.active a {
      color: #000;
    }

    section.inner_content a:hover {
      color: rgba(0,0,0,0.5);
    }

    section.media_panel div.menu ul li.active {
      border-bottom-color: #000000;
    }

    #shortcut_bar_scroller.scroller_wrap, div.single_column_wrapper {
      border-bottom: 1px solid var(--primaryColor);
    }

      section.inner_content div.header div.single_column *, section.inner_content div.header div.single_column a {
        color: #fff;
      }

      section.inner_content div.header div.single_column a:hover {
        color: rgba(255,255,255,0.7);
      }

      section.inner_content div.header div.single_column div.facts span.certification {
        border: 1px solid rgba(255,255,255,0.6);
        color: rgba(255,255,255,0.6);
      }

      p.new_button.rounded a span, section.inner_content section.header ul.actions li.video span, div.column_wrapper div.settings_panel h3 span.glyphicons_v2, section.inner_content section.header div.trailer a span {
        filter: invert(1);
      }

    p.new_button.rounded, section.content_score div.content_score div, div.leaderboard div.histogram div.bar span {
      border-color: var(--primaryColor);
      background-color: var(--primaryColor);
      color: var(--primaryColorContrast);
    }

    p.new_button.rounded a, section.content_score div.content_score div p {
      color: var(--primaryColorContrast);
    }

      div.header.large.first {
        border-bottom: 1px solid var(--primaryColor);
        background-position: right -200px top;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('/t/p/w1920_and_h800_multi_faces/jsoz1HlxczSuTx0mDl2h0lxy36l.jpg');
      }

      section.inner_content div.custom_bg {
        background-image: linear-gradient(to right, rgba(73.5, 52.5, 115.5, 1) 150px, rgba(73.5, 52.5, 115.5, 0.84) 100%);
      }
</style>


<script>
  $(function() {
    initializeScroller(false, '#shortcut_bar_scroller');

    $("#new_shortcut_bar").kendoMenu({
      hoverDelay: 0,
      activate: function(e) {
      }
    });
  });
</script>


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

  $category = "/3/movie/";
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }else{
    $id = 1;
  }

  $url = $apiUrl . $category . $id . "?api_key=" . $kye . "&language=" . $lang;

$object = json_decode(curl_get_contents($url));


?>

<div class="header large border first">
  <div class="keyboard_s custom_bg">

    <div class="single_column">
      <section id="original_header" class="images inner">
        <div class="poster_wrapper false">
          <div class="poster">
    <div class="image_content backdrop">
            <img class="poster lazyload" src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2_filter(blur)<?php echo $object->poster_path?>" data-src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2<?php echo $object->poster_path?>" data-srcset="https://www.themoviedb.org/t/p/w300_and_h450_bestv2<?php echo $object->poster_path?> 1x, https://www.themoviedb.org/t/p/w600_and_h900_bestv2<?php echo $object->poster_path?> 2x" alt="Thor: Love and Thunder">

    </div>
    <div class="zoom">
      <a href="#" class="no_click"><span class="glyphicons_v2 fullscreen white"></span> Expand</a>
    </div>
</div>

        </div>

        <div class="header_poster_wrapper false">
          <section class="header poster">
            <div class="title ott_false" dir="auto">

    <h2 class="22">
      <a href="/movies/movie.php/?id=<?php echo $object->id?>"><?php echo $object->title?></a>
       <span class="tag release_date">(<?php list($y,$m,$d)=explode('-',$object->release_date); echo $y;?>)</span>
    </h2>

      <div class="facts">


      <span class="certification">
        PG-13
      </span>

      <span class="release">
      <?php echo $object->release_date . " "; 
      foreach($object->production_companies as $country){
        echo $country->origin_country;
        break;
      }
      ?> 
      </span>


  <span class="genres">
    <?php 
      foreach($object->genres as $genre){
        echo "<a href='#'>$genre->name ,&nbsp;</a>";
      }

    ?>
      
  </span>

    <span class="runtime">
        <?php
          $hours = $object->runtime / 60;
          $minutes = $object->runtime % 60;
          echo (int)$hours . "h " . $minutes . "m";
        ?>
    </span>
</div>

</div>

<ul class="auto actions">
<?php $percent = $object->vote_average*10;
  $percent = (int)$percent;
?>
    <li class="chart">
      <div class="consensus details">
        <div class="outer_ring">
          <div class="user_score_chart" data-percent="<?php echo $percent;?>.0" data-track-color="#423d0f" data-bar-color="#d2d531">
            <div class="percent">
                <span class="icon icon-r<?php echo $percent;?>"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="text">User<br>Score</div>
    </li>

    <li class="tooltip use_tooltip list tooltip_hover" title="Login to create and edit custom lists">
      <a class="no_click" href="#"><span class="glyphicons_v2 thumbnails-list white"></span></a>
    </li>
    <li class="tooltip use_tooltip" title="Login to add this movie to your favorite list">
      <a id="favourite" class="no_click add_to_account_list favourite" href="#"><span class="glyphicons_v2 heart white false"></span></a>
    </li>
    <li class="tooltip use_tooltip" title="Login to add this movie to your watchlist">
      <a id="watchlist" class="no_click add_to_account_list watchlist" href="#"><span class="glyphicons_v2 bookmark white false"></span></a>
    </li>
    <li class="tooltip use_tooltip rating tooltip_hover" title="Login to rate this movie">
      <a id="rate_it" class="no_click rating" href="#"><span class="glyphicons_v2 star white false"></span></a>
    </li>

      <li class="video none">
        <a class="no_click play_trailer" href="#" data-site="YouTube" data-id="Go8nTmfrQd8" data-title="Play Trailer"><span class="glyphicons_v2 play"></span> Play Trailer</a>
      </li>
</ul>

            <div class="header_info">
                <h3 class="tagline" dir="auto"><?php echo $object->tagline?></h3>
              <h3 dir="auto">Overview</h3>
              <div class="overview" dir="auto">
                  <p><?php echo $object->overview?></p>
              </div>

            </div>
            <div>
            <p>
    <strong><bdi>Status</bdi></strong> <?php echo $object->status?>
  </p>
  
  <p><strong><bdi>Original Language</bdi></strong> <?php echo $object->original_language?></p>
  <p><strong><bdi>Budget</bdi></strong> <?php echo "$" . $object->budget?></p>
  <p><strong><bdi>Revenue</bdi></strong> <?php echo "$" . $object->revenue?></p>
            </div>
          </section>
        </div>
      </section>

        
<script>
  window.addEventListener('popstate', function(e) {
    var state = e.state;

    if (state == null) {
      return;
    } else {
      switch(state.event) {
        case 'hideOTTOffers':
          toggleOTTOffers(state);
          break;
        case 'showOTTOffers':
          toggleOTTOffers(state);
          break;
        default:
          return;
      }
    }
  });

  function openRatingDetails(consensus_position) {
      $("#rating_details_window").kendoWindow({
        title: false,
        draggable: false,
        resizable: false,
        width: 430,
        visible: false,
        position: {
          top: consensus_position.top + 89,
          left: consensus_position.left - 21,
        },
        animation: {
          open: {
            effects: "fade:in"
          },
          close: {
            effects: "fade:out"
          }
        }
      }).data("kendoWindow").open();

      $('#rating_details_window').parent().parent().find('.k-window').css({ 'border':'1px solid rgba(33, 37, 41, 0.15)' });
  }

  function loadRatingDetails(consensus_position) {
    if ($('#rating_details_window').html() == '') {
      $.ajax({
        dataType: 'html',
        url: '/movie/616037-thor-love-and-thunder/remote/rating/details?translate=false&language=en-US&locale=en-US',
        beforeSend: function() {
         activatePageLoader();
        }
      }).done(function(response) {
        deactivatePageLoader();
        $('#rating_details_window').html(response);
        openRatingDetails(consensus_position);
      }).fail(function() {
        deactivatePageLoader();
        showError('There was a problem retrieving the rating details.')
      });
    } else {
      openRatingDetails(consensus_position);
    }
  }

  $(function() {
    initializeScroller(false, '#cast_scroller');
    initializeScroller(false, '#media_scroller');

    var original_consensus_position = $('div.consensus.details').position();

    $('div.consensus.details').on('click', function(e) {
      e.preventDefault();
      loadRatingDetails(original_consensus_position);
    });

    $('section.social_panel a.media_panel').on('click', function(e) {
      e.preventDefault();
      var link = $(this);
      var selected_id = this.id;

      $.ajax({
        dataType: 'html',
        url: '/movie/616037-thor-love-and-thunder/remote/social_panel/' + selected_id + '?timezone=Africa/Cairo&translate=false'
      }).done(function(response) {
        $('section.social_panel ul li.active').removeClass('active');
        link.parent().addClass('active');

        $('section.social_panel div.content').hide().html(response).fadeIn(300);
        observer.observe();

        $("section.social_panel div.content").find("script").each(function(i) {
          eval($(this).text());
        });
      });
    });

    var review_panel_height = $('div.header.large.review').innerHeight();
    $('div.review_container div.image').height(review_panel_height);

    var original_media_panel_content = $('section.media_panel.media div.h_scroller').clone();
    $('section.media_panel.media a.media_panel').on('click', function(e) {
      e.preventDefault();
      var link = $(this);
      var item_count = link.find('span').text();
      var selected_id = this.id;

      switch(selected_id) {
        case 'popular':
          var view_all = ''
          break;
        case 'videos':
          var view_all = '<a href="/movie/616037-thor-love-and-thunder/videos">View All Videos</a>'
          break;
        case 'backdrops':
          var view_all = '<a href="/movie/616037-thor-love-and-thunder/images/backdrops">View All Backdrops</a>'
          break;
        default:
          var view_all = '<a href="/movie/616037-thor-love-and-thunder/images/posters">View All Posters</a>'
      }

      if (selected_id == 'popular') {
        $('section.media_panel.media ul li.active').removeClass('active');
        link.parent().addClass('active');
        $('section.media_panel.media div.h_scroller').scrollLeft(0).empty().html(original_media_panel_content);
        $('section.media_panel.media ul li.view_all').html(view_all);
        observer.observe();
      } else {
        $.ajax({
          url: '/movie/616037-thor-love-and-thunder/remote/media_panel/' + selected_id + '?translate=false&item_count=' + item_count,
          type: 'GET',
          beforeSend: function() {
           activatePageLoader();
          }
        }).done(function(response) {
          deactivatePageLoader();
          $('section.media_panel.media ul li.active').removeClass('active');
          link.parent().addClass('active');
          $('section.media_panel.media div.h_scroller').scrollLeft(0).empty().html(response);
          $('section.media_panel.media ul li.view_all').html(view_all);
          observer.observe();
        });
      }
    });

    function createPopularitySparkline() {
      $("#popularity_chart").kendoSparkline({
        dataSource: new kendo.data.DataSource({
          transport: {
            read: {
              url: '/movie/616037-thor-love-and-thunder/remote/popularity?translate=false',
              dataType: "json"
            }
          }
        }),
        chartArea: {
          background: "transparent"
        },
        categoryAxis: {
          categoryField: "date"
        },
        series: [{
          field: "value",
          color: "#4a3574",
          width: 2
        }],
        tooltip: {
          visible: true,
          background: "#032541",
          color: "#fff",
          border: {
            width: 0,
            color: "transparent"
          },
          font: "600 1em 'Source Sans Pro', 'Arial', sans-serif",
          padding: 0,
          template: kendo.template($("#popularity_sparkline").html()),
        }
      });
    }

    var popularity_loaded = false;
    new Waypoint({
      element: document.getElementById('popularity_waypoint'),
      handler: function(direction) {
        if (direction == 'down' && !popularity_loaded) {
          popularity_loaded = true;
          createPopularitySparkline();
        }
      },
      offset: '100%'
    });

  });
</script>

<script id="popularity_sparkline" type="text/x-kendo-tmpl">
  <div class="sparkline_template">
    <h2>#= data.dataItem.date #</h2>
    <p>Ranked #= kendo.toString(Math.abs(value), "n0") #</p>
  </div>
</script>
    </div>
  </section>
</main>

  <div class="hide">
    <div class="rating_stars">
      <input id="rating_input" value="0">
    </div>
    <div id="rating_header_wrapper" class="hide"><div id="rating_details_window"></div></div>
  </div>

<div class="hide">
  <div id="lightbox_window"></div>
</div>

<div class="hide">
  <div id="share_window">
    <section class="main_content content" style="padding: 0;">
  <form class="k-form">
    <fieldset>
      <label class="k-form-field" for="short_url">
        <span><span class="glyphicon_v2 link"></span> URL</span>
        <input class="k-textbox" type="text" name="short_url" value="https://www.themoviedb.org/movie/616037-thor-love-and-thunder" onclick="this.select()">
      </label>
    </fieldset>
  </form>
</section>

<script type="text/javascript" charset="utf-8">
  $(function() {

    // $('#service_select').on('change', function(e){
    //   selected_item = $(this).val();
    //   $('#' + selected_item + '_share').removeClass('hide');
    //   $("#share_window").data("kendoWindow").center();

    //   if (selected_item == 'twitter') {
    //     $('#facebook_share').addClass('hide');
    //   }

    //   if (selected_item == 'facebook') {
    //     $('#twitter_share').addClass('hide');
    //   }
    // });

    // $('input.share.submit').on('click', function(e) {
    //   e.preventDefault();
    //   var selected_submit_button = $(this);
    //   selected_submit_button.prop('disabled', true);

    //   if ($(this).hasClass('twitter')) {
    //     var selected_service = 'twitter';
    //   } else if ($(this).hasClass('facebook')) {
    //     var selected_service = 'facebook';
    //   }

    //   $.ajax({
    //     url: '/share/' + selected_service,
    //     type: 'POST',
    //     data: $('#' + selected_service + '_form').serialize()
    //   }).fail(function() {
    //     showError('There was a problem.');
    //     selected_submit_button.prop('disabled', false);
    //   }).done(function(response) {
    //     selected_submit_button.prop('disabled', false);

    //     if (response.failure) {
    //       showError('There was a problem sharing your message.');
    //     }

    //     if (response.success) {
    //       showSuccess('Your message has successfully been shared.');
    //       $('#share_window').data("kendoWindow").close();
    //     }
    //   });
    // });

  });
</script>
  </div>
</div>

  <div id="movie_report_window" class="hide">
    <p>You need to be logged in to continue. Click <a href="/login">here</a> to login or <a href="/signup">here</a> to sign up.</p>
  </div>

<script>
  $(function() {
    var w = window.innerWidth;
    var h = window.innerHeight;
    attachVideoPlayer(w, h);
    checkVideoHash(w, h, 'Thor: Love and Thunder');

    function swapBottomPad() {
      if (h < window.innerHeight) {
        $('section.inner_content section.header ul.actions').addClass('pad');
      } else {
        $('section.inner_content section.header ul.actions').removeClass('pad');
      }
    }


      $(function() {
        $('.user_score_chart').easyPieChart({
          lineCap: 'round',
          lineWidth: 4,
          scaleColor: false,
          size: 60,
          animate: {
            enabled: false
          }
        });
      });

    $("body").on('click', 'a.report', function(e) {
      e.preventDefault();

      $('#' + $(this).attr('window') + '_report_window').kendoWindow({
        title: 'Report an Issue',
        modal: true,
        draggable: false,
        resizable: false,
        width: 600,
        visible: false,
        pinned: true,
        animation: {
          open: {
            effects: "fade:in"
          },
          close: {
            effects: "fade:out"
          }
        },
        open: function() {
          $('body').addClass('blur');
        },
        close: function() {
          $('body').removeClass('blur');
        }
      }).data("kendoWindow").center().open();
    });

    $("ul.actions li.use_tooltip").kendoTooltip({
      position: 'bottom',
      showOn: "mouseenter",
      show: function() {
        this.popup.element.addClass("tmdb_theme custom_theme");
        if (this.content.text() != this.target().data("title") ) {
          this.refresh();
        }
      }
    }).data("kendoTooltip");

    var rating_tooltip = $('ul.actions li.rating.tooltip_hover').data("kendoTooltip");
    var list_tooltip = $('ul.actions li.list.tooltip_hover').data("kendoTooltip");

    $("div.social_links a").kendoTooltip({
      position: 'top',
      show: function() {
        this.popup.element.addClass("tmdb_theme");
      }
    }).data("kendoTooltip");

    $("ul.releases").kendoTooltip({
      filter: "li div.certification div",
      position: "top",
      width: 300,
      showOn: "mouseenter",
      content: function(e) {
        return $('#' + e.target.data('release')).html();
      },
      show: function() {
        this.popup.element.addClass("tmdb_theme");
      }
    }).data("kendoTooltip");


    $('#share').on('click', function(e){
      e.preventDefault();

      $("#share_window").kendoWindow({
        title: 'Share Thor: Love and Thunder',
        modal: true,
        draggable: false,
        resizable: false,
        width: '500',
        visible: false,
        pinned: true,
        animation: {
          open: {
            effects: "fade:in"
          },
          close: {
            effects: "fade:out"
          }
        },
        open: function() {
          $('body').addClass('blur');
        },
        close: function() {
          $('body').removeClass('blur');
        }
      }).data("kendoWindow").center().open();
    });

      var window_image_dimensions = getImageWindowDimensions(h, 0.667);

      $('body').on('keyup', function(event) {
        switch(event.which) {
          case 27:
            $('a#close').click();
          break;

          case 37:
            $('#paging a.previous_id').click();
          break;

          case 39:
            $('#paging a.next_id').click();
          break;

          default: break;
        }
      });

      $('div.zoom a').on('click', function (e){
        e.preventDefault();
        var image_id = 'pIkRyD18kl4FhoCNQuWxWu5cBLM';

        var lightbox_url_template = "/v4/image/{0}?translate=false&media_type=movie&media_id=616037&image_type=poster&image_width={1}&image_height={2}";
        $("#lightbox_window").kendoWindow({
          title: false,
          content: kendo.format(lightbox_url_template, image_id, window_image_dimensions[1], window_image_dimensions[2]),
          modal: true,
          draggable: false,
          resizable: false,
          width: window_image_dimensions[0],
          height: window_image_dimensions[2],
          visible: false,
          pinned: true,
          animation: {
            open: {
              effects: "fade:in"
            },
            close: {
              effects: "fade:out"
            }
          },
          activate: function() {
          },
          close: function() {
            $('body').removeClass('blur');
          },
          open: function(e) {
            e.sender.wrapper.addClass("borderless_window");
            $('body').addClass('blur');
          },
          refresh: function() {
            observer.observe();
          }
        }).data("kendoWindow").center().open();
      });
  });
</script>

    </div> <!-- page_wrap opened in html_head -->

    <footer class="single_column movie header_large">
      <nav>
        <div class="join">
          <img src="https://www.themoviedb.org/assets/2/v4/logos/v2/blue_square_2-d537fb228cf3ded904ef09b136fe3fec72548ebc1fea3fbbd1ad9e36364db38b.svg" alt="The Movie Database (TMDB)" width="130" height="94">

            <a class="rounded" href="/signup">Join the Community</a>
        </div>

        <div>
          <h3>The Basics</h3>
          <ul>
            <li><a href="/about">About TMDB</a></li>
            <li><a href="/about/staying-in-touch">Contact Us</a></li>
            <li><a href="/talk">Support Forums</a></li>
            <li><a href="/documentation/api">API</a></li>
            <li><a href="https://status.themoviedb.org/" target="_blank" rel="noopener">System Status</a></li>
          </ul>
        </div>
        <div>
          <h3>Get Involved</h3>
          <ul>
            <li><a href="/bible"><span class="glyphicons glyphicons-asterisk"></span> Contribution Bible</a></li>
            <li><a href="/movie/new">Add New Movie</a></li>
            <li><a href="/tv/new">Add New TV Show</a></li>
          </ul>
        </div>
        <div>
          <h3>Community</h3>
          <ul>
            <li><a href="/documentation/community/guidelines">Guidelines</a></li>
            <li><a href="/discuss">Discussions</a></li>
            <li><a href="/leaderboard">Leaderboard</a></li>
            <li><a href="https://twitter.com/themoviedb" target="_blank" rel="noopener">Twitter</a></li>
          </ul>
        </div>
        <div>
          <h3>Legal</h3>
          <ul>
            <li><a href="/documentation/website/terms-of-use">Terms of Use</a></li>
            <li><a href="/documentation/api/terms-of-use">API Terms of Use</a></li>
            <li><a href="/privacy-policy">Privacy Policy</a></li>
          </ul>
        </div>
      </nav>

      <section>Build 6568918 (4243)</section>
    </footer>


      <div id="new_media_template" class="hide">
        <div class="settings_content">
          <p>Can't find a movie or TV show? Login to create it.</p>
        </div>
      </div>

      <div id="settings_tooltip" class="hide">
        <div class="settings_content">
          <div class="group no_pad">
            <p><a href="/login">Login</a></p>
          </div>
          <div class="group">
            <p><a href="/signup">Sign Up</a></p>
          </div>
        </div>
      </div>

    <div id="keyboard_shortcuts_popup" class="hide">
      <div class="content keyboard_shortcuts">
        <div class="column">
          <h3>Global</h3>
          <div><span>s</span> focus the search bar</div>
          <div><span>p</span> open profile menu</div>
          <div><span>esc</span> close an open window</div>
          <div><span>?</span> open keyboard shortcut window</div>

          <h3>On media pages</h3>
          <div><span>b</span> go back (or to parent when applicable)</div>
          <div><span>e</span> go to edit page</div>

          <h3>On TV season pages</h3>
          <div><span>&#8594;</span> (right arrow) go to next season</div>
          <div><span>&#8592;</span> (left arrow) go to previous season</div>

          <h3>On TV episode pages</h3>
          <div><span>&#8594;</span> (right arrow) go to next episode</div>
          <div><span>&#8592;</span> (left arrow) go to previous episode</div>

          <h3>On all image pages</h3>
          <div><span>a</span> open add image window</div>
        </div>

        <div class="column">
          <h3>On all edit pages</h3>
          <div><span>t</span> open translation selector</div>
          <div><span>ctrl</span>+ <span>s</span> submit form</div>

          <h3>On discussion pages</h3>
          <div><span>n</span> create new discussion</div>
          <div><span>w</span> toggle watching status</div>
          <div><span>p</span> toggle public/private</div>
          <div><span>c</span> toggle close/open</div>
          <div><span>a</span> open activity</div>
          <div><span>r</span> reply to discussion</div>
          <div><span>l</span> go to last reply</div>
          <div><span>ctrl</span>+ <span>enter</span> submit your message</div>
          <div><span>&#8594;</span> (right arrow) next page</div>
          <div><span>&#8592;</span> (left arrow) previous page</div>
        </div>
      </div>
    </div>

    <div class="hide">
      <div id="options_tooltip">
        <div class="settings_content">
            <div class="group no_pad">
              <p class="no_hover">Want to rate or add this item to a list?</p>
              <p><a href="/login">Login <span class="glyphicons_v2 chevron-right blue pad_left"></span></a></p>
            </div>
            <div class="group">
              <p class="no_hover">Not a member?</p>
              <p><a href="/signup">Sign up and join the community <span class="glyphicons_v2 chevron-right blue pad_left"></span></a></p>
            </div>
        </div>
      </div>
    </div>

    <div class="hide">
      <div id="video_popup"></div>
    </div>

      <script src="/assets/2/kendo-2021.1.204/kendo.color.min-bce2f35513b05f0d434878f3a4aec0dcae6d4f910835fe4944ca4e902cefae05.js"></script>
      <script src="/assets/2/kendo-2021.1.204/kendo.drawing.min-5b2dec46ab9c7b4cdfa274b382c9912344f9d845e4bb6dc4e6582044234530a1.js"></script>
      <script src="/assets/2/kendo-2021.1.204/kendo.dataviz.core.min-ad7b8882ab069eb816298221b66d62722f1055411dfcac961eec7a00f1130f37.js"></script>
      <script src="/assets/2/kendo-2021.1.204/kendo.dataviz.themes.min-85b71c1596ecabfc2bb2dbf4ea4cbc7ed3992bbefb1ec798677e233ec4c7c45c.js"></script>
      <script src="/assets/2/kendo-2021.1.204/kendo.dataviz.chart.min-b733e411c72cd21f7a4e7d736b0bb51bea15cb0e07a2bd2bcbf641e244734071.js"></script>
      <script src="/assets/2/kendo-2021.1.204/kendo.dataviz.sparkline.min-b79dab2b6bafb43ce21461c46a5dbd5d7b5189de8cfa59c8c07b4117f2346bd0.js"></script>

    <script src="/assets/2/footer-ec8fd260239bf7b85be386d03eb1bcb6a8ed5062578ef49351e9984ffee6bb86.js"></script>
      <script src="/assets/2/timeago/locales/jquery.timeago.en-US-f9d144e55407ca11f35de7a0d44b0d54ec1ffc6c4039dffd5a11c0a12e6a9482.js"></script>

    <script type="text/javascript" charset="utf-8">
      var observer = lozad('.lazyload', {
        loaded: function(e) {
          e.classList.add('lazyloaded');
        }
      });
      observer.observe();

      $('#cookie_notice a.accept').on('click', function(e) {
        e.preventDefault();
        document.cookie = "tmdb._cookie_policy=true; samesite=lax; path=/; max-age=15551999;";
        $('#cookie_notice').fadeOut('fast');
      });

      $('#complete_survey').on('click', function(e) {
        e.preventDefault();
        document.cookie = "tmdb.survey_one=true; samesite=lax; path=/; max-age=2591999;";
        $('#survey').fadeOut('fast');
        window.open('https://survey.us.confirmit.com/wix/p165164730214.aspx');
      });

      $('#ignore_survey').on('click', function(e) {
        e.preventDefault();
        document.cookie = "tmdb.survey_one=true; samesite=lax; path=/; max-age=2591999;";
        $('#survey').fadeOut('fast');
      });

      function showSearch(state) {
        if ( state ) {
          $('header').removeClass('nav-up').addClass('nav-down');
          $('li.search_buttons a.close').removeClass('hide');
          $('li.search_buttons a.search').addClass('hide');
          $('div.search_bar').removeClass('hide');
          $("#search_v4").data("kendoAutoComplete").focus();
        } else {
          $('li.search_buttons a.close').addClass('hide');
          $('li.search_buttons a.search').removeClass('hide');
          $('div.search_bar').addClass('hide');
        }
      }

      $(function() {
        jQuery.timeago.settings.allowFuture = true;
        $("time.timeago").timeago();

        var didScroll;
        var lastScrollTop = 0;
        var delta = 10;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
          didScroll = true;
        });

        setInterval(function() {
          if (didScroll) {
            hasScrolled();
            didScroll = false;
          }
        }, 250);

        function hasScrolled() {
          var st = $(this).scrollTop();

          if ( Math.abs(lastScrollTop - st) <= delta )
            return;

          if ( st > lastScrollTop && st > navbarHeight ) {
            $('header').removeClass('nav-down').addClass('nav-up');
          } else {
            if ( st + $(window).height() < $(document).height() ) {
              $('header').removeClass('nav-up').addClass('nav-down');
            }
          }

          lastScrollTop = st;
        }

        var hover_tooltip = $('li.user a.no_click.tooltip_hover').kendoTooltip({
          position: 'bottom',
          show: function(e) {
            $("div.k-tooltip-button").addClass('hide');
            this.popup.element.addClass("tmdb_theme_white");
            this.element.removeClass('keyboard');
          }
        }).data("kendoTooltip");

        $('li.user a.no_click').kendoTooltip({
          autoHide: false,
          showOn: 'click',
          width: 180,
          position: 'bottom',
          content: function() {
            return $("#settings_tooltip").html();
          },
          show: function(e) {
            hover_tooltip.hide();
            $("div.k-tooltip-button").addClass('hide');
            this.popup.element.addClass("tmdb_theme_white no_pad");

            if (this.element.hasClass('keyboard')) {
              this.popup.element.find('p a')[0].focus();
            }
          }
        });

        $('li.translate').kendoTooltip({
          autoHide: false,
          content: {
            url: '/translation_popup?media_type=Movie&media_id=5d2e0ea0a294f042db37558d&referral=%2Fmovie%2F616037-thor-love-and-thunder',
            cache: true
          },
          showOn: 'click',
          width: 300,
          position: 'bottom',
          show: function(e) {
            $("div.k-tooltip-button").addClass('hide');
            this.popup.element.addClass("min_100px_height tmdb_theme_white flex");
          }
        });

        $('li.new_buttons').kendoTooltip({
          autoHide: false,
          showOn: 'click',
          width: 240,
          position: 'bottom',
          content: function() {
            return $("#new_media_template").html();
          },
          show: function(e) {
            $("div.k-tooltip-button").addClass('hide');
            this.popup.element.addClass("tmdb_theme_white");
          }
        });


        $("body").on('click', 'a.no_click', function(e) {
          e.preventDefault();
        });

        $("ul > li").hover(function() {
          $(this).find("ul.sub_nav.hide").toggle();
        });


        showSuccess = function(message, title) {
          if (title === undefined) {
            title = 'Success';
          }

          showNotification({
            title: title,
            message: message
          }, "success");
        };

        showError = function(message, title) {
          if (title === undefined) {
            title = 'Error';
          }

          showNotification({
            title: title,
            message: message
          }, "error");
        };

        var showNotification = (function() {
          var notification = $("span#notification").kendoNotification({
            stacking: "down",
              position: {
                top: 20,
                left: null,
                bottom: null,
                right: 20
              },
            autoHideAfter: 5000,
            show: function(e) {
              e.element.parent().css({
                zIndex: 99999
              });
            },
            templates: [{
              type: "error",
              template: $("#errorTemplate").html()
            },{
              type: "success",
              template: $("#successTemplate").html()
            }]
          }).data("kendoNotification");

          return function(msg, type) {
            notification.show(msg, type);
          };
        })();

        var keyboard_shortcut_popup = $('#keyboard_shortcuts_popup div.content').kendoWindow({
          title: 'Keyboard Shortcuts',
          width: '90vw',
          maxWidth: '1400px',
          actions: [ "Close" ],
          modal: true,
          draggable: false,
          resizable: false,
          visible: false,
          pinned: true,
          animation: {
            open: {
              effects: "fade:in"
            },
            close: {
              effects: "fade:out"
            }
          },
          open: function() {
            $('body').addClass('blur');
          },
          close: function() {
            $('body').removeClass('blur');
          }
        }).data("kendoWindow").center();

        $('#keyboard_shortcuts').on('click', function() {
          keyboard_shortcut_popup.open();
        });

        var seach_redirect_template = "/search{0}?query={1}";
        var processing_selected_item = false;
        var processing_manually_selected_item = false;

        window.onbeforeunload = function() {
          processing_selected_item = false;
          processing_manually_selected_item = false;
        }

        function executeSearch(url) {
          window.location = url;
        }

        function processSelectedItem(event) {
          if (event == '') {
            return;
          }

          var dataItem = null;
          var search_value = '';
          var selected_item = '';

          if (event == null) {
            dataItem = $("#search_v4").data("kendoAutoComplete").value();
          } else {
            dataItem = event.dataItem;
          }

          if ( typeof(dataItem) == 'string' ) {
            try {
              var search_value = $(dataItem).data('search-name');
            } catch(error) {
              var search_value = dataItem;
            }

            if (search_value) {
              selected_item = kendo.format(seach_redirect_template, '', encodeURIComponent(search_value));
            } else {
              selected_item = kendo.format(seach_redirect_template, '', encodeURIComponent(dataItem));
              search_value = dataItem;
            }
          } else {
            switch(dataItem.media_type) {
              case 'movie':
                selected_item = kendo.format(seach_redirect_template, '/movie', encodeURIComponent(dataItem.title));
                search_value = dataItem.title;
                break;
              case 'tv':
                selected_item = kendo.format(seach_redirect_template, '/tv', encodeURIComponent(dataItem.name));
                search_value = dataItem.name;
                break;
              case 'person':
                selected_item = kendo.format(seach_redirect_template, '/person', encodeURIComponent(dataItem.name));
                search_value = dataItem.name;
                break;
              default:
                selected_item = kendo.format(seach_redirect_template, '', encodeURIComponent(dataItem));
                search_value = dataItem;
            }
          }

          $("#search_v4").data("kendoAutoComplete").value(search_value);
          executeSearch(selected_item);
        }

        $("#search_v4").kendoAutoComplete({
          highlightFirst: false,
          minLength: 1,
          dataTextField: "title",
          template: kendo.template($("#slim_multi_search_template").html()),
          noDataTemplate: $("#search_no_data_template").html(),
          dataSource: {
            type: "json",
            serverFiltering: true,
            transport: {
              read: '/search/trending',
              parameterMap: function() {
                return { query: $("#search_v4").data("kendoAutoComplete").value() };
              }
            },
            schema: {
              data: "results"
            }
          },
          popup: {
            appendTo: $("header")
          },
          filtering: function(e) {
            var filter = e.filter != undefined ? e.filter.value : "";
            if (filter == '') {
              if ( ($('#search_v4-list #trending_search_header_template').length) == 0 ) {
                // $('#search_v4_listbox').empty();
                $('#search_v4-list').prepend($("#search_v4_headerTemplate").html());
              }
            } else {
              $("#trending_search_header_template").remove();
            }
          },
          select: function(e) {
            processing_selected_item = true;
            processSelectedItem(e);
          },
          close: function(e) {
            // e.preventDefault();
          }
        }).data("kendoAutoComplete");

        $('#search_v4').keydown(function(event) {
          if (event.keyCode == 13) {
            if (processing_selected_item) {
              return;
            } else {
              processSelectedItem(null);
            }
          }
        });

        $('header #search_form').submit(function() {
          return false;
        });

        var autocompleteInput = $('section.search .k-autocomplete input');
        autocompleteInput.on('focus', function (e) {
          var value = autocompleteInput.val();
          if (value == null || value == '') {
            $("#search_v4").data("kendoAutoComplete").search('');
          } else {
            var fieldLength = value.length;
            autocompleteInput[0].setSelectionRange(fieldLength, fieldLength);
          }
        });

        $('li.search_buttons a.search').on('click', function(e) {
          e.preventDefault();
          showSearch(true);
        });

        $('li.search_buttons a.close').on('click', function(e) {
          e.preventDefault();
          showSearch(false);
        });

        $('main.show_search_false').on('click', function(e) {
          showSearch(false);
        });

        $('header span.k-i-close[title="clear"]').on('click', function(e) {
          $('#search_v4').data("kendoAutoComplete").focus();
        });


        public_media_type_map = { 'movie': 'Movie', 'tv': 'TV Show', 'person': 'Person' };


        $(document).on('keydown', null, 'b', function() {
          if ( $('a.keyboard_s.parent').length ) {
            $('a.keyboard_s.parent')[0].click();
          }
        });

        $(document).on('keyup', null, 's', function() {
          if ( $('#search_v4').length ) {
            showSearch(true);
          }
        });

        $(document).on('keyup', null, 'shift+/', function() {
          keyboard_shortcut_popup.open();
        });

        $(document).on('keydown', null, 'left', function() {
          if ( $('span.previous a.keyboard_s').length ) {
            $('span.previous a.keyboard_s')[0].click();
          }
        });

        $(document).on('keydown', null, 'right', function() {
          if ( $('span.next a.keyboard_s').length ) {
            $('span.next a.keyboard_s')[0].click();
          }
        });

        $(document).on('keydown', null, 'm', function() {
          if ( $('#new_shortcut_bar').length ) {
            $("#new_shortcut_bar").focus();
          }
        });

        $(document).on('keydown', null, 'esc', function() {
          if ( $('div.custom_bg.keyboard_s').length && $('#ott_offers_window a.close').length ) {
            $('#ott_offers_window a.close')[0].click();
          }
        });

      });

      var gender_lookup = {
        0: 'two',
        1: 'one',
        2: 'two',
        3: 'two'
      }
    </script>

    <script id="person_template" type="text/x-kendo-tmpl">
      <div class="item profile list_item grid_item">
        <div class="image_content profile">
          <a class="result" href="/person/${data.url}" title="${data.name}" alt="${data.name}">
            # if (data.profile_path) { #
              <img class="" src="/t/p/w66_and_h66_face${data.profile_path}" alt="${data.name}" width="45" height="45" srcset="/t/p/w66_and_h66_face${data.profile_path} 1x, /t/p/w132_and_h132_face${data.profile_path} 2x">
            # } else { #
              <div class="glyphicons_v2 picture profile ${gender_lookup[data.gender]} grey no_image_holder w45_and_h45"></div>
            # } #
          </a>
        </div>

        <div class="content">
          <p class="name"><a class="result" href="/person/${data.url}" title="${data.name}" alt="${data.name}">${data.name}</a></p>

          # if (data.known_for) { #
            <p class="sub">${data.known_for}</p>
          # } #
        </div>
      </div>
    </script>

    <script id="person_template_with_known_for" type="text/x-kendo-tmpl">
      <div class="item profile list_item known_for">
        <div class="image_content profile">
          # if (data.profile_path) { #
            <img class="" src="/t/p/w66_and_h66_face${data.profile_path}" alt="${data.name}" width="45" height="45" srcset="/t/p/w66_and_h66_face${data.profile_path} 1x, /t/p/w132_and_h132_face${data.profile_path} 2x">
          # } else { #
            <div class="glyphicons_v2 picture grey no_image_holder w45_and_h45 profile"></div>
          # } #
        </div>

        <div class="content">
          <p class="name">${data.name}</p>
          # if (data.known_for) { #
            <p class="sub">${data.known_for_department} &bull; ${data.known_for}</p>
          # } else { #
            <p class="sub">No known credits.</p>
          # } #
        </div>
      </div>
    </script>

    <script id="person_result_template" type="text/x-kendo-tmpl">
      <div class="ac_item profile list_item known_for">
        <div class="image_content profile">
          # if (data.profile_path) { #
            <img class="" src="/t/p/w66_and_h66_face${data.profile_path}" alt="${data.name}" width="45" height="45" srcset="/t/p/w66_and_h66_face${data.profile_path} 1x, /t/p/w132_and_h132_bestv2${data.profile_path} 2x">
          # } else { #
            <div class="glyphicons_v2 picture grey no_image_holder w45_and_h45 profile"></div>
          # } #
        </div>

        <div class="content">
          <p class="name">${data.name}</p>
          # if (data.known_for) { #
            <p class="sub">
              # if (data.media_type) { #
                <span class="media_type person">#= public_media_type_map[data.media_type] # &bull; </span>
              # } #
              # for (var i = 0; i < data.known_for.length; i++) { #
              <span class="comma">#= data.known_for[i].title ? data.known_for[i].title : data.known_for[i].name #</span>
              # } #
            </p>
          # } else { #
            <p class="sub">No known credits.</p>
          # } #
        </div>
      </div>
    </script>

    <script id="movie_result_template" type="text/x-kendo-tmpl">
      <div class="ac_results">
        <div class="ac_item poster list_item">
          <div class="image_content poster">
            # if (data.poster_path) { #
              <img class="" src="/t/p/w45_and_h67_bestv2${data.poster_path}" alt="${data.title}" width="45" height="67" srcset="/t/p/w45_and_h67_bestv2${data.poster_path} 1x, /t/p/w90_and_h134_bestv2${data.poster_path} 2x">
            # } else { #
              <div class="glyphicons_v2 picture grey no_image_holder w45_and_h67"></div>
            # } #
          </div>

          <div class="content">
            <p class="name">${data.title}</p>
            <p class="sub">
              # if (data.media_type) { #
                <span class="media_type movie">#= public_media_type_map[data.media_type] # &bull; </span>
              # } #
              # if (data.original_title !== data.title) { #
                <span class="comma"><span class="original_title">#= data.original_title #</span></span>
              # } #
              # if (data.release_date) { #
                <span class="comma"><span class="release_date">#= data.release_date #</span></span>
              # } #
            </p>
          </div>
        </div>
      </div>
    </script>

    <script id="tv_show_result_template" type="text/x-kendo-tmpl">
      <div class="ac_item poster list_item">
        <div class="image_content poster">
          # if (data.poster_path) { #
            <img class="" src="/t/p/w45_and_h67_bestv2${data.poster_path}" alt="${data.title}" width="45" height="67" srcset="/t/p/w45_and_h67_bestv2${data.poster_path} 1x, /t/p/w90_and_h134_bestv2${data.poster_path} 2x">
          # } else { #
            <div class="glyphicons_v2 picture grey no_image_holder w45_and_h67"></div>
          # } #
        </div>

        <div class="content">
          <p class="name">${data.name}</p>
          <p class="sub">
            # if (data.media_type) { #
                <span class="media_type tv">#= public_media_type_map[data.media_type] # &bull; </span>
              # } #
            # if (data.original_name !== data.name) { #
              <span class="comma"><span class="original_title">#= data.original_name #</span></span>
            # } #
            # if (data.first_air_date) { #
              <span class="comma"><span class="release_date">#= data.first_air_date #</span></span>
            # } #
          </p>
        </div>
      </div>
    </script>

    <script id="slim_movie_result_template" type="text/x-kendo-tmpl">
      <div class="ac_item poster list_item">
        <div class="image_content poster">
          # if (data.poster_path) { #
            <img class="" src="/t/p/w45_and_h67_bestv2${data.poster_path}" alt="${data.title}" width="45" height="67" srcset="/t/p/w45_and_h67_bestv2${data.poster_path} 1x, /t/p/w90_and_h134_bestv2${data.poster_path} 2x">
          # } else { #
            <div class="glyphicons_v2 picture grey no_image_holder w45_and_h67"></div>
          # } #
        </div>

        <div class="content">
          <p class="name">${data.title}</p>
          <p class="sub">
            # if (data.original_title !== data.title) { #
              <span class="comma"><span class="original_title">#= data.original_title #</span></span>
            # } #
            # if (data.release_date) { #
              <span class="comma"><span class="release_date">#= data.release_date #</span></span>
            # } #
          </p>
        </div>

        <p><span class="media_type movie">#= public_media_type_map[data.media_type] #</span></p>
      </div>
    </script>

    <script id="multi_search_template" type="text/x-kendo-tmpl">
      <div class="ac_results">
        # if (data.media_type == 'movie') { #
          #= kendo.render(kendo.template($("\\#movie_result_template").html()), [data]) #
        # } else if (data.media_type == 'tv') { #
          #= kendo.render(kendo.template($("\\#tv_show_result_template").html()), [data]) #
        # } else if (data.media_type == 'person') { #
          #= kendo.render(kendo.template($("\\#person_result_template").html()), [data]) #
        # } #
      </div>
    </script>

    <script id="search_v4_headerTemplate" type="text/x-kendo-template">
      <div id="trending_search_header_template" class="slim_search_results_header">
        <div class="wrapper">
          <h2><span class="glyphicons_v2 trending"></span> Trending</h2>
        </div>
      </div>
    </script>

    <script id="search_no_data_template" type="text/x-kendo-template">
      <div class="slim_search_results_header no_data">
        <div class="wrapper">
          <h2>No Results</h2>
        </div>
      </div>
    </script>

    <script id="slim_multi_search_template" type="text/x-kendo-tmpl">
      # if (data.media_type == 'movie') { #
        <div class="slim_search_results slim">
          <div class="wrapper">
            <div class="glyphicons_v2 film"></div>
            <p>#= data.title # <span>in Movies</span></p>
          </div>
        </div>
      # } else if (data.media_type == 'tv') { #
        <div class="slim_search_results slim">
          <div class="wrapper">
            <div class="glyphicons_v2 tv"></div>
            <p>#= data.name # <span>in TV Shows</span></p>
          </div>
        </div>
      # } else if (data.media_type == 'person') { #
        <div class="slim_search_results slim">
          <div class="wrapper">
            <div class="glyphicons_v2 user"></div>
            <p>#= data.name # <span>in People</span></p>
          </div>
        </div>
      # } else { #
        <div class="slim_search_results slim">
          <div class="wrapper">
            <div class="glyphicons_v2 search"></div>
            <p>#= data #</p>
          </div>
        </div>
      # } #
    </script>

    <script id="delete-confirmation" type="text/x-kendo-template">
      <section class="window_content">
        <p class="delete-message">Are you sure?</p>

        <button class="delete-cancel k-button">No</button>
        <button class="delete-confirm k-button">Yes</button>
      </section>
    </script>
    <div id="dialog_window"></div>

    <span id="notification" class="hide"></span>
    <script id="errorTemplate" type="text/x-kendo-template">
      <div class="notification error">
        <span>
          <h2><span class="glyphicons_v2 circle-alert invert svg"></span> #= title #</h2>
          # if (message instanceof Array) { #
            <ul>
              # for (var i = 0; i < message.length; i++) { #
                <li>#= message[i] #</li>
              # } #
            </ul>
          # } else { #
            <p>#= message #</p>
          # } #
        </span>
      </div>
    </script>

    <script id="successTemplate" type="text/x-kendo-template">
      <div class="notification success">
        <span>
          <h2><span class="glyphicons_v2 circle-check invert svg"></span> #= title #</h2>
          <p>#= message #</p>
        </span>
      </div>
    </script>

    <script id="network_combo_template" type="text/x-kendo-tmpl">
      <span class="k-state-default image">
        # if (data.logo_path) { #
          <img src="/t/p/h15${data.logo_path}" alt="${data.name}" srcset="/t/p/h15${data.logo_path} 1x, /t/p/h30${data.logo_path} 2x" height="15">&nbsp;&nbsp;-&nbsp;
        # } #
        ${data.name}# if (data.origin_country) { # (${data.origin_country}) # } #
      </span>
    </script>

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "The Movie Database",
        "alternateName": "TMDB",
        "url": "https://www.themoviedb.org"
      }
    </script>

    <script type="application/ld+json">
      {
         "@context": "http://schema.org",
         "@type": "WebSite",
         "url": "https://www.themoviedb.org/",
         "potentialAction": {
           "@type": "SearchAction",
           "target": "https://www.themoviedb.org/search?query={search_term_string}",
           "query-input": "required name=search_term_string"
         }
      }
    </script>

  </body>
</html>