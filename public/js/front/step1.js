$.validator.setDefaults({
    submitHandler : function(form) {
        location.href = $(form).attr('action');
    }
});

$(document).ready(function() {
    $('.step1Form').validate();
    $('.step1Form').on('submit', function() {
        var nameCh = $('[name=nameCh]').val();
        sessionStorage.setItem('nameCh', nameCh);
        var nameEn = $('[name=nameEn]').val();
        sessionStorage.setItem('nameEn', nameEn);
        var birthday = $('[name=birthday]').val();
        sessionStorage.setItem('birthday', birthday);
        var tel = $('[name=tel]').val();
        sessionStorage.setItem('tel', tel);
        var email = $('[name=email]').val();
        sessionStorage.setItem('email', email);
        var departmentCode = $('[name=departmentCode]').val();
        sessionStorage.setItem('departmentCode', departmentCode);
        var staffId = $('[name=staffId]').val();
        sessionStorage.setItem('staffId', staffId);
    });
});
