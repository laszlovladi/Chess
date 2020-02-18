<?php

class Square 
{
  protected $x_coord = null;
  protected $y_coord = null;
  protected $piece = null;

  public function __construct($x, $y, $piece) {
    $this->x_coord = $x;
    $this->y_coord = $y;
    $this->piece = $piece;
  }

  protected function isDark(){
    if (($this->x_coord%2 == 0 AND $this->y_coord%2 == 0) OR ($this->x_coord%2 == 1 AND $this->y_coord%2 == 1)){
      return true;
    }
  }

  public function __toString(){
    return '<div  class="' . ($this->isDark() ? "black" : "white") . '"  >' . $this->piece . '</div>'; // enhance this
  }
}