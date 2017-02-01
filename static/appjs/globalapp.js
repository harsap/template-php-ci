$(document).ready(function () {
    $("form").validate();
    $(".date-picker").datepicker({
        language: "id",
        autoclose: "true",
        todayHighlight: "true"
    });
    $(".entrytanggal").inputmask('99/99/9999');
    $(".inputmoney").autoNumeric('init', {
        aSep: '.',
        aDec: ','
    });
    $(".row-cards-pf > [class*='col'] > .card-pf .card-pf-title").matchHeight();
    $(".row-cards-pf > [class*='col'] > .card-pf > .card-pf-body").matchHeight();
    $(".row-cards-pf > [class*='col'] > .card-pf > .card-pf-footer").matchHeight();
    $(".row-cards-pf > [class*='col'] > .card-pf").matchHeight();
    $().setupVerticalNavigation(true);
});