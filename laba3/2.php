<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Конструкция if-else</title>
</head>
<body>
<?php
	$a = 1;
    $b = 2;
    if ($a == $b)
    {echo "Переменные равны! <br />";}
    else
    {echo "Переменные не равны! <br />";}

    $user = "Admin";
    $password = "123";
    if($user == "Admin" and $password == "123")
    {echo "Добро пожаловать, admin ! <br />";}
    else
    {echo "Вам вход запрещен! <br/>";}

    if ($user == "Admin")
    {echo "Вы админ";
        if ($password == "123")
        {echo ", пароль верный.";}
        else
        {echo ", но пароль не верный";}
    }
    else{echo "Вы не администратор!<br/>";}
?>
</body>
</html>

