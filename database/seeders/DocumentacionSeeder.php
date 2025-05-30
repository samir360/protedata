<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Documentacion;

class DocumentacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $preguntas = [
            [
                'pregunta' => '¿En qué consiste?',
                'respuesta' => 'El contrato de confidencialidad se refiere a la obligación que tienen los empleados de guardar secreto de todas las actuaciones que realicen en la empresa y la prohibición de revelar la información sobre los datos tratados tanto de los clientes, como de los demás trabajadores, en definitiva, de toda la información que utilizan.'
            ],
            [
                'pregunta' => '¿Para qué sirve?',
                'respuesta' => 'Sus finalidades son proteger toda la información que manejan tus empleados en el ejercicio de sus funciones, su compromiso a cumplir con las reglas específicas de tu empresa y no divulgar los datos con los que tratan.'
            ],
            [
                'pregunta' => '¿Quién debe firmarlo?',
                'respuesta' => 'Deben firmar el contrato de confidencialidad todos tus empleados, incluidos los trabajadores temporales y los trabajadores en prácticas.'
            ],
            [
                'pregunta' => '¿Y si el empleado se niega a firmarlo?',
                'respuesta' => 'Si tu empleado se niega a firmar el documento, debes saber que no estás cumpliendo con las medidas de seguridad que establece el RGPD y la LOPD y que cualquier incidencia con los datos personales de la empresa te podría conllevar a una sanción por parte de la AEPD.'
            ],
            [
                'pregunta' => '¿Dónde debo guardarlo?',
                'respuesta' => 'Debes almacenarlo en un lugar seguro, en el cual solo se tenga acceso por personal autorizado y siempre debas tenerlos localizados. Esto es muy importante ya que uno de los documentos que solicitarán los agentes de la AEPD en caso de una inspección será este.'
            ],
            [
                'pregunta' => '¿Se pueden guardar copias?',
                'respuesta' => 'Sí, de hecho, es una práctica muy recomendable, ya que en el caso de que se produzca una pérdida del documento original se disponga de una copia con la cual hacer frente a las solicitudes de documentación por parte de la AEPD.'
            ],
            [
                'pregunta' => '¿Se pueden almacenar en formato electrónico?',
                'respuesta' => 'Por supuesto, es lo más cómodo, puedes escanear el original y luego destruirlo y así lo mantendrás en formato electrónico y con ello ganarás mucho espacio. Recuerda siempre disponer de una copia de seguridad actualizada con todas tus documentos y archivos.'
            ],
        ];

        $contenido_modelo = "INFORMACIÓN SOBRE PROTECCIÓN DE DATOS Y COMPROMISO DE CONFIDENCIALIDAD PARA EMPLEADOS\n\nEn cumplimiento del Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril de 2016 (RGPD) y la Ley Orgánica 3/2018, de 5 de diciembre (LOPDGDD), le facilitamos la siguiente información: ... (texto completo aquí)";

        $documentos = [
            // RRHH
            [ 'titulo' => 'Compromiso confidencialidad - Empleados', 'categoria' => 'RRHH', 'contenido_modelo' => $contenido_modelo, 'pdf_path' => 'compromiso_confidencialidad_empleados.pdf' ],
            [ 'titulo' => 'Circular informativa', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Circular informativa.', 'pdf_path' => null ],
            [ 'titulo' => 'Informar videovigilancia', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Informar videovigilancia.', 'pdf_path' => null ],
            [ 'titulo' => 'Informar videovigilancia - control laboral', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Informar videovigilancia - control laboral.', 'pdf_path' => null ],
            [ 'titulo' => 'Comunicado candidato no seleccionado', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Comunicado candidato no seleccionado.', 'pdf_path' => null ],
            [ 'titulo' => 'Procedimiento de salida del empleado', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Procedimiento de salida del empleado.', 'pdf_path' => null ],
            [ 'titulo' => 'Consentimiento geolocalización', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Consentimiento geolocalización.', 'pdf_path' => null ],
            [ 'titulo' => 'Consentimiento - Publicación de imágenes empleados', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Consentimiento - Publicación de imágenes empleados.', 'pdf_path' => null ],
            [ 'titulo' => 'Consentimiento tratamiento curriculums', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Consentimiento tratamiento curriculums.', 'pdf_path' => null ],
            [ 'titulo' => 'Recepción CV correo electrónico', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Recepción CV correo electrónico.', 'pdf_path' => null ],
            [ 'titulo' => 'Control de recursos informáticos', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Control de recursos informáticos.', 'pdf_path' => null ],
            [ 'titulo' => 'Datos biométricos (registro horario)', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Datos biométricos (registro horario).', 'pdf_path' => null ],
            [ 'titulo' => 'Manual videovigilancia empleados', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Manual videovigilancia empleados.', 'pdf_path' => null ],
            [ 'titulo' => 'Derecho desconexión digital - Empleados', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Derecho desconexión digital - Empleados.', 'pdf_path' => null ],
            [ 'titulo' => 'Teletrabajo', 'categoria' => 'RRHH', 'contenido_modelo' => 'Contenido de ejemplo para Teletrabajo.', 'pdf_path' => null ],
            // CLIENTES
            [ 'titulo' => 'Cláusula información - Contrato', 'categoria' => 'Clientes', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Consentimiento - Publicación de imágenes en redes sociales, sitios web, etc.', 'categoria' => 'Clientes', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Consentimiento - Publicación de imágenes menores', 'categoria' => 'Clientes', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Consentimiento - Pacientes', 'categoria' => 'Clientes', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Consentimiento expreso clientes (Abogados, aseguradoras...)', 'categoria' => 'Clientes', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Consentimiento - Grabación voz', 'categoria' => 'Clientes', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Consentimiento - Skype Comunicación - Traspaso actividad', 'categoria' => 'Clientes', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Locución para tratamiento de datos obtenidos vía telefónica', 'categoria' => 'Clientes', 'contenido_modelo' => '...', 'pdf_path' => null ],
            // EJERCICIOS DE DERECHOS
            [ 'titulo' => 'Acceso', 'categoria' => 'Ejercicios de derechos', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Rectificación', 'categoria' => 'Ejercicios de derechos', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Supresión', 'categoria' => 'Ejercicios de derechos', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Limitación', 'categoria' => 'Ejercicios de derechos', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Portabilidad', 'categoria' => 'Ejercicios de derechos', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Oposición', 'categoria' => 'Ejercicios de derechos', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'A no ser objeto de decisiones individuales automatizadas', 'categoria' => 'Ejercicios de derechos', 'contenido_modelo' => '...', 'pdf_path' => null ],
            // VIDEOVIGILANCIA
            [ 'titulo' => 'Cartel de videovigilancia', 'categoria' => 'Videovigilancia', 'contenido_modelo' => '...', 'pdf_path' => null ],
            // ENCARGADOS DE TRATAMIENTO
            [ 'titulo' => 'Comunicado encargado de tratamiento', 'categoria' => 'Encargados de tratamiento', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Contrato encargado de tratamiento', 'categoria' => 'Encargados de tratamiento', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Compromiso de confidencialidad con acceso a datos', 'categoria' => 'Encargados de tratamiento', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Contrato subencargado', 'categoria' => 'Encargados de tratamiento', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Cesión de datos entre grupos de empresas', 'categoria' => 'Encargados de tratamiento', 'contenido_modelo' => '...', 'pdf_path' => null ],
            // COMUNICACIONES
            [ 'titulo' => 'Correo electrónico', 'categoria' => 'Comunicaciones', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Fax', 'categoria' => 'Comunicaciones', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Facturas, presupuestos, inscripciones, impresos modelo, etc.', 'categoria' => 'Comunicaciones', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Comunicaciones comerciales electrónicas', 'categoria' => 'Comunicaciones', 'contenido_modelo' => '...', 'pdf_path' => null ],
            // OTROS DOCUMENTOS
            [ 'titulo' => 'Política de privacidad APP', 'categoria' => 'Otros documentos', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Condiciones de uso APP', 'categoria' => 'Otros documentos', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Certificado de Protección de Datos', 'categoria' => 'Otros documentos', 'contenido_modelo' => '...', 'pdf_path' => null ],
            [ 'titulo' => 'Documento de Seguridad', 'categoria' => 'Otros documentos', 'contenido_modelo' => '...', 'pdf_path' => null ],
        ];

        foreach ($documentos as $doc) {
            Documentacion::create([
                'titulo' => $doc['titulo'],
                'categoria' => $doc['categoria'],
                'preguntas_respuestas' => json_encode($preguntas),
                'contenido_modelo' => $doc['contenido_modelo'],
                'pdf_path' => $doc['pdf_path'] ?? null,
            ]);
        }
    }
}
