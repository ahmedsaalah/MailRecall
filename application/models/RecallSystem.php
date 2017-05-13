<?php
class RecallSystem extends CI_Model
{



	public function makeRequest($emailData){
		//var_dump($emailData);
		$count=0;
		$searchQuery="";
		//var_dump($emailData);
        
		if(strlen($emailData->dateFrom) >0 && strlen($emailData->dateTo)>0)
		{
		        $searchQuery .= "Sent:\"$emailData->dateFrom..$emailData->dateTo\"";

		    $count=1;
		    
		}
		else if(strlen($emailData->dateFrom) > 0&& strlen($emailData->dateTo)==0)
		{
		    $searchQuery .= "Sent:\"$emailData->dateFrom\"";

		    $count=1;
		   
		}
		else if(strlen($emailData->dateFrom) ==0 && strlen($emailData->dateTo)>0)
		{
		    $searchQuery .= "Sent:\"$emailData->dateTo\"";

		    $count=1;
		    
		}
		 if(strlen($emailData->recipient)>0)
		{
		    if($count==1)
		    {
		        $searchQuery .=" AND ";
		    }
		      
			$searchQuery .="to:\"$emailData->recipient\"";
		    $count=1;
		    
		}
		 if(strlen($emailData->sender)>0)
		{
		     if($count==1)
		    {
		        $searchQuery .=" AND ";
		    }
		       
			$searchQuery .="from:\"$emailData->sender\"";
		    $count=1;

		}

		 if(strlen($emailData->subject)>0)
		{
		       if($count==1)
		    {
		        $searchQuery .=" AND ";
		    }
		       
			$searchQuery .="subject:\"$emailData->subject\" ";


		    $count=1;

		}
		 if(strlen($emailData->keyword)>0)
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
		    $emailData->searchedMailBox='everyone';
			
		}
		if($emailData->groupOrUser==0){
			

			return  $searchQuery ." in mailbox of ".$emailData->searchedMailBox;
		}
		else {

			return $searchQuery ." in mailbox of DistributionGroupMember " .$emailData->searchedMailBox;

		}
	
	}

	
	public function searchForEmail($emailData){
		$count=0;
		$searchQuery="";
		//var_dump($emailData);
        
		if(strlen($emailData->dateFrom) >0 && strlen($emailData->dateTo)>0)
		{
		        $searchQuery .= "Sent:\"$emailData->dateFrom..$emailData->dateTo\"";

		    $count=1;
		    
		}
		else if(strlen($emailData->dateFrom) > 0&& strlen($emailData->dateTo)==0)
		{
		    $searchQuery .= "Sent:\"$emailData->dateFrom\"";

		    $count=1;
		   
		}
		else if(strlen($emailData->dateFrom) ==0 && strlen($emailData->dateTo)>0)
		{
		    $searchQuery .= "Sent:\"$emailData->dateTo\"";

		    $count=1;
		    
		}
		 if(strlen($emailData->recipient)>0)
		{
		    if($count==1)
		    {
		        $searchQuery .=" AND ";
		    }
		      
			$searchQuery .="to:\"$emailData->recipient\"";
		    $count=1;
		    
		}
		 if(strlen($emailData->sender)>0)
		{
		     if($count==1)
		    {
		        $searchQuery .=" AND ";
		    }
		       
			$searchQuery .="from:\"$emailData->sender\"";
		    $count=1;

		}

		 if(strlen($emailData->subject)>0)
		{
		       if($count==1)
		    {
		        $searchQuery .=" AND ";
		    }
		       
			$searchQuery .="subject:\"$emailData->subject\" ";


		    $count=1;

		}
		 if(strlen($emailData->keyword)>0)
		{
		     if($count==1)
		    {
		        $searchQuery .=" AND ";
		    }
		       
			$searchQuery .="$emailData->keyword"  ;     

		    $count=1;

		}

		if(strlen($emailData->searchedMailBox)==0)
		{
		    $emailData->searchedMailBox=null;
			
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
		$deleteCommand .= $this->searchForEmail($emailData)." -DeleteContent -Force}}";
		
		return $deleteCommand;
		
	
	}

}

?>