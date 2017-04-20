Set-ExecutionPolicy RemoteSigned
Y
$username = "gpvodafone\administrator"
$password = "@hmed2010"
$secureStringPwd = $password | ConvertTo-SecureString -AsPlainText -Force 
$credObject = New-Object System.Management.Automation.PSCredential -ArgumentList $username, $secureStringPwd 
$UserCredential = Get-Credential -credential $credObject 
$Session = New-PSSession -ConfigurationName Microsoft.Exchange -ConnectionUri http://exchangehost/PowerShell/ 

-Authentication Kerberos -Credential $UserCredential
Import-PSSession $Session
Get-Mailbox ss | Search-Mailbox -SearchQuery { Sent:"17/3/207..33/3/2017" AND to:"ahnmaaad@hotmail.com" AND from:"ahmaaaa@live.com" AND subject:"sss"  AND  } -TargetMailbox ahmed@gmail.com -TargetFolder ss