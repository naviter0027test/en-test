$(document).ready(function() {
    $("[name=typeChoose]").on("change", function() {
        $(".contentForm1").hide();
        if($(this).val() == "")
            $(".type1").show();
        else
            $(".type"+ $(this).val()).show();
    });
    $("[name=typeChoose][value=1]").trigger('click');
});
