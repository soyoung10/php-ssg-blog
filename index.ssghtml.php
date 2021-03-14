<?php
require_once "data.php";
require_once "head.php";
$articles = &getArticles();
?>

<!DOCTYPE html>
<html lang="ko">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/index.css">
  <script src="js/index.js" defer></script>

  <script>
   // 오직 index.html, index.ssghtml.php 에도 추가해주세요
   if ( location.pathname.indexOf('index.ssghtml.php') !== -1 && location.pathname.indexOf('index.html') !== -1 && location.pathname.substr(-1, 1) != '/' ) { location.replace(location.href + '/'); }
  </script>

</head>

 <section class="section-title con-min-width">
   <h1 class="con">
     <span>
       <i class="fas fa-clock"></i>
     </span>
     <span>
       LATEST ARTICLES
     </span>
   </h1>
 </section>
 <section class="section-latest-articles con-min-width">
   <div class="con">
     <div class="article-list-box">
       <ul>
         <?php foreach ( $articles as $article ) { ?>
         <li>
           <h1 class="article-list-box__title"><a href="<?=getArticleLink($article["id"])?>"><?=$article["title"]?></a>
           </h1>
           <div class="article-list-box__reg-date"><?=$article["regDate"]?></div>
           <div class="article-list-box__writer">
             <span><?=$article["writerName"]?></span>
             <span><?=$article["writerAvatar"]?></span>
           </div>
           <div class="article-list-box__tags">
             <?=getArticleTagsHtml($article["id"])?>
           </div>
           <div class="article-list-box__body">
             <script type="text/x-template"><?=$article['body']?></script>
             <div class="toast-ui-viewer"></div>
           </div>
         </li>
         <?php } ?>
       </ul>
     </div>
   </div>
 </section>
 <?php
require_once "foot.php";
?>