$('.venobox').venobox({
	numeratio: true,
	border: '20px'
});
$('.venoboxframe').venobox({
	border: '6px',
	overlayColor: 'rgba(255,255,255,0.85)',
	titlePosition: 'bottom',
	titleColor: '#333',
	titleBackground: 'transparent',
	closeColor: '#333',
	closeBackground: 'transparent',
	spinner: 'wave'
});
$('.venoboxvid').venobox({
	bgcolor: '#000',
	spinner: 'cube-grid'
	// cb_post_open : function(obj, gallIndex, thenext, theprev){
	//     console.log(thenext);
	// },
});
$('.venoboxinline').venobox({
	numeratio: true,
	framewidth: '400px',
	frameheight: 'auto',
	border: '10px',
	bgcolor: '#f46f00',
	titleattr: 'data-title',
	infinigall: true
	// cb_init : function(plugin){
	//     console.log('INIT');
	//     console.log(plugin);
	// },
	// cb_pre_open : function(obj){
	//     console.log('link obj');
	//     console.log(obj.data());
	// },
	// cb_post_open : function(obj, gallIndex, thenext, theprev){
	//     console.log('item index');
	//     console.log(gallIndex);
	//     console.log('next - prev lenght');
	//     console.log(thenext.length);
	//     console.log(theprev.length);
	// },
	// cb_pre_close : function(obj, gallIndex, thenext, theprev){
	//     console.log('item index');
	//     console.log(gallIndex);
	// },
	// cb_post_close : function(){
	//     console.log('CLOSED');
	// },
	// cb_after_nav : function(obj, gallIndex, thenext, theprev){
	//     console.log('after nav');
	//     console.log(gallIndex);
	// }
});

var _gaq = _gaq || [];
_gaq.push([ '_setAccount', 'UA-36251023-1' ]);
_gaq.push([ '_setDomainName', 'jqueryscript.net' ]);
_gaq.push([ '_trackPageview' ]);

(function() {
	var ga = document.createElement('script');
	ga.type = 'text/javascript';
	ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(ga, s);
})();

try {
	fetch(
		new Request('https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js', {
			method: 'HEAD',
			mode: 'no-cors'
		})
	)
		.then(function(response) {
			return true;
		})
		.catch(function(e) {
			var carbonScript = document.createElement('script');
			carbonScript.src = '//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet';
			carbonScript.id = '_carbonads_js';
			document.getElementById('carbon-block').appendChild(carbonScript);
		});
} catch (error) {
	console.log(error);
}
