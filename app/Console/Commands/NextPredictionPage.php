<?php

namespace App\Console\Commands;

use App\Page;
use Carbon\Carbon;
use Illuminate\Console\Command;

class NextPredictionPage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'betson:newpage';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command generate new page, with next day for predictions';

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
     * @return mixed
     */
    public function handle()
    {
        $page = new Page;
        $page->title = 'Analiza na dzień - ' . $date  = Carbon::tomorrow()->toDateString();
        $page->slug = $date  = Carbon::tomorrow()->toDateString();
        $page->date = $date  = Carbon::tomorrow()->toDateString();
        $page->description = 'Strona na której pojawiają się wasze analizy';
        $page->published = '1';
        $page->save();
        $this->info('New page for predictions with date '.$date  = Carbon::tomorrow()->toDateString().'was created');
    }
}
