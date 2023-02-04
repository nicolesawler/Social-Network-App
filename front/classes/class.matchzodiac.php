<?php

/* 
 * Copyright 2017 nicolesawler.
 *
 */

class ZODIACMATCH{
   
/* 
 * 
 * Capricorn
 *
 */  
  public function Capricorn($user_zodiac){
      switch (strtoupper($user_zodiac)) {
          case "VIRGO": $result =  +3;
          break;
          case "CAPRICORN": $result =  +2;
          break;
          case "TAURUS": $result =  +2;
          break;
          case "GEMINI": $result =  0;
          break;
          case "CANCER": $result =  +1;
          break;
          case "AQUARIUS": $result =  0;
          break;
          case "PISCES": $result =  +2;
          break;
          case "SCORPIO": $result =  +3;
          break;
          case "LEO": $result =  -3;
          break;
          case "LIBRA": $result =  0;
          break;
          case "SAGITTARIUS": $result =  0;
          break;
          case "ARIES": $result =  +1;
          break;
          default:$result =  0;
          break;
      }
      return $result;
  }  
/* 
 * 
 * Aquarius
 *
 */    
  public function Aquarius($user_zodiac){
      switch (strtoupper($user_zodiac)) {
          case "VIRGO": $result =  +3;
          break;
          case "CAPRICORN": $result =  +2;
          break;
          case "TAURUS": $result =  -3;
          break;
          case "GEMINI": $result =  +2;
          break;
          case "CANCER": $result =  0;
          break;
          case "AQUARIUS": $result =  +1;
          break;
          case "PISCES": $result =  0;
          break;
          case "SCORPIO": $result =  -2;
          break;
          case "LEO": $result =  0;
          break;
          case "LIBRA": $result =  +1;
          break;
          case "SAGITTARIUS": $result =  +1;
          break;
          case "ARIES": $result =  +3;
          break;
          default:$result =  0;
          break;
      }
        return $result;
}  
/* 
 * 
 * Pisces
 *
 */   
  public function Pisces($user_zodiac){
      switch ($user_zodiac) {
          case "VIRGO": $result =  0;
          break;
          case "CAPRICORN": $result =  +2;
          break;
          case "TAURUS": $result =  +3;
          break;
          case "GEMINI": $result =  -3;
          break;
          case "CANCER": $result =  0;
          break;
          case "AQUARIUS": $result =  +1;
          break;
          case "PISCES": $result =  +1;
          break;
          case "SCORPIO": $result =  +1;
          break;
          case "LEO": $result =  -2;
          break;
          case "LIBRA": $result =  +2;
          break;
          case "SAGITTARIUS": $result =  -2;
          break;
          case "ARIES": $result =  -1;
          break;
          default:$result =  0;
          break;
      }
       return $result;
 }   
/* 
 * 
 * Aries
 *
 */     
  public function Aries($user_zodiac){
      switch (strtoupper($user_zodiac)) {
          case "VIRGO": $result =  +1;
          break;
          case "CAPRICORN": $result =  +2;
          break;
          case "TAURUS": $result =  -1;
          break;
          case "GEMINI": $result =  -3;
          break;
          case "CANCER": $result =  0;
          break;
          case "AQUARIUS": $result =  +1;
          break;
          case "PISCES": $result =  -1;
          break;
          case "SCORPIO": $result =  0;
          break;
          case "LEO": $result =  +2;
          break;
          case "LIBRA": $result =  +1;
          break;
          case "SAGITTARIUS": $result =  +2;
          break;
          case "ARIES": $result =  +2;
          break;
          default:$result =  0;
          break;
      }
      return $result;
  }  
    
/* 
 * 
 * Taurus
 *
 */     
  public function Taurus($user_zodiac){
     switch (strtoupper($user_zodiac)) {
          case "VIRGO": $result =  +2;
          break;
          case "CAPRICORN": $result =  +2;
          break;
          case "TAURUS": $result =  +3;
          break;
          case "GEMINI": $result =  -1;
          break;
          case "CANCER": $result =  +1;
          break;
          case "AQUARIUS": $result =  -2;
          break;
          case "PISCES": $result =  +1;
          break;
          case "SCORPIO": $result =  0;
          break;
          case "LEO": $result =  -3;
          break;
          case "LIBRA": $result =  0;
          break;
          case "SAGITTARIUS": $result =  0;
          break;
          case "ARIES": $result =  -1;
          break;
          default:$result =  0;
          break;
      }
       return $result;
 }  
    
/* 
 * 
 * Gemini
 *
 */      
  public function Gemini($user_zodiac){
     switch (strtoupper($user_zodiac)) {
          case "VIRGO": $result =  -3;
          break;
          case "CAPRICORN": $result =  0;
          break;
          case "TAURUS": $result =  +3;
          break;
          case "GEMINI": $result =  -1;
          break;
          case "CANCER": $result =  +1;
          break;
          case "AQUARIUS": $result =  +1;
          break;
          case "PISCES": $result =  -2;
          break;
          case "SCORPIO": $result =  0;
          break;
          case "LEO": $result =  +3;
          break;
          case "LIBRA": $result =  +2;
          break;
          case "SAGITTARIUS": $result =  +1;
          break;
          case "ARIES": $result =  +1;
          break;
          default:$result =  0;
          break;
      }
       return $result;
 }  
/* 
 * 
 * Cancer
 *
 */  
  public function Cancer($user_zodiac){
     switch (strtoupper($user_zodiac)) {
          case "VIRGO": $result =  +2;
          break;
          case "CAPRICORN": $result =  0;
          break;
          case "TAURUS": $result =  +3;
          break;
          case "GEMINI": $result =  -1;
          break;
          case "CANCER": $result =  +1;
          break;
          case "AQUARIUS": $result =  +1;
          break;
          case "PISCES": $result =  +2;
          break;
          case "SCORPIO": $result =  +1;
          break;
          case "LEO": $result =  0;
          break;
          case "LIBRA": $result =  -3;
          break;
          case "SAGITTARIUS": $result =  0;
          break;
          case "ARIES": $result =  -1;
          break;
          default:$result =  0;
          break;
      }
       return $result;
 }  
     
