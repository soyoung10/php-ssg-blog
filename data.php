<?php
$siteTitle = "Disign SheRRy";


// 게시물 2
$article2 = [];
$article2["id"] = 2;
$article2["title"] = "jQuery Apply";
$article2["regDate"] = "2020-01-12 18:22:16";
$article2["writerName"] = "최소영";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
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

if ( isset($articleId) ) {
  $articleVarName = "article" . $articleId;
  $selectedArticle = $$articleVarName;
}