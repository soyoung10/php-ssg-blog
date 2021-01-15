<?php
$originFiles = [
    "index.ssghtml.php",
    "about.ssghtml.php",
];

foreach ( $originFiles as $originFile ) {
    $distFileName = str_replace(".ssghtml.php", ".html", $originFile);
    $command = "c:\\xampp\\php\\php.exe {$originFile} > {$distFileName}";
    shell_exec($command);

    $newSource = file_get_content($distFileName);
    echo $newSource;
    exit;
    exit;
}

