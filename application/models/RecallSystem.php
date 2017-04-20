<?php
class RecallSystem extends CI_Model
{



	public function searchForEmail($emailData){
		$count=0;
		$searchQuery="";
		var_dump($emailData);
        
		if(!is_null($emailData->dateFrom) && !is_null($emailData->dateTo))
		{
		        $searchQuery .= "Sent:\"$emailData->dateFrom..$emailData->dateTo\"";

		    $count=1;
		    
		}
		else if(!is_null($emailData->dateFrom) && is_null($emailData->dateto))
		{
		    $searchQuery .= "Sent:\"$emailData->dateFrom\"";

		    $count=1;
		   
		}
		else if(is_null($emailData->dateFrom) && !is_null($emailData->dateTo))
		{
		    $searchQuery .= "Sent:\"$emailData->dateTo\"";

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

		if(is_null($emailData->searchedMailBox))
		{
		    $emailData->searchedMailBox='';
			
		}
		if($emailData->groupOrUser==0){

			return "Get-Mailbox $emailData->searchedMailBox | Search-Mailbox -SearchQuery { $searchQuery } -TargetMailbox $emailData->targetMailbox -TargetFolder $emailData->targetFolder";
		}
		else {

			return "Get-DistributionGroupMember -Identity \"$emailData->searchedMailBox\" | Search-Mailbox -SearchQuery { $searchQuery } -TargetMailbox $emailData->targetMailbox -TargetFolder $emailData->targetFolder";

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