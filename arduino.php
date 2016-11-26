
<html>




<?php
header("Cache-Control: no-cache, must-revalidate");
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
error_reporting(E_ALL);
ini_set("display_errors", 1);
define("PORT","COM4");
 
if (isset($_GET['var1'])) { 
     
        include "php_serial.class.php";
   $serial = new phpSerial;
    $serial->deviceSet(PORT);
        $serial->confBaudRate(9600);
        $serial->confParity("none");
        $serial->confCharacterLength(8);
        $serial->confStopBits(1);
        $serial->confFlowControl("none");
        $serial->deviceOpen();
		
		     $frase=$_GET['var1'];
			 //-----------------------------------
			
			  
		
		
		
		
		
		
		
		
		
		
		
 
		
	
	 if (////) { 
            $serial->sendMessage('H'); 
			echo " <object data=\"xx.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"buongiorno.mp3\">
                  </object> ";
			echo "CIAOO ";
			
 	ob_start();
  header( "refresh:4; url=index.php" );
   ob_end_flush();
 
 
 
    } else 
		
		
	
	if (////) { 
            $serial->sendMessage('A'); 
			echo " <object data=\"luceon.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"luceon.mp3\">
                  </object> ";
	ob_start();
  header( "refresh:4; url=index.php" );
   ob_end_flush();
 

	
        } 
		
		
		
		else
		    
		if (/////)  { 
           
					$cond=rand(1,100);

		  if($cond<30){

		   echo " <object data=\"programmatore.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"programmatore.mp3\">
		</object> ";}
		else if($cond<60&&$cond>30){
			 echo " <object data=\"programmatore1.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"programmatore1.mp3\">
		</object> ";}
		else{echo " <object data=\"programmatore2.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"programmatore3.mp3\">
		</object> ";}
		
		ob_start();
   
    header( "refresh:4; url=index.php" );
   ob_end_flush();		  
				  
	
        
		}
 else if (/////) { 
  			
 $serial->sendMessage('S'); 
		   echo " <object data=\"luceoff.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"luceoff.mp3\">
                  </object> ";
		ob_start();
   
    header( "refresh:4; url=index.php" );
   ob_end_flush();		  
				  
				  
        }


 else if (////) { 
  			
 
		   echo " <object data=\"nome.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"nome.mp3\">
                  </object> ";
		ob_start();
   
    header( "refresh:5; url=index.php" );
   ob_end_flush();		  
				  
				 
        }
		
		 else if (///)  or(///))) { 
  			
 
		   echo " <object data=\"bene.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"bene.mp3\">
                  </object> ";
		ob_start();
   
    header( "refresh:5; url=index.php" );
   ob_end_flush();		  
				  
				 
        }
		
		
		
		 else if (////) { 
  			
 
		   echo " <object data=\"p1.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"p1.mp3\">
                  </object> ";
		ob_start();
   
    header( "refresh:5; url=index.php" );
   ob_end_flush();		  
				  
				 
        }
		
		
		else if (//****string*****) { 
  		 echo " <object data=\"p2.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"p2.mp3\">
                  </object> ";
		ob_start();
   
    header( "refresh:5; url=index.php" );
   ob_end_flush();		  
				  
				 
        
  		 $cond=rand(1,100);

		  if($cond<30){

		   echo " <object data=\"xx.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"amo.mp3\">
		</object> ";}
		else if($cond<60&&$cond>30){
			 echo " <object data=\"xx.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"amo1.mp3\">
		</object> ";}
		else{echo " <object data=\"xx.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"amo3.mp3\">
		</object> ";}
   
    header( "refresh:5; url=index.php" );
   ob_end_flush();		  
				  
				 
        }
		
		

		else if ((strstr($_GET['var1'],"chi")and(strstr($_GET['var1'],"sta")))or ((strstr($_GET['var1'],"chi")and (strstr($_GET['var1'],"si trova"))))or ((strstr($_GET['var1'],"Dov'è")or(strstr($_GET['var1'],"Dove è"))))or ((strstr($_GET['var1'],"dov'è")or (strstr($_GET['var1'],"dove è"))))or ((strstr($_GET['var1'],"Dove si trova")or (strstr($_GET['var1'],"trova"))or (strstr($_GET['var1'],"Dove"))or (strstr($_GET['var1'],"drova"))))) { 
  		 echo " <object data=\"boo.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"boo.mp3\">
                  </object> ";
		ob_start();
   
    header( "refresh:5; url=index.php" );
   ob_end_flush();		  
				  
				 
        }
		
		
		
		else if ((strstr($_GET['var1'],"chi")and(strstr($_GET['var1'],"Dio")))or ((strstr($_GET['var1'],"Chi")and (strstr($_GET['var1'],"Dio"))))or ((strstr($_GET['var1'],"Dov'è")and(strstr($_GET['var1'],"Dio"))))or ((strstr($_GET['var1'],"dov'è")and (strstr($_GET['var1'],"Dio"))))or ((strstr($_GET['var1'],"Dove si trova")and (strstr($_GET['var1'],"trova"))or (strstr($_GET['var1'],"Dove"))and (strstr($_GET['var1'],"Dio"))))) { 
  		 echo " <object data=\"esistenza.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"esistenza.mp3\">
                  </object> ";
		ob_start();
   
    header( "refresh:13; url=index.php" );
   ob_end_flush();		  
				  
				 
        }
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		


		else if ($_GET['var1'] != "Salone" && $_GET['var1'] !="Chi ti ha programmato" && $_GET['var1'] != "Come" && $_GET['var1'] != "Come ti chiami" && $_GET['var1'] != "Come stai") { 
           


		   echo " <object data=\"no.mp3\" type=\"audio/mpeg\">
                  <param name=\"autostart\" value=\"true\">
                  <param name=\"loop\" value=\"false\">
                  <param name=\"src\" value=\"no.mp3\">
                  </object> ";
				  
			  		ob_start();
   
    header( "refresh:2; url=index.php" );
   ob_end_flush();	
        } 
   // $read = $serial->readPort();
   // print $read;
       $serial->deviceClose(); 
	   
}
 ?>
 

  <head>
<?php
  $cache = '';
  if(isset($_GET['eraseCache'])){
    echo '<meta http-equiv="Cache-control" content="no-cache">';
    echo '<meta http-equiv="Expires" content="-1">';
    $cache = '?'.time();
  }
?>



</head>
 

 
 <meta http-equiv="Cache-control" content="no-cache">
 <meta http-equiv="Cache-control" content="no-cache">
 <meta http-equiv="Cache-control" content="no-cache">
 <meta http-equiv="Expires" content="-1">

</html>