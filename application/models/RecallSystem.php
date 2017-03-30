<?php
class RecallSystem extends CI_Model
{
	public function searchForEmail($emailData){
		$count=0;
		$searchQuery="";

		if(!is_null($emailData->datefrom) && !is_null($emailData->dateto))
		{
		        $searchQuery .= "Sent:\"$emailData->datefrom..$emailData->dateto\"";

		    $count=1;
		    
		}
		else if(!is_null($emailData->datefrom) && is_null($emailData->dateto))
		{
		    $searchQuery .= "Sent:\"$emailData->datefrom\"";

		    $count=1;
		   
		}
		else if(is_null($emailData->datefrom) && !is_null($emailData->dateto))
		{
		    $searchQuery .= "Sent:\"$emailData->dateto\"";

		    $count=1;
		    
		}
		 if(!is_null($emailData->recipient))
		{
		    if($count==1)
		    {
		        $searchQuery .=" AND ";
		    }
		      
			$searchQuery .="to:\"$emailData->recipient\"";
		    $count=1;
		    
		}
		 if(!is_null($emailData->sender))
		{
		     if($count==1)
		    {
		        $searchQuery .=" AND ";
		    }
		       
			$searchQuery .="from:\"$emailData->sender\"";
		    $count=1;

		}

		 if(!is_null($emailData->subject))
		{
		       if($count==1)
		    {
		        $searchQuery .=" AND ";
		    }
		       
			$searchQuery .="subject:\"$emailData->subject\" ";


		    $count=1;

		}
		 if(!is_null($emailData->keyword))
		{
		     if($count==1)
		    {
		        $searchQuery .=" AND ";
		    }
		       
			$searchQuery .="$emailData->keyword"  ;     

		    $count=1;

		}

		if(is_null($emailData->MailBox))
		{
		    $emailData->MailBox='';
		}
		if($GORU==0){

			return "Get-Mailbox $emailData->MailBox | Search-Mailbox -SearchQuery { $searchQuery } -TargetMailbox $emailData->TargetMailbox -TargetFolder $emailData->TargetFolder";
		}
		else {

			return "Get-DistributionGroupMember -Identity \"$emailData->MailBox\" | Search-Mailbox -SearchQuery { $searchQuery } -TargetMailbox $emailData->TargetMailbox -TargetFolder $emailData->TargetFolder";

		}
	
	}
	public function deleteEmail($emailData)
	{
		
		$deleteCommand = 'foreach ($mailbox in (get-mailbox)) {';
		$deleteCommand .= 'IF ($mailbox.name -ne '.'"'.$emailData->targetMailbox.'"){';
		$deleteCommand .= searchForEmail($emailData)." -DeleteContent -Force}}";
		
		return $deleteCommand;
		
	
	}

}

?>