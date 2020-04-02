<script>
    window.onload = function () {
        var chartx = new CanvasJS.Chart("chartContainerx", {
            animationEnabled: true,
            theme: "light2",
            legend: {
                cursor: "pointer",
                verticalAlign: "center",
                horizontalAlign: "right"
            },
            data: [{
                    type: "line",
                    name: "Valid",
                    indexLabel: "{y}",
                    yValueFormatString: "#0.##",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($this->graphdata['counttoday'], JSON_NUMERIC_CHECK); ?>
                }]
        });
        chartx.render();

        var charty = new CanvasJS.Chart("chartContainery", {
            animationEnabled: true,
            theme: "light2",
            legend: {
                cursor: "pointer",
                verticalAlign: "center",
                horizontalAlign: "right"
            },
            data: [{
                    type: "line",
                    name: "Valid",
                    indexLabel: "{y}",
                    yValueFormatString: "#0.##",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($this->graphdata['uniquetoday'], JSON_NUMERIC_CHECK); ?>
                }]
        });
        charty.render();

    }


</script>
<!--state overview start-->
<div class="row state-overview" onload="">
    <div class="col-lg-3 col-sm-6">
        <section class="panel">
            <div class="symbol terques">
                <i class="fa fa-tags"></i>
            </div>
            <div class="value">
                <h1 class="count"><?php echo $this->summarystats['counttoday']; ?></h1>
                <p>Today's Sessions</p>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="panel">
            <div class="symbol terques">
                <i class="fa fa-group"></i>
            </div>
            <div class="value">
                <h1 class=" count2"><?php echo $this->summarystats['uniquetoday']; ?></h1>
                <p>Today's Unique Users</p>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="panel">
            <div class="symbol blue">
                <i class="fa fa-tags"></i>
            </div>
            <div class="value">
                <h1 class=" count3"><?php echo number_format($this->summarystats['countmonth'], 0); ?></h1>
                <p>Sessions This Month</p>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="panel">
            <div class="symbol blue">
                <i class="fa fa-group"></i>
            </div>
            <div class="value">
                <h1 class=" count4"><?php echo number_format($this->summarystats['uniquemonth'], 0); ?></h1>
                <p>Unique Users This Month</p>
            </div>
        </section>
    </div>
</div>
<!--state overview end-->
<div class="row">
    <div class="col-md-5">
        <div class="panel panel-white">
            <div class="panel-heading">
                <h3 class="panel-title">Growth Graph - Day on Day(General)</h3>
            </div>
            <div class="panel-body">
                <div id="chartContainerx" style="height: 370px; width: 100%;"></div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="panel panel-white">
            <div class="panel-heading">
                <h3 class="panel-title">Growth Graph - Month on Month(Valid)</h3>
            </div>
            <div class="panel-body">
                <div id="chartContainery" style="height: 370px; width: 100%;"></div>
            </div>
        </div>
    </div>
</div>
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
</script>