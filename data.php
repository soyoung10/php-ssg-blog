<?php
$siteTitle = "Design SheRRy";

$article1 = [];
$article1["title"] = "4ȭ, jQuery CLASS";
$article1["regDate"] = "2021-01-14 18:22:16";
$article1["writerName"] = "�ּҿ�";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280" style="width:80px">
<use xlink:href="#avatar-1"></use>
</svg>';

$article1["body"] = <<<EOT

# HTML
```html
<t-script>
  
<button>ȸ��</button>
<button>����</button>

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

# �ǽ�
```codepen
https://codepen.io/soyoung10/embed/gOwmGOo?height=300&theme-id=light&default-tab=js,result&editable=true
```
                </script>
                <div class="toast-ui-viewer"></div>
              </div>
            </li>
            <li>
              <h1 class="title">3ȭ, jQuery CSS �Լ� ����</h1>
              <div class="reg-date">2021-01-14 17:47:14</div>
              <div class="article-list-box__writer">
                <span>�ּҿ�</span>
                <span>
                  <svg viewBox="0 0 264 280" style="width:80px">
                    <use xlink:href="#avatar-1"></use>
                  </svg>
                </span>
              </div>
              <div class="body">
                <script type="text/x-template">
                  # ����
- jQuery ������ CSS ���� ����ϰų� �����ϴ� �Լ�

# ����
- .addClass() : class �߰�
- .removeClass() : class ����
- .css() : ��Ÿ�� �Ӽ��� ����

# �����

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