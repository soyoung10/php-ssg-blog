<?php
if ( !isset($pageTitle) ) {
  $pageTitle = $siteTitle;
}

if ( !isset($pageDescription) ) {
  $pageDescription = $siteDescription;
}

if ( !isset($pageKeywordsStr) ) {
  $pageKeywordsStr = $siteKeywordsStr;
}

if ( !isset($pageThumbUrl) ) {
  $pageThumbUrl = $siteThumbUrl;
}
?>


<!DOCTYPE html>
<html lang="ko">


<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-680JQ7V954"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-680JQ7V954');
</script>

  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title><?=$pageTitle?></title>
    <meta name="title" content="<?=$pageTitle?>" />
    <meta name="description" content="<?=$pageDescription?>" />
    <meta name="keywords" content="<?=$pageKeywordsStr?>" />
    <meta name="copyright" content="<?=$siteName?>" />

    <!-- OPENGRAPH -->
    <meta property="og:site_name" content="<?=$siteName?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$pageTitle?>" />
    <meta property="og:description" content="<?=$pageDescription?>" />
    <meta property="og:image" content="<?=$pageThumbUrl?>" />
    <meta property="og:image:alt" content="<?=$siteName?>" />
    <meta property="og:image:width" content="486" />
    <meta property="og:image:height" content="254" />


  <meta name="viewport" content="width=device-width, user-scalable=no" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/highlight.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/styles/default.min.css">

  <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js" defer></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/codemirror.min.css" />

  <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

  <script
    src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight.min.js" defer>
  </script>


  <link rel="stylesheet" href="css/common.css">
  <script src="js/common.js" defer></script>

  <link rel="stylesheet" href="css/index.css">
  <script src="js/index.js" defer></script>

</head>

<!-- top-bar -->

<body>

  <!-- body content -->
  <div class="body-content">

    <div class="cursor"></div>
    <div class="cursor-shadow"></div>

    <header class="top-bar con-min-width visible-md-up">
      <div class="con height-100p flex jc-sb">
        <a href="index.ssghtml.php" class="logo">
          <span><i class="fas fa-lightbulb"></i></span>
          <span>Design SheRRy</span>
        </a>
        <nav class="top-bar__menu-box-1 height-100p">
          <ul class="flex height-100p">
            <li>
              <a href="index.ssghtml.php" class="flex jc-c ai-c height-100p">
                <span>
                  <i class="fas fa-home"></i>
                </span>
                <span>HOME</span>
              </a>
            </li>
            <li>
              <a href="about.ssghtml.php" class="flex jc-c ai-c height-100p">
                <span>
                  <i class="fas fa-address-card"></i>
                </span>
                <span>ABOUT</span>
              </a>
            </li>
            <li>
              <a href="pofol.ssghtml.php" class="flex jc-c ai-c height-100p">
                <span>
                  <i class="fas fa-paste"></i>
                </span>
                <span>PORTFOLIO</span>
              </a>
            </li>
            <li>
              <a href="article.ssghtml.php" class="flex jc-c ai-c height-100p">
                <span>
                  <i class="fas fa-folder"></i>
                </span>
                <span>ARTICLE</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- mobile-top-bar -->
    <header class="mobile-top-bar con-min-width visible-sm-down flex">
      <div class="flex f-1-0-0">
        <div class="mobile-top-bar__btn-toggle-side-bar as-c">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div>
        <a href="#" class="logo height-100p">
          <span><i class="fas fa-lightbulb"></i></span>
          <span>Design SheRRy</span>
        </a>
      </div>
      <div class="f-1-0-0"></div>
    </header>

    <!--mobile-side-bar -->

    <aside class="mobile-side-bar visible-sm-down">

      <nav class="mobile-side-bar__menu-box-1">
        <ul>
          <li>
            <a href="#" class="block">
              <span><i class="fas fa-home"></i></span>
              <span>HOME</span>
            </a>
          </li>
          <li>
            <a href="#" class="block">
              <span><i class="far fa-address-card"></i></span>
              <span>ABOUT</span>
            </a>
          </li>
          <li>
            <a href="#" class="block">
              <span><i class="fas fa-paste"></i></span>
              <span>PORTFOLIO</span>
            </a>
          </li>
          <li>
            <a href="#" class="block">
              <i class="fas fa-folder"></i>
              <span>ARTICLES</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>

    <!--main-->

    <main>