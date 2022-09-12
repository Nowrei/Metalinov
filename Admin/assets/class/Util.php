<?php

  class Util {
    // Method pour sécuriser toute entrer des formmulaire
    public function testInput($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      $data = strip_tags($data);

      return $data;
    }

    // Method pour afficher les messages de succès et d'alerte
    public function showMessage($type, $message) {
      return '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">
                <strong>' . $message . '</strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
  }