<?php 
header('Content-Type: application/javascript');
$currentDomain = $_SERVER['SERVER_NAME'];
$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
$file_path = "icons.js";
$content = file_get_contents($file_path);
echo "window.FontAwesomeKitConfig = {'asyncLoading':{'enabled':false},'autoA11y':{'enabled':true},'baseUrl':'";
echo $protocol;
echo $currentDomain;
echo "','baseUrlKit':'";
echo $protocol;
echo $currentDomain;
echo "','detectConflictsUntil':null,'iconUploads':{},'id':50161377,'license':'free','method':'css','minify':{'enabled':true},'token':'14f55a56cc','v4FontFaceShim':{'enabled':true},'v4shim':{'enabled':true},'version':'5.15.3'};";
echo $content;
?>