<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Illuminate\Support\Str;
use Imagick;

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
        dump('Inicio--------------------');

        $outputArray = array();

        // $file = '/home/falvarez/Documents/keydata/FACTURAS PARA SMART/AUVIMER SALUD INTEGRAL EN CASA S A S/0014702246_AUVIMER SALUD INTEGRAL EN CASA S A S.pdf';
        $file = '/home/falvarez/KeyData/SALUD.pdf';

        $filejpg = '/home/falvarez/KeyData/out.jpg';

        // $stream = file_get_contents($file);
        // dump($file->getRealPath());
        $pathToImage = '/home/falvarez/Documents/keydata/';

        if (preg_match('/[\\S ]*\\.pdf$/', $file)){

            exec("convert -density 300 {$file} -depth 8 -strip -background white -alpha off {$filejpg}");
            // passthru("convert -density 300 {$file} -depth 8 -strip -background white -alpha off {$filejpg}", $array, $error);
            // $result = exec("convert -density 300 {$file} -depth 8 -strip -background white -alpha off {$filejpg}",$array);
            // $resultado = shell_exec("convert -density 300 {$file} -depth 8 -strip -background white -alpha off {$filejpg}");
            // $result_array=explode(' ',$result);
            // dump($error);
            // dump($array);
            // dd($resultado);
            // dd($output);
            foreach ($out as $item) { // <------
                print $item . "<br />";
            }
            // foreach ($filejpg as $out){
            //     dd($out[0]);
            // }
            
            //echo (new TesseractOCR($filejpg))->run();
            //dd($file);
        }
        
        
        
        // $imagick = new Imagick($file);

        // $imagick->setImageFormat('jpg');

        // $fileimage = file_put_contents($pathToImage, $imagick);

        // dump($fileimage);
        
        
        dump('hola');
        // $ocr = new TesseractOCR();
        // dump($ocr);
        // $ocr->image('/home/falvarez/Documents/keydata/frases.png');
        // dump($ocr);
        
        // $ocr->run();
        // dump($ocr);
        //return 0;
    }
}
