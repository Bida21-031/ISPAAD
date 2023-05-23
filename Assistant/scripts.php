<script src="http://asm.devstarit.com/js/jquery-3.5.0.min.js"></script>
    <script src="http://asm.devstarit.com/js/bootstrap.min.js"></script>
    <script src="http://asm.devstarit.com/js/popper.min.js"></script>
    <script src="http://asm.devstarit.com/js/coreui.min.js"></script>
    <script src="http://asm.devstarit.com/js/jquery.dataTables.min.js"></script>
    <script src="http://asm.devstarit.com/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://asm.devstarit.com/js/dataTables.buttons.min.js"></script>
    <script src="http://asm.devstarit.com/js/buttons.flash.min.js"></script>
    <script src="http://asm.devstarit.com/js/buttons.html5.min.js"></script>
    <script src="http://asm.devstarit.com/js/buttons.print.min.js"></script>
    <script src="http://asm.devstarit.com/js/buttons.colVis.min.js"></script>
    <script src="http://asm.devstarit.com/js/pdfmake.min.js"></script>
    <script src="http://asm.devstarit.com/js/vfs_fonts.js"></script>
    <script src="http://asm.devstarit.com/js/jszip.min.js"></script>
    <script src="http://asm.devstarit.com/js/dataTables.select.min.js"></script>
    <script src="http://asm.devstarit.com/js/ckeditor.js"></script>
    <script src="http://asm.devstarit.com/js/moment.min.js"></script>
    <script src="http://asm.devstarit.com/js/bootstrap-datetimepicker.min.js"></script>
    <script src="http://asm.devstarit.com/js/select2.full.min.js"></script>
    <script src="http://asm.devstarit.com/js/dropzone.min.js"></script>
    <script src="http://asm.devstarit.com/js/main.js"></script>
    <script>
    (function($) {
        "use strict";

        $(function() {
        let copyButtonTrans = 'Copy'
        let csvButtonTrans = 'CSV'
        let excelButtonTrans = 'Excel'
        let pdfButtonTrans = 'PDF'
        let printButtonTrans = 'Print'
        let colvisButtonTrans = 'Column visibility'
        let selectAllButtonTrans = 'Select all'
        let selectNoneButtonTrans = 'Deselect all'

        let languages = {
            'en': 'http://asm.devstarit.com/json/English.json'
        };

        $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
        $.extend(true, $.fn.dataTable.defaults, {
            language: {
                url: languages['en']
            },
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }, {
                orderable: false,
                searchable: false,
                targets: -1
            }],
            select: {
                style:    'multi+shift',
                selector: 'td:first-child'
            },
            order: [],
            scrollX: true,
            pageLength: 100,
            dom: 'lBfrtip<"actions">',
            buttons: [
                {
                    extend: 'selectAll',
                    className: 'btn-primary',
                    text: selectAllButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'selectNone',
                    className: 'btn-primary',
                    text: selectNoneButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'copy',
                    className: 'btn-default',
                    text: copyButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'csv',
                    className: 'btn-default',
                    text: csvButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn-default',
                    text: excelButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdf',
                    className: 'btn-default',
                    text: pdfButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'print',
                    className: 'btn-default',
                    text: printButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'colvis',
                    className: 'btn-default',
                    text: colvisButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                }
            ]
        });

        $.fn.dataTable.ext.classes.sPageButton = '';
    });

    })(jQuery);
</script>

<!-- sidebar scripts -->

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
