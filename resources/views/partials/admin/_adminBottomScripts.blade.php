  <!-- Vendor Plugin -->
    <script type="text/javascript" src="{{url('admin/assets/plugin/vendor.min.js')}}"></script>
    <!-- Datatables Plugin -->
    <script type="text/javascript" src="{{url('admin/assets/plugin/datatable/datatables.min.js')}}"></script>
    <!-- Custom Script Plugin -->
    <script type="text/javascript" src="{{url('admin/dist/js/custom.js')}}"></script>
    <!-- Custom demo Script for Datatable -->
    <script type="text/javascript" src="{{url('admin/dist/js/demo/datatable.js')}}"></script>

    <script>
        //Intilize datable for ticket.
        $('.ticket-table').DataTable({
            responsive: true
        });
    </script>
