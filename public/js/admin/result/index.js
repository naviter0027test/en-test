$(document).ready(function() {
    $('#export').on("click", function() {
        $('.contentForm2').attr('action', '/admin/result/export');
    });
});
