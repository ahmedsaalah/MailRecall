 $username = "administrator@gpvodafone.local"
 $password = "@hmed2017"
Set-ExecutionPolicy RemoteSigned -force
$secureStringPwd = $password | ConvertTo-SecureString -AsPlainText -Force 
$credObject = New-Object System.Management.Automation.PSCredential -ArgumentList $username, $secureStringPwd 
$UserCredential = Get-Credential -credential $credObject 
$Session = New-PSSession -ConfigurationName Microsoft.Exchange -ConnectionUri http://exchangehost/PowerShell/ -Authentication Kerberos -Credential $UserCredential
Import-PSSession $Session -AllowClobber
Get-Mailbox  | Search-Mailbox -SearchQuery { subject:"a"  } -TargetMailbox administrator@gpvodafone.local -TargetFolder 3eeeed1
