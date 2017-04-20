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
Get-Mailbox qqs | Search-Mailbox -SearchQuery { Sent:"31/3/2017..31/4/1207" AND to:"ahnmaaad@hotmail.com" AND from:"ahmaaaa@live.com" AND subject:"ss"  AND  } -TargetMailbox ahmed@gmail.com -TargetFolder ss