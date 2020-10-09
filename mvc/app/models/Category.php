<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model{

    protected $table = "categories";
    public function product(){
        // từ bảng category có nhiều bảng products
        $this->hasMany(Prodcut::class, 'cate_id');
    }  
}

?>