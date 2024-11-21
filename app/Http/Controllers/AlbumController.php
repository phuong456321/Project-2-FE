<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        // Ví dụ với dữ liệu tĩnh, bạn có thể thay thế bằng dữ liệu từ cơ sở dữ liệu
        $albums = [
            ['name' => 'Ikon', 'artist' => 'Quốc Đạt', 'image' => 'album1.jpg'],
            ['name' => 'Nhạc Quê Hương', 'artist' => 'Trịnh Công Sơn', 'image' => 'album2.jpg'],
            ['name' => 'Chuyến Đi Về', 'artist' => 'Hồ Ngọc Hà', 'image' => 'album3.jpg'],
        ];

        return view('album.index', compact('albums'));
    }
}
