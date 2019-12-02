$(document).ready(function() {
    $('#exportExcel').on("click", function() {
        $('.contentForm2').attr('action', '/admin/result/excelExport');
    });
    $('#exportPDF').on("click", function() {
        $('.contentForm2').attr('action', '/admin/result/pdfExport');
    });
});
