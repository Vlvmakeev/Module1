<?php
    
    /*
            Создаем функцию для вардампа данных 
            (на вход передаем данные для вардампа, 
            функция делаем вардамп данных, переданных нами в аргументе функции 
            и оборачивает его в блок предварительно форматированного текста,
            ничего не возвращает)
    */
    function dd($data){
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die;}
?>