<link rel="stylesheet" href="css/about.css">
<script src="js/about.js" defer></script>

<section class="section-title con-min-width">
    <h1 class="con">
        <span>
            <i class="fas fa-newspaper"></i>
        </span>
        <span>
            DETAIL
        </span>
    </h1>
</section>

<section class="section-article-detail padding-0-10 con-min-width">
    <div class="con">
        <h1 class="article-list-box__title"><a href="article_detail_2.ssghtml.php"><?=$selectedArticle["title"]?></a></h1>

        <div class="article-list-box__reg-date"><?=$selectedArticle["regDate"]?></div>
        
        <div class="article-list-box__writer">
            <span><?=$selectedArticle["writerName"]?></span>
            <span><?=$selectedArticle["writerAvatar"]?></span>
        </div>
        
        <div class="article-list-box__body">
            <script type="text/x-template"><?=$selectedArticle['body']?></script>
            <div class="toast-ui-viewer"></div>
        </div>
    </div>
</section>