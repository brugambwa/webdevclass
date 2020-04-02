<div class="row">
    <form method="post" action="index.php?page=apps">
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
                    New App Details:
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="start_age">App Name:</label>
                        <input class="form-control" id="start_age" name="app_name" value="" type="text">
                    </div>
                    <div class="form-group">
                        <label for="retirement_age">USSD Code:</label>
                        <input class="form-control" id="retirement_age" name="app_ussd_code" value="" type="text">
                    </div>
                    <div class="form-group">
                        <label for="annual_contribution">Routing URL:</label>
                        <input class="form-control" id="annual_contribution" name="routing_url" value="" type="text">
                    </div>
                    <div class="form-group">
                        <label for="annual_contribution">Request Format:</label>
                        <select class="form-control input-sm m-bot15 billgroup" name="request_format">
                            <option value="">---Request Format---</option>
                            <option value="xml">XML</option>
                            <option value="json">JSON</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="annual_contribution">App Status:</label>
                        <select class="form-control input-sm m-bot15 billgroup" name="app_status">
                            <option value="">---App Status---</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Suspended">Suspended</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>
</div>
<!-- page end-->