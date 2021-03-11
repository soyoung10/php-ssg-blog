<?php
require_once "data.php";
require_once "head.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/pofol.css">
  <script src="js/pofol.js"></script>

  <link rel="stylesheet" href="css/common.css">
  <script src="js/common.js"></script>

</head>

<section class="section-title con-min-width">
  <h1 class="con">
    <span><i class="fas fa-paste"></i></span>
    <span>PORTFOLIO</span>
  </h1>
</section>

<section class="pofol-section con-min-width">
  <div class="con">
    <div class="portfolio">
      <div class="work01">
        <div class="banner">
          <img src="https://cdn.jsdelivr.net/gh/soyoung10/web-res/ux/Untitled-7.jpg" alt="">
        </div>
        <div class="work-text">
          <div class="title">
            <span>MOBILE APP UI/UX</span>
            <div class="underline"></div>
            <h1>크라우드 펀딩 플랫폼 'MOEZLE'</h1>
          </div>
          <div class="link-box">
            <div class="link">
              <a href="https://b.sherryisprecious.com/pofol/process/interaction.html">MOEZLE</a>
            </div>
            <div class="link">
              <a href="https://b.sherryisprecious.com/pofol/process/pofol.html">MOEZLE (coding ver.)</a>
            </div>
          </div>
        </div>
      </div>
      <div class="work02">
        <div class="banner">
          <img src="https://cdn.jsdelivr.net/gh/soyoung10/web-res/sherry/loading.jpg" alt="">
        </div>
        <div class="work-text">
          <div class="title">
            <span>WEBSITE UI/UX</span>
            <div class="underline"></div>
            <h1>주문하신 꿈은 매진입니다, 달러구트 꿈백화점</h1>
          </div>
          <div class="link-box">
            <div class="link">
              <a href="#">LINK</a>
            </div>
            <div class="link">
              <a href="https://b.sherryisprecious.com/pofol/web/index.html">달러구트 꿈백화점<br>(coding ver.)</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once "foot.php";
?>