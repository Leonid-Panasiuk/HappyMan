<?php
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $cart = $_POST['cart'];
        $payment = $_POST['payment'];
        $department = $_POST['department'];
        $city = $_POST['city'];
        $course = $_POST['course'];
        $headers = "Content-Type: text/plain; charset=UTF-8";
        $from = 'From: HappyMan'; 
        $to = 'ywis@i.ua';
        $subject = 'HappyMan'; 
        $success_url = './form-ok.php';

        if (empty($city) || empty($department)) {
                $message = "Від: $name\n
                Телефон: $phone\n 
                Доставка: $cart\n 
                Курс: $course\n
                Оплата: $payment\n";
                echo '<h1 style="color:green;">Вітаємо! Ваше замовлення прийнято!</h1>';
        } else {
                $message = "Від: $name\n
                Телефон: $phone\n 
                Доставка: $cart\n 
                Місто:$city\n
                Відділення: $department\n
                Курс: $course\n
                Оплата: $payment\n";
                echo '<h1 style="color:green;">Вітаємо! Ваше замовлення прийнято!</h1>';
        }

         

        mail($to, $subject, $message, $headers); ?>

