console.clear();

const $cursor = $('.cursor');
const $cursorShadow = $('.cursor-shadow');

$(window).mousemove(function (e) {
  console.log("e.clientX : " + e.clientX);
  console.log("e.clientY : " + e.clientY);

  $cursor.css({
    top: e.clientY,
    left: e.clientX
  });

  $cursorShadow.css({
    top: e.clientY,
    left: e.clientX
  });

});

$('.cursor-big').mouseenter(function () {
  $('html').addClass('need-to-cursor-big');
});

$('.cursor-big').mouseleave(function () {
  $('html').removeClass('need-to-cursor-big');
});


function MobileTopBar__init() {
  $('.mobile-top-bar__btn-toggle-side-bar').click(function () {
    let $this = $(this);

    if ($this.hasClass('active')) {
      $this.removeClass('active');
      $('.mobile-side-bar').removeClass('active');
    } else {
      $this.addClass('active');
      $('.mobile-side-bar').addClass('active');
    }
  });
}

MobileTopBar__init();


/*toast ui*/

// 유튜브 플러그인 
function youtubePlugin() {
  toastui.Editor.codeBlockManager.setReplacer('youtube', youtubeId => {
    // Indentify multiple code blocks
    const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;

    // Avoid sanitizing iframe tag
    setTimeout(renderYoutube.bind(null, wrapperId, youtubeId), 0);

    return `<div id="${wrapperId}"></div>`;
  });
}

function renderYoutube(wrapperId, youtubeId) {
  const el = document.querySelector(`#${wrapperId}`);

  el.innerHTML = `<div class="toast-ui-youtube-plugin-wrap"><iframe src="https://www.youtube.com/embed/${youtubeId}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>`;
}

const markdownBody = `
# JAVA
\`\`\`youtube
x5g95m_UbzA
\`\`\`

\`\`\`java
import java.util.List;

public class Main {
  public static void main(String[] args) {
    System.out.println("HI");
  }
}
\`\`\`

# PHP TEMPLATE

\`\`\`php-template
<div class="a">
<?php echo $a; ?>
</div>
\`\`\`
`;

function Editor1__init() {
  var editor = new toastui.Editor({
    el: document.querySelector('#editor-1'),
    previewStyle: 'vertical',
    initialValue: markdownBody.trim(),
    height: 600,
    plugins: [toastui.Editor.plugin.codeSyntaxHighlight, youtubePlugin]
  });
}
Editor1__init();

function EditorViewer1__init() {
  var viewer = new toastui.Editor.factory({
    el: document.querySelector('#editor-viewer-1'),
    initialValue: markdownBody.trim(),
    viewer: true,
    plugins: [toastui.Editor.plugin.codeSyntaxHighlight, youtubePlugin]
  });
}
EditorViewer1__init();


// codepen 플러그인
function codepenPlugin() {
  toastui.Editor.codeBlockManager.setReplacer('codepen', url => {
    const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;

    // Avoid sanitizing iframe tag
    setTimeout(renderCodepen.bind(null, wrapperId, url), 0);

    return `<div id="${wrapperId}"></div>`;
  });
}

function renderCodepen(wrapperId, url) {
  const el = document.querySelector(`#${wrapperId}`);

  var urlParams = new URLSearchParams(url.split('?')[1]);
  var height = urlParams.get('height');

  el.innerHTML = `<div class="toast-ui-codepen-plugin-wrap"><iframe height="${height}" scrolling="no" src="${url}" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true"></iframe></div>`;
}



// editor

function Editor__init() {
  $('.toast-ui-editor').each(function (index, node) {
    var initialValue = $(node).prev().html().trim().replace(/<!--REPLACE:script-->/gi, 'script');

    var editor = new toastui.Editor({
      el: node,
      previewStyle: 'vertical',
      initialValue: initialValue,
      height: 600,
      plugins: [toastui.Editor.plugin.codeSyntaxHighlight, youtubePlugin, codepenPlugin]
    });
  });
}
Editor__init();


// editorviewer


function EditorViewer__init() {
  $('.toast-ui-viewer').each(function (index, node) {
    var initialValue = $(node).prev().html().trim().replace(/<!--REPLACE:script-->/gi, 'script');
    var viewer = new toastui.Editor.factory({
      el: node,
      initialValue: initialValue,
      viewer: true,
      plugins: [toastui.Editor.plugin.codeSyntaxHighlight, youtubePlugin, codepenPlugin]
    });
  });
}
EditorViewer__init();