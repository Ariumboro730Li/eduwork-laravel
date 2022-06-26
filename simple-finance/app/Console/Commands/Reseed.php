<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class Reseed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'image:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reseeds the image folders';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        File::copy(storage_path('pictures/img1.jpg'), public_path('pictures/img1.jpg'));
        File::copy(storage_path('pictures/img2.jpg'), public_path('pictures/img2.jpg'));
        File::copy(storage_path('pictures/img3.jpg'), public_path('pictures/img3.jpg'));
        File::copy(storage_path('profile_pictures/team-3.jpg'), public_path('argon/img/theme/team-3.jpg'));
        File::copy(storage_path('profile_pictures/team-4.jpg'), public_path('argon/img/theme/team-4.jpg'));
        File::copy(storage_path('profile_pictures/team-5.jpg'), public_path('argon/img/theme/team-5.jpg'));
    }
}
