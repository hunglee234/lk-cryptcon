<?php
$file_path = get_template_directory() . '/page-template/blog.php';
if (file_exists($file_path)) {
    include($file_path);
} else {
    echo 'Tệp blog.php không tồn tại!';
}
?>


