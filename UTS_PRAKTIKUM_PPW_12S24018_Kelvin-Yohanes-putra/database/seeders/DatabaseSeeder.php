<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Equipment;

class DatabaseSeeder extends Seeder
{
    public function run(): void


    {
        $category = [
            [
                'kode_kategori' => 'S-C',
                'nama_kategori' => 'Server & Cloud',
            ],
            [
                'kode_kategori' => 'I-T',
                'nama_kategori' => 'Internet of Things',
            ],
            [
                'kode_kategori' => 'M-D',
                'nama_kategori' => 'multimedia & drone',
            ],
            
        ];

        Equipment::create([
            'kategori perangkat' => $category->id,
            'kode aset inventaris' => 'EQ-IOT-005 ',
            'nama perangkat' => ' Raspberry Pi 4 Model B (8GB RAM) Starter Kit',
            'spesifikasi teknis' => ' Quad-core Cortex-A72 @1.5GHz, 8GB LPDDR4, MicroSD 64GB Class 10, Casing Alumunium Aktif Fan, Power Supply Type-C Resmi',
            'kondisi fisik' => 'baik',
            'status' => 'tersedia',
            'Tarif Kompensasi Harian' => '15000',
            'image_path' => null
        ]);
        Equipment::create([
            'kategori perangkat' => $category->id,
            'kode aset inventaris' => 'EQ-SRV-001  ',
            'nama perangkat' => ' Dell PowerEdge T40 Server ',
            'spesifikasi teknis' => 'Quad-core Cortex-B45 ',
             'kondisi fisik' => 'baik',
            'status' => 'dipinjam',
            'Tarif Kompensasi Harian' => '13000',
            'image_path' => null
        ]);
       
         Equipment::create([
            'kategori perangkat' => $category->id,
            'kode aset inventaris' => 'wr-vrd-022  ',
            'nama perangkat' => ' lenovo power ',
            'spesifikasi teknis' => 'MicroSD 88GB Class 65 ',
             'kondisi fisik' => 'baik',
            'status' => 'tersedia',
            'Tarif Kompensasi Harian' => '21000',
            'image_path' => null
        ]);

         Equipment::create([
            'kategori perangkat' => $category->id,
            'kode aset inventaris' => 'lu-opi-999 ',
            'nama perangkat' => ' Hp ower  ',
            'spesifikasi teknis' => 'MicroSD 10GB Class 30 ',
             'kondisi fisik' => 'baik',
            'status' => 'tersedia',
            'Tarif Kompensasi Harian' => '22000',
            'image_path' => null
        ]);
       
         Equipment::create([
            'kategori perangkat' => $category->id,
            'kode aset inventaris' => 'yt-obo-989 ',
            'nama perangkat' => ' asus Power  Server ',
            'spesifikasi teknis' => 'MicroSD 46GB Class 98, ',
             'kondisi fisik' => 'baik',
            'status' => 'tersedia',
            'Tarif Kompensasi Harian' => '22000',
            'image_path' => null
        ]);

         Equipment::create([
            'kategori perangkat' => $category->id,
            'kode aset inventaris' => 'qw-vco-000 ',
            'nama perangkat' => ' ROG pro Server ',
            'spesifikasi teknis' => 'MicroSD 61GB Class 11, ',
             'kondisi fisik' => 'baik',
            'status' => 'tersedia',
            'Tarif Kompensasi Harian' => '62000',
            'image_path' => null
        ]);
       
        


        



    }
}