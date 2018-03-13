<?php

date_default_timezone_set('UTC');

require_once __DIR__.'/hilink.class.php';
require_once __DIR__.'/database.class.php';
require_once __DIR__.'/crud.class.php';

$url1=$_SERVER['REQUEST_URI'];
header("Refresh: 3; URL=$url1");

$hilink = AMWD\HiLink::create();

$db = Database::getInstance();
$conn = $db->getConnection(); 

$crud = Crud::getInstance();




echo "Host: ".$hilink->getHost().PHP_EOL;
echo "</br> </br> </br>";
echo "Online: ".$hilink->online().PHP_EOL;

if (!$hilink->online()) {
	echo "not online".PHP_EOL;
}

echo "</br> </br> </br>";

if(!$hilink->getSimStatus()){
    echo "SIM not ready".PHP_EOL;
}

echo "</br> </br> </br>";

echo "SMS Count". $hilink->getSmsCount();

$hilink->getNotifications();

 $out =  $hilink->getSmsForDb(1, true);


 for($i=0; $i< count($out); ++$i){


    if( !$out[$i]['read'] ){
       
            $num = "". $out[$i]['number'];
            $msg = "". str_replace("'","\'",  $out[$i]['msg'] );
            $crud->addNewSmsPara($conn, $out[$i]['idx'],  $num, $msg,  $out[$i]['time']  );
            
            $hilink->setSmsRead( $out[$i]['idx'] );
            //VALUES (". $out[$i]['idx'] .", '" . $out[$i]['number'] ."', '" .  str_replace("'","\'",  $out[$i]['msg'] ) ."'," . $out[$i]['time'] .")";
    }

}


 echo "<table border='1'> <tr>
   <th>SMS ID</th>
   <th>Number</th>
   <th>Message</th>
   <th>Status</th>
   <th>Time</th>
    </tr>";

    for($i=0; $i< count($out); ++$i){

        echo "<tr>
            <td>" .$out[$i]['idx'] ."</td>
            <td>" .$out[$i]['number'] ."</td>
            <td>" .$out[$i]['msg'] ."</td>
            <td>" .$out[$i]['read'] ."</td>
            <td>" .$out[$i]['time'] ."</td>
         </tr>";
    }

echo "</table>";
 
  echo "</br> </br> </br>";

 ///$out1 =  $hilink->getUnreadSmsForDb(true);


 // echo "GetUnreadSmsForDb : ".json_encode($out);
  
//$hilink->getSmsInbox();
//$hilink->doSmsBox(1,$asArray);

echo "</br> </br> </br>";

//$hilink->getSmsInbox();

$hilink->getUnreadSms();


//$hilink->getSmsCount();

    
//$hilink->sendSmsStatus();
$hilink->listUnreadSms();

//$hilink->setSmsRead(20001);


echo "</br> </br> </br>";



echo "</br> </br> </br>";

?>