<?php
class EmailData extends CI_Model
{
    public $dateFrom,$dateTo
    ,$recipient,$sender,
    $keyword,$subject,
    $targetMailbox,$targetFolder,
    $searchedMailBox,$groupOrUser;

    function __construct() 
    {
        $dateFrom = NULL;
        $dateTo = NULL;
        $recipient = NULL;
        $sender = NULL;
        $keyword = NULL;
        $subject = NULL;
        $targetMailbox = NULL;
        $targetFolder = NULL;
        $searchedMailBox = NULL;
        $groupOrUser = NULL;
    }
}
?>