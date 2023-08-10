"use strict";

var KTModalUserSearch = (function() {
    var e, t, n, s, a;

    var r = function(e) {
        setTimeout(function() {
            var a = KTUtil.getRandomInt(1, 3);
            t.addClass("d-none");

            if (a === 3) {
                n.addClass("d-none");
                s.removeClass("d-none");
            } else {
                n.removeClass("d-none");
                s.addClass("d-none");
            }

            e.complete();
        }, 1500);
    };

    var o = function(e) {
        t.removeClass("d-none");
        n.addClass("d-none");
        s.addClass("d-none");
    };

    return {
        init: function() {
            e = $("#kt_modal_users_search_handler");
            if (e.length) {
                t = e.find('[data-kt-search-element="suggestions"]');
                n = e.find('[data-kt-search-element="results"]');
                s = e.find('[data-kt-search-element="empty"]');

                a = new KTSearch(e);

                a.on("kt.search.process", r);
                a.on("kt.search.clear", o);
            }
        }
    };
})();

$(document).ready(function() {
    KTModalUserSearch.init();
});
