/*menu handler*/
$(function(){
    function stripTrailingSlash(str) {
        if(str.substr(-1) === '/') {
            return str.substr(0, str.length - 1);
        }
        return str;
    }

    var url = window.location.pathname;
    var activePage = stripTrailingSlash(url);

    $('.page-sidebar-menu li a').each(function(){
        var currentPage = stripTrailingSlash($(this).attr('href'));

        if (activePage === currentPage) {
            $(this).parent().addClass('active');
        }
    });

    $('.page-sidebar-menu li ul.sub-menu li a').each(function(){
        var currentPage = stripTrailingSlash($(this).attr('href'));

        if (activePage === currentPage) {
            $(this).parent().parent().parent().addClass('active');
        }
    });
});