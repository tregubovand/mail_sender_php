# mail_sender_php
Простой класс для отправки HTML писем
Чтобы отправить письмо просто создайте объект класса sendMail и передайте ему параметры в массиве:
* to - Эмейл на который должно придти письмо
* nameto - Имя получателя
* subject - тема писльма
* massage - html содержание письма
* nameto - Имя отправителя
* mailfrom - Почта отправителя

## Пример
    include 'mail.lib.php';
    $subject = "Обращение с вашего сайта";
    $massage = "<h1> Новое Обращение с сайта</h1>
    <table>
    	<tr>
    		<td>
    			Имя отправителя:
    		</td>
    		<td>
    			<i>$name</i>
    		</td>
    	</tr>
    	<tr>
    		<td>
    			Телефон:
    		</td>
    		<td>
    			<i>$phone</i>
    		</td>
    	</tr>
    	<tr>
    		<td>
    			Адрес электронной почты:
    		</td>
    		<td>
    			<i>$email</i>
    		</td>
    	</tr>
    </table>";
    $nameto = 'Менеджер';
    $mailto = 'a@inbox.ru';
    $namefrom = 'Лендинг';
    $mailfrom = 'a@test.ru';
    
    $mailSend = new sendMail(
    	$data = array(
    		'to' => $mailto,
    		'subject' => $subject,
    		'massage' => $massage,
    		'nameto' => $nameto,
    		'namefrom' => $namefrom,
    		'mailfrom' => $mailfrom
    		)
    );
