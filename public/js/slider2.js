

//checkbox

$(document).ready(function() {
    $('select').each(function () {
        var options = ['Please Select'];
        $(this).select2({
            data: options
        });
    });
});