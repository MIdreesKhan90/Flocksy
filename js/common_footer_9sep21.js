/** Begin FreshChat **/
function initFreshChat() {
    window.fcWidget.init({
        token: "878a017c-a40e-4c0b-a524-99def3b237a3",
        host: "https://wchat.freshchat.com",
        config: {
            headerProperty: {
                direction: 'ltr' //will move widget to left side of the screen
            }
        }
    });
}

function initialize(i, t) {
    var e;
    i.getElementById(t) ? initFreshChat() : ((e = i.createElement("script")).id = t, e.async = !0, e.src = "https://wchat.freshchat.com/js/widget.js", e.onload = initFreshChat, i.head.appendChild(e))
}

function initiateCall() {
    initialize(document, "freshchat-js-sdk")
}

window.addEventListener ? window.addEventListener("load", initiateCall, !1) : window.attachEvent("load", initiateCall, !1);

/** End FreshChat **/

function dynamicallyLoadRewardfulScript(url) {
    var script = document.createElement("script");
    script.src = url;
    script.async = true;
    script.setAttribute('data-rewardful', '02f408');

    document.body.appendChild(script);
}

dynamicallyLoadRewardfulScript('https://r.wdfl.co/rw.js');

function getValueByQueryStringName(param) {
	if ('URLSearchParams' in window) {
		const urlParams = new URLSearchParams(window.location.search);
		return urlParams.get(param);	
	}
	return;
}

function getAttributeLinks(link) {
	var x = document.querySelectorAll("a");
	var linksArray = [];
	for (var i=0; i<x.length; i++){
		var cleanlink = x[i].href;
		if(cleanlink.includes(link)) {
			linksArray.push(x[i]);
		}
	};
	return linksArray;
}


function getDateDiffHours(oDate2, oDate1)
{
    return Math.abs(oDate2.getTime() - oDate1.getTime()) / 36e5;
}

function setDiscountLink()
{
	var discountCode = getValueByQueryStringName('discount_code');
	if(discountCode) {
		localStorage.setItem('coupon_code', btoa(discountCode));
		localStorage.setItem('coupon_applied_date', new Date());
	}
}

function setReferralLink()
{
	var referral = getValueByQueryStringName('r');
	if(referral) {
		localStorage.setItem('referral_code', btoa(referral));
		localStorage.setItem('referral_applied_date', new Date());
	}
}

function setRewardfulLink()
{
	var rewardfulVia = getValueByQueryStringName('via');
	if(rewardfulVia) {
		localStorage.setItem('rewardful_via', btoa(rewardfulVia));
		localStorage.setItem('rewardful_via_date', new Date());
	}
}

function setShareASaleLink()
{
	var shareasaleId = getValueByQueryStringName('sscid');
	if(shareasaleId) {
		localStorage.setItem('shareasale_id', btoa(shareasaleId));
		localStorage.setItem('shareasale_id_date', new Date());
	}
}

function addDiscountReferralRewardfulLinkToButton() {
	var couponApply = false;
	var referralApply = false;
	var rewardfulApply = false;
	var shareASaleApply = false;
	var cookieHours = 720;
	if(localStorage.getItem('coupon_applied_date')) {
		if (getDateDiffHours(new Date(), new Date(localStorage.getItem('coupon_applied_date'))) <= cookieHours) {
			couponApply = true;
		}
	}
	if(localStorage.getItem('referral_applied_date')) {
		if (getDateDiffHours(new Date(), new Date(localStorage.getItem('referral_applied_date'))) <= cookieHours) {
			referralApply = true;
		}
	}
	if(localStorage.getItem('rewardful_via_date')) {
		if (getDateDiffHours(new Date(), new Date(localStorage.getItem('rewardful_via_date'))) <= cookieHours) {
			rewardfulApply = true;
		}
	}
	if(localStorage.getItem('shareasale_id_date')) {
		if (getDateDiffHours(new Date(), new Date(localStorage.getItem('shareasale_id_date'))) <= cookieHours) {
			shareASaleApply = true;
		}
	}
	var links = getAttributeLinks('login');
	for(var i = 0; i < links.length; i++) {
		var searchParams = new URLSearchParams(window.location.search);
		if(couponApply) {
			searchParams.set("discount_code", atob(localStorage.getItem('coupon_code')));	
		}
		if(referralApply) {
			searchParams.set("r", atob(localStorage.getItem('referral_code')));
		}
		if(rewardfulApply) {
			searchParams.set("via", atob(localStorage.getItem('rewardful_via')));
		}
		if(shareASaleApply) {
			searchParams.set("sscid", atob(localStorage.getItem('shareasale_id')));
		}
		if(searchParams.toString()) {
			$(links[i]).attr('href', 'https://flocksy.com/login' + '?' + searchParams.toString());
		}
	}

	var links = getAttributeLinks('signup');
	for(var i = 0; i < links.length; i++) {
		var searchParams = new URLSearchParams(window.location.search);
		if(couponApply) {
			searchParams.set("discount_code", atob(localStorage.getItem('coupon_code')));	
		}
		if(referralApply) {
			searchParams.set("r", atob(localStorage.getItem('referral_code')));
		}
		if(rewardfulApply) {
			searchParams.set("via", atob(localStorage.getItem('rewardful_via')));
		}
		if(shareASaleApply) {
			searchParams.set("sscid", atob(localStorage.getItem('shareasale_id')));
		}
		if(searchParams.toString()) {
			$(links[i]).attr('href', 'https://flocksy.com/signup' + '?' + searchParams.toString());
		}
	}
}

setDiscountLink();
setReferralLink();
setRewardfulLink();
setShareASaleLink();
addDiscountReferralRewardfulLinkToButton();