<?php
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $cart = $_POST['cart'];
        $payment = $_POST['payment'];
        $department = $_POST['department'];
        $city = $_POST['city'];
        $course = $_POST['course'];
        $from = 'From: HappyMan'; 
        $to = '380974682460@ya.ru'; // send to this address
        $subject = 'HappyMan'; //subject line in email
        $success_url = './form-ok.php';

         $message = "Від: $name\n
         Телефон: $phone\n 
         Доставка: $cart\n 
         Місто:$city\n
         Відділення: $department\n
         Оплата: $payment\n 
         Курс: $course\n";


         echo '<h1 style="color:green;">Вітаємо! Ваше замовлення прийнято!</h1>';
        
        mail($to, $subject, $message); ?>

