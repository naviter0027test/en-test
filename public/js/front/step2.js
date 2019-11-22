$(document).ready(function() {
    $.get('/questions', function(data) {
        console.log(data);
    });
});
