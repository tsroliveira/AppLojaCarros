<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrosTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('carros')->insert([
            ['id' => 3, 'marca' => 'Toyota', 'modelo' => 'Corola Cross', 'ano' => 2020, 'preco' => 180000.00, 'quilometragem' => 25443, 'imagem' => 'Corola Cross.png', 'created_at' => '2024-07-02 07:02:36', 'updated_at' => '2024-07-02 07:32:18'],
            ['id' => 4, 'marca' => 'Fiat', 'modelo' => 'Argo', 'ano' => 2020, 'preco' => 62000.00, 'quilometragem' => 21898, 'imagem' => 'Argo.png', 'created_at' => '2024-07-02 07:22:12', 'updated_at' => '2024-07-08 22:02:03'],
            ['id' => 5, 'marca' => 'Hyundai', 'modelo' => 'Creta', 'ano' => 2019, 'preco' => 102000.00, 'quilometragem' => 41000, 'imagem' => 'Creta.png', 'created_at' => '2024-07-02 22:17:01', 'updated_at' => '2024-07-02 22:17:01'],
            ['id' => 6, 'marca' => 'Hyundai', 'modelo' => 'HB20s', 'ano' => 2019, 'preco' => 50999.00, 'quilometragem' => 41000, 'imagem' => 'HB20s.png', 'created_at' => '2024-07-02 22:49:59', 'updated_at' => '2024-07-03 01:18:33'],
            ['id' => 7, 'marca' => 'Renault', 'modelo' => 'Kwid', 'ano' => 2222, 'preco' => 50000.00, 'quilometragem' => 12334, 'imagem' => 'Kwid.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 8, 'marca' => 'Mitsubishi', 'modelo' => 'L200', 'ano' => 2020, 'preco' => 129000.00, 'quilometragem' => 25443, 'imagem' => 'L200.png', 'created_at' => '2024-07-02 07:02:36', 'updated_at' => '2024-07-02 07:32:18'],
            ['id' => 9, 'marca' => 'Fiat', 'modelo' => 'Mobi', 'ano' => 2021, 'preco' => 42900.00, 'quilometragem' => 1212, 'imagem' => 'Mobi.png', 'created_at' => '2024-07-02 07:22:12', 'updated_at' => '2024-07-02 07:31:43'],
            ['id' => 10, 'marca' => 'Chevrolet', 'modelo' => 'Onix Sedan', 'ano' => 2019, 'preco' => 60000.00, 'quilometragem' => 5784, 'imagem' => 'Onix Sedan.png', 'created_at' => '2024-07-02 22:17:01', 'updated_at' => '2024-07-02 22:17:01'],
            ['id' => 11, 'marca' => 'Jeep', 'modelo' => 'Renegage', 'ano' => 2015, 'preco' => 96000.00, 'quilometragem' => 41000, 'imagem' => 'Renegage.png', 'created_at' => '2024-07-02 22:49:59', 'updated_at' => '2024-07-03 01:18:33'],
            ['id' => 12, 'marca' => 'Chevrolet', 'modelo' => 'S10', 'ano' => 2021, 'preco' => 250000.00, 'quilometragem' => 9876, 'imagem' => 'S10.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 13, 'marca' => 'Fiat', 'modelo' => 'Strada', 'ano' => 2018, 'preco' => 89000.00, 'quilometragem' => 1396, 'imagem' => 'Strada.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 14, 'marca' => 'BMW', 'modelo' => 'X5', 'ano' => 2019, 'preco' => 200000.00, 'quilometragem' => 5632, 'imagem' => 'X5.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 15, 'marca' => 'Jeep', 'modelo' => 'Compass', 'ano' => 2024, 'preco' => 150000.00, 'quilometragem' => 7655, 'imagem' => 'Compass.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 16, 'marca' => 'Volkswagen', 'modelo' => 'Gol', 'ano' => 2015, 'preco' => 41200.00, 'quilometragem' => 54146, 'imagem' => 'Gol.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 17, 'marca' => 'Renault', 'modelo' => 'Sandero', 'ano' => 2017, 'preco' => 45378.00, 'quilometragem' => 29890, 'imagem' => 'Sandero.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 18, 'marca' => 'Volkswagen', 'modelo' => 'Polo', 'ano' => 2222, 'preco' => 70000.00, 'quilometragem' => 3097, 'imagem' => 'Polo.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 19, 'marca' => 'Chevrolet', 'modelo' => 'Onix', 'ano' => 2023, 'preco' => 49800.00, 'quilometragem' => 9526, 'imagem' => 'Onix.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 20, 'marca' => 'Fiat', 'modelo' => 'Cronos', 'ano' => 2024, 'preco' => 82000.00, 'quilometragem' => 37262, 'imagem' => 'Cronos.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 21, 'marca' => 'Peugeot', 'modelo' => '208', 'ano' => 2026, 'preco' => 80000.00, 'quilometragem' => 8753, 'imagem' => '208.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 22, 'marca' => 'Fiat', 'modelo' => 'Pulse', 'ano' => 2222, 'preco' => 80000.00, 'quilometragem' => 8765, 'imagem' => 'Pulse.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 23, 'marca' => 'Citroen', 'modelo' => 'C3 AirCross', 'ano' => 2015, 'preco' => 67898.00, 'quilometragem' => 12870, 'imagem' => 'C3 AirCross.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 24, 'marca' => 'Citroen', 'modelo' => 'C4', 'ano' => 2023, 'preco' => 82500.00, 'quilometragem' => 7659, 'imagem' => 'C4.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 25, 'marca' => 'Nissan', 'modelo' => 'Kicks', 'ano' => 2222, 'preco' => 99000.00, 'quilometragem' => 19097, 'imagem' => 'Kicks.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 26, 'marca' => 'Chevrolet', 'modelo' => 'Tracker', 'ano' => 2016, 'preco' => 118000.00, 'quilometragem' => 34192, 'imagem' => 'Tracker.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 27, 'marca' => 'Volkswagen', 'modelo' => 'T-Cross', 'ano' => 2023, 'preco' => 120000.00, 'quilometragem' => 3456, 'imagem' => 'T-Cross.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 28, 'marca' => 'Toyota', 'modelo' => 'Corolla', 'ano' => 2018, 'preco' => 98000.00, 'quilometragem' => 2887, 'imagem' => 'Corolla.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 29, 'marca' => 'Chevrolet', 'modelo' => 'Cruze', 'ano' => 2017, 'preco' => 125000.00, 'quilometragem' => 45271, 'imagem' => 'Cruze.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 30, 'marca' => 'Nissan', 'modelo' => 'Sentra', 'ano' => 2019, 'preco' => 94000.00, 'quilometragem' => 19864, 'imagem' => 'Sentra.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 31, 'marca' => 'Mitsubishi', 'modelo' => 'Eclipse Cross', 'ano' => 2024, 'preco' => 140000.00, 'quilometragem' => 48986, 'imagem' => 'Eclipse Cross.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 32, 'marca' => 'Chery', 'modelo' => 'Tiggo 8', 'ano' => 2023, 'preco' => 160000.00, 'quilometragem' => 4538, 'imagem' => 'Tiggo 8.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 33, 'marca' => 'Chevrolet', 'modelo' => 'Equinox', 'ano' => 2020, 'preco' => 140000.00, 'quilometragem' => 7653, 'imagem' => 'Equinox.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 34, 'marca' => 'Audi', 'modelo' => 'A3 Sedan', 'ano' => 2023, 'preco' => 112000.00, 'quilometragem' => 56491, 'imagem' => 'A3 Sedan.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 35, 'marca' => 'Chevrolet', 'modelo' => 'Spin', 'ano' => 2020, 'preco' => 99000.00, 'quilometragem' => 9321, 'imagem' => 'Spin.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 36, 'marca' => 'Volkswagen', 'modelo' => 'Saveiro', 'ano' => 2021, 'preco' => 78000.00, 'quilometragem' => 1212, 'imagem' => 'Saveiro.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 37, 'marca' => 'Fiat', 'modelo' => 'Toro', 'ano' => 2018, 'preco' => 89000.00, 'quilometragem' => 23214, 'imagem' => 'Toro.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 38, 'marca' => 'Fiat', 'modelo' => 'Fiorino', 'ano' => 2018, 'preco' => 70300.00, 'quilometragem' => 1765, 'imagem' => 'Fiorino.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 39, 'marca' => 'Toyota', 'modelo' => 'Hilux', 'ano' => 2019, 'preco' => 320000.00, 'quilometragem' => 3421, 'imagem' => 'Hilux.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 40, 'marca' => 'Nissan', 'modelo' => 'Frontier', 'ano' => 2024, 'preco' => 310000.00, 'quilometragem' => 35469, 'imagem' => 'Frontier.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 41, 'marca' => 'Renault', 'modelo' => 'Zoe E-tech', 'ano' => 2024, 'preco' => 57800.00, 'quilometragem' => 2789, 'imagem' => 'Zoe E-tech.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
            ['id' => 42, 'marca' => 'GWM', 'modelo' => 'Haval H6', 'ano' => 2222, 'preco' => 280000.00, 'quilometragem' => 3287, 'imagem' => 'Haval H6.png', 'created_at' => '2024-07-02 23:26:18', 'updated_at' => '2024-07-02 23:26:18'],
        ]);
    }
}
