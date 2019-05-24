<?php
$page = filter_input(INPUT_GET, 'p');
$folder_view = 'templates/view/';

if (empty($page)) :
	$url_view = $folder_view.'sidebar/isi.php';
else :
	if ($page == 'dashboard') :
		$url_view = $folder_view.'sidebar/isi.php';
    elseif ($page == 'data_siswa') :
        $url_view = $folder_view.'pendaftaran/'.$page.'/v_container.php';
    endif;
endif;

if (isset($url_view)) :
    include $url_view;
else :
    include $folder_view.'error/404.php';
endif;