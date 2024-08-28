<?php

namespace Public\view;

use App\controller\Controllers;

class Alert extends Controllers{

  function alert(){
    if ($this->insert == true) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Record inserted sucessfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    elseif ($this->edit == true) {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Record edited sucessfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    elseif ($this->delete == true) {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Record deleted sucessfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }

  }
}
    ?>