<?php

include("./view/header.php");


if (isset($_GET['page'])&&$_GET['page']=='lienhe')
{
    include("./view/pages/lienhe.php");
}
elseif (isset($_GET['page'])&&$_GET['page']=='dangkybaihat')
{
	include("./view/pages/dangkybaihat.php");
}
elseif (isset($_GET['page'])&&$_GET['page']=='tailieu') 
{
	include("./view/pages/tailieu.php");
}
elseif (isset($_GET['page'])&&$_GET['page']=='danhsachbaihat') 
{
	include("./view/pages/danhsachbaihat.php");
}
elseif (isset($_GET['page'])&&$_GET['page']=='admin') 
{
	include("./view/admin/index.php");
}
elseif (isset($_GET['page'])&&$_GET['page']=='danhsachbaihat_admin') 
{
	include("./view/admin/danhsachbaihat_admin.php");
}
else 
{
    $_GET['page']='';
}
if($_GET['page']=='')
{
	include("./view/main.php");
}


include("./view/footer.php");