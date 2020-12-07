<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use thiagoalessio\TesseractOCR\TesseractOCR;

class readimage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'read:image';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convierte una imagen a txt OCR';

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
        require_once "vendor/autoload.php";
        echo (new TesseractOCR('/home/falvarez/Documents/keydata/frases.png'))->run();
        dump('hola');
        $ocr = new TesseractOCR();
        dump($ocr);
        $ocr->image('/home/falvarez/Documents/keydata/frases.png');
        dump($ocr);
        
        $ocr->run();
        dd($ocr);
        //return 0;
    }
}
