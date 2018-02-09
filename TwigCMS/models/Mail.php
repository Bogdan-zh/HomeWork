<?php
class Mail
{
    public function mailTo($to, $first_name = 0, $last_name = 0, $phone = 0)
    {
        $carts = new Carts();
        $cart = $carts->getCart();

        $subject = "Twig Shop";
        $message = "
            <body style='font-size: 18px;'>
            <p>Спасибо за покупку в интернет магазине Twig Shop!</p>";

        $date = date("Y-m-d H:i:s");

        $message .= "<p>Дата заказа: $date</p>";

        if(!empty($first_name) || !empty($last_name)) {
            $message .= "<p>Вас зовут: $first_name $last_name</p>";
        }
        
        if(!empty($phone)) {
            $message .= "<p>Ваш номер телефона: $phone</p>";
        }


        $message .= "
        <table style='border: 1px solid black; border-collapse: collapse;'>
            <tr style='padding: 5px;'>
                <th style='padding: 10px; border: 1px solid black;'>Название</th>
                <th style='padding: 10px; border: 1px solid black;'>Цена</th>
                <th style='padding: 10px; border: 1px solid black;'>Количество</th>
            </tr>";

            $ftotal = 0;
            foreach($cart['products'] as $i) {
                $formail = [];
                $formail[] = $i['name'];
                $formail[] = $i['price'];
                $formail[] = $i['amount'];

                $fname = $formail['0'];
                $fprice = $formail['1'];
                $famount = $formail['2'];
                $ftotal += $fprice * $famount;

                $message .= "
                <tr>
                    <td style='padding: 10px; border: 1px solid black;'>$fname</td>
                    <td style='padding: 10px; border: 1px solid black;'>$fprice грн</td>
                    <td style='padding: 10px; border: 1px solid black;'>$famount шт</td>
                </tr>";
            }
            $message .= "
                    <tr>
                        <td colspan='3'>Итого: $ftotal грн</td>
                    </tr>
                ";
            $message .= "</table>";

            $scheme = $_SERVER['REQUEST_SCHEME'];
            $domen = $_SERVER['HTTP_HOST'];

            $message .= "<p>$scheme://$domen</p>";
            $message .= "</body></html>";
            
            $headers = 'Content-type: text/html; charset=iso-8859-1';
            
            mail($to, $subject, $message, $headers);
            
    }
}