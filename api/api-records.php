<?php

include __DIR__ .'/../database/db.php';

header('Content-Type: application/json');

echo json_encode($records);