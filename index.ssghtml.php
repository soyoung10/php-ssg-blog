<?php
require_once "data.php";
require_once "head.php";
?>

<link rel="stylesheet" href="css/index.css">
<script src="js/index.js" defer></script>


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
        <li>
          <h1 class="title"><?=$article1["title"]?></h1>
          <div class="reg-date"><?=$article1["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article1["writerName"]?></span>
            <span>
              <?=$article1["writerAvatar"]?>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              <?=$article1["body"]?>
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
```
                </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="title">2화, jQuery 적용</h1>
          <div class="reg-date"> 작성 2020-01-12 18:22:16</div>
          <div class="article-list-box__writer">
            <span>최소영</span>
            <span>
              <svg viewBox="0 0 264 280" style="width:80px">
                <use xlink:href="#avatar-1"></use>
              </svg>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              # HTML
```html
<t-script>
  <button onclick="a();">나를 눌러요</button>
  <div></div>
  <div></div>
</t-script>
```

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
                </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
        <li>
          <h1 class="title">1화, jQuery 개요</h1>
          <div class="reg-date"> 작성 2020-01-12 17:47:14</div>
          <div class="article-list-box__writer">
            <span>최소영</span>
            <span>
              <svg id="avatar-1" viewBox="0 0 264 280" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" style="width:80px">
                <defs>
                  <circle id="path-1" cx="120" cy="120" r="120"></circle>
                  <path
                    d="M12,160 C12,226.27417 65.72583,280 132,280 C198.27417,280 252,226.27417 252,160 L264,160 L264,-1.42108547e-14 L-3.19744231e-14,-1.42108547e-14 L-3.19744231e-14,160 L12,160 Z"
                    id="path-3"></path>
                  <path
                    d="M124,144.610951 L124,163 L128,163 L128,163 C167.764502,163 200,195.235498 200,235 L200,244 L0,244 L0,235 C-4.86974701e-15,195.235498 32.235498,163 72,163 L72,163 L76,163 L76,144.610951 C58.7626345,136.422372 46.3722246,119.687011 44.3051388,99.8812385 C38.4803105,99.0577866 34,94.0521096 34,88 L34,74 C34,68.0540074 38.3245733,63.1180731 44,62.1659169 L44,56 L44,56 C44,25.072054 69.072054,5.68137151e-15 100,0 L100,0 L100,0 C130.927946,-5.68137151e-15 156,25.072054 156,56 L156,62.1659169 C161.675427,63.1180731 166,68.0540074 166,74 L166,88 C166,94.0521096 161.51969,99.0577866 155.694861,99.8812385 C153.627775,119.687011 141.237365,136.422372 124,144.610951 Z"
                    id="path-5"></path>
                </defs>
                <g id="Avataaar" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-825.000000, -1100.000000)" id="Avataaar/Circle">
                    <g transform="translate(825.000000, 1100.000000)">
                      <g id="Circle" stroke-width="1" fill-rule="evenodd" transform="translate(12.000000, 40.000000)">
                        <mask id="mask-2" fill="white">
                          <use xlink:href="#path-1"></use>
                        </mask>
                        <use id="Circle-Background" fill="#E6E6E6" xlink:href="#path-1"></use>
                        <g id="Color/Palette/Blue-01" mask="url(#mask-2)" fill="#65C9FF">
                          <rect id="?Color" x="0" y="0" width="240" height="240"></rect>
                        </g>
                      </g>
                      <mask id="mask-4" fill="white">
                        <use xlink:href="#path-3"></use>
                      </mask>
                      <g id="Mask"></g>
                      <g id="Avataaar" stroke-width="1" fill-rule="evenodd" mask="url(#mask-4)">
                        <g id="Body" transform="translate(32.000000, 36.000000)">
                          <mask id="mask-6" fill="white">
                            <use xlink:href="#path-5"></use>
                          </mask>
                          <use fill="#D0C6AC" xlink:href="#path-5"></use>
                          <g id="Skin/??-03-Brown" mask="url(#mask-6)" fill="#FFDBB4">
                            <g transform="translate(-32.000000, 0.000000)" id="Color">
                              <rect x="0" y="0" width="264" height="244"></rect>
                            </g>
                          </g>
                          <path
                            d="M156,79 L156,102 C156,132.927946 130.927946,158 100,158 C69.072054,158 44,132.927946 44,102 L44,79 L44,94 C44,124.927946 69.072054,150 100,150 C130.927946,150 156,124.927946 156,94 L156,79 Z"
                            id="Neck-Shadow" fill-opacity="0.100000001" fill="#000000" mask="url(#mask-6)"></path>
                        </g>
                        <g id="Clothing/Shirt-Crew-Neck" transform="translate(0.000000, 170.000000)">
                          <defs>
                            <path
                              d="M165.960472,29.2949161 C202.936473,32.3249982 232,63.2942856 232,101.051724 L232,110 L32,110 L32,101.051724 C32,62.9525631 61.591985,31.7649812 99.0454063,29.2195264 C99.0152598,29.5931145 99,29.9692272 99,30.3476251 C99,42.2107177 113.998461,51.8276544 132.5,51.8276544 C151.001539,51.8276544 166,42.2107177 166,30.3476251 C166,29.9946691 165.986723,29.6437014 165.960472,29.2949161 Z"
                              id="react-path-87"></path>
                          </defs>
                          <mask id="react-mask-88" fill="white">
                            <use xlink:href="#react-path-87"></use>
                          </mask>
                          <use id="Clothes" fill="#E6E6E6" fill-rule="evenodd" xlink:href="#react-path-87"></use>
                          <g id="Color/Palette/Gray-01" mask="url(#react-mask-88)" fill-rule="evenodd" fill="#FFAFB9">
                            <rect id="?Color" x="0" y="0" width="264" height="110"></rect>
                          </g>
                          <g id="Shadowy" opacity="0.599999964" stroke-width="1" fill-rule="evenodd"
                            mask="url(#react-mask-88)" fill-opacity="0.16" fill="#000000">
                            <g transform="translate(92.000000, 4.000000)" id="Hola-??">
                              <ellipse cx="40.5" cy="27.8476251" rx="39.6351047" ry="26.9138272"></ellipse>
                            </g>
                          </g>
                        </g>
                        <g id="Face" transform="translate(76.000000, 82.000000)" fill="#000000">
                          <g id="Mouth/Default" transform="translate(2.000000, 52.000000)" fill-opacity="0.699999988">
                            <path
                              d="M40,15 C40,22.7319865 46.2680135,29 54,29 L54,29 C61.7319865,29 68,22.7319865 68,15"
                              id="Mouth"></path>
                          </g>
                          <g id="Nose/Default" transform="translate(28.000000, 40.000000)" fill-opacity="0.16">
                            <path d="M16,8 C16,12.418278 21.372583,16 28,16 L28,16 C34.627417,16 40,12.418278 40,8"
                              id="Nose"></path>
                          </g>
                          <g id="Eyes/Default-?" transform="translate(0.000000, 8.000000)" fill-opacity="0.599999964">
                            <circle id="Eye" cx="30" cy="22" r="6"></circle>
                            <circle id="Eye" cx="82" cy="22" r="6"></circle>
                          </g>
                          <g id="Eyebrow/Outline/Default" fill-opacity="0.599999964">
                            <g id="I-Browse" transform="translate(12.000000, 6.000000)">
                              <path
                                d="M3.63024536,11.1585767 C7.54515501,5.64986673 18.2779197,2.56083721 27.5230268,4.83118046 C28.5957248,5.0946055 29.6788665,4.43856013 29.9422916,3.36586212 C30.2057166,2.2931641 29.5496712,1.21002236 28.4769732,0.94659732 C17.7403633,-1.69001789 5.31209962,1.88699832 0.369754639,8.84142326 C-0.270109626,9.74178291 -0.0589363917,10.9903811 0.84142326,11.6302454 C1.74178291,12.2701096 2.9903811,12.0589364 3.63024536,11.1585767 Z"
                                id="Eyebrow" fill-rule="nonzero"></path>
                              <path
                                d="M61.6302454,11.1585767 C65.545155,5.64986673 76.2779197,2.56083721 85.5230268,4.83118046 C86.5957248,5.0946055 87.6788665,4.43856013 87.9422916,3.36586212 C88.2057166,2.2931641 87.5496712,1.21002236 86.4769732,0.94659732 C75.7403633,-1.69001789 63.3120996,1.88699832 58.3697546,8.84142326 C57.7298904,9.74178291 57.9410636,10.9903811 58.8414233,11.6302454 C59.7417829,12.2701096 60.9903811,12.0589364 61.6302454,11.1585767 Z"
                                id="Eyebrow" fill-rule="nonzero"
                                transform="translate(73.000154, 6.039198) scale(-1, 1) translate(-73.000154, -6.039198) ">
                              </path>
                            </g>
                          </g>
                        </g>
                        <g id="Top" stroke-width="1" fill-rule="evenodd">
                          <defs>
                            <rect id="react-path-81" x="0" y="0" width="264" height="280"></rect>
                            <path
                              d="M133.506381,81.3351151 C137.363649,83.3307002 140,87.3574737 140,92 L140,105 C140,111.018625 135.569129,116.002364 129.791419,116.867187 C128.048193,137.114792 115.530782,154.282984 98,162.610951 L98,162.610951 L98,181 L102,181 C119.490913,181 135.525121,187.236892 148,197.608051 L148,74 C148,53.5654643 139.717268,35.0654643 126.325902,21.6740982 C112.934536,8.28273213 94.4345357,-3.55271368e-15 74,0 C33.1309285,7.10542736e-15 -7.10542736e-15,33.1309285 0,74 L0,257.716445 C13.5691766,255.775526 24,244.105888 24,230 L24,184.423101 C30.9346808,182.200199 38.3271796,181 46,181 L50,181 L50,162.610951 C38.7726252,157.277407 29.6015372,148.317951 24,137.245847 L24,75.2659587 C33.1467898,72.2910056 42.777598,68.0170651 52.3415164,62.4953343 C67.7445474,53.6023901 80.4313947,42.9409152 89.0661426,32.3970356 C90.8310687,37.5951441 93.1752556,42.8009742 96.1104311,47.8848473 C104.877881,63.0705152 117.224186,74.2337047 130,79.9170491 L130,80.1659169 C130.400422,80.233095 130.794121,80.3201038 131.18005,80.4258987 C131.954509,80.7493055 132.730185,81.0524853 133.506381,81.3351151 Z"
                              id="react-path-82"></path>
                          </defs>
                          <mask id="react-mask-79" fill="white">
                            <use xlink:href="#react-path-81"></use>
                          </mask>
                          <g id="Mask"></g>
                          <g id="Top/Long-Hair/Straight" mask="url(#react-mask-79)">
                            <g transform="translate(-1.000000, 0.000000)">
                              <g id="Hair" stroke-width="1" fill="none" fill-rule="evenodd"
                                transform="translate(59.000000, 18.000000)">
                                <mask id="react-mask-80" fill="white">
                                  <use xlink:href="#react-path-82"></use>
                                </mask>
                                <use id="Mask-Hair" fill="#944F23" xlink:href="#react-path-82"></use>
                                <g id="Skin/??-03-Brown" mask="url(#react-mask-80)" fill="#A55728">
                                  <g transform="translate(0.000000, 0.000000) " id="Color">
                                    <rect x="0" y="0" width="264" height="280"></rect>
                                  </g>
                                </g>
                              </g>
                              <path
                                d="M192.506381,99.3351151 C197.3745,101.107702 202.263079,102.071957 207,102.148232 L207,102.148232 L207,92 C207,71.5654643 198.717268,53.0654643 185.325902,39.6740982 C198.717268,53.0654643 207,71.5654643 207,92 L207,215.608051 C194.525121,205.236892 178.490913,199 161,199 L157,199 L157,180.610951 L157,180.610951 C174.530782,172.282984 187.048193,155.114792 188.791419,134.867187 C194.569129,134.002364 199,129.018625 199,123 L199,110 C199,105.357474 196.363649,101.3307 192.506381,99.3351151 Z M190.18005,98.4258987 C189.794121,98.3201038 189.400422,98.233095 189,98.1659169 L189,97.9170491 C189.392974,98.0918644 189.786355,98.2614951 190.18005,98.4258987 Z M83,155.245847 C88.6015372,166.317951 97.7726252,175.277407 109,180.610951 L109,199 L105,199 C97.3271796,199 89.9346808,200.200199 83,202.423101 L83,155.245847 Z"
                                id="Shadow" fill-opacity="0.24" fill="#000000" fill-rule="evenodd"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </span>
          </div>
          <div class="body">
            <script type="text/x-template">
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
                </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<h1>Editor 1</h1>
<section>
  <div id="editor-1"></div>
</section>

<h1>Editor Viewer 1</h1>
<section>
  <div id="editor-viewer-1"></div>
</section>

<?php
require_once "foot.php";
?>