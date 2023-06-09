<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

// attribute: courierID (primary key), courierName, courierRating, vehicleNumber, shippingID (foreign key), orderID (foreign key), userID (foreign key), productID (foreign key)
// menurut kami, userID termasuk foreign key yang menghubungkan table courier dan table user untuk tracking user/penyewa siapa saja yang order seorang kurir dan seorang kurir mengantarkan produk game console yang disewa ke user/penyewa siapa saja
class Courier extends Model
{
    use HasFactory;

    protected $table = 'couriers';
    public $fillable = ['name', 'rating', 'vehicleNumber'];

    public function order() {
        return $this -> hasMany(Order::class);
    }
}
