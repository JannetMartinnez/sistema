		<?php

		use Illuminate\Database\Seeder;
        use App\Models\Organigrama;


		class OrganigramaSeeder extends Seeder
		{
		    /**
		     * Run the database seeds.
		     *
		     * @return void
		     */

		    public function run(){
				DB::Table('organigrama')->insert([
			[
			'clave_area'=>'100000',
			'descripcion_area'=>'DIRECCION',
			'descripcion_corta'=>'DIRECCION',
			'area_depende'=>'100000',
			'nivel'=>1,
			'tipo_area'=>'A',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'110000',
			'descripcion_area'=>'SUBDIRECCIÓN ACADÉMICA',
			'descripcion_corta'=>'SUB. ACADÉMICA',
			'area_depende'=>'100000',
			'nivel'=>3,
			'tipo_area'=>'A',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'110100',
			'descripcion_area'=>'DEPARTAMENTO DE CIENCIAS BASICAS',
			'descripcion_corta'=>'C. BASICAS',
			'area_depende'=>'110000',
			'nivel'=>4,
			'tipo_area'=>'D',
			'correo_electronico'=>'ciencias.basicas@itslp.edu.mx',
			'activo'=>true
			],
			[
			'clave_area'=>'110200',
			'descripcion_area'=>'DEPARTAMENTO DE METAL MECANICA',
			'descripcion_corta'=>'M. MECANICA',
			'area_depende'=>'110000',
			'nivel'=>4,
			'tipo_area'=>'D',
			'correo_electronico'=>'depto.mecanica@itslp.edu.mx',
			'activo'=>true
			],
			[
			'clave_area'=>'110300',
			'descripcion_area'=>'DEPTO. DE INGENIERIA INDUSTRIAL',
			'descripcion_corta'=>'ING. INDUSTRIAL',
			'area_depende'=>'110000',
			'nivel'=>4,
			'tipo_area'=>'D',
			'correo_electronico'=>'depto.industrial@itslp.edu.mx',
			'activo'=>true
			],
			[
			'clave_area'=>'110500',
			'descripcion_area'=>'DEPARTAMENTO DE INGENIERIA ELECTRICA Y ELECTRONICA',
			'descripcion_corta'=>'ING. E. Y ELECT.',
			'area_depende'=>'110000',
			'nivel'=>4,
			'tipo_area'=>'D',
			'correo_electronico'=>'ele.elo.mkt@itslp.edu.mx',
			'activo'=>true
			],
			[
			'clave_area'=>'110600',
			'descripcion_area'=>'DEPARTAMENTO DE SISTEMAS Y COMPUTACION',
			'descripcion_corta'=>'SIST. Y COMP.',
			'area_depende'=>'110000',
			'nivel'=>4,
			'tipo_area'=>'D',
			'correo_electronico'=>'deptodesistemas@itslp.edu.mx',
			'activo'=>true
			],
			[
			'clave_area'=>'110700',
			'descripcion_area'=>'DEPARTAMENTO DE CIENCIAS ECONOMICO ADMINISTRATIVAS',
			'descripcion_corta'=>'C. ECO. ADMVAS.',
			'area_depende'=>'110000',
			'nivel'=>4,
			'tipo_area'=>'D',
			'correo_electronico'=>'csocio@itslp.edu.mx',
			'activo'=>true
			],
			[
			'clave_area'=>'110800',
			'descripcion_area'=>'DEPARTAMENTO DE DESARROLLO ACADEMICO',
			'descripcion_corta'=>'DES. ACADEMICO',
			'area_depende'=>'110000',
			'nivel'=>4,
			'tipo_area'=>'A',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'110900',
			'descripcion_area'=>'DIVISION DE ESTUDIOS DE POSTGRADO E INVESTIGACION',
			'descripcion_corta'=>'DIV. DE EST. DE POST. E INV.',
			'area_depende'=>'110000',
			'nivel'=>4,
			'tipo_area'=>'D',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'111000',
			'descripcion_area'=>'DIVISION DE ESTUDIOS PROFESIONALES',
			'descripcion_corta'=>'DIV. DE EST. PROF.',
			'area_depende'=>'110000',
			'nivel'=>4,
			'tipo_area'=>'A',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'111800',
			'descripcion_area'=>'EDUCACION A DISTANCIA',
			'descripcion_corta'=>'EDUC. A DISTANCIA',
			'area_depende'=>'110000',
			'nivel'=>'4',
			'tipo_area'=>'D',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'120000',
			'descripcion_area'=>'SUBDIRECCIÓN DE PLANEACIÓN Y VINCULACIÓN',
			'descripcion_corta'=>'SUB. DE PLAN. Y VIN.',
			'area_depende'=>'100000',
			'nivel'=>3,
			'tipo_area'=>'P',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'120100',
			'descripcion_area'=>'DEPARTAMENTO DE PLANEACIÓN PROGRAMACIÓN Y PRESUPUESTACIÓN',
			'descripcion_corta'=>'PLAN. PROG. Y PRES.',
			'area_depende'=>'120000',
			'nivel'=>4,
			'tipo_area'=>'P',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'120200',
			'descripcion_area'=>'DEPARTAMENTO DE GESTION TECNOLOGICA Y VINCULACION',
			'descripcion_corta'=>'GESTION TEC. Y VIN.',
			'area_depende'=>'120000',
			'nivel'=>4,
			'tipo_area'=>'P',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'120300',
			'descripcion_area'=>'DEPARTAMENTO DE COMUNICACION Y DIFUSION',
			'descripcion_corta'=>'COM. Y DIFUSION',
			'area_depende'=>'120000',
			'nivel'=>4,
			'tipo_area'=>'P',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'120400',
			'descripcion_area'=>'DEPARTAMENTO DE ACTIVIDADES EXTRAESCOLARES',
			'descripcion_corta'=>'ACT. EXTRAESC.',
			'area_depende'=>'120000',
			'nivel'=>4,
			'tipo_area'=>'D',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'120500',
			'descripcion_area'=>'DEPARTAMENTO DE CENTRO DE INFORMACION',
			'descripcion_corta'=>'CTRO. DE INFOR.',
			'area_depende'=>'120000',
			'nivel'=>4,
			'tipo_area'=>'P',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'120600',
			'descripcion_area'=>'DEPARTAMENTO DE SERVICIOS ESCOLARES',
			'descripcion_corta'=>'SERV. ESCOLARES',
			'area_depende'=>'120000',
			'nivel'=>4,
			'tipo_area'=>'P',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'127000',
			'descripcion_area'=>'DEPARTAMENTO DE CALIDAD',
			'descripcion_corta'=>'CALIDAD',
			'area_depende'=>'120000',
			'nivel'=>4,
			'tipo_area'=>'P',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'130000',
			'descripcion_area'=>'SUBDIRECCIÓN DE SERVICIOS ADMINISTRATIVOS',
			'descripcion_corta'=>'SUB. DE SERV. ADMVOS.',
			'area_depende'=>'100000',
			'nivel'=>3,
			'tipo_area'=>'A',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'130100',
			'descripcion_area'=>'DEPARTAMENTO DE CENTRO DE COMPUTO',
			'descripcion_corta'=>'CTRO. DE COMPUTO',
			'area_depende'=>'130000',
			'nivel'=>4,
			'tipo_area'=>'A',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'130200',
			'descripcion_area'=>'DEPARTAMENTO DE RECURSOS MATERIALES Y SERVICIOS',
			'descripcion_corta'=>'REC. MAT. Y SERV.',
			'area_depende'=>'130000',
			'nivel'=>4,
			'tipo_area'=>'A',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'130300',
			'descripcion_area'=>'DEPARTAMENTO DE RECURSOS HUMANOS',
			'descripcion_corta'=>'REC. HUMANOS',
			'area_depende'=>'130000',
			'nivel'=>4,
			'tipo_area'=>'A',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'130400',
			'descripcion_area'=>'DEPARTAMENTO DE RECURSOS FINANCIEROS',
			'descripcion_corta'=>'REC. FINANCIEROS',
			'area_depende'=>'130000',
			'nivel'=>4,
			'tipo_area'=>'A',
			'correo_electronico'=>'',
			'activo'=>true
			],
			[
			'clave_area'=>'130600',
			'descripcion_area'=>'DEPARTAMENTO DE MANTENIMIENTO',
			'descripcion_corta'=>'MANTENIMIENTO',
			'area_depende'=>'130000',
			'nivel'=>4,
			'tipo_area'=>'A',
			'correo_electronico'=>'',
			'activo'=>true
			]
		]);

    }
}