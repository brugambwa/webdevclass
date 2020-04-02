<?php
if (!empty($_POST)) {
    $flag = $newapp->CreateApp($_POST, $_SESSION['user_id']);
    if($flag == 1){
        header("Location: index.php?page=apps");
    }else{
        print_r($postData);
    }
}



$apps = $newapp->GetApps($_SESSION);
?><!-- page start-->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Provisioned Applications</header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>App Name</th>
                        <th>Short Code</th>
                        <th>URL</th>
                        <th>Format</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($apps as $key => $value): ?>
                        <tr>
                            <td><?php echo $value['app_name']; ?></td>
                            <td class="hidden-phone"><?php echo $value['ussd_code']; ?></td>
                            <td><?php echo $value['routing_url']; ?></td>
                            <td><?php echo $value['request_format']; ?></td>
                            <td><span class="label label-info label-mini"><?php echo $value['app_status']; ?></span></td>
                            <td>
                                <a href="<?php echo 'index.php?page=editapp&i='.$value['app_id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                <a href="<?php echo 'index.php?page=viewapp&i='.$value['app_id']; ?>"  class="btn btn-danger btn-xs"><i class="fa fa-bell"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>
<!-- page end-->