<?php
use DateTime;
use DateTimeZone;
class DataMapper
{
  private $data;
  private $date;
  private $datezone;
    public function __construct()
    {
      $this->date= new \DateTime();
      $this->datezone=$this->date->getTimezone();
      $this->date=$this->date->format('Y-m-d H:i:s');
    }
    public function save(array $dane)
    {
      
    }
}
?>
