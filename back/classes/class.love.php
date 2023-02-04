<?php
class LOVE
{	
	
    private $ldb;
 
    function __construct($LDB_con)
    {
      $this->ldb = $LDB_con;
    }

    
    public function getLoveProfile($user_id)
    {
       try
       { 
          $stmt = $this->ldb->prepare("SELECT age, country, province, city, gender, partner_gender, have_kids, job_title, looking_for, orientation, serious_love, current, movie_genre, music_genre, pet_lover, car, dress_style, love_language, first_date, most_important, leader, religious_views, political_views, out_in, meat_vegan, hobby,travel_place, dream_career, you_smoke, you_drink, you_drugs, you_employed, you_travel, you_salary, you_hours, you_religious, you_ethnicity, you_wantkids, you_bodytype, you_health, you_livealone, you_hair, you_eye, you_height, you_weight, you_educated, p_smoke, p_drink, p_drugs, p_employed, p_travel, p_salary, p_hours, p_religious, p_ethnicity, p_wantkids, p_bodytype, p_health, p_livealone, p_hair, p_eye, p_height, p_weight, p_educated, you_desc, p_desc, hidden FROM  love.user_answers WHERE user_id = $user_id");
           $stmt->bindparam(":user_id", $user_id);  
		   $stmt->execute();
		   $getLoveProfile = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $getLoveProfile;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
 
 
    public function saveProfile($user_id,$age,$country_post,$province,$city,$gender,$ppg,$havekids,$jobtitle,$lookingfor,$sexori,$seriouslove,$current,
            $movie,$music,$pets,$vehicle,$dress,$lovelang,$firstdate,$mostimportant,
            $leader,$religion,$politics,$outin,$vegan,$hobby,$travel,$dreamcareer,
            $u_smoke,$u_drink,$u_drugs,$u_employed,$u_travelwork,$u_salary,$u_hourswork,$u_religious,$u_ethnicity,$u_wantkids,$u_body,$u_health,$u_livealone,$u_hair,$u_eye,$u_height,$u_weight,$u_educated,
            $p_smoke,$p_drink,$p_drugs,$p_employed,$p_travelwork,$p_salary,$p_hourswork,$p_religious,$p_ethnicity,$p_wantkids,$p_body,$p_health,$p_livealone,$p_hair,$p_eye,$p_height,$p_weight,$p_educated,
            $u_desc,$p_desc)
    {

       try
       {
	       
	       $sql = "UPDATE love.user_answers SET 
	        age = :age,
			country = :country_post, 
			province = :province, 
			city = :city, 
			gender = :gender, 
			partner_gender = :ppg, 
			have_kids = :havekids,
			job_title = :jobtitle,
			looking_for = :lookingfor, 
			orientation = :sexori, 
			serious_love = :seriouslove, 
			current = :current, 
			
			movie_genre = :movie, 
			music_genre = :music, 
			pet_lover = :pets, 
			car = :vehicle, 
			dress_style = :dress, 
			love_language = :lovelang, 
			first_date = :firstdate, 
			most_important = :mostimportant, 
			leader = :leader, 
			religious_views = :religion, 
			political_views = :politics, 
			out_in = :outin, 
			meat_vegan = :vegan, 
			hobby = :hobby, 
			travel_place = :travel, 
			dream_career = :dreamcareer, 
			
			you_smoke = :dreamcareer, 
			you_drink = :u_drink, 
			you_drugs = :u_drugs, 
			you_employed = :u_employed, 
			you_travel = :u_travelwork, 
			you_salary = :u_salary, 
			you_hours = :u_hourswork, 
			you_religious = :u_religious, 
			you_ethnicity = :u_ethnicity, 
			you_wantkids = :u_wantkids, 
			you_bodytype = :u_body, 
			you_health = :u_health, 
			you_livealone = :u_livealone, 
			you_hair = :u_hair, 
			you_eye = :u_eye, 
			you_height = :u_height, 
			you_weight = :u_weight, 
			you_educated = :u_educated, 
			
			p_smoke = :p_smoke, 
			p_drink = :p_drink, 
			p_drugs = :p_drugs, 
			p_employed = :p_employed, 
			p_travel = :p_travelwork, 
			p_salary = :p_salary, 
			p_hours = :p_hourswork, 
			p_religious = :p_religious, 
			p_ethnicity = :p_ethnicity, 
			p_wantkids = :p_wantkids, 
			p_bodytype = :p_body, 
			p_health = :p_health, 
			p_livealone = :p_livealone, 
			p_hair = :p_hair, 
			p_eye = :p_eye, 
			p_height = :p_height, 
			p_weight = :p_weight, 
			p_educated = :p_educated, 
			
			you_desc = :u_desc, 
			p_desc = :p_desc, 
			last_updated = NOW()
            WHERE user_id = ".$user_id;
            
			$stmt = $this->ldb->prepare($sql);                       
			$stmt->bindParam(':age', $age, PDO::PARAM_STR);       
			$stmt->bindParam(':country_post', $country_post, PDO::PARAM_STR);       
			$stmt->bindParam(':province', $province, PDO::PARAM_STR);       
			$stmt->bindParam(':city', $city, PDO::PARAM_STR);       
			$stmt->bindParam(':gender', $gender, PDO::PARAM_STR);       
			$stmt->bindParam(':ppg', $ppg, PDO::PARAM_STR);       
			$stmt->bindParam(':havekids', $havekids, PDO::PARAM_STR);       
			$stmt->bindParam(':jobtitle', $jobtitle, PDO::PARAM_STR);       
			$stmt->bindParam(':lookingfor', $lookingfor, PDO::PARAM_STR);       
			$stmt->bindParam(':sexori', $sexori, PDO::PARAM_STR);       
			$stmt->bindParam(':seriouslove', $seriouslove, PDO::PARAM_STR);       
			$stmt->bindParam(':current', $current, PDO::PARAM_STR); 
			      
			$stmt->bindParam(':movie', $movie, PDO::PARAM_STR);    
			$stmt->bindParam(':music', $music, PDO::PARAM_STR);
			$stmt->bindParam(':pets', $pets, PDO::PARAM_STR);  
			$stmt->bindParam(':vehicle', $vehicle, PDO::PARAM_STR);  
			$stmt->bindParam(':dress', $dress, PDO::PARAM_STR);  
			$stmt->bindParam(':lovelang', $lovelang, PDO::PARAM_STR);  
			$stmt->bindParam(':firstdate', $firstdate, PDO::PARAM_STR);  
			$stmt->bindParam(':mostimportant', $mostimportant, PDO::PARAM_STR);  
			$stmt->bindParam(':leader', $leader, PDO::PARAM_STR);  
			$stmt->bindParam(':religion', $religion, PDO::PARAM_STR);  
			$stmt->bindParam(':politics', $politics, PDO::PARAM_STR);  
			$stmt->bindParam(':outin', $outin, PDO::PARAM_STR);  
			$stmt->bindParam(':vegan', $vegan, PDO::PARAM_STR);  
			$stmt->bindParam(':hobby', $hobby, PDO::PARAM_STR);  
			$stmt->bindParam(':travel', $travel, PDO::PARAM_STR);  
			$stmt->bindParam(':dreamcareer', $dreamcareer, PDO::PARAM_STR); 
			 
			$stmt->bindParam(':u_smoke', $u_smoke, PDO::PARAM_STR);  
			$stmt->bindParam(':u_drink', $u_drink, PDO::PARAM_STR);  
			$stmt->bindParam(':u_drugs', $u_drugs, PDO::PARAM_STR);  
			$stmt->bindParam(':u_employed', $u_employed, PDO::PARAM_STR);  
			$stmt->bindParam(':u_travelwork', $u_travelwork, PDO::PARAM_STR);  
			$stmt->bindParam(':u_salary', $u_salary, PDO::PARAM_STR);  
			$stmt->bindParam(':u_hourswork', $u_hourswork, PDO::PARAM_STR);  
			$stmt->bindParam(':u_religious', $u_religious, PDO::PARAM_STR);  
			$stmt->bindParam(':u_ethnicity', $u_ethnicity, PDO::PARAM_STR);  
			$stmt->bindParam(':u_wantkids', $u_wantkids, PDO::PARAM_STR);  
			$stmt->bindParam(':u_body', $u_body, PDO::PARAM_STR);  
			$stmt->bindParam(':u_health', $u_health, PDO::PARAM_STR);  
			$stmt->bindParam(':u_livealone', $u_livealone, PDO::PARAM_STR);  
			$stmt->bindParam(':u_hair', $u_hair, PDO::PARAM_STR);  
			$stmt->bindParam(':u_eye', $u_eye, PDO::PARAM_STR);  
			$stmt->bindParam(':u_height', $u_height, PDO::PARAM_STR);  
			$stmt->bindParam(':u_weight', $u_weight, PDO::PARAM_STR);  
			$stmt->bindParam(':u_educated', $u_educated, PDO::PARAM_STR);  
			
			$stmt->bindParam(':p_smoke', $p_smoke, PDO::PARAM_STR);  
			$stmt->bindParam(':p_drink', $p_drink, PDO::PARAM_STR);  
			$stmt->bindParam(':p_drugs', $p_drugs, PDO::PARAM_STR);  
			$stmt->bindParam(':p_employed', $p_employed, PDO::PARAM_STR);  
			$stmt->bindParam(':p_travelwork', $p_travelwork, PDO::PARAM_STR);
			$stmt->bindParam(':p_salary', $p_salary, PDO::PARAM_STR);
			$stmt->bindParam(':p_hourswork', $p_hourswork, PDO::PARAM_STR);
			$stmt->bindParam(':p_religious', $p_religious, PDO::PARAM_STR);
			$stmt->bindParam(':p_ethnicity', $p_ethnicity, PDO::PARAM_STR);
			$stmt->bindParam(':p_wantkids', $p_wantkids, PDO::PARAM_STR);
			$stmt->bindParam(':p_body', $p_body, PDO::PARAM_STR);
			$stmt->bindParam(':p_health', $p_health, PDO::PARAM_STR);
			$stmt->bindParam(':p_livealone', $p_livealone, PDO::PARAM_STR);
			$stmt->bindParam(':p_hair', $p_hair, PDO::PARAM_STR);
			$stmt->bindParam(':p_eye', $p_eye, PDO::PARAM_STR);
			$stmt->bindParam(':p_height', $p_height, PDO::PARAM_STR);
			$stmt->bindParam(':p_weight', $p_weight, PDO::PARAM_STR);
			$stmt->bindParam(':p_educated', $p_educated, PDO::PARAM_STR);
			
			$stmt->bindParam(':u_desc', $u_desc, PDO::PARAM_STR);
			$stmt->bindParam(':p_desc', $p_desc, PDO::PARAM_STR);
			$stmt->execute(); 

           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
    

    public function getLoveMatchProfile($user_id)
    {
       try
       { 
          $stmt = $this->ldb->prepare("SELECT user_answers.age, "
                  . "user_answers.country, "
                  . "user_answers.province, "
                  . "user_answers.city, "
                  . "user_answers.gender, "
                  . "user_answers.partner_gender, "
                  . "user_answers.have_kids, "
                  . "user_answers.looking_for, "
                  . "user_answers.orientation, "
                  . "user_answers.serious_love, "
                  . "user_answers.current, "
                  . "user_answers.movie_genre, "
                  . "user_answers.music_genre, "
                  . "user_answers.pet_lover, "
                  . "user_answers.car, "
                  . "user_answers.dress_style, "
                  . "user_answers.love_language, "
                  . "user_answers.first_date, "
                  . "user_answers.most_important, "
                  . "user_answers.out_in, "
                  . "user_answers.meat_vegan, "
                  . "user_answers.hobby,"
                  . "user_answers.travel_place, "
                  . "user_answers.dream_career, "
                  . "user_answers.you_smoke, "
                  . "user_answers.you_drink, "
                  . "user_answers.you_drugs, "
                  . "user_answers.you_employed, "
                  . "user_answers.you_travel, "
                  . "user_answers.you_salary, "
                  . "user_answers.you_hours, "
                  . "user_answers.you_religious, "
                  . "user_answers.you_ethnicity, "
                  . "user_answers.you_wantkids, "
                  . "user_answers.you_bodytype, "
                  . "user_answers.you_health, "
                  . "user_answers.you_livealone, "
                  . "user_answers.you_hair, "
                  . "user_answers.you_eye, "
                  . "user_answers.you_height, "
                  . "user_answers.you_weight, "
                  . "user_answers.you_educated, "
                  . "user_answers.p_smoke, "
                  . "user_answers.p_drink, "
                  . "user_answers.p_drugs, "
                  . "user_answers.p_employed, "
                  . "user_answers.p_travel, "
                  . "user_answers.p_salary, "
                  . "user_answers.p_hours, "
                  . "user_answers.p_religious, "
                  . "user_answers.p_ethnicity, "
                  . "user_answers.p_wantkids, "
                  . "user_answers.p_bodytype, "
                  . "user_answers.p_health, "
                  . "user_answers.p_livealone, "
                  . "user_answers.p_hair, "
                  . "user_answers.p_eye, "
                  . "user_answers.p_height, "
                  . "user_answers.p_weight, "
                  . "user_answers.p_educated, "
                  . "users.user_id, users.first, users.last, users.user_name , users.zodiac"
                  . " FROM  love.user_answers JOIN accounts.users ON user_answers.user_id = users.user_id "
                  . " WHERE user_answers.user_id = :user_id");
           $stmt->bindparam(":user_id", $user_id);  
		   $stmt->execute();
		   $getLoveProfile = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $getLoveProfile;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   
   /**
    * Get user gender preferences
    * @param user_id
    * @return array -> single row of user gender and ppg
    * 
    */
   
    public function getUserGenderAndPPG($user_id)
    {
       try
       { 
          $stmt = $this->ldb->prepare("SELECT  gender, partner_gender FROM  love.user_answers WHERE user_id = $user_id");
           $stmt->bindparam(":user_id", $user_id);  
		   $stmt->execute();
		   $getLoveProfile = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $getLoveProfile;
          }
          else{
              return "";
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   /**
    * Get users with matching gender preferences
    * @param string,string,int
    * @return array of ints
    * 
    */
    
   public function getIdsWithMatchingGenders($gender,$ppg,$user_id)
    {
       try
       { 
       $stmt = $this->ldb->prepare("SELECT user_id FROM love.user_answers WHERE gender = :ppg AND partner_gender = :gender AND user_id != :user_id");
           $stmt->bindparam(":gender", $gender);  
            $stmt->bindparam(":ppg", $ppg);  
            $stmt->bindparam(":user_id", $user_id);  
		   $stmt->execute();
		   $getLoveProfile = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $getLoveProfile;
          }
          else{
              return "no";
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
    /**
    * Get NOT SPECIFIED matching gender preferences
    * @param string,int
    * @return array of ints
    * 
    */
    
   public function getNotSpecifiedPPGGenders($user_id)
    {
       try
       { 
       $stmt = $this->ldb->prepare("SELECT user_id FROM love.user_answers WHERE user_id != :user_id LIMIT 1000");
         
            $stmt->bindparam(":user_id", $user_id);  
		   $stmt->execute();
		   $getLoveProfile = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $getLoveProfile;
          }

       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
  /**
    * Get user location for matching, country and province
    * @param user_id
    * @return array row
    * 
    */
    
    public function getUserLocations($user_id)
    {
       try
       { 
          $stmt = $this->ldb->prepare("SELECT country,province FROM  love.user_answers WHERE user_id = :user_id");
           $stmt->bindparam(":user_id", $user_id);  
		   $stmt->execute();
		   $getLoveProfile = $stmt->fetch();

          if($stmt->rowCount() > 0)
          {
            return $getLoveProfile;
          }
          else{
              return "";
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
   /**
    * Get matches in same location as user
    * @param string,string,string of ids, int
    * @return array
    * 
    */
   
   public function getMatchesInLocation($country,$province,$ids, $user_id)
    {
       try
       { 
       $stmt = $this->ldb->prepare("SELECT user_id,country,province FROM love.user_answers "
                                  . "WHERE user_id IN (".$ids.") AND user_id != :user_id");
        //$stmt = $this->ldb->prepare("SELECT user_id,country,province FROM love.user_answers WHERE user_id IN (".$ids.") AND country = :country OR province = :province AND user_id != :user_id");
          // $stmt->bindparam(":country", $country);  
           // $stmt->bindparam(":province", $province);  
            $stmt->bindparam(":user_id", $user_id);  
		   $stmt->execute();
		   $getLoveProfile = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if($stmt->rowCount() > 0)
          {
            return $getLoveProfile;
          }
          else{
              return "";
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
  
   
}