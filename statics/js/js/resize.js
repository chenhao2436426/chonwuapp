/**
 * Created by Administrator on 2017/3/9 0009.
 */
(function (doc, win) {
    //  html
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize', recalc = function () {
            var clientWidth = docEl.clientWidth;
            if (!clientWidth) return;
            clientWidth = (clientWidth > 760 ) ? 760 : clientWidth ; docEl.style.fontSize = 10 * (clientWidth / 266 ) + 'px';
        };
    if (!doc.addEventListener) return; win.addEventListener(resizeEvt, recalc, false);
    recalc();
})(document, window);
