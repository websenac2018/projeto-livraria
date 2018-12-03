<?php
  function createThumbnail($filename) {
    //header("Content-type: image/jpeg");
    // dimensões do thumbnail
    $thumbnail_height = 170;
    $thumbnail_width = 180;
    $thumbnail = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
    // checa o diretório do thumbnail
    $dirThumbnails = 'upload' . DIRECTORY_SEPARATOR . 'miniaturas';
    if(!is_dir($dirThumbnails)) {
      mkdir($dirThumbnails);
    }
    $file = $filename;
    // imagecreatefromjpeg - fn php que cria um temporario para o GD
    $src_img = imagecreatefromjpeg($file);
    // getimagesize - fn php para retornar um array com as dimensões da imagem
    //var_dump(getimagesize($newFilename));
    #var_dump($file);
    /*
    $src_img = getimagesize($newFilename);
    // para iniciarmos a geração do thumbnail precisamos pegar as dimensões da img original
    $src_img_size_width = $src_img[0];
    $src_img_size_height = $src_img[1];
    */
    // list() - fn php que manipula um array
    list($src_img_size_width, $src_img_size_height) = getimagesize($file);
    #echo "dimensões $src_img_size_width, $src_img_size_height";
    // gerar nome do thumbnail
    $nomeThumbnail = $filename;
    // gera o thumbnail
    imagecopyresampled($thumbnail, $src_img, 0, 0, 0, 0, $thumbnail_width, $thumbnail_height, $src_img_size_width, $src_img_size_height);
    imagejpeg($thumbnail, $dirThumbnails . DIRECTORY_SEPARATOR . $nomeThumbnail);
    // apaga as img do cache
    imagedestroy($thumbnail);
    imagedestroy($src_img);
}