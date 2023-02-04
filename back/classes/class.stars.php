<?php
class STARS
{	
	
private $sdb;
 
    function __construct($SDB_con)
    {
      $this->sdb = $SDB_con;
    }

    
    public function getZodiac($z)
    {
       try
       { 
          $stmt = $this->sdb->prepare("SELECT zt_zodiac, zt_random, zt_goals, zt_achieve, zt_love, zt_career, zt_date FROM stars.zodiac_traits WHERE zt_zodiac = :z");
           $stmt->bindparam(":z", $z);  
		   $stmt->execute();
		   $getZodiacStuff = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $getZodiacStuff;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }



}