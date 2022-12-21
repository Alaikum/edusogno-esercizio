<?php
include_once __DIR__ . '/../db/DB.php';

$path='./assets/db/Migrations.sql';

DB::Migrate($path,true);
