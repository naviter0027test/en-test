$(document).ready(function() {
    $("[name=typeChoose]").on("change", function() {
        $(".contentForm1").hide();
        if($(this).val() == "")
            $(".type1").show();
        else
            $(".type"+ $(this).val()).show();
    });
    if($("[name=typeChoose]:checked").length == 0) {
        $(".contentForm1").hide();
        $(".type1").show();
    }
});
