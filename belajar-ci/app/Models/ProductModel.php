<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    public function getProducts()
    {
        return [
            [
                'id' => 1,
                'name' => 'ASUS TUF A15',
                'description' => 'Laptop gaming tangguh dengan prosesor AMD Ryzen 7 dan kartu grafis NVIDIA GTX.',
                'price' => 14500000,
                'image' => 'asus_tuf_a15.jpg',
                'category' => 'Laptop'
            ],
            [
                'id' => 2,
                'name' => 'ASUS VivoBook 14',
                'description' => 'Laptop ringan dan stylish untuk pelajar dan profesional muda.',
                'price' => 7400000,
                'image' => 'asus_vivobook_14.jpg',
                'category' => 'Laptop'
            ],
            [
                'id' => 3,
                'name' => 'Lenovo IdeaPad Slim 3',
                'description' => 'Laptop tipis dan efisien untuk kebutuhan harian.',
                'price' => 6200000,
                'image' => 'lenovo_idepad_slim_3.jpg',
                'category' => 'Laptop'
            ],
            [
                'id' => 4,
                'name' => 'Cooling Pad',
                'description' => 'Aksesoris untuk menjaga suhu laptop tetap dingin saat digunakan.',
                'price' => 85000,
                'image' => 'cooling_pad.jpg',
                'category' => 'Aksesoris Laptop'
            ],
            [
                'id' => 5,
                'name' => 'Wireless Mouse',
                'description' => 'Mouse tanpa kabel yang nyaman dan responsif.',
                'price' => 120000,
                'image' => 'wireless_mouse.jpg',
                'category' => 'Aksesoris Laptop'
            ],
            [
                'id' => 6,
                'name' => 'Wireless Gaming Keyboard',
                'description' => 'Keyboard wireless dengan backlight RGB dan desain ergonomis untuk gaming.',
                'price' => 295000,
                'image' => 'wireless_gaming_keyboard.jpg',
                'category' => 'Aksesoris Laptop'
            ]
        ];
    }

    public function getProductById($id)
    {
        foreach ($this->getProducts() as $p) {
            if ($p['id'] == $id) return $p;
        }
        return null;
    }
}
