<!-- page start-->
<div class="row">
    <form method="post" action="<?php echo URL . 'apps/saveedit/'.$this->app[0]['app_id']; ?>">
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
                    Edit App Details:
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="start_age">App Name:</label>
                        <input class="form-control" id="start_age" name="app_name" value="<?php echo $this->app[0]['app_name']; ?>" type="text">
                    </div>
                    <div class="form-group">
                        <label for="retirement_age">USSD Code:</label>
                        <input class="form-control" id="retirement_age" name="app_ussd_code" value="<?php echo $this->app[0]['app_ussd_code']; ?>" type="text">
                    </div>
                    <div class="form-group">
                        <label for="annual_contribution">Routing URL:</label>
                        <input class="form-control" id="annual_contribution" name="routing_url" value="<?php echo $this->app[0]['routing_url']; ?>" type="text">
                    </div>
                    <div class="form-group">
                        <label for="annual_contribution">Request Format:</label>
                        <select class="form-control input-sm m-bot15 billgroup" name="request_format">
                            <option value="">---Request Format---</option>
                            <option value="xml" <?php if($this->app[0]['request_format']=='xml') echo 'Selected'; ?>>XML</option>
                            <option value="json" <?php if($this->app[0]['request_format']=='json') echo 'Selected'; ?>>JSON</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="annual_contribution">App Status:</label>
                        <select class="form-control input-sm m-bot15 billgroup" name="app_status">
                            <option value="">---App Status---</option>
                            <option value="Active" <?php if($this->app[0]['app_status']=='Active') echo 'Selected'; ?>>Active</option>
                            <option value="Inactive" <?php if($this->app[0]['app_status']=='Inactive') echo 'Selected'; ?>>Inactive</option>
                            <option value="Suspended" <?php if($this->app[0]['app_status']=='Suspended') echo 'Selected'; ?>>Suspended</option>
                        </select>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
                    Edit App Owner Details:
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="start_age">Owner:</label>
                        <input class="form-control" id="start_age" name="app_owner" value="<?php echo $this->app[0]['app_owner']; ?>" type="text">
                    </div>
                    <div class="form-group">
                        <label for="retirement_age">Contact Person:</label>
                        <input class="form-control" id="retirement_age" name="contact_person" value="<?php echo $this->app[0]['contact_person']; ?>" type="text">
                    </div>
                    <div class="form-group">
                        <label for="annual_contribution">Telephone Number:</label>
                        <input class="form-control" id="annual_contribution" name="telephone_number" value="<?php echo $this->app[0]['telephone_number']; ?>" type="text">
                    </div>
                    <div class="form-group">
                        <label for="annual_contribution">Email Address:</label>
                        <input class="form-control" id="annual_contribution" name="email_address" value="<?php echo $this->app[0]['email_address']; ?>" type="text">
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