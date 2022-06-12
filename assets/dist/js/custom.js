$("body").on("change", ".custom-control-input", function () {
    var $isActive = $(this).prop("checked")
    //alert($isActive);
    var $url = $(this).data("url");
    //alert($url);

    $.post($url, {isActive:$isActive}, function () {
        //alert(response);
    })

})