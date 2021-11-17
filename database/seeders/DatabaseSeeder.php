<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kegiatan;
use App\Models\Sie;
use App\Models\Agenda;
use App\Models\Tugas;
use App\Models\Jabatan;
use App\Models\Menjabat;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //User
        User::create([
            'nim'=>'1915323044',
            'nama_user'=>'Royan Fauzan',
            'no_telpon'=>'0812345678',
            'email'=>'royanfauzan7@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        User::create([
            'nim'=>'1915323045',
            'nama_user'=>'Bagus Satria',
            'no_telpon'=>'0812345687',
            'email'=>'bagussatria7@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        //Kegiatan
        Kegiatan::create([
            'user_id'=>'1',
            'nama_kegiatan'=>'Kegiatan 1',
            'penyelenggara'=>'UKM Basket',
            'deskripsi_kegiatan'=>'deskripsi kegiatan 1'
        ]);
        Kegiatan::create([
            'user_id'=>'1',
            'nama_kegiatan'=>'Kegiatan 2',
            'penyelenggara'=>'UKM Komputer',
            'deskripsi_kegiatan'=>'deskripsi kegiatan 2'
        ]);
        Kegiatan::create([
            'user_id'=>'2',
            'nama_kegiatan'=>'Kegiatan 3',
            'penyelenggara'=>'BEM',
            'deskripsi_kegiatan'=>'deskripsi kegiatan 3'
        ]);

        //Agenda
        Agenda::create([
            'kegiatan_id'=>'1',
            'nama_agenda'=>'agenda 1',
            'deskripsi_agenda'=>'deskripsi agenda 1',
            'tanggal_mulai'=>'2021-12-10 10:16:18',
            'tanggal_selesai'=>'2021-12-10 12:16:18',
            'lokasi'=>'Gedung AE'
        ]);
        Agenda::create([
            'kegiatan_id'=>'1',
            'nama_agenda'=>'agenda 2',
            'deskripsi_agenda'=>'deskripsi agenda 1',
            'tanggal_mulai'=>'2021-12-11 10:16:18',
            'tanggal_selesai'=>'2021-12-11 12:16:18',
            'lokasi'=>'Gedung AB'
        ]);
        Agenda::create([
            'kegiatan_id'=>'2',
            'nama_agenda'=>'agenda 1',
            'deskripsi_agenda'=>'deskripsi agenda 1',
            'tanggal_mulai'=>'2021-12-10 10:16:18',
            'tanggal_selesai'=>'2021-12-10 12:16:18',
            'lokasi'=>'Gedung EA'
        ]);
        Agenda::create([
            'kegiatan_id'=>'3',
            'nama_agenda'=>'agenda 1',
            'deskripsi_agenda'=>'deskripsi agenda 1',
            'tanggal_mulai'=>'2021-12-11 10:16:18',
            'tanggal_selesai'=>'2021-12-11 12:16:18',
            'lokasi'=>'Gedung XA'
        ]);

        //Sie
        Sie::create([
            'kegiatan_id'=>'1',
            'nama_sie'=>'inti',
            'deskripsi_sie'=>'deskripsi Sie Inti',
            'rekrutmen'=>false
        ]);
        Sie::create([
            'kegiatan_id'=>'2',
            'nama_sie'=>'inti',
            'deskripsi_sie'=>'deskripsi Sie Inti',
            'rekrutmen'=>false
        ]);
        Sie::create([
            'kegiatan_id'=>'3',
            'nama_sie'=>'inti',
            'deskripsi_sie'=>'deskripsi Sie Inti',
            'rekrutmen'=>false
        ]);

        Sie::create([
            'kegiatan_id'=>'1',
            'nama_sie'=>'Sie 1',
            'deskripsi_sie'=>'deskripsi Sie 1',
            'rekrutmen'=>false
        ]);
        Sie::create([
            'kegiatan_id'=>'2',
            'nama_sie'=>'Sie 1',
            'deskripsi_sie'=>'deskripsi Sie 1',
            'rekrutmen'=>false
        ]);
        Sie::create([
            'kegiatan_id'=>'3',
            'nama_sie'=>'Sie 1',
            'deskripsi_sie'=>'deskripsi Sie 1',
            'rekrutmen'=>false
        ]);

        //Tugas
        Tugas::create([
            'sie_id'=>'4',
            'judul'=>'Tugas 1',
            'deskripsi'=>'deskripsi tugas 1',
            'catatan'=>'catatan tugas 1'
        ]);
        Tugas::create([
            'sie_id'=>'4',
            'judul'=>'Tugas 2',
            'deskripsi'=>'deskripsi tugas 2',
            'catatan'=>'catatan tugas 2'
        ]);
        Tugas::create([
            'sie_id'=>'4',
            'judul'=>'Tugas 3',
            'deskripsi'=>'deskripsi tugas 3',
            'catatan'=>'catatan tugas 3'
        ]);

        Tugas::create([
            'sie_id'=>'5',
            'judul'=>'Tugas 1',
            'deskripsi'=>'deskripsi tugas 1',
            'catatan'=>'catatan tugas 1'
        ]);
        Tugas::create([
            'sie_id'=>'5',
            'judul'=>'Tugas 2',
            'deskripsi'=>'deskripsi tugas 2',
            'catatan'=>'catatan tugas 2'
        ]);
        Tugas::create([
            'sie_id'=>'5',
            'judul'=>'Tugas 3',
            'deskripsi'=>'deskripsi tugas 3',
            'catatan'=>'catatan tugas 3'
        ]);

        Tugas::create([
            'sie_id'=>'6',
            'judul'=>'Tugas 1',
            'deskripsi'=>'deskripsi tugas 1',
            'catatan'=>'catatan tugas 1'
        ]);
        Tugas::create([
            'sie_id'=>'6',
            'judul'=>'Tugas 2',
            'deskripsi'=>'deskripsi tugas 2',
            'catatan'=>'catatan tugas 2'
        ]);
        Tugas::create([
            'sie_id'=>'6',
            'judul'=>'Tugas 3',
            'deskripsi'=>'deskripsi tugas 3',
            'catatan'=>'catatan tugas 3'
        ]);

        //Jabatan
        Jabatan::create([
            'nama_jabatan'=>'Anggota',
            'level_akses'=>2
        ]);
        Jabatan::create([
            'nama_jabatan'=>'Koordinator',
            'level_akses'=>3
        ]);
        Jabatan::create([
            'nama_jabatan'=>'Sekretaris',
            'level_akses'=>4
        ]);
        Jabatan::create([
            'nama_jabatan'=>'Bendahara',
            'level_akses'=>4
        ]);
        Jabatan::create([
            'nama_jabatan'=>'Wakil Ketua',
            'level_akses'=>5
        ]);
        Jabatan::create([
            'nama_jabatan'=>'Ketua',
            'level_akses'=>5
        ]);
        Jabatan::create([
            'nama_jabatan'=>'Penanggungjawab',
            'level_akses'=>6
        ]);
        
        //Menjabat
        Menjabat::create([
            'user_id'=>'1',
            'sie_id'=>'1',
            'jabatan_id'=>'6',
            'status'=>'aktif'
        ]);
        Menjabat::create([
            'user_id'=>'1',
            'sie_id'=>'2',
            'jabatan_id'=>'6',
            'status'=>'aktif'
        ]);
        Menjabat::create([
            'user_id'=>'2',
            'sie_id'=>'3',
            'jabatan_id'=>'6',
            'status'=>'aktif'
        ]);
    }
}
