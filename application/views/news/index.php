

<?php foreach ($news as $news_item): ?>

<div class="box">

  <article class="media">
    <div class="media-left">
      <figure class="image is-64x64">
        <img src="http://bulma.io/images/placeholders/128x128.png" alt="Image">
      </figure>
    </div>

    <div class="media-content">
      <div class="content">

        <p>
          <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
          s
          <br>
          <a href="<?php echo site_url('news/'.$news_item['slug']); ?>"><?php echo $news_item['title']; ?></a>
        </p>
      </div>
      <nav class="level is-mobile">
        <div class="level-left">
          <a class="level-item">
            <span class="icon is-small"><i class="fa fa-reply"></i></span>
          </a>
          <a class="level-item">
            <span class="icon is-small"><i class="fa fa-retweet"></i></span>
          </a>
          <a class="level-item">
            <span class="icon is-small"><i class="fa fa-heart"></i></span>
          </a>
        </div>
      </nav>
    </div>


  </article>


</div>

<?php endforeach; ?>




</div>
</section>