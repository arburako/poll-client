
    <script>
      Poll = <?php echo json_encode($poll) ?>;
    </script>
    
    <main>
      <header id="question">
        <div class="container">
          <h1><?php echo $poll->question; ?></h1>
          <div class="meta">
            <div class="date">
              <img src="/app/static/img/glyph-clock.svg" alt="Clock icon">
              <span><?php echo $poll->datetime->human; ?></span>
            </div>
            <div class="views">
              <img src="/app/static/img/glyph-eye.svg" alt="Eye icon">
              <span><?php echo $poll->views->human; ?> views</span>
            </div>
            <div class="share" id="share-view-trigger">
              <img src="/app/static/img/glyph-share.svg" alt="Share icon">
            </div>
          </div>
        </div>
      </header>

      <section id="answers">

<?php for($i=0; $i<count($poll->answers);$i++): $answer = $poll->answers[$i]; ?>
        <div class="answer" id="answer-<?php echo $i+1; ?>" data-answer-id="<?php echo $answer->id; ?>">
          <div class="number">
            <div class="diamond"><span><?php echo $i+1; ?></span></div>
          </div>
          <div class="right-side">
            <div class="content">
              <p><?php echo $answer->title; ?></p>
            </div>
            <div class="votes">
              300 votes
            </div>
          </div>
        </div>

<?php endfor; ?>

      </section>

    </main>

    <div id="share-view">
      <div class="gradient"></div>
      <article>
        <h1>OMG Share plz.</h1>
        <p class="share-url" contenteditable="true"><?php echo $poll->url->share; ?></p>
        <div class="social-media">
          <a class="twitter" href="https://twitter.com/intent/tweet?text=Take%20my%20poll!%20&tw_p=tweetbutton&url=<?php echo str_replace('/','%2F',$poll->url->share); ?>">
            <img src="/app/static/img/glyph-twitter.svg" alt="Twitter icon">
          </a>
          <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $poll->url->share; ?>">
            <img src="/app/static/img/glyph-facebook.svg" alt="Facebook icon">
          </a>
        </div>
      </article>
      <img class="exit-overlay" data-target="share-view" src="/app/static/img/glyph-x-white.svg" alt="Exit icon">
    </div>

    <script>
      $(document).ready(function () {
        App.Common();
        App.ViewPoll();
      });
    </script>

    <?php
    print_r($poll);
    ?>