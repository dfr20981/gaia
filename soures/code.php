<?php

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>gaia</title>
  </head>
  <body>
    //estilos de bootstrap
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    //menu o cabesera del prollecto
  <?php require_once '../templates/header.php'; ?>
  //footer del prollecto
  <?php require_once '../templates/footer.php'; ?>
  //modales
  <?php
  require_once '../templates/modales.php';
  ?>
  //bootstrap
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
  </body>
</html>
/*
dddddddddoooooooddddddddddxxxxxxxkkkkkkkxxdddddddddddoooooooooooooooooddddddddddddddddddddddddddddoo
xxxxxxxxdddooooodddxxxxxxxxxxxkkkkkOOkkkkxxdddddddddddddooooooooooodddddddddddddddddddddddddddddddoo
xxxxxxxxxxddddddxxxxxkkkkkkkkkkkOOOOkkkkxxdddddddddddddddddddddddddddddddddddddddddddddddddddddddool
xxxxxxkxxxxddxxxkkkkkkkkkkkkkkkOOOOOkkkkxxddddddddddddddddddddddddddddddddddddddddddddddddddddddddol
xxxxxxxxxxxxxxkkkkkkkkkkkkkkkkOOOOOOOkkxxxdddddddddddddddddddddddddddddddddddddddddddddddxxxxxxdddoo
xxxxxxxkkxxxkkkkkkkkkkkkkkkkkOOOOOOOOkkxxxxxxxxddddddddddddddddddddddddddddddddddddddddxxxxxxxxxxddd
xxxxxxkkkkkkkkkkkkkkkkkkkkkkOOOOOOOOkkkxxxxxxxxxxxxxxxxxxddddddddddddddddxxddxxxxxxxxxxxxxxxkkxxxddd
xxxkxkkkkkkkkkkkkkkkOOOOOOOOOOOOOOOkkkkxxxxkkkxxxkkxxxxxxxxxddxxxxxxxxxxxxxxxxxxxxxxxxxxxkkkkkxxxddd
kkkkkkkkkkkkkkkOOOOOOOOOOOOOOOOOOOOkkxxkkkkkxdodddollloxxxxxddxxxxxxxxxxxxxxxxxxxxxxxxxxxkkkkkxxxxdd
kkkkkkkkkkOOOOOOOOOOOO0OOO00OOOO0OOkkkkkkkkxo;,;;;,,,':dxxxxxxxxxxkkkkkkkkkxxxkkkkkxxxxxkkkkkkkkxxdd
kkkkkkkkOOOOOOOOOOOO0000000000O000OOkkkkkkdc:;;::,,,'.,oxdxxxxxkkkkkkkkkkkkkkkkkkkkkxxxxkkkkkkkkkxdd
kkkkkkkkOOOOOOOOO00000000000000000OOkkkkkdc:cccc;:c:,,',;;lxxxxxxxkkkkkkxxxxxxxxxkkkxxxkkkkkkkkkkxxd
OOkkkkkkOOOOOOOOO000000000000000000Okkkko:;;:clolooc;;,..'lxxkxxxxkkxxxxxxxxxxxxxxxxxkkkkkkkkkkkkkxd
OOOkkkkkOOOOOOOOO000000000000000000OOOOxc,;ccccclllc:,'..,dxkkxkkkkkkkxxxxxxxxxxxxxxkkkkkkkkkkkkkkxd
OOOOkkkkOOOOOOOO00000000000000KK00OOOOko:codol:;;;;;;;,'.:dxxxkkkkkkkxxddddxxxxxxxxkkkkkkkkkkkkkkkxd
OOOOOOOOOOOOOOOO00000000000000K000OkkOOdoxkkxdl;:cc:,,:;',cdxxxxkkkkxxxxddxxxxxxxxkkkkkkkkkkkOOOkkxd
OOOOkOOOOOOOOOOOOO0000000000KKK000OkkOklldodxxddoooc;;;''':dxxxkkkkkxxxxxxxxkxxxxxkkkkkkkkkkkkkkkkxx
OOOOOOOOOOOOOOOOOOO0000000KKKKK0OOkkkOkcclcoxkkdlcc;,,,'..'lxxxkkkkkkkkkkkkkkxxxxxxxkkkkkkkkkkkkkkkx
OOOOOOOOOOOOOOOOOOO0000000KKKK00OkkkkOOdlodxkdl::::;,'',...'oxxxkkkkkkkkkkkkkxxxxxxxkkkkkkkkkkkkkkkx
OOOOOOOOOOOOOOOOOOO000000KKKKK00OOkkkOOdccodxdl:;:lc:,......:dxxxxxxxxkkkkkkkkkkkkkkkkkkkkkkkkkkkkkx
OOOOOOOOOOOOOOOOOO000KKKKKXXKK00OOOOkkd:,,:c:::;;:::c;......'ldddxxxxdxxxxkkkkkkkkkkkkkkkkkkkOOkkkkx
OOOOOOOOOOOOOOOOOO00KKXXXXXXKKK00OOOOd;'..',,;:cclccl:.......'lddxdddddxxxxkkxxxkkkkkkkkkkkkOOOOkkkx
kOOOOOOOOO000000000KKXXXXXXXKKKK0OOkdo;.',;:::cllllcc:,,''....',codxxddddxxxxxxxkkkkkkkkkkkOOOOOOkkx
kOOOOOOOO000000000KKXXXXKXKKKKK0o,ll',;;looollool:;;;;;;;'.......':llcldddxxxxxxxkkkkkkkkkkOOOOOOkkk
OOOOOOOO000000000KKKXXXXKKKKKK0k:.',;codxxxddoddolcc:;;;::,'.','''''..,:codddxxxxkkkkkkkkkkOOOOOOOkk
OOOOOOOOOO0000000KKXXXXXKKK0kdoc;;:clooxkkxddxxkxooolc::c:;,'..''.''....;lddddxxxxxxxkkkkkkkOOOOOOOk
OOOOOOOOOOO000000KKXXXXKKKOo:;:ccc::clodddxddkxkxollllc:;;,,'','.''''.'lxxxdddddxxxxxxxxkkkkkOOOOkkk
OOOOOOOOOO0000000KKXXXKK00Ox:',;;;collllcodloddxxxdollc;,.';;cc;,,'...,dkkxxxxxdxxxxxkkkkkkkkkkkkkkk
OOOOOOO0000000000KKXXK00OkOkc,';cdxdollcclocclokO00Oxoc:,..,:cc;,''...':oxkxxxxxxxxxxkkkkkkkkkkkkkkk
OOOOO00000000000KKXXXK0OOkxc;;:odddolc:::cc:;cdkkkkxolll:,..;;;;;;','..';dkkkxddxxxkkkkkkxxxkkkkkkkk
OOOOO0000000KKKKKKXXXK00kc,'';lllolccc;,;:;'':odxdoolclc;,'..:llll:::'',:dxkkkkkxxxkkkkkkkxxkkkkkkkk
OOOOO000000KKKKKKKKXXKK0Okl,'';:ccc::;,'';,'';;:llcc:;c:,'...;cccccc,,'''';lodxkxxxxkkkkkkkkkkkkkkkk
OOOOO00000KKKKKKKKKKXKKK0d;,...'',,,''',,,;;'''.',','';;'....';:lllc,'.....'''cxkxxxxkkkkkkkkkkOOOOO
OOOO00000KKKKKKKKKKKKKKK0o,.........',:c::lo:;;'..............';lcll;..'''''',lxxxxxxkkkkkkkkkkOOOOO
kOOO0000KKKKKKKKKKKKKK0kdc,'''.....,:lddoxxxdllc;'...'.........,:,,:c;.''....,oddxxxkkkkkkOOOkkOOOOO
kkOO0000KKKKKKKKKKK000d:,',;:;,'..,cloxdxkkxddlcl:,,;:,''..... .'...;:'......':llodxkkkOOOOOOOOOOOOO
kkOOO000KKKKKKKKKKK000kl;:cc:,,,,,:odxxxxkxdoolccc:;:c;;;,.... .,...';'.........',cdkOOOOOOOOOOOOOOO
kkOO0000KKKKKKKKKK00000xlolc;,;::clodxxxxOOxocclolccllcc:;''.. ,dc.......'........'lkkOOOOO00OOOOOOO
kOOO00KKKKKKKKKKKKKKKK0oclc:;;:cooodddxxdxkxdllodoolcc::;;,,'...dk,.......'''......ckkOOOOO000OOOOOO
kOO00KKKKKKKXXKKKKKKKOl;;cc::::lodddxxxdddddoccodddoc:;;;,''....'od,...............lkOOOOOO00OOOOOOO
OO000KKKKKKKKKK00KKKkc,,cc:;;cllodoodxxdddddl::llooo:,,'',,'.....'kk:..'...''.....:xO00OOOOOOOOOOOOO
OO00KKKKKKKKKKKKKXK0o;;:ll:,;cc:cllllodddddoclooccc:,''',;,,'....'d0k,.,',;,,,'. .lOO000OOOOOOOO0OOO
O00KKKKKKKKKKKKK00xl:;ldoc,';;::::cllooooool:clc:;;;'',;;,,,......:kl..,'.;;,;;. .,dO00000OOOOOOO0OO
0KKKXXXKKKKK000Odc::codl;''',,,;,';:clllllcc:cc;;;;;',;;;;;'.......:l'.''.,::,;'...,d00000OOOOOO000O
KKXXXXXXKK00000kc,;lodl,.,;;,;;::;,,;:::ccc:clc;;,,,,;;;,,''........cc..,.':c,,'....cO00000OO000000O
KKXXXXXXKKK000Od::lddl;.',;;;,,;::,,;cc:::cllc;,,'...,,,,'..........;,..;..,c;,,....:k00000O00000000
KXXXXXXXKKK00Odc:oddo:,..',,;;,,;;,',;:c:;:c:,,'''''.,,,,,,'.''............':,,,....'dO000000000000O
KXXXXXXXKKKKKxccodddl;,'..'''''',;;,,,;::;::,,,,''.'',ccc:;,,'..........'''.''.'....,xOO000000000000
KKXXXXXXXKKK0olddolll:,'',,,'';;:cc:,'',,,,,..'''..,::cllc:;;,''........',,'....'...,dO0O00000000000
KKKKXXXXXXXKOllxoc:::;,'''','',codoo:,,'.'......',';cclolllccc;...,'...''''.........,dOOOO0O00000000
0KKKXXXKXXKK0ocol;,..''',,,,;;;:coolcc:;,'......,;;:clldlcllc:c;'.,'....'''.........;xOOO00000000000
0KKKKKKKKKKK0xc:;'....',;;;;;:;;;ldlc:::;'......,:cccclol:cc::clc,''.......'........ckOOOO0000O00000
00KKKKKKKKKK0k:'''......'',,,;,,;cllc:::;'......,:::ccclc:::;;;cl;'.......''',;,...'okkOO0000OO00000
000KKKKKKKXKKOc..'.....','''',;;;ccc:;;;,.......;ccllc:cl:::;;;:c,......,:ccclc;'..,dkkO00000O0000KK
000KKKKKKKKKK0x:'......','.''''',::;,,,'''.....',:ccccc:cc:;,,;,,,'....':lolooc;''',okO00000000000KK
000KKXXKK0KKXK0Oo,......''',;,'.,;;,'''........',:cccclc:c:'.,,,,'...',:ll::ccc;,,,':kO0000000000KKK
0000KKKK000KKKKKkxoc,...''''''..',''','..... ..,,,,;::cl:;;''''''....,:c:,,;:;::;;;':k000000O0000KKK
O0000KK00OO000KKK0Okxo:,.........'.......... ...,;,,,,clc;;,''''.....,:c,...,,;::;;'cO0O000000000KKK
kOOOO0OOkkkOOOOOOOOkOOxoc...''..','','.....   ...,,,,,:c:;,,,..,....';::'....,,,,'.,d00O00000KKKKKKK
dxkkkkkxxxkkkkkOkkkOO00Oko;'....',;;;,'....   ....,'',;:;;,,,,.......',,cl'..',,'.'oO0OO000KKKKKKKXK
oodddxxdddxxkkkkkkkkOO000Od,......'''''.....  ,:..'..';;',,'''.........'ok:..'''..cO00000KKKXKKKKKKK
ccllooddoddddxxkkkxxkkOOOOk:........''........co:....'','.''''.........;c;......':xO0000KKKXXKKKKXXK
::cclloooooooodxxxxddxxkkOOo'.'.''.'''.......:dxxl,....'..;:c:;,,'''...ol...',:oxO0O000KKKXXXXKKXXXK
::::ccllllllllooddddddxxxkOd,.'..'......''...ckOOkdc'..',;:ccc:;,,,,,..lkdloxO00K00000KKKKXXXKKXXXXX
::::::cccclllloooddoddddxkOd'......','..'....;kOOOOkc.',;:;;::;,;;,,'..;O00KKKKKXK00KKKKXXXXK0KKXXXK
:::::::::ccccllooooooooodxOkc.....',;;,,''....lkOOkOx:'','..,:,,;;'... ;kKKXXXXXXK00KKKXXXXXK0KKKKKK
::::;;;;;;;;:cllllloooooodkOx;....';;;;;;,....,dOOOOOd:....',;:;,,'....;kXNNNNNNNXXXXXXNNNNXKKKKKKKK
;;;;;,,;;,,,;:cccclloodxxxkOOl....',,,,,,,.....cO0O0OOkc...',;;;,''....,o0XXNNNXXXXXXXXNNNXK000KKKK0
''',,,;;,,,;;::ccccloodxkOOOOl'...'''....''.'. .d0000O0x,..''';:;,,,...';o0KKXNNXXXKKKKKKKK00000000O
...','',,;:lllloooooooodkkOOOd:'.'''''.....'.. .o0KKKOko,..',',::;,,,'.,;cxKXNNXXXXXXXXKKK0OOO0K0OOk
'..,,''',:lddxkOOkkkxoloxkO00Od;.''''..........;x00KKOo;,,''',,,:;',,.'''';xXNNNNNNNNNNNXXK0OOKK0dl:
,'.','''',:clodkkkkkxdddkO0KKK0o,..'...........ck0000Ol,,,'',,,;:;',,.'',,'lXNWWWWWWWNNNNXKK0kxdl;,'
,,,,,''',,,,,;:looododdxkOkkkO0Oc'.....','.....:k000Ox:'''',,,,;:,.,,..',,'c0XXXXXNNNXXXK0Okdl:,'''.
,,;;;,',,,,,,,;;::cccloddddoodddo;..'''','....'cOKKK0ko;...';;,,:;',,''',',lk0000000000Okdl:,''.....
;;;;;,,;;;,,;;;,;::;::ccccllc:::c;..',,''.....'lOKKKK0kc'..',;,';:;,'','',:ldxxkkkkkkxdol:;''.......
;:;;;;;::::;;;;;;:;;,,,;,,;;,;,,'..',''''......;lxkkOko;'..',,,',;;,'....,:cllllllloolc:::,''.......
::::c::cccc::c:::::::;;;;,,',,,'..';,..''......',;;;;;,.....',''',;,.....,;;:cc::::::;;;;,,'........
:::cccccllcccllllllllccccc:;,,,...;:,..''''..................,'.',;,......',;;;,,''''''''...........
;::c::cllcc::clolllcccccc:;;,'..',;;'''.''...................,'..',,'.....'',,,,,'''''''............
;:ccccccc:::ccccccc::::::;,...';;,,,;'.''...................','''',,'..''.''''',,''''''''''''.......
:::cccccc::::::::::;;,,,,'...,,;;;,,;,','...................','''.';,'.''.....'''''.''''............
:::ccc::::::;;,,,,,,'.......'',,,,,;,,,'.......  ...........''',''',,,'.'...........................
:::ccc:;,'''''''..............'''''..'.....      ..........''',,,',;,''''..'........................
:;;:cccc:;,,'''''........   .............  ................',,,,,;;,,;,,''''........................
,;;;::;;;;;;;;;;;;,'........            . ....      .......';;;,,;:,,,;;,'''.......................
.''',,,,,,,,,,,,,'''',,,''.......    ....             ......';;,',,,'.','............ .........  .
......''..'''''''''''',,,,,,,'''.........              ...................................
 .........................''''''...........................................................
                 ...........................................................................
                       .....      ..  ...          ... ....................................
                                                           ... ...............
*/