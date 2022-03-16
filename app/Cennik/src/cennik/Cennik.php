<?php
   class cennik
  {
    private $Idproduktu;
    private $Iduser;
    private $cena;
    private $promocja;
    public function set_produkt(array $produkt)
    {
      $this->Idproduktu = $produkt;
    }
    public function get_produkt():array
    {
      return $this->produkt;
    }
    public function set_user(INT $user)
    {
      $this->Iduser = $user;
    }
    public function get_user()
    {
      return $this->user;
    }
    public function set_cena(double $cena)
    {
      $this->cena=$cena;
    }
    public function get_cena()
    {
      return $this->cena;
    }
    public function set_promocja(float $promocja)
    {
      $this->cena = $promocja/100*$this->cena;
    }
  }
?>
