<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return \DB::table('estados')->insert([
            ["id_estado" => 1,"nombre_est" => "Aguascalientes"],
            ["id_estado" => 2,"nombre_est" => "Baja California"],
            ["id_estado" => 3,"nombre_est" => "Baja California Sur"],
            ["id_estado" => 4,"nombre_est" => "Campeche"],
            ["id_estado" => 5,"nombre_est" => "Chiapas"],
            ["id_estado" => 6,"nombre_est" => "Chihuahua"],
            ["id_estado" => 7,"nombre_est" => "Ciudad de México"],
            ["id_estado" => 8,"nombre_est" => "Coahuila"],
            ["id_estado" => 9,"nombre_est" => "Colima"],
            ["id_estado" => 10,"nombre_est" => "Durango"],
            ["id_estado" => 11,"nombre_est" => "Guanajuato"],
            ["id_estado" => 12,"nombre_est" => "Guerrero"],
            ["id_estado" => 13,"nombre_est" => "Hidalgo"],
            ["id_estado" => 14,"nombre_est" => "Jalisco"],
            ["id_estado" => 15,"nombre_est" => "Estado de México"],
            ["id_estado" => 16,"nombre_est" => "Michoacán"],
            ["id_estado" => 17,"nombre_est" => "Morelos"],
            ["id_estado" => 18,"nombre_est" => "Nayarit"],
            ["id_estado" => 19,"nombre_est" => "Nuevo León"],
            ["id_estado" => 20,"nombre_est" => "Oaxaca"],
            ["id_estado" => 21,"nombre_est" => "Puebla"],
            ["id_estado" => 22,"nombre_est" => "Querétaro"],
            ["id_estado" => 23,"nombre_est" => "Quintana Roo"],
            ["id_estado" => 24,"nombre_est" => "San Luis Potosí"],
            ["id_estado" => 25,"nombre_est" => "Sinaloa"],
            ["id_estado" => 26,"nombre_est" => "Sonora"],
            ["id_estado" => 27,"nombre_est" => "Tabasco"],
            ["id_estado" => 28,"nombre_est" => "Tamaulipas"],
            ["id_estado" => 29,"nombre_est" => "Tlaxcala"],
            ["id_estado" => 30,"nombre_est" => "Veracruz"],
            ["id_estado" => 31,"nombre_est" => "Yucatán"],
            ["id_estado" => 32,"nombre_est" => "Zacatecas"],
        ]);
    }
}
