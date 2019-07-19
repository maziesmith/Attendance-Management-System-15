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
       $date = Carbon::now()->format('Y-m-d_h-i');
       
       $command = "C:/xampp/mysql/bin/mysqldump -u root -p project >C:\backup\Attendance_System_Backup.sql";
       
       $process = new Process($command);
       $process->mustRun();
        
    }
}