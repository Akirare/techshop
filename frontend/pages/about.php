<?php
// Include file cấu hình ban đầu của `Twig`
require_once __DIR__.'/../../bootstrap.php';
include_once(__DIR__.'/../../dbconnect.php');



// Yêu cầu `Twig` vẽ giao diện được viết trong file `frontend/pages/contach.html.twig`

echo $twig->render('frontend/pages/about.html.twig');