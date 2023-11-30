<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

class PlantController extends Controller
{
    private $plantList;

    public function __construct()
    {
        $this->plantList = json_decode(File::get(storage_path('plants.json')), true);
    }
}
