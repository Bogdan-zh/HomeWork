<meta charset="utf-8">
<link rel="stylesheet" href="style.css">


<?php 
//header("Content-Type: text/html; charset=utf-8");

function translit($str) {
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    return str_replace($rus, $lat, $str);
  }



function uploadImage($directory) {
    if(!is_dir($directory)) {
        mkdir($directory);
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_FILES)) {
        
        $array_ext = array('jpg','jpeg','png','gif');
        $files = $_FILES['files'];
        $cnt = count($files['name']);

        for($i=0; $i < $cnt; $i++) {
            $name = pathinfo($files['name'][$i], PATHINFO_FILENAME);
            $ext = pathinfo($files['name'][$i], PATHINFO_EXTENSION);
            if(in_array($ext, $array_ext)) {
                $hash = substr(md5($name.date('Y-m-d-h-i-s').rand(1,1000)),0,10);
                $filename = translit($name)."_".$hash.".".$ext;
                if(move_uploaded_file($files['tmp_name'][$i], $directory.$filename)) {
                    echo "Файл <span class=\"fileok\">$name.$ext</span> загружен в папку $directory <br>";
                } else {
                    echo 'ERROR';
                }

            } elseif(($_FILES['files']['name']['0']) == '') {
                echo "Вы ничего не загрузили, выберите файлы для загрузки, и нажмите кнопку 'Отправить'.";
            } else {
                echo "Файл <span class=\"fileerror\">$name.$ext</span> не загружен, недопустимый формат файла.";
            }
        }
    }
}

 ?>

<div class="left">
    <div class="container">
        <h2>Загрузка фото</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple>
            <input type="submit">
        </form>
        <?php 
            uploadImage("files/");
        ?>
    </div>
</div>
<div class="right">
    <div class="container">
        <h2>Содержимое папки files</h2>
        <?php

        $scandir = scandir("files/"); 
        //unset($scandir[0], $scandir[1]);
        array_splice($scandir, 0, 2);

        // Раскоментировать, если нужно посмотреть названия картинок

        // echo "<div class='names'>";
        // if (!empty(scandir("files/"))) {
        //  echo "<pre>";

        //  array_splice($scandir, 0, 0);
        //  print_r($scandir);

        //  //echo implode("<br>", $scandir); // это раскоментировать, если нужны названия НЕ в виде массива

        //  echo "</pre>";
        // }
        // echo "</div>";
        
        ?>
        
        <?php foreach($scandir as $img): ?>
            <a href="files/<?php echo $img ?>"> 
                <img src="files/<?php echo $img ?>"  alt="">
            </a>
        <?php endforeach; ?>

    </div>
</div>
<div style="clear: both;"></div>
