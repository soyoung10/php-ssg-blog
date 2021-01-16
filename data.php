<?php
$siteTitle = "Design SheRRy";

$article1 = [];
$article1["title"] = "4화, jQuery CLASS";
$article1["regDate"] = "2021-01-14 18:22:16";
$article1["writerName"] = "최소영";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280" style="width:80px">
<use xlink:href="#avatar-1"></use>
</svg>';

$article1["body"] = <<<EOT

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
                </script>
                <div class="toast-ui-viewer"></div>
              </div>
            </li>
            <li>
              <h1 class="title">3화, jQuery CSS 함수 개념</h1>
              <div class="reg-date">2021-01-14 17:47:14</div>
              <div class="article-list-box__writer">
                <span>최소영</span>
                <span>
                  <svg viewBox="0 0 264 280" style="width:80px">
                    <use xlink:href="#avatar-1"></use>
                  </svg>
                </span>
              </div>
              <div class="body">
                <script type="text/x-template">
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


</t-script>
EOT;

print_r($article1);
exit;