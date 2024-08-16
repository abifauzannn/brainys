<?php

namespace App\Livewire\HomeComponents;

use Livewire\Component;

class KeyFeature extends Component
{
    public function render()
    {

        $features = [
            ['title' => 'Templat Modul Ajar', 'description' => 'Gunakan templat modul ajar kurikulum merdeka', 'icon' => 'modulajar.png'],
            ['title' => 'Templat Silabus', 'description' => 'Gunakan templat silabus merdeka belajar', 'icon' => 'silabus.png'],
            ['title' => 'Templat Soal', 'description' => 'Gunakan templat soal untuk sekolah', 'icon' => 'soal.png'],
            ['title' => 'Templat Bahan Ajar', 'description' => 'Gunakan templat bahan materi pembelajaran', 'icon' => 'bahanajar.png'],
            ['title' => 'Templat Gamifikasi', 'description' => 'Gunakan templat materi berbasis gamifikasi', 'icon' => 'gamifikasi.png'],
            ['title' => 'Templat Kisi - Kisi Soal', 'description' => 'Gunakan templat kisi-kisi soal dari capaian pembelajaran', 'icon' => 'kisikisi.png'],
            ['title' => 'Templat ATP', 'description' => 'Gunakan templat ATP kurikulum merdeka mengajar', 'icon' => 'atp.png'],
            // Tambahkan item lain sesuai kebutuhan
        ];
        return view('livewire.home-components.key-feature', compact('features'));
    }
}
