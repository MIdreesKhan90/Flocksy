function dynamicallyLoadScript(url) {
    var script = document.createElement("script");
    script.src = url;
    script.async = true;

    document.head.appendChild(script);
}

function dynamicallyNoScript(html) {
	var noscript = document.createElement("noscript");
	noscript.innerHTML = html;
	document.head.appendChild(noscript);
}
/** Global site tag (gtag.js) - Google Ads: 939790325 **/
dynamicallyLoadScript('https://www.googletagmanager.com/gtag/js?id=AW-939790325');

window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'AW-939790325');


/** Global site tag (gtag.js) - Google Analytics **/
dynamicallyLoadScript('https://www.googletagmanager.com/gtag/js?id=UA-37049303-2');

window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-37049303-2');


/** Quora Pixel Code (JS Helper) **/
!function(q,e,v,n,t,s){if(q.qp) return; n=q.qp=function(){n.qp?n.qp.apply(n,arguments):n.queue.push(arguments);}; n.queue=[];t=document.createElement(e);t.async=!0;t.src=v; s=document.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s);}(window, 'script', 'https://a.quora.com/qevents.js');
qp('init', '4c12245c79e54df7923ead6600a03274');
qp('track', 'ViewContent');
dynamicallyNoScript('<img height="1" width="1" style="display:none" src="https://q.quora.com/_/ad/4c12245c79e54df7923ead6600a03274/pixel?tag=ViewContent&noscript=1"/>');

/** Hotjar Tracking Code for flocksy.com **/
(function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
    h._hjSettings={hjid:2467298,hjsv:6};
    a=o.getElementsByTagName('head')[0];
    r=o.createElement('script');r.async=1;
    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    a.appendChild(r);
})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');

/* Intercom */
window.intercomSettings = {
    app_id: "enuidqnu"
};
// We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/enuidqnu'
(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/enuidqnu';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();

/** Google Tag Manager **/

(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-55V4ZJN');
dynamicallyNoScript('<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55V4ZJN" height="0" width="0" style="display:none;visibility:hidden"></iframe>');

/* Profitwell */
(function(i,s,o,g,r,a,m){i[o]=i[o]||function(){(i[o].q=i[o].q||[]).push(arguments)};
a=s.createElement(g);m=s.getElementsByTagName(g)[0];a.async=1;a.src=r+'?auth=5b1ff7aeadfd36dc87cd0e1cb2060de8';m.parentNode.insertBefore(a,m);
})(window,document,'profitwell','script','https://public.profitwell.com/js/profitwell.js');
profitwell('start', {});

/** Google Optimize **/
dynamicallyLoadScript("https://www.googleoptimize.com/optimize.js?id=OPT-K8FN973");

/* linkedin */
_linkedin_partner_id = "2035746";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);

(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);

dynamicallyNoScript('<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2035746&fmt=gif" />');

/* Facebook pixel */

!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '332205771990544');
fbq('track', 'PageView');

dynamicallyNoScript('<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=332205771990544&ev=PageView&noscript=1" />');