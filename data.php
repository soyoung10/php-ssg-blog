<?php
echo $articleId;

$siteTitle = "Disign sheRRy";

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

EOT;

$articleVarName = "article" . $articleId;
$selentedArticle = $$articleVarName;