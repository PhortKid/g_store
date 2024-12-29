

<script src="https://portal.lipilimatower.co.tz/assets/datatable/jquery.min.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/bootstrap.bundle.min.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/jquery.dataTables.min.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/dataTables.responsive.min.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/responsive.bootstrap4.min.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/dataTables.buttons.min.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/buttons.bootstrap4.min.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/jszip.min.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/pdfmake.min.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/vfs_fonts.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/buttons.html5.min.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/buttons.print.min.js"></script>
    <script src="https://portal.lipilimatower.co.tz/assets/datatable/buttons.colVis.min.js"></script>
   
<script src="{{asset('assets/adminkit/other/overlayscrollbars.browser.es6.min.js')}}" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="{{asset('assets/adminkit/other/popper.min.js')}}" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="{{asset('assets/adminkit/other/bootstrap.min.js')}}" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{asset('assets/adminkit/js/adminlte.js')}}"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!-- OPTIONAL SCRIPTS --> <!-- sortablejs -->
    <script src="{{asset('assets/adminkit/other/Sortable.min.js')}}" integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script> <!-- sortablejs -->
    <script src="{{asset('assets/adminkit/other/apexcharts.min.js')}}" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script> <!-- ChartJS -->
    <script src="{{asset('assets/adminkit/other/jsvectormap.min.js')}}" integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/adminkit/other/world.js')}}" integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script> <!-- jsvectormap -->



    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
     "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": false,
    });
  });
  // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
</script>


<script>
    function printInvoice(areaId) {
        var content = document.getElementById(areaId).innerHTML;
        var printWindow = window.open('', '', 'height=600,width=800');
        
        printWindow.document.write('<html><head><title>Invoice</title>');
        printWindow.document.write('<style>body {font-family: Arial, sans-serif; margin: 20px;}');
        printWindow.document.write('.printable-area {border: 1px solid #ccc; padding: 20px;}');
        printWindow.document.write('@media print { .modal-header, .modal-footer, .btn { display: none; }}');
        printWindow.document.write('</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write(content);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }
</script>

<script src="https://portal.lipilimatower.co.tz/chosen/chosen.jquery.min.js" ></script>
<script src="https://portal.lipilimatower.co.tz/chosen/popper.min.js" ></script>

<script>
    $(document).ready(
        function()
        {
            $('.chosen-select').chosen(
                {
                    width:'100%',
                    placeholder_text_single:'select room'
                }
            );
        }
    );
</script>
