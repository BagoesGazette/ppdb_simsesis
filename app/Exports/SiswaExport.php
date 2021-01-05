<?php

namespace App\Exports;

use App\Models\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Excel::all();
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->nik,
            $user->nisn,
            $user->nama_lengkap,      
            $user->jenis_kelamin,     
            $user->tempat_lahir,      
            $user->tanggal_lahir,     
            $user->agama,             
            $user->golongan_darah,    
            $user->tinggi_badan,      
            $user->berat_badan,       
            $user->status,            
            $user->penyakit,          
            $user->hobi,         
            $user->prestasi,          
            $user->desa,         
            $user->kecamatan,         
            $user->kabupaten,        
            $user->provinsi,        
            $user->alamat,            
            $user->nomor_hp,          
            $user->jurusan,
            $user->nama_ayah,         
            $user->status_ayah,       
            $user->pendidikan_ayah,   
            $user->pekerjaan_ayah,  
            $user->penghasilan_ayah,  
            $user->nama_ibu, 
            $user->status_ibu,        
            $user->pendidikan_ibu,    
            $user->pekerjaan_ibu,     
            $user->penghasilan_ibu,   
            $user->no_hp,  
            $user->nama_wali,         
            $user->pendidikan_wali,   
            $user->pekerjaan_wali,  
            $user->penghasilan_wali,  
            $user->hp_wali, 
            $user->asal_sekolah,   
            $user->nama_sekolah,  
            $user->status_sekolah, 
            $user->alamat_sekolah,
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'NIK',
            'NISN',
            'Nama Lengkap',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Agama',
            'Golongan Darah',
            'Tinggi Badan',
            'Berat Badan',
            'Status',
            'Penyakit',
            'Hobi',
            'Prestasi',
            'Desa',
            'Kecamatan',
            'Kabupaten',
            'Provinsi',
            'Alamat',
            'Nomor Hp',
            'Jurusan',
            'Nama Ayah',
            'Status Ayah',
            'Pendidikan Ayah',
            'Pekerjaan Ayah',
            'Penghasilan Ayah',
            'Nama Ibu',
            'Status Ibu',
            'Pendidikan Ibu',
            'Pekerjaan Ibu',
            'Penghasilan Ibu',
            'Nomor Hp Orang Tua',
            'Nama Wali',
            'Pendidikan Wali',
            'Pekerjaan Wali',
            'Penghasilan Wali',
            'Nomor Hp Wali',
            'Asal Sekolah',
            'Nama Sekolah',
            'Status Sekolah',
            'Alamat Sekolah'
        ];
    }

    

}
