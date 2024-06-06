/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************************!*\
  !*** ./resources/js/pages/datatables.init.js ***!
  \***********************************************/
/*
Template Name: Minible - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Datatables Js File
*/

$(document).ready(function () {
  $('#datatable').DataTable();

  //Buttons examples
  var table = $('#datatable-buttons').DataTable({
    dom: '<"d-flex align-items-center justify-content-between flex-wrap"<"me-auto"l><"d-flex align-items-center"fB>>rt<"clear"><"d-flex align-items-center justify-content-between flex-wrap mt-1"ip>',
    language: {
            lengthMenu:
                'Tampilkan <select>' +
                '<option value="10">10</option>' +
                '<option value="20">20</option>' +
                '<option value="30">30</option>' +
                '<option value="40">40</option>' +
                '<option value="50">50</option>' +
                '<option value="-1">Semua</option>' +
                '</select> data per halaman',
            info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ data",
            infoFiltered: "(disaring dari _MAX_ total data)",
            infoEmpty: "Menampilkan 0 hingga 0 dari 0 data",
            search: "Cari:",
            paginate: {
                    first: "Pertama",
                    last: "Terakhir",
                    next: "Berikutnya",
                    previous: "Sebelumnya"
            }
    },
    lengthChange: true,
    buttons: [
        {
            extend: 'spacer',
            style:'bar',
        },
        {
            extend: 'excel',
            text: '<i class="fa fa-file-excel"></i> Excel',
            className: 'btn-success'
        },
        {
            extend: 'pdf',
            text: '<i class="bx bxs-file-pdf"></i> PDF',
            className: 'btn-danger'
        },
        {
            extend: 'print',
            text: '<i class="uil-print"></i> Print',
            className: 'btn-primary'
        }],
  });
  table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
  $(".dataTables_length select").addClass('form-select form-select-sm');
  $(".dataTables_length label").addClass('mb-0');
  $(".dataTables_filter label").addClass('mb-0');
  $(".dataTables_info").addClass('pt-0');
});
/******/ })()
;
