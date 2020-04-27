/*top header slide style */
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
/*end of top header slide style */


/*venobox slider*/
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
