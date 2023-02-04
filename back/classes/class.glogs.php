<?php
class GLOGS
{	
	
	private $gdb;
 
    function __construct($GDB_con)
    {
      $this->gdb = $GDB_con;
    }
    

    public function newChapter($title,$chapter,$type,$hidden,$user_id)
    {

       try
       {
	       
	       //$chapter = nl2br($chapter);

           $stmt = $this->gdb->prepare("INSERT INTO glogs.".$user_id."(chapter_title, chapter_blog, chapter_type, chapter_hidden, glog_id) 
                                                       VALUES(:title, :chapter, :type, :hidden, :id)");
              
           $stmt->bindparam(":title", $title);
           $stmt->bindparam(":chapter", $chapter);
           $stmt->bindparam(":type", $type);            
           $stmt->bindparam(":hidden", $hidden);            
           $stmt->bindparam(":id", $user_id);              
           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
    
    
 
    public function getChapters($user_id)
    {
       try
       {
          $stmt = $this->gdb->prepare("SELECT * FROM glogs.$user_id WHERE chapter_type != 'DELETE'");
	      $stmt->bindValue(':glog_id', $user_id);
	      //$stmt->bindValue(':chapter_title', $chapter_title);
	      //$stmt->bindValue(':chapter_blog', $chapter_blog);
	      $stmt->execute();
	      $chapterView = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $chapterView;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
   
    
    public function editChapter($chap_id,$user_id)
    {
       try
       { 
          $stmt = $this->gdb->prepare("SELECT * FROM glogs.$user_id WHERE chapter_id = $chap_id ");
           $stmt->bindparam(":chapid", $chapid);          
           $stmt->bindparam(":id", $user_id);  
          $stmt->execute();
	      $chapterEdit = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $chapterEdit;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
    public function saveChapter($user_id,$title,$chapter,$type,$hidden,$chapid)
    {

       try
       {
	       
	       $sql = "UPDATE glogs.".$user_id." SET chapter_title = :title, 
            chapter_blog = :blog, 
            chapter_type = :type,  
            chapter_hidden = :hidden,
            last_edited = NOW()
            WHERE chapter_id = :id";
			$stmt = $this->gdb->prepare($sql);                                  
			$stmt->bindParam(':title', $title, PDO::PARAM_STR);       
			$stmt->bindParam(':blog', $chapter, PDO::PARAM_STR);    
			$stmt->bindParam(':type', $type, PDO::PARAM_STR);
			$stmt->bindParam(':hidden', $hidden, PDO::PARAM_STR);  
			$stmt->bindParam(':id', $chapid, PDO::PARAM_INT);   
			$stmt->execute(); 

           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
    
  
    public function deleteChapter($user_id,$type,$chapid)
    {

       try
       {
	       
	       $sql = "UPDATE glogs.".$user_id." SET 
            chapter_type = :type,  
            last_edited = NOW()
            WHERE chapter_id = :id";
			$stmt = $this->gdb->prepare($sql);                     
			$stmt->bindParam(':type', $type, PDO::PARAM_STR);
			$stmt->bindParam(':id', $chapid, PDO::PARAM_INT);   
			$stmt->execute(); 

           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
    
    

	
	
}