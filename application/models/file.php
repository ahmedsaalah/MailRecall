<?php
class file extends CI_Model
{

	public function writeCmd($cmd)
	{
                        $current =$this->readCred();
                        $current.= PHP_EOL;
                        $current .= file_get_contents('_/cmds/powershelltoexchange.ps1', FILE_USE_INCLUDE_PATH);

                        $dt = new DateTime();
                        $tz_object = new DateTimeZone('Africa/Cairo');
                        $dt->setTimezone($tz_object);
                        $dt->format('Y-m-d H:i:s');
                        $value=" at " .$dt->format('Y-m-d H:i:s');  
                        $value .= substr(md5(microtime()),rand(0,26),5);
                        $value=sha1($value);
                        //$current=writeCommand()

                        // Append a new person to the file
                        

                        $current .= $cmd;
                        $current.= PHP_EOL;
                        $filename=md5($value);

                        $f='_/cmds/'.$filename .'.ps1';
                                // // Write the contents back to the file
                        file_put_contents($f,  $this->encryption->encrypt($current));
                        
                        


                return $value;	
	}
        public function readCred()
        {
                        $current = file_get_contents('_/cmds/cred.txt', FILE_USE_INCLUDE_PATH);

                      
                    return $this->encryption->decrypt($current);
                    

              

        }

        public function Cred($current)
        {          //$current = file_get_contents('_/cmds/usernameAndPassword.txt', FILE_USE_INCLUDE_PATH);

                      
                       file_put_contents('_/cmds/cred.txt',  $this->encryption->encrypt($current));
                      

        }
}

?>