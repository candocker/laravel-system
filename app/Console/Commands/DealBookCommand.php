<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DealBookCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deal-book:novel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $path = '/data/database/noval/abcd/';
        $files = scandir($path);
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            $fullPath = $path . $file;
            var_dump($fullPath);
            if (is_dir($fullPath)) {
                $subFiles = scandir($fullPath);
                print_r($subFiles);exit();
                foreach ($subFiles as $subFile) {
                    echo $subFile . "\n";
                }
                exit();
            }
        }
        echo 'sss';
    }
}
