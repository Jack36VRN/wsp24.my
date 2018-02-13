<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['message'])&&$_POST['message']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'web@wsp24.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заявка с сайта'; //Заголовок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Оставлена заявка</p>
                        <p>Имя: '.$_POST['name'].'</p>                        
                        <p>Телефон: '.$_POST['phone'].'</p>
                        <p>E-mail: '.$_POST['email'].'</p>
                        <p>Комментарий: '.$_POST['message'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Заявка  <admin@wsp24.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail

         $to_customer = $_POST['email']; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject_customer = $_POST['name'].', благодарим за оставленную заявку!'; //Заголовок сообщения
        $message_customer = '
                <html>
                    <head>
                        <title>'.$subject_customer.'</title>
                    </head>
                    <body>
                        <p>Благодарим за оставленную заявку на сайте https://wsp24.ru/ следующего содержания:</p>
                        <p>Имя: '.$_POST['name'].'</p>                        
                        <p>Телефон: '.$_POST['phone'].'</p>
                        <p>E-mail: '.$_POST['email'].'</p>
                        <p>Комментарий: '.$_POST['message'].'</p>
                        <p>В ближайшее время наш менеджер свяжется с Вами.</p>
                        <p>С Уваженияем, студия Web Style Production - мы с Вами 24 месяца в году!</p>                      
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers_customer  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers_customer .= "From: Студия Web Style Production  <web@wsp24.ru>\r\n"; //Наименование и почта отправителя
        mail($to_customer, $subject_customer, $message_customer, $headers_customer); //Отправка письма с помощью функции mail
}
?>