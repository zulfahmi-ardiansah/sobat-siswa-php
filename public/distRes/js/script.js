toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "slideDown",
    "hideMethod": "slideUp"
};

$('[data-btn-function="export"]').remove();
$("body").fadeIn(750);
$(".table-responsive table tr td").each(function () {
    if ($(this).html().trim() == '') {$(this).html('-')}
});

$('.select-search').select2();
$('textarea').attr("spellcheck", "false")

function modalAlertDom (dom, title, description) {
    window.domAlert = dom;
    $("#modal-alert-title").html(title);
    $("#modal-alert-description").html(description);
    $("#modal-alert-trigger").click(function () {
        window.domAlert.click();
    });
    $("#modal-alert").modal("show");
}