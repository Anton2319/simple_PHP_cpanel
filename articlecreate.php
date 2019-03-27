<?php
$header = htmlspecialchars($_POST['header']);
$filename = htmlspecialchars($_POST['addfilename']);
$introtext = htmlspecialchars($_POST['addintrotext']);
if($filename != null) {
    $file = "articles/".$filename;
    $file2 = "articles/".$filename."/introtext.txt";
    mkdir($file);
    $file = "articles/".$filename."/header.txt";
    echo(" ".$file);
    file_put_contents($file, $header, FILE_APPEND | LOCK_EX);
    file_put_contents($file2, $introtext, FILE_APPEND | LOCK_EX);
    echo("  ".$filename." успешно создан, перенаправляем вас обратно...");
    
    $msg = $header;
    $msg = wordwrap($msg,70);
    // send email
    if(file_get_contents($file)==$header) {
        mail("anton_2319@outlook.com","Запись успешно опубликована",$msg);
    }
    else {
        mail("anton_2319@outlook.com","Ошибка публикации записи на valpub.ru", "Проверьте правильность введённых данных");
    }
}
else
{
    echo("Произошла ошибка получения данных формы, возможно вы не заполнили имя файла статьи.");
}


?>