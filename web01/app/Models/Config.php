<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'configs';

    protected $fillable = ['titulo','tema','empresa','autor','path_favicon','path_logo','description_logo'];
	
}
