(function() {
var doc = document;
var win = window;
loadJSFile=function(e,doc,a){if(e!==!1){var n=doc.createElement("script");n.src=e,n.async=true,n.onreadystatechange=n.onload=function(){var e=n.readyState;!a||e&&!/loaded|complete/.test(e)||(n.onload = null,n.onreadystatechange=null,a())},doc.getElementsByTagName("body")[0].appendChild(n)}else a&&a()};
loadJSFile('https://cnt.trvdp.com/scripts/v5.480/truvid_regular_widget.min.js',doc,function() {
win.brWidgetInit.init('559', '2675', '2577023219109064.5', 'https://stg.truvidplayer.com', {"playlist_id":"1900","video_id":false}, false , 'v5.480','');
});
})();