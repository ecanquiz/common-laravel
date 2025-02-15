<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuContainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("INSERT INTO public.mu_containers VALUES (1, 'N/A')");
        DB::statement("INSERT INTO public.mu_containers VALUES (2, 'BARRIL(ES)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (3, 'BLISTER(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (4, 'BOBINA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (5, 'BOLSA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (6, 'BOMBONA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (7, 'BOTELLA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (8, 'BULTO(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (9, 'CAJA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (10, 'CARBOYA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (11, 'CARTUCHO(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (12, 'CUÑETE(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (13, 'FAJA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (14, 'FRASCO(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (15, 'GABERA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (16, 'GALON(ES)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (17, 'GRANEL')");
        DB::statement("INSERT INTO public.mu_containers VALUES (18, 'LAMINA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (19, 'LATA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (20, 'PACA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (21, 'PAILA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (22, 'PALETA(S) ')");
        DB::statement("INSERT INTO public.mu_containers VALUES (23, 'PAPELETA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (24, 'PAQUETE(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (25, 'PIMPINA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (26, 'PIPETA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (27, 'PIPOTE(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (28, 'POTE(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (29, 'RESMA(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (30, 'ROLLO(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (31, 'SACO(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (32, 'TAMBOR(ES)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (33, 'TANQUE(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (34, 'TOTEN(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (35, 'TUBO(S)')");
        DB::statement("INSERT INTO public.mu_containers VALUES (36, 'VASO(S)')");
        DB::statement(
            "UPDATE public.mu_containers
            SET created_at = now()::timestamp(0) without time zone,
                updated_at = now()::timestamp(0) without time zone"
        );
    }
}
