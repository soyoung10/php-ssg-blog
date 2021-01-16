<?php
$siteTitle = "Design SheRRy";

$article1 = [];
$article1["title"] = "2화, jQuery 적용";
$article1["regDate"] = " 작성 2020-01-12 18:22:16";
$article1["writerName"] = "최소영";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"> <use xlink:href="#avatar-1"></use></svg>';

$article1["body"] = <<<EOT

 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
 
 var disqus_config = function () {
 this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
 this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
 };

EOT;

print_r($article1);
exit;
