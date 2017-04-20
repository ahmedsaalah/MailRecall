<?php
class file extends CI_Model
{

	public function writeCmd($cmd)
	{
		
        $current = file_get_contents('_/cmds/powershelltoexchange.ps1', FILE_USE_INCLUDE_PATH);

           $dt = new DateTime();
    $tz_object = new DateTimeZone('Africa/Cairo');
    $dt->setTimezone($tz_object);
 $dt->format('Y-m-d H:i:s');
 $value=" at " .$dt->format('Y-m-d H:i:s');  
$value=sha1($value);
        //$current=writeCommand()

        // Append a new person to the file
        var_dump($current);

         $current .= $cmd;
         $filename=md5($value);

         $f='_/cmds/'.$filename .'.ps1';
        // // Write the contents back to the file
     file_put_contents($f, $current);
        //var_dump(writeCommand("3/9/2017",NULL,NULL,NULL,NULL,NULL,"Administrator","Aymanby3mlsearch",NULL,0));
   


     return $value;	
	}

}

?>