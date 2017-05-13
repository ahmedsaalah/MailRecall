HuzzTRcYYerXVtGZn1mxCvY+PudY3lDcZ9Z4WBRfCYlnXD0edyGmYfzixF1uBvd/srfA7yn+g4d/KaBD6UZCd5zN0VwV7ZWNCQvb/33fJPnZCcNcqJpoQ6VmNzsn91/JSet-ExecutionPolicy RemoteSigned -force
$secureStringPwd = $password | ConvertTo-SecureString -AsPlainText -Force 
$credObject = New-Object System.Management.Automation.PSCredential -ArgumentList $username, $secureStringPwd 
$UserCredential = Get-Credential –credential $credObject 
$Session = New-PSSession -ConfigurationName Microsoft.Exchange -ConnectionUri http://exchangehost/PowerShell/ -Authentication Kerberos -Credential $UserCredential
Import-PSSession $Session
foreach ($mailbox in (get-mailbox)) {IF ($mailbox.name -ne "administrator@gpvodafone.local"){Get-Mailbox  | Search-Mailbox -SearchQuery {  } -TargetMailbox administrator@gpvodafone.local -TargetFolder  -DeleteContent -Force}}