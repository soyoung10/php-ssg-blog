<?php
$pageCode = 'index';
$pageTitle = "Home";
require_once "head.php";
?>

<link rel="stylesheet" href="index.css">
<script src="index.js" defer></script>

<h1>마크제이콥스::Home</h1>

<section class="section section01">
  <div class="con">
    <div class="main-menu">
      <ul>
        <li>
          <a href="#">
            <img src="https://soyoung10.github.io/web-res/mjs/marcjacobs_logo.png" alt="">
          </a>
        </li>
      </ul>
      <ul>
        <li>
          <a href="">HOME</a>
        </li>
        <li>
          <a href="">ABOUT</a>
        </li>
        <li>
          <a href="">SHOP</a>
        </li>
        <li>
          <a href="">MAGAZINE</a>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="section section02">
  <div class="con">
    <div class="banners">
      <div class="banner">
        <a href="#">
          <img src="https://soyoung10.github.io/web-res/mjs/post00.png" alt="">

        </a>
      </div>
      <div class="banner">
        <a href="">
          <img src="https://soyoung10.github.io/web-res/mjs/post01.jpg" alt=""></a>
      </div>
      <div class="banner">
        <a href="">
          <img src="https://soyoung10.github.io/web-res/mjs/post02.png" alt=""></a>
      </div>
      <div class="banner">
        <a href="">
          <img src="https://soyoung10.github.io/web-res/mjs/post03.png" alt=""></a>
      </div>
    </div>
  </div>
</section>

<?php
require_once "foot.php";
?>