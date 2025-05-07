<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Finalidad;

class FinalidadesSeeder extends Seeder
{
    public function run(): void
    {
        $finalidades = [
            'Gestión de clientes, contable, fiscal y administrativa',
            'Recursos humanos',
            'Gestión de nóminas',
            'Prevención de riesgos laborales',
            'Prestación de servicios de solvencia patrimonial y crédito',
            'Cumplimiento/incumplimiento de obligaciones dinerarias',
            'Servicios económicos-financieros y seguros',
            'Análisis de perfiles',
            'Publicidad y prospección comercial',
            'Prestación de servicios de comunicaciones electrónicas',
            'Quíos/repertorios de servicios de comunicaciones electrónicas',
            'Comercio electrónico',
            'Prestación de servicios de certificación electrónica',
            'Gestión de asociados o miembros de partidos políticos, sindicatos, iglesias, confesiones o comunidades religiosas y asociaciones, fundaciones y otras entidades sin ánimo de lucro, cuya finalidad sea política, filosófica, religiosa o sindical',
            'Gestión de actividades asociativas, culturales, recreativas, deportivas y sociales',
            'Gestión de asistencia social',
            'Educación',
            'Investigación epidemiológica y actividades análogas',
            'Gestión y control sanitario',
            'Historial clínico',
            'Seguridad privada',
            'Seguridad y control de acceso a edificios',
            'Videovigilancia',
            'Fines estadísticos, históricos o científicos',
            'Otras finalidades',
            'Ejecución de un contrato verbal o escrito',
            'Envío de comunicaciones informativas',
            'Envío de comunicaciones comerciales electrónicas',
            'Rendición contable laboral',
        ];

        foreach ($finalidades as $nombre) {
            Finalidad::firstOrCreate(['nombre' => mb_substr($nombre, 0, 191)]);
        }
    }
} 