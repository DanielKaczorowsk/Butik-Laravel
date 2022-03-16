<?php
namespace App\Cennik\parsers;

use App\Cennik\src as cennik;


class parser_cennik implements parse
{
  @param double private $cena;
  private $cennik;
  private $rozmiar;
  private Cennik $cennik;
  public static function parse($parse)
  {
    foreach($parse as $pars)
    {
      $this->cennik=$pars->cena+$rozmiar;
    }
  }
  public function load(Cennik $cennik)
  {
    $this->cennik=$cennik;
    parser_cennik::parse($this->cennik);
  }
}
?>
