 $username = "administrator@gpvodafone.local"
 $password = "@hmed2012"
Set-ExecutionPolicy RemoteSigned -force
$secureStringPwd = $password | ConvertTo-SecureString -AsPlainText -Force 
$credObject = New-Object System.Management.Automation.PSCredential -ArgumentList $username, $secureStringPwd 
$UserCredential = Get-Credential -credential $credObject 
$Session = New-PSSession -ConfigurationName Microsoft.Exchange -ConnectionUri http://exchangehost/PowerShell/ -Authentication Kerberos -Credential $UserCredential
Import-PSSession $Session -AllowClobber
Get-Mailbox  | Search-Mailbox -SearchQuery { Sent:"05/12/2017" } -TargetMailbox salah@gpvodafone.local -TargetFolder hn2fel
