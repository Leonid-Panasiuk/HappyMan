<?php
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $cart = $_POST['cart'];
        $payment = $_POST['payment'];
        $department = $_POST['department'];
        $city = $_POST['city'];
        $course = $_POST['course'];
        $from = 'From: HappyMan'; 
        $to = 'lona.panasuk@gmail.com'; // send to this address
        $subject = 'HappyMan'; //subject line in email
        $success_url = './form-ok.php';

        if (empty($city) || empty($department)) {
                $message = "Від: $name\n
                Телефон: $phone\n 
                Доставка: $cart\n 
                Курс: $course\n
                Оплата: $payment\n";
                echo '<h1 style="color:green;">Поздравляем! Ваш заказ принят!</h1>';
        } else {
                $message = "Від: $name\n
                Телефон: $phone\n 
                Доставка: $cart\n 
                Місто:$city\n
                Відділення: $department\n
                Курс: $course\n
                Оплата: $payment\n";
                echo '<h1 style="color:green;">Поздравляем! Ваш заказ принят!</h1>';
        }

         

        mail($to, $subject, $message); ?>

