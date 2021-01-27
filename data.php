<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "Design SheRRy";
$siteDescription = "디자이너 최소영의 블로그입니다.";
$siteKeywordsStr = "js, jquery";
$siteName = "Design SheRRy";
$siteThumbUrl = "https://soyoung10.github.io/php-ssg-blog/img/logo/design_sherry.jpg";

// 태그정보
$tagInfos = [
    "js" => [
        "pageThumbUrl" => "https://soyoung10.github.io/php-ssg-blog/img/logo/design_sherry.jpg"
        //"pageDescription" => "2021년 특별기획, 자바스크립트 관련 강좌 입니다."
    ],
    "html" => [
        //"pageThumbUrl" => "html 관련 글 전용 이미지"
    ]
];

// 게시물 10
$article10 = [];
$article10["id"] = 10;
$article10["title"] = "JS 함수 typeof";
$article10["regDate"] = "2021-01-27 01:46:16";
$article10["writerName"] = "최소영";
$article10["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article10["tags"] = ["js", "function"];
$article10["body"] = <<<'EOT'

# 정의

- 변수의 데이터 타입을 반환하는 연산자

# 참고

- undefined : 변수가 정의되지 않거나 값이 없을 때
- number : 데이터 타입이 수일 때
- string : 데이터 타입이 문자열일 때
- boolean : 데이터 타입이 불리언일 때
- object : 데이터 타입이 함수, 배열 등 객체일 때
- function : 변수의 값이 함수일 때
- symbol : 데이터 타입이 심볼일 때

# 사용방식

```javascript

console.clear();

var __ = n;
var typeOf__ = typeof(__);
console.log(typeOf__);

var __ = NN+nn;
var typeOf__ = typeof(__);
console.log(typeOf__);

var __ = NN > n;
var typeOf__ = typeof(__);
console.log(typeOf__);

var __ = "nn + nn";
var typeOf__ = typeof(__);
console.log(typeOf__);

```
# 실습

```codepen
https://codepen.io/soyoung10/embed/vYXBWmY?height=300&theme-id=light&default-tab=js,result&editable=true
```

EOT;


// 게시물 9
$article9 = [];
$article9["id"] = 9;
$article9["title"] = "JS 함수 반환";
$article9["regDate"] = "2021-01-27 01:30:01";
$article9["writerName"] = "최소영";
$article9["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article9["tags"] = ["js", "function"];
$article9["body"] = <<<'EOT'

# 정의
- 함수를 선언했을 때 함수 값을 반환

# 사용방식
```
<t-script>


/*함수 등록*/
function plus(a, b){
  return a + b;
};

var c = plus(100, 200);

console.log(c);

function minus(a, b){
  var c = a - b;
  return c;
}

console.log(minus(10, 20));
console.log(-10);


console.clear();

function plus (a, b){
  return a + b;
}
var c = plus(100, 200);
console.log(c);

c = plus(10, 20);
console.log(c);

function minus(a, b){
  var c = a - b;
  return c;
}

console.log(minus(10, 20));

</t-script>
```

EOT;

// 게시물 8
$article8 = [];
$article8["id"] = 8;
$article8["title"] = "JS 함수 매개변수";
$article8["regDate"] = "2021-01-27 24:02:16";
$article8["writerName"] = "최소영";
$article8["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article8["tags"] = ["js", "function"];
$article8["body"] = <<<'EOT'

# 정의

- 함수의 정의에서 전달받은 인수를 함수 내부로 전달하기 위해 사용하는 변수
- 인수(argument)란 함수가 호출될 때 함수로 값을 전달해주는 값



# 사용방식

```javascript

console.clear();

function hello(mode){
  var msg = "안녕하세요.";
  
  if(mode == "일본어"){
  var msg = "곤니찌와";
  }
  
  else if (mode == "영어"){
    var msg = "헬로";
  }
  
  console.log(msg);
}

hello("한국어");
hello("일본어");
hello("영어");


```

# 실습

```codepen
https://codepen.io/soyoung10/embed/LYRPWXy?height=300&theme-id=light&default-tab=js,result&editable=true
```

EOT;

// 게시물 7
$article7 = [];
$article7["id"] = 7;
$article7["title"] = "JS 함수";
$article7["regDate"] = "2021-01-26 22:12:14";
$article7["writerName"] = "최소영";
$article7["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article7["tags"] = ["js", "function"];
$article7["body"] = <<<'EOT'

# 정의
- JavaScript의 기본적인 구성 블록 중 하나로, 작업을 수행하거나 값을 계산하는 문장 집합이다.

# 참고
- 함수 선언(function declaration) : 지정된 매개변수(parameter)를 갖는 함수

# 사용방식

```

<t-script>


var _____ = function() {
    console.log("____");
    console.log("____");
    console.log("____")
    console.log("____");
};

____();


</t-script>
```
# 실습
```codepen
https://codepen.io/soyoung10/embed/GRqVzGV?height=300&theme-id=light&default-tab=js,result&editable=true
```

EOT;

// 게시물 6
$article6 = [];
$article6["id"] = 6;
$article6["title"] = "DOM 바닐라 조작";
$article6["regDate"] = "2021-01-26 18:02:16";
$article6["writerName"] = "최소영";
$article6["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article6["tags"] = ["js", "dom"];
$article6["body"] = <<<'EOT'

# HTML
```html
<t-script>
  
<header>
  <div onclick="a1();">red</div>
  <div onclick="a2();">orange</div>
  <div onclick="a3();">yellow</div>
  <div onclick="a4();">green</div>
  <div onclick="a5();">blue</div>
  <div onclick="a6();">navy</div>
  <div onclick="a7();">purple</div>
</header>
<main>
  <section class="1"></section>
</main>
<footer></footer>
  
</t-script>
```

# CSS
```CSS
header > div{
  width: 130px;
  height: 130px;
  border: 3px solid;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  font-size: 1rem;
  text-transform: uppercase;
}

main{
  padding-top: 10px;
}

main > section {
  width: 980px;
  height: 130px;
  border: 3px solid white;
  display: inline-block;
}
```

# JS
```javascript

console.clear();

function a1() {
  var s = document.getElementsByTagName('section');  s[0].style.backgroundColor = 'red'; }
a1();

function a2(){
  var s =      document.getElementsByTagName('section');  s[0].style.backgroundColor = 'orange'; }
a2();

function a3(){
  var s =      document.getElementsByTagName('section');  s[0].style.backgroundColor = 'yellow'; }
a3();

function a4(){
  var s =      document.getElementsByTagName('section');  s[0].style.backgroundColor = 'green'; }
a4();

function a5(){
  var s =      document.getElementsByTagName('section');  s[0].style.backgroundColor = 'blue'; }
a5();

function a6(){
  var s =      document.getElementsByTagName('section');  s[0].style.backgroundColor = 'navy'; }
a6();

function a7(){
  var s =      document.getElementsByTagName('section');  s[0].style.backgroundColor = 'purple'; }
a7();

```

# 실습
```codepen
https://codepen.io/soyoung10/embed/RwGNmPg?height=300&theme-id=light&default-tab=js,result&editable=true
```

EOT;

// 게시물 5
$article5 = [];
$article5["id"] = 5;
$article5["title"] = "DOM 바닐라";
$article5["regDate"] = "2021-01-26 17:50:14";
$article5["writerName"] = "최소영";
$article5["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article5["tags"] = ["js", "dom"];
$article5["body"] = <<<'EOT'

# 개요
- Java Script의 종류로, 브라우저를 통해 제공된다.

# 참고
- DOM(Document Object Model) : 문서객체모델

# 사용방식

```html

<t-script>
var ___s=  document.getElementsByTagName('___');


function a() {
  ___s[0].style.______ = '____';
  ___s[1].style.______ = '____';
  ___s[2].style.______ = '____';
  ___s[3].style.______ = '____';
}


</t-script>
```

EOT;


// 게시물 4
$article4 = [];
$article4["id"] = 4;
$article4["title"] = "jQuery CLASS";
$article4["regDate"] = "2021-01-14 18:22:16";
$article4["writerName"] = "최소영";
$article4["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article4["tags"] = ["js", "jquery"];
$article4["body"] = <<<'EOT'
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
$article3["title"] = "jQuery CSS 함수";
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
$article2["title"] = "jQuery 활용";
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
$article1["title"] = "jQuery 개요";
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