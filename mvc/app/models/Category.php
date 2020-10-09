<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model{

    protected $table = "categories";
    
<<<<<<< HEAD
    public function products(){
        return $this->hasMany(Product::class, 'cate_id');
    }
=======
>>>>>>> 8a97da65b56c0a07341fe95ca7d19e4f3a279942
}

?>