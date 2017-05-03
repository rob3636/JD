$(document).ready(function () {
    $(".nav li.link_style").each(function () {
        var link = $(this).find($(a));
        if (window.location.pathname == link.attr("href")) {
            link.addClass("active");
        }
    });
});
var tabsFn = (function () {
    function init() {
        setHeight();
    }

    function setHeight() {
        var $tabPane = $('.tab-pane')
            , tabsHeight = $('.nav-tabs').height();
        $tabPane.css({
            height: tabsHeight
        });
    }
    $(init);
})();