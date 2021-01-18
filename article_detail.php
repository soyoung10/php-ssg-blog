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

<section class="section-article-detail con-min-width">
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

</main>

<footer class="bottom-bar con-min-width">
  <div class="con flex jc-c">
    <a href="#" class="logo">
      <span><i class="fas fa-palette"></i><i class="fas fa-paint-brush"></i></span>
      <span>DESIGN SheRRy</span>
    </a>
  </div>
</footer>

</div>
</body>

</html>

<?php
require_once "foot.php";
?>