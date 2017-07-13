<?php

// Второе задание от нетологии 
// Применен POST заместо GET.
// простая форма ввода чила с проверкой на numeric





if ($_POST['user_number'] && is_numeric($_POST['user_number'])) {
    
 //echo "Здесь будет код экспоненты";

    echo 'Вы ввели число ' . $_POST['user_number'] . '<br>';
    
    $first = 4;
    $second = 2;
    
    
    while ($first <= $_POST['user_number'])  {
        
        
        
        if ($first != $_POST['user_number']) {
            
            $three = $first;
            $first = $first + $second;
            $second = $three;
            

            
            //static $iteration = 1;
            
            //echo 'итерация' . $iteration++ . '<br>';
            
        }
        
        else {
            
            echo "Задуманное число входит в числовой ряд";
            break;
        }
        
        
     
        
    }
 
    if ($first > $_POST['user_number']) {
           
          echo "Задуманное число НЕ входит в числовой ряд"; 
       }     
        
    
}



else if ($_POST['user_number'] && !is_numeric($_POST['user_number'])) {
    
    echo "Необходимо ввести число<br>";
    echo "Вы будете перенаправлены на страницу ввода через 5 секунд";
    unset($_POST['user_number']);
    ?>
    <meta http-equiv="refresh" content="5;URL=<?=$PHP_SELF?>" />
    <?php
    
}


else {
   
    // Здесь выводим HTML код формы для ввода числа
    ?>
    			<form action="<?=$PHP_SELF?>" method="post"> 
				<input type="text" name="user_number" placeholder="Число">
				<input type="submit">
			</form>

    
    <?php
}


?>