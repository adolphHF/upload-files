<?php
$archivos = $_FILES['files'];

foreach ( $archivos ['tmp_name' as $indice => $tmp_name ){
  $nombre_real = $archivos['name'][$indice];
  move_uploaded_file( $tmp_name, "uploads/$nombre_real");
}

#uploads es el nombre de la carpeta donde en teoría se van a guardar los archivos que se suban
