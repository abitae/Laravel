<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'slides';

    protected $fillable = ['plantilla','path_image1','path_image2','path_image3','path_image4','layer1','layer2','layer3','layer4','btn1','btn2','btn3','btn4','state'];
	
}
