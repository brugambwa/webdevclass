<?php

$comxml = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<response>
    <msisdn>'.$trans_data['msisdn'].'</msisdn>
    <sessionid>'.$trans_data['sessionId'].'</sessionid>
    <transactionid>'.$trans_data['transactionId'].'</transactionid>
    <freeflow>
        <freeflowState>'.$trans_data['freeflowState'].'</freeflowState>
    </freeflow>
    <applicationResponse>'.$trans_data['applicationResponse'].'</applicationResponse>
</response>';