 /* 
 * 
 * Leo
 *
 */           
  public function Leo($user_zodiac){
     switch (strtoupper($user_zodiac)) {
          case "VIRGO": $result =  -1;
          break;
          case "CAPRICORN": $result =  -3;
          break;
          case "TAURUS": $result =  -3;
          break;
          case "GEMINI": $result =  +2;
          break;
          case "CANCER": $result =  +1;
          break;
          case "AQUARIUS": $result =  0;
          break;
          case "PISCES": $result =  0;
          break;
          case "SCORPIO": $result =  -2;
          break;
          case "LEO": $result =  0;
          break;
          case "LIBRA": $result =  +1;
          break;
          case "SAGITTARIUS": $result =  +2;
          break;
          case "ARIES": $result =  +3;
          break;
          default:$result =  0;
          break;
      }
       return $result;
 }  
 
/* 
 * 
 * Virgo
 *
 */            
  public function Virgo($user_zodiac){
    switch (strtoupper($user_zodiac)) {
          case "VIRGO": $result =  +3;
          break;
          case "CAPRICORN": $result =  +2;
          break;
          case "TAURUS": $result =  +2;
          break;
          case "GEMINI": $result =  -2;
          break;
          case "CANCER": $result =  +1;
          break;
          case "AQUARIUS": $result =  0;
          break;
          case "PISCES": $result =  -1;
          break;
          case "SCORPIO": $result =  +1;
          break;
          case "LEO": $result =  0;
          break;
          case "LIBRA": $result =  0;
          break;
          case "SAGITTARIUS": $result =  -2;
          break;
          case "ARIES": $result =  +1;
          break;
          default:$result =  0;
          break;
      }
       return $result;
 }  
 /* 
 * 
 * Libra
 *
 */  
     public function Libra($user_zodiac){
     switch (strtoupper($user_zodiac)) {
          case "VIRGO": $result =  -2;
          break;
          case "CAPRICORN": $result =  +1;
          break;
          case "TAURUS": $result =  0;
          break;
          case "GEMINI": $result =  +3;
          break;
          case "CANCER": $result =  -2;
          break;
          case "AQUARIUS": $result =  +2;
          break;
          case "PISCES": $result =  +1;
          break;
          case "SCORPIO": $result =  -1;
          break;
          case "LEO": $result =  +2;
          break;
          case "LIBRA": $result =  0;
          break;
          case "SAGITTARIUS": $result =  +1;
          break;
          case "ARIES": $result =  0;
          break;
          default:$result =  0;
          break;
      }
       return $result;
 }  
/* 
 * 
 * Scorpio
 *
 */ 
   public function Scorpio($user_zodiac){
     switch (strtoupper($user_zodiac)) {
          case "VIRGO": $result =  +2;
          break;
          case "CAPRICORN": $result =  +3;
          break;
          case "TAURUS": $result =  0;
          break;
          case "GEMINI": $result =  0;
          break;
          case "CANCER": $result =  +2;
          break;
          case "AQUARIUS": $result =  -3;
          break;
          case "PISCES": $result =  +1;
          break;
          case "SCORPIO": $result =  +1;
          break;
          case "LEO": $result =  -3;
          break;
          case "LIBRA": $result =  -1;
          break;
          case "SAGITTARIUS": $result =  -1;
          break;
          case "ARIES": $result =  0;
          break;
          default:$result =  0;
          break;
      }
        return $result;
} 
  
/* 
 * 
 * Sagittarius
 *
 */ 
  public function Sagittarius($user_zodiac){
     switch (strtoupper($user_zodiac)) {
          case "VIRGO": $result =  0;
          break;
          case "CAPRICORN": $result =  -2;
          break;
          case "TAURUS": $result =  -1;
          break;
          case "GEMINI": $result =  +1;
          break;
          case "CANCER": $result =  0;
          break;
          case "AQUARIUS": $result =  +1;
          break;
          case "PISCES": $result =  -3;
          break;
          case "SCORPIO": $result =  -1;
          break;
          case "LEO": $result =  +3;
          break;
          case "LIBRA": $result =  +2;
          break;
          case "SAGITTARIUS": $result =  +2;
          break;
          case "ARIES": $result =  +2;
          break;
          default:$result =  0;
          break;
      }
       return $result;
 }  
  
  
}

