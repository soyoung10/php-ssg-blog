<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "Disign SheRRy";

// 게시물 4
$article3 = [];
$article3["id"] = 4;
$article3["title"] = "jQuery CLASS";
$article3["regDate"] = "2021-01-14 18:22:16";
$article3["writerName"] = "최소영";
$article3["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article3["tags"] = ["js", "jquery"];
$article3["body"] = <<<'EOT'
# HTML
```html
<t-script>
  
<button>회전</button>
<button>리셋</button>

<div class=""></div>
</t-script>
```

# CSS
```CSS
div{
  width: 200px;
  height: 200px;
  background-color: lightcoral;
  transition: all 1s;
}

.active{
  background-color: lemonchiffon;
  width: 500px;
  height: 500px;
  border-radius: 1000px;
  transform: rotate(1000deg) scale (0.5);
}
```

# JS
```javascript

console.clear();

$('button:nth-of-type(1)').click(function(){
  $('div').addClass('active');
});

$('button:nth-of-type(2)').click(function(){
  $('div').removeClass('active');
});

```

# 실습
```codepen
https://codepen.io/soyoung10/embed/gOwmGOo?height=300&theme-id=light&default-tab=js,result&editable=true

```

EOT;

// 게시물 3
$article3 = [];
$article3["id"] = 3;
$article3["title"] = "jQuery CSS Function";
$article3["regDate"] = "2021-01-14 17:47:14";
$article3["writerName"] = "최소영";
$article3["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article3["tags"] = ["js", "jquery"];
$article3["body"] = <<<'EOT'
# 개요
- jQuery 내에서 CSS 값을 취득하거나 설정하는 함수

# 참고
- .addClass() : class 추가
- .removeClass() : class 제거
- .css() : 스타일 속성값 설정

# 사용방식

```html

<t-script>
console.clear();

$('button:nth-of-type(1)').click(function(){
$('___').addClass('active');
)};

  
$('button:nth-of-type(2)').click(function(){
$('___').removeClass('active');
});


```

EOT;


// 게시물 2
$article2 = [];
$article2["id"] = 2;
$article2["title"] = "jQuery Apply";
$article2["regDate"] = "2020-01-12 18:22:16";
$article2["writerName"] = "최소영";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article2["tags"] = ["js", "jquery"];
$article2["body"] = <<<'EOT'
# CSS
```CSS
div{
  width: 100px;
  height: 100px;
  background-color: purple;
  margin: 10px;
}
```

# JS
```javascript
/*
console.clear();

function a() {
  var $div = $('div');
  $div.css('background-color', 'pink');
}
*/

function a(){
 $('div').css('background-color', 'pink');
}
```

# 실습
```codepen
https://codepen.io/soyoung10/embed/JjRRVBW?height=300&theme-id=light&default-tab=js,result&editable=true

```
EOT;


// 게시물 1

$article1 = [];
$article1["id"] = 1;
$article1["title"] = "jQuery Outline";
$article1["regDate"] = "2020-01-12 17:47:14";
$article1["writerName"] = "최소영";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article1["tags"] = ["js", "jquery"];
$article1["body"] = <<<'EOT'
# 개요
- jQuery는 엘리먼트를 선택하여 선택된 엘리먼트들을 효율적으로 제어할 수 있는 자바스크립트 라이브러리
- HTML의 클라이언트 사이드 조작을 단순화하도록 설계된 JS 라이브러리 

# CDN
- https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js

# 사용방식
- jQuery 공식 >> $('선택자').동작함수('동작함수 적용값');

```html

<t-script>
console.clear();


function _(){
$('___').___('____', '___');
}


function _(){
var $___ = $('___');
$___.eq(n).___('____', '___');
$___.eq(n).___('____', '___');
$___.eq(n).___('____', '___');
$___.eq(n).___('____', '___');
...
...
}


</t-script>
```
EOT;

$maxArticleId = getMaxArticleId();
$_allArticles = [];
$_tags = [];
for ( $i = $maxArticleId; $i > 0; $i-- ) {
    $varName = 'article' . $i;
    if ( isset($$varName) ) {
        $_allArticles[${$varName}['id']] = &$$varName;
        foreach ( $_allArticles[${$varName}['id']]['tags'] as $tag ) {
            $_tags[] = $tag;
        }
    }
}
$_tags = array_unique($_tags);
sort($_tags);
$_allArticlesByTag = [];
foreach ( $_tags as $tag ) {
    $_allArticlesByTag[$tag] = [];
    foreach ( $_allArticles as $article ) {
        if ( in_array($tag, $article['tags']) ) {
            $_allArticlesByTag[$tag][$article['id']] = $article;
        }
    }
}