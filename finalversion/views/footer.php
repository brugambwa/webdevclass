</section>
</section>
<!--main content end-->



<!--script for this page-->
<script type="text/javascript" language="javascript" src="<?php echo URL; ?>public/assets/advanced-datatable/media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo URL; ?>public/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/data-tables/DT_bootstrap.js"></script>

<!-- js placed at the end of the document so the pages load faster -->

<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo URL; ?>public/js/owl.carousel.js" ></script>
<script src="<?php echo URL; ?>public/js/jquery.customSelect.min.js" ></script>
<script src="<?php echo URL; ?>public/js/respond.min.js" ></script>

<!--common script for all pages-->
<script src="<?php echo URL; ?>public/js/common-scripts.js"></script>
<script src="<?php echo URL; ?>public/js/sparkline-chart.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script src="<?php echo URL; ?>public/js/advanced-form-components.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script>

    //owl carousel

    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });

    /* Formating function for row details */


    $(document).ready(function () {
        /*
         * Insert a 'details' column to the table
         */
        var nCloneTh = document.createElement('th');
        var nCloneTd = document.createElement('td');
        nCloneTd.innerHTML = '<img src="<?php echo URL; ?>public/assets/advanced-datatable/examples/examples_support/details_open.png">';
        nCloneTd.className = "center";

        $('#hidden-table-info thead tr').each(function () {
            this.insertBefore(nCloneTh, this.childNodes[0]);
        });

        $('#hidden-table-info tbody tr').each(function () {
            this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
        });

        /*
         * Initialse DataTables, with no sorting on the 'details' column
         */
        var oTable = $('#hidden-table-info').dataTable({
            "aoColumnDefs": [
                {"bSortable": false, "aTargets": [0]}
            ],
            "aaSorting": [[1, 'asc']]
        });

        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        $('#hidden-table-info tbody td img').live('click', function () {
            var nTr = $(this).parents('tr')[0];
            if (oTable.fnIsOpen(nTr))
            {
                /* This row is already open - close it */
                this.src = "<?php echo URL; ?>public/assets/advanced-datatable/examples/examples_support/details_open.png";
                oTable.fnClose(nTr);
            }
            else
            {
                /* Open this row */
                this.src = "<?php echo URL; ?>public/assets/advanced-datatable/examples/examples_support/details_close.png";
                oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
            }
        });
    });
</script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#example').dataTable({
            "aaSorting": [[4, "desc"]]
        });
    });
</script>

</body>
</html>
