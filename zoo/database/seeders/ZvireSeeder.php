<?php

namespace Database\Seeders;

use App\Models\ZvireModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZvireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //sem napiseme jaky data se maji vlozit do tabulky
        $noveZvire = new ZvireModel();
        $noveZvire->jmeno = "zirafa";
        $noveZvire->popis = "Ma dlouhy krk";
        $noveZvire->je_zdrave = false;
        $noveZvire->pohlavi = "samec";
        $noveZvire->save();

        $noveZvire = new ZvireModel();
        $noveZvire->jmeno = "tukan";
        $noveZvire->pohlavi = "samec";
        $noveZvire->save();

        $noveZvire = new ZvireModel();
        $noveZvire->jmeno = "zebra";
        $noveZvire->save();

    }
}
