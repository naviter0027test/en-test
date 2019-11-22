$.validator.setDefaults({
    submitHandler : function(form) {
        location.href = $(form).attr('action');
    }
});

$(document).ready(function() {
    $('.step1Form').validate();
});
