<?php
$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars($_POST['phone']));
$cart = stripslashes(htmlspecialchars($_POST['cart']));
$payment = stripslashes(htmlspecialchars($_POST['payment']));
$department = stripslashes(htmlspecialchars($_POST['department']));
$city = stripslashes(htmlspecialchars($_POST['city']));
$course = stripslashes(htmlspecialchars($_POST['course']));




// if(empty($city) || empty($department)){
// echo '<h1 style="color:red;">Пожалуйста заполните все поля</h1>';
// echo '<meta http-equiv="refresh" content="2; url=http://'.$_SERVER['SERVER_NAME'].'">';
// }

if(empty($city) || empty($department)) {
    $subject = '[HappyMan]'; 
    $addressat = "lona.panasuk@gmail.com";
    $success_url = './form-ok.php?name='.$_POST['name'].
    '&phone='.$_POST['phone'].
    '&cart='.$_POST['cart'].
    '&payment='.$_POST['payment'].
    '&course='.$_POST['course'];
    
    
    /////
    $message = "Имя: {$name}
    \nТелефон: {$phone}
    \nДоставка: {$cart}
    \nКурс: {$course}
    \nОплата: {$payment}";
    
    $verify = mail($addressat,$subject,$message, "From:Mail", "Content-type:text/plain;charset=utf-8\r\n");
    
    if ($verify == 'true'){
        header('Location: '.$success_url);
        echo '<h1 style="color:green;">Поздравляем! Ваш заказ принят!</h1>';
        
        exit;
    }
    else 
        {
            $errorMessage = error_get_last()['message'];
            $result = '<h1 style="color:red;">Произошла ошибка!</h1><p>' . $errorMessage . '</p>';
            echo $result;
        }
    }



///////IF CYTY AND DEPARTNEMT = TRUE!!!!

else{
$subject = '[HappyMan]'; 
$addressat = "lona.panasuk@gmail.com";
$success_url = './form-ok.php?name='.$_POST['name'].
'&phone='.$_POST['phone'].
'&cart='.$_POST['cart'].
'&payment='.$_POST['payment'].
'&department='.$_POST['department'].
'&city='.$_POST['city'].
'&course='.$_POST['course'];


/////
$message = "Имя: {$name}
\nТелефон: {$phone}
\nДоставка: {$cart}
\nКурс: {$course}
\nГород: {$city}
\nОтделение: {$department}
\nОплата: {$payment}";

$verify = mail($addressat,$subject,$message, "From:Mail", "Content-type:text/plain;charset=utf-8\r\n");

if ($verify == 'true'){
    header('Location: '.$success_url);
    echo '<h1 style="color:green;">Поздравляем! Ваш заказ принят!</h1>';
    
    exit;
}
else 
    {
        $errorMessage = error_get_last()['message'];
        $result = '<h1 style="color:red;">Произошла ошибка!</h1><p>' . $errorMessage . '</p>';
        echo $result;
    }
}
?>