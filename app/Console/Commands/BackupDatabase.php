<?php

namespace App\Console\Commands;
use Carbon\Carbon;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class BackupDatabase extends Command
{
    protected $signature = 'db:backup';

    protected $description = 'Backup the database ';

    protected $process;

    public function __construct()
    {
        parent::__construct();

    }

    public function handle()
    {
       //  $mysqlPath = "D:\\xampp/mysql/bin/mysqldump";
       $date = Carbon::now()->format('Y-m-d_h-i');
       $user =env('DB_USERNAME');
       $password = env('DB_PASSWORD');
       $database = env('DB_DATABASE');
       
        //$command = "c:/xampp/mysql/bin/mysqldump -u $user -p$password $database > C:\backup\{$date}.sql";
       //$command = "C:\\xampp/mysql/bin/mysqldump --user={$user} -p{$password} {$database} > C:\backup\{$date}.sql";
       $command = "C:\\xampp/mysql/bin>mysqldump -u root -p project >C:\backup\project.sql";
        $process = new Process($command);
       $process->start();
        
        
       
    }
}