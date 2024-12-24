<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'client_name',
        'product_info',
        'client_name'
    ];

    // Relationship: A sale belongs to a product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
