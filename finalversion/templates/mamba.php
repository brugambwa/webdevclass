<?php

$mamba = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<request type="pull">
    <sessionId>'.$trans_data['sessionId'].'</sessionId>
    <transactionId>'.$trans_data['transactionId'].'</transactionId>
    <msisdn>'.$trans_data['msisdn'].'</msisdn>
    <newRequest>'.$trans_data['newRequest'].'</newRequest>
    <flowState>'.$trans_data['flowState'].'</flowState>
    <subscriberInput>'.$trans_data['subscriberInput'].'</subscriberInput>
</request>
';

