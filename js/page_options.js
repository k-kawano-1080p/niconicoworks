// JavaScript Document

//サイドバーフィックスド
(function(){
 $(function(){
 var fix = $('#page_side'), //固定したいコンテンツ
 side = $('#side'), //サイドバーのID
 main = $('#main'), //固定する要素を収める範囲
 sideTop = side.offset().top;
 fixTop = fix.offset().top,
 mainTop = main.offset().top,
 w = $(window);
 
 var adjust = function(){
 fixTop = fix.css('position') === 'static' ? sideTop + fix.position().top : fixTop;
 var fixHeight = fix.outerHeight(true),
 mainHeight = main.outerHeight(),
 winTop = w.scrollTop();
 if(winTop + fixHeight > mainTop + mainHeight){
 fix.css({
 position: 'absolute',
 top: mainHeight - fixHeight
 });
 }else if(winTop >= fixTop){
 fix.css({
 position: 'fixed',
 top: 10
 });
 }else{
 fix.css('position', 'static');
 }
 }
 w.on('scroll', adjust);
 });
})(jQuery);

//ロールオーバー
(function(){
   var rolloverImages = [];
   
   function setRollOver2(){
     if(!document.images){return;}
     var imgs = document.images;
     var insert = [];
     for(var i=0,len=imgs.length; i<len; i++){
       var splitname = imgs[i].src.split('_rollout.');
       if(splitname[1]){
         var rolloverImg = document.createElement('img');
         rolloverImages.push(rolloverImg);
         rolloverImg.src = splitname[0]+'_rollover.'+splitname[1];
         var alpha = 0;
         rolloverImg.currentAlpha = alpha;
         rolloverImg.style.opacity = alpha/100;
         rolloverImg.style.filter = 'alpha(opacity='+alpha+')';
         rolloverImg.style.position = 'absolute';
         addEvent(rolloverImg,'mouseover',function(){setFader(this,100);});
         addEvent(rolloverImg,'mouseout',function(){setFader(this,0);});
         insert[insert.length] = {position:imgs[i],element:rolloverImg};
       }
     }
     for(i=0,len=insert.length; i<len ;i++){
       var parent = insert[i].position.parentNode;
       parent.insertBefore(insert[i].element,insert[i].position);
     }
     addEvent(window,'beforeunload', clearRollover);
   }
   
   function setFader(targetObj,targetAlpha){
     targetObj.targetAlpha = targetAlpha;
     if(targetObj.currentAlpha==undefined){
       targetObj.currentAlpha = 100;
     }
     if(targetObj.currentAlpha==targetObj.targetAlpha){
       return;
     }
     if(!targetObj.fading){
       if(!targetObj.fader){
         targetObj.fader = fader;
       }
       targetObj.fading = true;
       targetObj.fader();
     }
   }

   function fader(){
     this.currentAlpha += (this.targetAlpha - this.currentAlpha)*0.2;
     if(Math.abs(this.currentAlpha-this.targetAlpha)<1){
       this.currentAlpha = this.targetAlpha;
       this.fading = false;
     }
     var alpha = parseInt(this.currentAlpha);
     this.style.opacity = alpha/100;
     this.style.filter = 'alpha(opacity='+alpha+')';
     if(this.fading){
       var scope = this;
       setTimeout(function(){fader.apply(scope)},10);
     }
   }
   
   function clearRollover(){
     for(var i=0,len=rolloverImages.length; i<len; i++){
       var image = rolloverImages[i];
       image.style.opacity = 0;
       image.style.filter = 'alpha(opacity=0)';
     }
   }

   function addEvent(eventTarget, eventName, func){
     if(eventTarget.addEventListener){

       eventTarget.addEventListener(eventName, func, false);
     }else if(window.attachEvent){
       // IE
       eventTarget.attachEvent('on'+eventName, function(){func.apply(eventTarget);});
     }
   }

   addEvent(window,'load',setRollOver2);

 })();
 
 //PAGE TOP
 $(function() {
    var showFlug = false;
    var topBtn = $('#page-top');    
    topBtn.css('bottom', '-100px');
    var showFlug = false;
    //スクロールが500に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            if (showFlug == false) {
                showFlug = true;
                topBtn.stop().animate({'bottom' : '20px'}, 200); 
            }
        } else {
            if (showFlug) {
                showFlug = false;
                topBtn.stop().animate({'bottom' : '-100px'}, 200); 
            }
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

 //HTML5SHIV
(function(l,f){function m(){var a=e.elements;return"string"==typeof a?a.split(" "):a}function i(a){var b=n[a[o]];b||(b={},h++,a[o]=h,n[h]=b);return b}function p(a,b,c){b||(b=f);if(g)return b.createElement(a);c||(c=i(b));b=c.cache[a]?c.cache[a].cloneNode():r.test(a)?(c.cache[a]=c.createElem(a)).cloneNode():c.createElem(a);return b.canHaveChildren&&!s.test(a)?c.frag.appendChild(b):b}function t(a,b){if(!b.cache)b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag();
a.createElement=function(c){return!e.shivMethods?b.createElem(c):p(c,a,b)};a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/[\w\-]+/g,function(a){b.createElem(a);b.frag.createElement(a);return'c("'+a+'")'})+");return n}")(e,b.frag)}function q(a){a||(a=f);var b=i(a);if(e.shivCSS&&!j&&!b.hasCSS){var c,d=a;c=d.createElement("p");d=d.getElementsByTagName("head")[0]||d.documentElement;c.innerHTML="x<style>article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}</style>";
c=d.insertBefore(c.lastChild,d.firstChild);b.hasCSS=!!c}g||t(a,b);return a}var k=l.html5||{},s=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,r=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,j,o="_html5shiv",h=0,n={},g;(function(){try{var a=f.createElement("a");a.innerHTML="<xyz></xyz>";j="hidden"in a;var b;if(!(b=1==a.childNodes.length)){f.createElement("a");var c=f.createDocumentFragment();b="undefined"==typeof c.cloneNode||
"undefined"==typeof c.createDocumentFragment||"undefined"==typeof c.createElement}g=b}catch(d){g=j=!0}})();var e={elements:k.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:"3.7.0",shivCSS:!1!==k.shivCSS,supportsUnknownElements:g,shivMethods:!1!==k.shivMethods,type:"default",shivDocument:q,createElement:p,createDocumentFragment:function(a,b){a||(a=f);
if(g)return a.createDocumentFragment();for(var b=b||i(a),c=b.frag.cloneNode(),d=0,e=m(),h=e.length;d<h;d++)c.createElement(e[d]);return c}};l.html5=e;q(f)})(this,document);