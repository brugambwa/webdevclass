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
                    name: "Session",
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
                    name: "Session",
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
                <h1 class=" count3"><?php echo $this->summarystats['countmonth']; ?></h1>
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
                <h1 class=" count4"><?php echo $this->summarystats['uniquemonth']; ?></h1>
                <p>Unique Users This Month</p>
            </div>
        </section>
    </div>
</div>
<!--state overview end-->
<div class="row">
    <div class="col-lg-4">
        <!--widget start-->
        <aside class="profile-nav alt green-border">
            <section class="panel">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="javascript:;"> <i class="fa fa-anchor"></i> App Name: <span class="pull-right r-activity"><?php echo $this->app[0]['app_name']; ?></span></a></li>
                    <li><a href="javascript:;"> <i class="fa fa-asterisk"></i> USSD String: <span class="pull-right r-activity"><?php echo $this->app[0]['app_ussd_code']; ?></span></a></li>
                    <li><a href="javascript:;"> <i class="fa fa-external-link"></i> Routing URL: <span class="pull-right r-activity"><?php echo $this->app[0]['routing_url']; ?></span></a></li>
                    <li><a href="javascript:;"> <i class="fa fa-envelope-o"></i> Message Format: <span class="pull-right r-activity"><?php echo $this->app[0]['request_format']; ?></span></a></li>
                    <li><a href="javascript:;"> <i class="fa fa-key"></i> App Status: <span class="pull-right r-activity"><?php echo $this->app[0]['app_status']; ?></span></a></li>
                </ul>

            </section>
        </aside>
    </div>
    <div class="col-md-4">
        <div class="panel panel-white">
            <div class="panel-heading">
                <h3 class="panel-title">Growth Graph - Day on Day(General)</h3>
            </div>
            <div class="panel-body">
                <div id="chartContainerx" style="height: 370px; width: 100%;"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-white">
            <div class="panel-heading">
                <h3 class="panel-title">Growth Graph - Month on Month</h3>
            </div>
            <div class="panel-body">
                <div id="chartContainery" style="height: 370px; width: 100%;"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body progress-panel">
                <div class="task-progress">
                    <h1>Last 10 USSD Sessions</h1>
                </div>
            </div>
            <table class="table table-hover personal-task">
                <thead>
                    <tr>
                        <th>session_date</th>
                        <th>session_id</th>
                        <th>telephone_number</th>
                        <th>session_status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->recentrequests as $key => $value): ?>
                        <tr>
                            <td><?php echo SUBSTR($value['session_date'], 10); ?></td>
                            <td><?php echo $value['session_id']; ?></td>
                            <td><?php echo $value['telephone_number']; ?></td>
                            <td><?php echo $value['session_status']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
        <!--work progress end-->
    </div>
</div>


