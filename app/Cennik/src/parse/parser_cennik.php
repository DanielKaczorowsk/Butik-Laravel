<?php
namespace App\Cennik\parsers;

use App\Cennik\src as cennik;


class parser_cennik
{
  @param INT private $ilosc_produkt
  @param float private $promocja;
  @param double private $cena;
  $private cennik;
  public static function parse($parse)
  {
    foreach($parse as $pars)
    {
      if($pars->promocja>0)
      {
        $this->cena=+$pars->promocja/100*$pars->cena*$pars->ilosc_produkt;
      }
      else
      {
        $this->cena=+$pars->cena;
      }
    }
  }
  public function load(Cennik $cennik)
  {
    $this->cena=$cennik;
    $produkt=produkt::select('promocja,cena,ilosc')->where($this->cennik->id_user,'id_user')->get();
    parser_cennik::parse($produkt);
  }
}
?>
