<?php
function exe($name){
$red = "\e[1;31m";
$green = "\e[1;32m";
$yellow = "\e[1;33m";
$blue = "\e[1;34m";
$cyan = "\e[1;36m";
$white = "\e[1;37m";
$risk=0;
echo $white."\nFile $red$name ".$white."Found Please Wait..\n\n";
echo $cyan."File Type (exe) ..\n\n";
sleep(1);
$str=shell_exec("strings $name");

//888 rat
if(preg_match("/6595b64144ccf1df/",$str))
{
if(preg_match("/PSAPI.DLL/",$str))
{
if(preg_match("/WNetGetConnectionW/",$str))
{
echo $red."[+] Found 888 rat \n";
$risk = $risk + 10;
}
else
{
echo $green."[-] Clear no 888 rat \n";
}
}
else
{
echo $green."[-] Clear no 888 rat \n";
}
}
else
{
echo $green."[-] Clear no 888 rat \n";
}

//DarkTrack Rat 4.1
if(preg_match("/2005 Pierre le Riche/",$str))
{
if(preg_match("/4.1 Alien+/",$str))
{
echo $red."[+] Found DarkTrack Rat 4.1 \n";
$risk = $risk + 10;
}
else
{
echo $green."[-] Clear no DarkTrack Rat 4.1 \n";
}
}
else
{
echo $green."[-] Clear no DarkTrack Rat 4.1 \n";
}

//njrat
if(preg_match("/j.exe/",$str))
{
if(preg_match("/NtSetInformationProcess/",$str))
{
echo $red."[+] Found njRat \n";
$risk = $risk + 10;
}
else
{
echo $green."[-] Clear no njRat \n";
}
}
else
{
echo $green."[-] Clear no njRat \n";
}

//XtermeRat
if(preg_match("/7kOIsWow64/",$str))
{
if(preg_match("/Snapsho$H/",$str))
{
echo $red."[+] Found XtermeRat \n";
$risk = $risk + 10;
}
else
{
echo $green."[-] Clear no XtermeRat \n";
}
}
else
{
echo $green."[-] Clear no XtermeRat \n";
}

//CyberGate Rat
if(preg_match("/gUnitServerUtils/",$str))
{
if(preg_match("/wcrypt2/",$str))
{
if(preg_match("/KuURLHistory/",$str))
{
echo $red."[+] Found CyberGate Rat \n";
$risk = $risk + 10;
}
else
{
echo $green."[-] Clear no CyberGate Rat \n";
}
}
else
{
echo $green."[-] Clear no CyberGate Rat \n";
}
}
else
{
echo $green."[-] Clear no CyberGate Rat \n";
}

//Quasar Rat 1.3.0.0
if(preg_match("/xClient.Core.Packets.ServerPackets/",$str))
{
if(preg_match("/<RemotePort>k__BackingField/",$str))
{
echo $red."[+] Found Quasar Rat 1.3.0.0\n";
$risk = $risk + 10;
}
else
{
echo $green."[-] Clear no Quasar Rat 1.3.0.0\n";
}
}
else
{
echo $green."[-] Clear no Quasar Rat 1.3.0.0 \n";
}

//VanTomRat
if(preg_match("/Stub.VanToMRAT.resources/",$str))
{
echo $red."[+] Found VanTomRat 1.4 \n";
$risk = $risk + 10;
}
else
{
echo $green."[-] Clear no VanTomRat 1.4 \n";
}

//Beast Trojan Horse
if(preg_match("/2003 Avenger b/",$str))
{
if(preg_match("/42CE4021-DE0/",$str))
{
echo $red."[+] Found Beast Trojan Horse 2.6 \n";
$risk = $risk + 10;
}
else
{
echo $green."[-] Clear no Beast Trojan Horse 2.6 \n";
}
}
else
{
echo $green."[-] Clear no Beast Trojan Horse 2.6 \n";
}

if($risk > 1)
{
echo $red."\n\nThis application may be harmful to your computer .\n";
}
else
{
echo $green."\n\n[+] Clear no thing found\n";
}
if (!file_exists("output"))
{
shell_exec("mkdir output && cd output && mkdir $name && cd ..");
}
else
{
if (!file_exists("output/$name"))
{
shell_exec("cd output && mkdir $name && cd ..");
}
else
{
shell_exec("xxd -g4 $name > output/$name/hexDOcode.txt");
shell_exec("objdump -S $name > output/$name/source.txt");
shell_exec("strings $name > output/$name/strings.txt");
}
}
shell_exec("xxd -g4 $name > output/$name/hexDOcode.txt");
shell_exec("objdump -S $name > output/$name/source.txt");
shell_exec("strings $name > output/$name/strings.txt");
echo $white."\nApp info output/$name\n";
done();
}
function done()
{
$white = "\e[1;37m";
$red = "\e[1;31m";
$blue = "\e[1;34m";
$date = date("d-m-Y h:i:s");
$user = shell_exec('whoami');
echo $white."\nScan finished in $blue$date$white by user : $red$user$white\n~ Bye Bye \n";
}
function apk($name){
$red = "\e[1;31m";
$green = "\e[1;32m";
$yellow = "\e[1;33m";
$blue = "\e[1;34m";
$cyan = "\e[1;36m";
$white = "\e[1;37m";
$risk=0;
echo $red."\n$name ".$white."Found Please Wait..\n\n";
echo $cyan."File Type (apk) ..\n\n";
$str=shell_exec("strings $name");
//SpyNote 5.0
if(preg_match("/abc_textfield_search_default_mtrl_alpha.9.pngPK/",$str))
{
if(preg_match("/##Widget.AppCompat.PopupMenu.Overflow/",$str))
{
echo $red."[+] Found SpyNote ! \n";
$risk = $risk + 10;
}
else
{
echo $green."[-] Clear no SpyNote \n";
}
}
else
{
echo $green."[-] Clear no SpyNote \n";
}

//DroidJack
if(preg_match("/zP_1cXD/",$str))
{
if(preg_match("/surface_camera/",$str))
{
if(preg_match("/cameraview.xml/",$str))
{
echo $red."[+] Found DroidJack \n";
$risk = $risk + 10;
}
else
{
echo $green."[-] Clear no DroidJack \n";
}
}
else
{
echo $green."[-] Clear no DroidJack \n";
}

}
else
{
echo $green."[-] Clear no DroidJack \n";
}
if($risk > 1)
{
echo $red."\n\nThis application may be harmful to your computer .\n";
}
else
{
echo $green."\n\n[+] Clear no thing found\n";
}
if (!file_exists("output"))
{
shell_exec("mkdir output && cd output && mkdir $name && cd ..");
}
else
{
if (!file_exists("output/$name"))
{
shell_exec("cd output && mkdir $name && cd ..");
}
else
{
shell_exec("xxd -g4 $name > output/$name/hexDOcode.txt");
shell_exec("objdump -S $name > output/$name/source.txt");
shell_exec("strings $name > output/$name/strings.txt");
}
}
shell_exec("xxd -g4 $name > output/$name/hexDOcode.txt");
shell_exec("objdump -S $name > output/$name/source.txt");
shell_exec("strings $name > output/$name/strings.txt");
echo $white."\nApp info output/$name\n";
done();
}
