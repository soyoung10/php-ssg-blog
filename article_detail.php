<?php
require_once "data.php";
require_once "head.php";
?>

<link rel="stylesheet" href="css/about.css">

<script src="js/about.js" defer></script>

<section class="section-title con-min-width">
  <h1 class="con">
    <span><i class="fas fa-folder"></i></span>
    <span>DETAIL</span>
  </h1>
</section>

<section class="section-article-detail con-min-width padding-0-10">
  <div class="con">
    <h1 class="title"><a href="article_detail_2.ssghtml.php"><?=$article1["title"]?></a></h1>
    <div class="reg-date"><?=$article1["regDate"]?></div>
    <div class="article-list-box__writer">
      <span><?=$article1["writerName"]?></span>
      <span>
        <?=$article1["writerAvatar"]?>
    </div>
    <div class="article-list-box__body">
      <script type="text/x-template">
        <?=$selectedArticle["body"]?>
      </script>
      <div class="toast-ui-viewer"></div>
    </div>
  </div>
</section>



<section class="section-article-reply-box con-min-width">
    <div class="con">
    <div id="disqus_thread"></div>

    <script>
        var disqus_config = function () {
            this.page.url = 'https://b.oa.gg/article_detail_<?=$articleId?>.html';
            this.page.identifier = 'article_detail_<?=$articleId?>.html';
        };
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://phpblog-2.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    </div>

<?php
require_once "foot.php";
?>