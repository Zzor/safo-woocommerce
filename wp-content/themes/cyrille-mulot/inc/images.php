<?php 
/*-------------------------------------------------------
* Habilita el upload de SVG
*-------------------------------------------------------*/
add_filter('upload_mimes', function ($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
});

/*-------------------------------------------------------
* Activa la carga de imágenes webp en WordPress
*-------------------------------------------------------*/
function webp_upload_mime($existing_mimes) {
  $existing_mimes['webp'] = 'image/webp';
  return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mime');

/*-------------------------------------------------------
* Habilita la vista previa en la sección de medios
*-------------------------------------------------------*/
function webp_is_displayable($result, $path) {
  if ($result === false) {
      $displayable_image_types = array( IMAGETYPE_WEBP );
      $info = @getimagesize( $path );

      if (empty($info)) {
          $result = false;
      } elseif (!in_array($info[2], $displayable_image_types)) {
          $result = false;
      } else {
          $result = true;
      }
  }

  return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);