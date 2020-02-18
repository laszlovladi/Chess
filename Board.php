<?php
// require_once 'Square.php';

class Board 
{
  protected $board;

  public function __construct($fen){
    $board = $this->fen2array($fen);
    for($i = 1; $i < 9; $i++){
      for($j = 1; $j <9; $j++){
        if (isset($board[$i][$j])){
          $piece = new Piece($board[$i][$j]);
          $square = new Square($i, $j, $piece);
          
        }else{
          $square = new Square($i, $j, null);
        }
        // var_dump($square);
        echo $square->__toString();
      }
    }
  }

public  function fen2array($fen)
{
    $parts = preg_split('#\s+#', $fen);
    $rows = explode('/', $parts[0]);
 
    $pieces = array();
 
    $y = 8;
    foreach($rows as $row)
    {
        $x = 1;
        for($i = 0; $i < strlen($row); $i++)
        {
            if(is_numeric($row[$i]))
            {
                $x += intval($row[$i]);
            }
            else
            {
                $pieces[$x][$y] = $row[$i];
                $x++;
            }
        }
        $y--;
    }
 
    return $pieces;
}

}