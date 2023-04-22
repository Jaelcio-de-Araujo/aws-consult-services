<?php

require __DIR__ . '/../vendor/autoload.php';
use Aws\Exception\AwsException;

if (isset($_POST['servico']) && isset($_POST['regiao'])) {

    $servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);
    $regiao  = filter_input(INPUT_POST, 'regiao', FILTER_SANITIZE_STRING);

    switch ($servico) {
        case 'ec2':
            $client = new Ec2Client([
                'region' => $regiao,
                'version' => 'latest']);

            $result = $client->describeInstances();
                foreach ($reservation['Instances'] as $instance) {
                    echo "Instance ID: " . $instance['InstanceId'] . "\n";
                    echo "Public DNS: " . $instance['PublicDnsName'] . "\n";
                    echo "\n";
                }
            break;
        default:
            echo "Os dados digitados não são válidos.";

    }

}
