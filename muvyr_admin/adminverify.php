<?php
    session_start();
	include("connect.php");
	$query = "SELECT * from admin WHERE login_admin='$_POST[login]'";
	$link = mysqli_connect($host, $user, $password, $db_name); 
    $result = mysqli_query($link, $query);
    if($result == false) {
        die("Произошла ошибка при выполнении запроса "); 
    }
    else {
    	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    	if(empty($data))
        {
            echo"Неверный логин и/или пароль";
        }
        else
        {
        	foreach ($data as $row) {
                if(password_verify($_POST['password'], $row['password_admin']))
                {
                    $_SESSION['check']='allowaccess';
                    echo"
                        <script>
                            window.location.replace('adminpanel.php');
                        </script>
                    ";
                }
                else
                {
                    echo"Неверный логин и/или пароль";
                }
            }
        }
    }
?>
