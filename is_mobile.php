<?php
    function is_mobile() {  
    if (isset($_SERVER['HTTP_VIA'])) return true;  
    if (isset($_SERVER['HTTP_X_NOKIA_CONNECTION_MODE'])) return true;  
    if (isset($_SERVER['HTTP_X_UP_CALLING_LINE_ID'])) return true;  
    if (strpos(strtoupper($_SERVER['HTTP_ACCEPT']),"VND.WAP.WML") > 0) {  
        // Check whether the browser/gateway says it accepts WML.  
        $br = "WML";  
    } else {  
        $browser = isset($_SERVER['HTTP_USER_AGENT']) ? trim($_SERVER['HTTP_USER_AGENT']) : '';  
        if(empty($browser)) return true;  
        $browser=substr($browser,0,4);  
        if ($browser=="Noki" || // Nokia phones and emulators  
            $browser=="Eric" || // Ericsson WAP phones and emulators  
            $browser=="WapI" || // Ericsson WapIDE 2.0  
            $browser=="MC21" || // Ericsson MC218  
            $browser=="AUR"  || // Ericsson R320  
            $browser=="R380" || // Ericsson R380  
            $browser=="UP.B" || // UP.Browser  
            $browser=="WinW" || // WinWAP browser  
            $browser=="UPG1" || // UP.SDK 4.0  
            $browser=="upsi" || // another kind of UP.Browser ??  
            $browser=="QWAP" || // unknown QWAPPER browser  
            $browser=="Jigs" || // unknown JigSaw browser  
            $browser=="Java" || // unknown Java based browser  
            $browser=="Alca" || // unknown Alcatel-BE3 browser (UP based?)  
            $browser=="MITS" || // unknown Mitsubishi browser  
            $browser=="MOT-" || // unknown browser (UP based?)  
            $browser=="My S" ||// unknown Ericsson devkit browser ?  
            $browser=="WAPJ" || // Virtual WAPJAG www.wapjag.de  
            $browser=="fetc" || // fetchpage.cgi Perl script from www.wapcab.de  
            $browser=="ALAV" || // yet another unknown UP based browser ?  
            $browser=="Wapa" || // another unknown browser (Web based "Wapalyzer"?)  
            $browser=="Oper") // Opera  
        {  
            $br = "WML";  
        } else {  
            $br = "HTML";  
        }  
    }  
    if($br == "WML") {  
        return TRUE;  
    } else {  
        return FALSE;  
    }  
}

if(is_mobile()){
  //is mobile browser
  header('HTTP/1.1 301 Moved Permanently');// send 301
  header('Location: http://m.example.com/');// redirect to mobile site
  exit();
}
else{
  header('HTTP/1.1 301 Moved Permanently');// send 301
  header('Location: http://example.com/');// redirect to web site
  exit();
}
?>