$(document).ready(function() {
    $(".remove-trash").on("click", function() {
        if(confirm('確定刪除?') == false)
            return false;
    });
});
