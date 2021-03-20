<?php
namespace Drupal\filas\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\UserInterface;

class FilasController extends ControllerBase {

    public function filas($numero) {
      $cap = [
        'col1' => ('Has creat '.$numero.' filas'),
      ];
      $filas=array();
      for($i=1;$i<=(int)$numero;$i++) {
        array_push($filas,array((string)$i));
      }

      return [
        '#type' => 'table',
        '#header' => $cap,
        '#rows' => $filas,
      ];
    }

}
