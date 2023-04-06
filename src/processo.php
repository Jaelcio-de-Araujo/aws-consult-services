<?php

require 'vendor/autoload.php';
if (isset($_POST['servico']) && isset($_POST['regiao'])) {
    $servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);
    $regiao  = filter_input(INPUT_POST, 'regiao', FILTER_SANITIZE_STRING);

    switch ($servico) {
        case 'ec2':
            $client = new Ec2Client([
                'region' => $regiao,
                'version' => 'latest']);

            $result = $client->describeInstances();
            foreach ($result['Reservations'] as $reservation) {
                foreach ($reservation['Instances'] as $instance) {
                    echo "Instance ID: " . $instance['InstanceId'] . "\n";
                    echo "Public DNS: " . $instance['PublicDnsName'] . "\n";
                    echo "\n";
                }
            }
            break;

        case 's3':
            $client = new S3Client([
                'region' => $regiao,
                'version' => 'latest'
            ]);
            $result = $client->listBuckets();

            foreach ($result['Buckets'] as $bucket) {
                echo $bucket['Name'] . "\n";
            }
            break;


        default:
            echo "Serviço não encontrado";

    }

}
