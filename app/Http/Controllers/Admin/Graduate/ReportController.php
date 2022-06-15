<?php

namespace App\Http\Controllers\Admin\Graduate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Graduate;
use PDF;

class ReportController extends Controller
{
	public function index()
	{
		// ГРАНТ ОБУЧЕНИЕ //
		// AT-MX
		$grant_at_mx = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(МХ)'],
		])
			->count();
		$grant_at_mx_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(МХ)'],
			['magister', TRUE]
		])
			->count();
		$grant_at_mx_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(МХ)'],
			['work', '!=', NULL]
		])
			->count();
		$grant_at_mx_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(МХ)'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $grant_at_mx_work = $grant_at_mx_work + $grant_at_mx_direction;
		$grant_at_mx_no_work = $grant_at_mx - $grant_at_mx_magister - $grant_at_mx_work;
		$grant_at_mx_procent = (($grant_at_mx_work + $grant_at_mx_magister) * 100) / $grant_at_mx;

		// AT-АВ
		$grant_at_mv = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(АВ)'],
		])
			->count();
		$grant_at_mv_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(АВ)'],
			['magister', TRUE]
		])
			->count();
		$grant_at_mv_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(АВ)'],
			['work', '!=', NULL]
		])
			->count();
		$grant_at_mv_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(АВ)'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $grant_at_mv_work = $grant_at_mv_work + $grant_at_mv_direction;
		$grant_at_mv_no_work = $grant_at_mv - $grant_at_mv_magister - $grant_at_mv_work;
		$grant_at_mv_procent = (($grant_at_mv_work + $grant_at_mv_magister) * 100) / $grant_at_mv;
		// AT-ОНО
		$grant_at_ono = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(ОНО)'],
		])
			->count();
		$grant_at_ono_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(ОНО)'],
			['magister', TRUE]
		])
			->count();
		$grant_at_ono_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(ОНО)'],
			['work', '!=', NULL]
		])
			->count();
		$grant_at_ono_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(ОНО)'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $grant_at_ono_work = $grant_at_ono_work + $grant_at_ono_direction;
		$grant_at_ono_no_work = $grant_at_ono - $grant_at_ono_magister - $grant_at_ono_work;
		$grant_at_ono_procent = (($grant_at_ono_work + $grant_at_ono_magister) * 100) / $grant_at_ono;

		// AT-ОВД
		$grant_at_ovd = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-ОВД'],
		])
			->count();
		$grant_at_ovd_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-ОВД'],
			['magister', TRUE]
		])
			->count();
		$grant_at_ovd_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-ОВД'],
			['work', '!=', NULL]
		])
			->count();
		$grant_at_ovd_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-ОВД'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $grant_at_ovd_work = $grant_at_ovd_work + $grant_at_ovd_direction;
		$grant_at_ovd_no_work = $grant_at_ovd - $grant_at_ovd_magister - $grant_at_ovd_work;
		$grant_at_ovd_procent = (($grant_at_ovd_work + $grant_at_ovd_magister) * 100) / $grant_at_ovd;

		// AT-АБ
		$grant_at_ab = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-АБ'],
		])
			->count();
		$grant_at_ab_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-АБ'],
			['magister', TRUE]
		])
			->count();
		$grant_at_ab_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-АБ'],
			['work', '!=', NULL]
		])
			->count();
		$grant_at_ab_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-АБ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $grant_at_ab_work = $grant_at_ab_work + $grant_at_ab_direction;
		$grant_at_ab_no_work = $grant_at_ab - $grant_at_ab_magister - $grant_at_ab_work;
		$grant_at_ab_procent = (($grant_at_ab_work + $grant_at_ab_magister) * 100) / $grant_at_ab;

		// ГРАНТ AT //
		$grant_at = $grant_at_mx + $grant_at_mv + $grant_at_ono + $grant_at_ovd + $grant_at_ab;
		$grant_at_magister = $grant_at_mx_magister + $grant_at_mv_magister + $grant_at_ono_magister + $grant_at_ovd_magister + $grant_at_ab_magister;
		$grant_at_work = $grant_at_mx_work + $grant_at_mv_work + $grant_at_ono_work + $grant_at_ovd_work + $grant_at_ab_work;
		$grant_at_no_work = $grant_at_mx_no_work + $grant_at_mv_no_work + $grant_at_ono_no_work + $grant_at_ovd_no_work + $grant_at_ab_no_work;
		$grant_at_direction = $grant_at_mx_direction + $grant_at_mv_direction + $grant_at_ono_direction + $grant_at_ovd_direction + $grant_at_ab_direction;
		$grant_at_procent = (($grant_at_work + $grant_at_magister) * 100) / $grant_at;

		// ОП-ЛГ
		$grant_op_lg = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП-ЛГ'],
		])
			->count();
		$grant_op_lg_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП-ЛГ'],
			['magister', TRUE]
		])
			->count();
		$grant_op_lg_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП-ЛГ'],
			['work', '!=', NULL]
		])
			->count();
		$grant_op_lg_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП-ЛГ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $grant_op_lg_work = $grant_op_lg_work + $grant_op_lg_direction;
		$grant_op_lg_no_work = $grant_op_lg - $grant_op_lg_magister - $grant_op_lg_work;
		$grant_op_lg_procent = (($grant_op_lg_work + $grant_op_lg_magister) * 100) / $grant_op_lg;

		// ОП
		$grant_op = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП'],
		])
			->count();
		$grant_op_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП'],
			['magister', TRUE]
		])
			->count();
		$grant_op_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП'],
			['work', '!=', NULL]
		])
			->count();
		$grant_op_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();

		$grant_op_no_work = $grant_op - $grant_op_magister - $grant_op_work;
		$grant_op_procent = (($grant_op_work + $grant_op_magister) * 100) / $grant_op;

		// ОП ВСЕ //
		$grant_op_all = $grant_op + $grant_op_lg;
		$grant_op_all_magister = $grant_op_magister + $grant_op_lg_magister;
		$grant_op_all_work = $grant_op_work + $grant_op_lg_work;
		$grant_op_all_no_work = $grant_op_no_work + $grant_op_lg_no_work;
		$grant_op_all_procent = (($grant_op_all_work + $grant_op_all_magister) * 100) / $grant_op_all;

		// МНП-АТ
		$grant_mnp_at = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-АТ'],
		])
			->count();
		$grant_mnp_at_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-АТ'],
			['magister', TRUE]
		])
			->count();
		$grant_mnp_at_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-АТ'],
			['work', '!=', NULL]
		])
			->count();
		$grant_mnp_at_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-АТ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $grant_mnp_at_work = $grant_mnp_at_work + $grant_mnp_at_direction;
		$grant_mnp_at_no_work = $grant_mnp_at - $grant_mnp_at_magister - $grant_mnp_at_work;
		$grant_mnp_at_procent = (($grant_mnp_at_work + $grant_mnp_at_magister) * 100) / $grant_mnp_at;

		// МНП-ТУ
		$grant_mnp_tu = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-ТУ'],
		])
			->count();
		$grant_mnp_tu_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-ТУ'],
			['magister', TRUE]
		])
			->count();
		$grant_mnp_tu_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-ТУ'],
			['work', '!=', NULL]
		])
			->count();
		$grant_mnp_tu_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-ТУ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $grant_mnp_tu_work = $grant_mnp_tu_work + $grant_mnp_tu_direction;
		$grant_mnp_tu_no_work = $grant_mnp_tu - $grant_mnp_tu_magister - $grant_mnp_tu_work;
		$grant_mnp_tu_procent = (($grant_mnp_tu_work + $grant_mnp_tu_magister) * 100) / $grant_mnp_tu;

		// ДАТ
		$grant_dat = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ДОК-АТ'],
		])
			->count();
		$grant_dat_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ДОК-АТ'],
			['magister', TRUE]
		])
			->count();
		$grant_dat_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ДОК-АТ'],
			['work', '!=', NULL]
		])
			->count();
		$grant_dat_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ДОК-АТ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $grant_dat_work = $grant_dat_work + $grant_dat_direction;
		$grant_dat_no_work = $grant_dat - $grant_dat_magister - $grant_dat_work;
		$grant_dat_procent = (($grant_dat_work + $grant_dat_magister) * 100) / $grant_dat;

		// Грант ВСЕ 
		$grant_all = $grant_at + $grant_op_all + $grant_mnp_at + $grant_mnp_tu + $grant_dat;
		$grant_all_magister = $grant_at_magister + $grant_op_all_magister + $grant_mnp_at_magister + $grant_mnp_tu_magister + $grant_dat_magister;
		$grant_all_work = $grant_at_work + $grant_op_all_work + $grant_mnp_at_work + $grant_mnp_tu_work + $grant_dat_work;
		$grant_all_no_work = $grant_at_no_work + $grant_op_all_no_work + $grant_mnp_at_no_work + $grant_mnp_tu_no_work + $grant_dat_no_work;
		$grant_all_procent = (($grant_all_work + $grant_all_magister) * 100) / $grant_all;

		// ПЛАТНОЕ //
		// АТ-МХ
		$paid_at_mx = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(МХ)'],
		])
			->count();
		$paid_at_mx_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(МХ)'],
			['magister', TRUE]
		])
			->count();
		$paid_at_mx_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(МХ)'],
			['work', '!=', NULL]
		])
			->count();
		$paid_at_mx_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(МХ)'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_at_mx_work = $paid_at_mx_work + $paid_at_mx_direction;
		$paid_at_mx_no_work = $paid_at_mx - $paid_at_mx_magister - $paid_at_mx_work;
		$paid_at_mx_procent = (($paid_at_mx_work + $paid_at_mx_magister) * 100) / $paid_at_mx;

		// АТ-АВ
		$paid_at_av = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(АВ)'],
		])
			->count();
		$paid_at_av_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(АВ)'],
			['magister', TRUE]
		])
			->count();
		$paid_at_av_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(АВ)'],
			['work', '!=', NULL]
		])
			->count();
		$paid_at_av_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(АВ)'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_at_av_work = $paid_at_av_work + $paid_at_av_direction;
		$paid_at_av_no_work = $paid_at_av - $paid_at_av_magister - $paid_at_av_work;
		$paid_at_av_procent = (($paid_at_av_work + $paid_at_av_magister) * 100) / $paid_at_av;

		// АТ-ОНО
		$paid_at_ono = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(ОНО)'],
		])
			->count();
		$paid_at_ono_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(ОНО)'],
			['magister', TRUE]
		])
			->count();
		$paid_at_ono_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(ОНО)'],
			['work', '!=', NULL]
		])
			->count();
		$paid_at_ono_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(ОНО)'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_at_ono_work = $paid_at_ono_work + $paid_at_ono_direction;
		$paid_at_ono_no_work = $paid_at_ono - $paid_at_ono_magister - $paid_at_ono_work;
		$paid_at_ono_procent = (($paid_at_ono_work + $paid_at_ono_magister) * 100) / $paid_at_ono;

		// АТ-АБ
		$paid_at_ab = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-АБ'],
		])
			->count();
		$paid_at_ab_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-АБ'],
			['magister', TRUE]
		])
			->count();
		$paid_at_ab_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-АБ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_at_ab_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-АБ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_at_ab_work = $paid_at_ab_work + $paid_at_ab_direction;
		$paid_at_ab_no_work = $paid_at_ab - $paid_at_ab_magister - $paid_at_ab_work;
		$paid_at_ab_procent = (($paid_at_ab_work + $paid_at_ab_magister) * 100) / $paid_at_ab;

		// АТ-ОВД
		$paid_at_ovd = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-ОВД'],
		])
			->count();
		$paid_at_ovd_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-ОВД'],
			['magister', TRUE]
		])
			->count();
		$paid_at_ovd_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-ОВД'],
			['work', '!=', NULL]
		])
			->count();
		$paid_at_ovd_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-ОВД'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_at_ovd_work = $paid_at_ovd_work + $paid_at_ovd_direction;
		$paid_at_ovd_no_work = $paid_at_ovd - $paid_at_ovd_magister - $paid_at_ovd_work;
		$paid_at_ovd_procent = (($paid_at_ovd_work + $paid_at_ovd_magister) * 100) / $paid_at_ovd;

		// АТ ВСЕ //
		$paid_at = $paid_at_mx + $paid_at_av + $paid_at_ono + $paid_at_ab + $paid_at_ovd;
		$paid_at_magister = $paid_at_mx_magister + $paid_at_av_magister + $paid_at_ono_magister + $paid_at_ab_magister + $paid_at_ovd_magister;
		$paid_at_work = $paid_at_mx_work + $paid_at_av_work + $paid_at_ono_work + $paid_at_ab_work + $paid_at_ovd_work;
		$paid_at_no_work = $paid_at_mx_no_work + $paid_at_av_no_work + $paid_at_ono_no_work + $paid_at_ab_no_work + $paid_at_ovd_no_work;
		$paid_at_procent = (($paid_at_work + $paid_at_magister) * 100) / $paid_at;

		// ОП-ЛГ
		$paid_op_lg = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП-ЛГ'],
		])
			->count();
		$paid_op_lg_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП-ЛГ'],
			['magister', TRUE]
		])
			->count();
		$paid_op_lg_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП-ЛГ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_op_lg_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП-ЛГ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_op_lg_work = $paid_op_lg_work + $paid_op_lg_direction;
		$paid_op_lg_no_work = $paid_op_lg - $paid_op_lg_magister - $paid_op_lg_work;
		$paid_op_lg_procent = (($paid_op_lg_work + $paid_op_lg_magister) * 100) / $paid_op_lg;

		// ОП
		$paid_op = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП'],
		])
			->count();
		$paid_op_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП'],
			['magister', TRUE]
		])
			->count();
		$paid_op_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП'],
			['work', '!=', NULL]
		])
			->count();
		$paid_op_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_op_work = $paid_op_work + $paid_op_direction;
		$paid_op_no_work = $paid_op - $paid_op_magister - $paid_op_work;
		$paid_op_procent = (($paid_op_work + $paid_op_magister) * 100) / $paid_op;

		// ОП ВСЕ //
		$paid_op_all = $paid_op_lg + $paid_op;
		$paid_op_all_magister = $paid_op_lg_magister + $paid_op_magister;
		$paid_op_all_work = $paid_op_lg_work + $paid_op_work;
		$paid_op_all_no_work = $paid_op_lg_no_work + $paid_op_no_work;
		$paid_op_all_procent = (($paid_op_all_work + $paid_op_all_magister) * 100) / $paid_op_all;

		// Д-ЛЭ
		$paid_d_le = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ЛЭ'],
		])
			->count();
		$paid_d_le_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ЛЭ'],
			['magister', TRUE]
		])
			->count();
		$paid_d_le_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ЛЭ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_le_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ЛЭ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_d_le_work = $paid_d_le_work + $paid_d_le_direction;
		$paid_d_le_no_work = $paid_d_le - $paid_d_le_magister - $paid_d_le_work;
		$paid_d_le_procent = (($paid_d_le_work + $paid_d_le_magister) * 100) / $paid_d_le;

		// Д-МХ
		$paid_d_mx = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-МХ'],
		])
			->count();
		$paid_d_mx_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-МХ'],
			['magister', TRUE]
		])
			->count();
		$paid_d_mx_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-МХ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_mx_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-МХ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_d_mx_work = $paid_d_mx_work + $paid_d_mx_direction;
		$paid_d_mx_no_work = $paid_d_mx - $paid_d_mx_magister - $paid_d_mx_work;
		$paid_d_mx_procent = (($paid_d_mx_work + $paid_d_mx_magister) * 100) / $paid_d_mx;

		// Д-АВ
		$paid_d_av = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АВ'],
		])
			->count();
		$paid_d_av_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АВ'],
			['magister', TRUE]
		])
			->count();
		$paid_d_av_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АВ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_av_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АВ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_d_av_work = $paid_d_av_work + $paid_d_av_direction;
		$paid_d_av_no_work = $paid_d_av - $paid_d_av_magister - $paid_d_av_work;
		$paid_d_av_procent = (($paid_d_av_work + $paid_d_av_magister) * 100) / $paid_d_av;

		// Д-ОВД
		$paid_d_ovd = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОВД'],
		])
			->count();
		$paid_d_ovd_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОВД'],
			['magister', TRUE]
		])
			->count();
		$paid_d_ovd_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОВД'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_ovd_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОВД'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_d_ovd_work = $paid_d_ovd_work + $paid_d_ovd_direction;
		$paid_d_ovd_no_work = $paid_d_ovd - $paid_d_ovd_magister - $paid_d_ovd_work;
		$paid_d_ovd_procent = (($paid_d_ovd_work + $paid_d_ovd_magister) * 100) / $paid_d_ovd;

		// Д-АБ
		$paid_d_ab = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АБ'],
		])
			->count();
		$paid_d_ab_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АБ'],
			['magister', TRUE]
		])
			->count();
		$paid_d_ab_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АБ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_ab_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АБ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_d_ab_work = $paid_d_ab_work + $paid_d_ab_direction;
		$paid_d_ab_no_work = $paid_d_ab - $paid_d_ab_magister - $paid_d_ab_work;
		$paid_d_ab_procent = (($paid_d_ab_work + $paid_d_ab_magister) * 100) / $paid_d_ab;

		// Д-ОНО
		$paid_d_ono = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОНО'],
		])
			->count();
		$paid_d_ono_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОНО'],
			['magister', TRUE]
		])
			->count();
		$paid_d_ono_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОНО'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_ono_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОНО'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_d_ono_work = $paid_d_ono_work + $paid_d_ono_direction;
		$paid_d_ono_no_work = $paid_d_ono - $paid_d_ono_magister - $paid_d_ono_work;
		$paid_d_ono_procent = (($paid_d_ono_work + $paid_d_ono_magister) * 100) / $paid_d_ono;

		// Д-АТ ВСЕ //
		$paid_dat = $paid_d_le + $paid_d_mx + $paid_d_av + $paid_d_ovd + $paid_d_ab + $paid_d_ono;
		$paid_dat_magister = $paid_d_le_magister + $paid_d_mx_magister + $paid_d_av_magister + $paid_d_ovd_magister + $paid_d_ab_magister + $paid_d_ono_magister;
		$paid_dat_work = $paid_d_le_work + $paid_d_mx_work + $paid_d_av_work + $paid_d_ovd_work + $paid_d_ab_work + $paid_d_ono_work;
		$paid_dat_no_work = $paid_d_le_no_work + $paid_d_mx_no_work + $paid_d_av_no_work + $paid_d_ovd_no_work + $paid_d_ab_no_work + $paid_d_ono_no_work;
		$paid_dat_procent = (($paid_dat_work + $paid_dat_magister) * 100) / $paid_dat;

		// Д-ОП
		$paid_d_op = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП'],
		])
			->count();
		$paid_d_op_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП'],
			['magister', TRUE]
		])
			->count();
		$paid_d_op_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_op_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_d_op_work = $paid_d_op_work + $paid_d_op_direction;
		$paid_d_op_no_work = $paid_d_op - $paid_d_op_magister - $paid_d_op_work;
		$paid_d_op_procent = (($paid_d_op_work + $paid_d_op_magister) * 100) / $paid_d_op;

		// Д-ОП-ЛГ
		$paid_d_op_lg = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП-ЛГ'],
		])
			->count();
		$paid_d_op_lg_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП-ЛГ'],
			['magister', TRUE]
		])
			->count();
		$paid_d_op_lg_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП-ЛГ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_op_lg_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП-ЛГ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_d_op_lg_work = $paid_d_op_lg_work + $paid_d_op_lg_direction;
		$paid_d_op_lg_no_work = $paid_d_op_lg - $paid_d_op_lg_magister - $paid_d_op_lg_work;
		$paid_d_op_lg_procent = (($paid_d_op_lg_work + $paid_d_op_lg_magister) * 100) / $paid_d_op_lg;

		// Д-ОП ВСЕ //
		$paid_d_op_all = $paid_d_op + $paid_d_op_lg;
		$paid_d_op_all_magister = $paid_d_op_magister + $paid_d_op_lg_magister;
		$paid_d_op_all_work = $paid_d_op_work + $paid_d_op_lg_work;
		$paid_d_op_all_no_work = $paid_d_op_no_work + $paid_d_op_lg_no_work;
		$paid_d_op_all_procent = (($paid_d_op_all_work + $paid_d_op_all_magister) * 100) / $paid_d_op_all;

		// МП-АТ
		$paid_mp_at = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-АТ'],
		])
			->count();
		$paid_mp_at_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-АТ'],
			['magister', TRUE]
		])
			->count();
		$paid_mp_at_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-АТ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_mp_at_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-АТ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_mp_at_work = $paid_mp_at_work + $paid_mp_at_direction;
		$paid_mp_at_no_work = $paid_mp_at - $paid_mp_at_magister - $paid_mp_at_work;
		$paid_mp_at_procent = (($paid_mp_at_work + $paid_mp_at_magister) * 100) / $paid_mp_at;

		// МП-ТУ
		$paid_mp_tu = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-ТУ'],
		])
			->count();
		$paid_mp_tu_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-ТУ'],
			['magister', TRUE]
		])
			->count();
		$paid_mp_tu_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-ТУ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_mp_tu_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-ТУ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_mp_tu_work = $paid_mp_tu_work + $paid_mp_tu_direction;
		$paid_mp_tu_no_work = $paid_mp_tu - $paid_mp_tu_magister - $paid_mp_tu_work;
		$paid_mp_tu_procent = (($paid_mp_tu_work + $paid_mp_tu_magister) * 100) / $paid_mp_tu;

		// МНП-ТУ
		$paid_mnp_tu = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МНП-ТУ'],
		])
			->count();
		$paid_mnp_tu_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МНП-ТУ'],
			['magister', TRUE]
		])
			->count();
		$paid_mnp_tu_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МНП-ТУ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_mnp_tu_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МНП-ТУ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		// $paid_mnp_tu_work = $paid_mnp_tu_work + $paid_mnp_tu_direction;
		$paid_mnp_tu_no_work = $paid_mnp_tu - $paid_mnp_tu_magister - $paid_mnp_tu_work;
		$paid_mnp_tu_procent = (($paid_mnp_tu_work + $paid_mnp_tu_magister) * 100) / $paid_mnp_tu;

		// ПЛАТНОЕ ВСЕ 
		$paid_all = $paid_at + $paid_op_all + $paid_dat + $paid_d_op_all + $paid_mp_at + $paid_mp_tu + $paid_mnp_tu;
		$paid_all_magister = $paid_at_magister + $paid_op_all_magister + $paid_dat_magister + $paid_d_op_all_magister + $paid_mp_at_magister + $paid_mp_tu_magister + $paid_mnp_tu_magister;
		$paid_all_work = $paid_at_work + $paid_op_all_work + $paid_dat_work + $paid_d_op_all_work + $paid_mp_at_work + $paid_mp_tu_work + $paid_mnp_tu_work;
		$paid_all_no_work = $paid_at_no_work + $paid_op_all_no_work + $paid_dat_no_work + $paid_d_op_all_no_work + $paid_mp_at_no_work + $paid_mp_tu_no_work + $paid_mnp_tu_no_work;
		$paid_all_procent = (($paid_all_work + $paid_all_magister) * 100) / $paid_all;

		// ВСЕ 
		$all = $grant_all + $paid_all;
		$all_magister = $grant_all_magister + $paid_all_magister;
		$all_work = $grant_all_work + $paid_all_work;
		$all_no_work = $grant_all_no_work + $paid_all_no_work;
		$all_procent = (($all_work + $all_magister) * 100) / $all;

		// Data Array
		$dataArray = [
			'grant_at_mx' => $grant_at_mx,
			'grant_at_mx_magister' => $grant_at_mx_magister,
			'grant_at_mx_work' => $grant_at_mx_work,
			'grant_at_mx_no_work' => $grant_at_mx_no_work,
			'grant_at_mx_procent' => $grant_at_mx_procent,

			'grant_at_mv' => $grant_at_mv,
			'grant_at_mv_magister' => $grant_at_mv_magister,
			'grant_at_mv_work' => $grant_at_mv_work,
			'grant_at_mv_no_work' => $grant_at_mv_no_work,
			'grant_at_mv_procent' => $grant_at_mv_procent,

			'grant_at_ono' => $grant_at_ono,
			'grant_at_ono_magister' => $grant_at_ono_magister,
			'grant_at_ono_work' => $grant_at_ono_work,
			'grant_at_ono_no_work' => $grant_at_ono_no_work,
			'grant_at_ono_procent' => $grant_at_ono_procent,

			'grant_at_ovd' => $grant_at_ovd,
			'grant_at_ovd_magister' => $grant_at_ovd_magister,
			'grant_at_ovd_work' => $grant_at_ovd_work,
			'grant_at_ovd_no_work' => $grant_at_ovd_no_work,
			'grant_at_ovd_procent' => $grant_at_ovd_procent,

			'grant_at_ab' => $grant_at_ab,
			'grant_at_ab_magister' => $grant_at_ab_magister,
			'grant_at_ab_work' => $grant_at_ab_work,
			'grant_at_ab_no_work' => $grant_at_ab_no_work,
			'grant_at_ab_procent' => $grant_at_ab_procent,

			'grant_at' => $grant_at,
			'grant_at_magister' => $grant_at_magister,
			'grant_at_work' => $grant_at_work,
			'grant_at_no_work' => $grant_at_no_work,
			'grant_at_procent' => $grant_at_procent,

			'grant_op_lg' => $grant_op_lg,
			'grant_op_lg_magister' => $grant_op_lg_magister,
			'grant_op_lg_work' => $grant_op_lg_work,
			'grant_op_lg_no_work' => $grant_op_lg_no_work,
			'grant_op_lg_procent' => $grant_op_lg_procent,

			'grant_op' => $grant_op,
			'grant_op_magister' => $grant_op_magister,
			'grant_op_work' => $grant_op_work,
			'grant_op_no_work' => $grant_op_no_work,
			'grant_op_procent' => $grant_op_procent,

			'grant_op_all' => $grant_op_all,
			'grant_op_all_magister' => $grant_op_all_magister,
			'grant_op_all_work' => $grant_op_all_work,
			'grant_op_all_no_work' => $grant_op_all_no_work,
			'grant_op_all_procent' => $grant_op_all_procent,

			'grant_mnp_at' => $grant_mnp_at,
			'grant_mnp_at_magister' => $grant_mnp_at_magister,
			'grant_mnp_at_work' => $grant_mnp_at_work,
			'grant_mnp_at_no_work' => $grant_mnp_at_no_work,
			'grant_mnp_at_procent' => $grant_mnp_at_procent,

			'grant_mnp_tu' => $grant_mnp_tu,
			'grant_mnp_tu_magister' => $grant_mnp_tu_magister,
			'grant_mnp_tu_work' => $grant_mnp_tu_work,
			'grant_mnp_tu_no_work' => $grant_mnp_tu_no_work,
			'grant_mnp_tu_procent' => $grant_mnp_tu_procent,

			'grant_dat' => $grant_dat,
			'grant_dat_magister' => $grant_dat_magister,
			'grant_dat_work' => $grant_dat_work,
			'grant_dat_no_work' => $grant_dat_no_work,
			'grant_dat_procent' => $grant_dat_procent,

			'grant_all' => $grant_all,
			'grant_all_magister' => $grant_all_magister,
			'grant_all_work' => $grant_all_work,
			'grant_all_no_work' => $grant_all_no_work,
			'grant_all_procent' => $grant_all_procent,

			'paid_at_mx' => $paid_at_mx,
			'paid_at_mx_magister' => $paid_at_mx_magister,
			'paid_at_mx_work' => $paid_at_mx_work,
			'paid_at_mx_no_work' => $paid_at_mx_no_work,
			'paid_at_mx_procent' => $paid_at_mx_procent,

			'paid_at_av' => $paid_at_av,
			'paid_at_av_magister' => $paid_at_av_magister,
			'paid_at_av_work' => $paid_at_av_work,
			'paid_at_av_no_work' => $paid_at_av_no_work,
			'paid_at_av_procent' => $paid_at_av_procent,

			'paid_at_ono' => $paid_at_ono,
			'paid_at_ono_magister' => $paid_at_ono_magister,
			'paid_at_ono_work' => $paid_at_ono_work,
			'paid_at_ono_no_work' => $paid_at_ono_no_work,
			'paid_at_ono_procent' => $paid_at_ono_procent,

			'paid_at_ab' => $paid_at_ab,
			'paid_at_ab_magister' => $paid_at_ab_magister,
			'paid_at_ab_work' => $paid_at_ab_work,
			'paid_at_ab_no_work' => $paid_at_ab_no_work,
			'paid_at_ab_procent' => $paid_at_ab_procent,

			'paid_at_ovd' => $paid_at_ovd,
			'paid_at_ovd_magister' => $paid_at_ovd_magister,
			'paid_at_ovd_work' => $paid_at_ovd_work,
			'paid_at_ovd_no_work' => $paid_at_ovd_no_work,
			'paid_at_ovd_procent' => $paid_at_ovd_procent,

			'paid_at' => $paid_at,
			'paid_at_magister' => $paid_at_magister,
			'paid_at_work' => $paid_at_work,
			'paid_at_no_work' => $paid_at_no_work,
			'paid_at_procent' => $paid_at_procent,

			'paid_op_lg' => $paid_op_lg,
			'paid_op_lg_magister' => $paid_op_lg_magister,
			'paid_op_lg_work' => $paid_op_lg_work,
			'paid_op_lg_no_work' => $paid_op_lg_no_work,
			'paid_op_lg_procent' => $paid_op_lg_procent,

			'paid_op' => $paid_op,
			'paid_op_magister' => $paid_op_magister,
			'paid_op_work' => $paid_op_work,
			'paid_op_no_work' => $paid_op_no_work,
			'paid_op_procent' => $paid_op_procent,

			'paid_op_all' => $paid_op_all,
			'paid_op_all_magister' => $paid_op_all_magister,
			'paid_op_all_work' => $paid_op_all_work,
			'paid_op_all_no_work' => $paid_op_all_no_work,
			'paid_op_all_procent' => $paid_op_all_procent,

			'paid_d_le' => $paid_d_le,
			'paid_d_le_magister' => $paid_d_le_magister,
			'paid_d_le_work' => $paid_d_le_work,
			'paid_d_le_no_work' => $paid_d_le_no_work,
			'paid_d_le_procent' => $paid_d_le_procent,

			'paid_d_mx' => $paid_d_mx,
			'paid_d_mx_magister' => $paid_d_mx_magister,
			'paid_d_mx_work' => $paid_d_mx_work,
			'paid_d_mx_no_work' => $paid_d_mx_no_work,
			'paid_d_mx_procent' => $paid_d_mx_procent,

			'paid_d_av' => $paid_d_av,
			'paid_d_av_magister' => $paid_d_av_magister,
			'paid_d_av_work' => $paid_d_av_work,
			'paid_d_av_no_work' => $paid_d_av_no_work,
			'paid_d_av_procent' => $paid_d_av_procent,

			'paid_d_ovd' => $paid_d_ovd,
			'paid_d_ovd_magister' => $paid_d_ovd_magister,
			'paid_d_ovd_work' => $paid_d_ovd_work,
			'paid_d_ovd_no_work' => $paid_d_ovd_no_work,
			'paid_d_ovd_procent' => $paid_d_ovd_procent,

			'paid_d_ab' => $paid_d_ab,
			'paid_d_ab_magister' => $paid_d_ab_magister,
			'paid_d_ab_work' => $paid_d_ab_work,
			'paid_d_ab_no_work' => $paid_d_ab_no_work,
			'paid_d_ab_procent' => $paid_d_ab_procent,

			'paid_d_ono' => $paid_d_ono,
			'paid_d_ono_magister' => $paid_d_ono_magister,
			'paid_d_ono_work' => $paid_d_ono_work,
			'paid_d_ono_no_work' => $paid_d_ono_no_work,
			'paid_d_ono_procent' => $paid_d_ono_procent,

			'paid_dat' => $paid_dat,
			'paid_dat_magister' => $paid_dat_magister,
			'paid_dat_work' => $paid_dat_work,
			'paid_dat_no_work' => $paid_dat_no_work,
			'paid_dat_procent' => $paid_dat_procent,

			'paid_d_op' => $paid_d_op,
			'paid_d_op_magister' => $paid_d_op_magister,
			'paid_d_op_work' => $paid_d_op_work,
			'paid_d_op_no_work' => $paid_d_op_no_work,
			'paid_d_op_procent' => $paid_d_op_procent,

			'paid_d_op_lg' => $paid_d_op_lg,
			'paid_d_op_lg_magister' => $paid_d_op_lg_magister,
			'paid_d_op_lg_work' => $paid_d_op_lg_work,
			'paid_d_op_lg_no_work' => $paid_d_op_lg_no_work,
			'paid_d_op_lg_procent' => $paid_d_op_lg_procent,

			'paid_d_op_all' => $paid_d_op_all,
			'paid_d_op_all_magister' => $paid_d_op_all_magister,
			'paid_d_op_all_work' => $paid_d_op_all_work,
			'paid_d_op_all_no_work' => $paid_d_op_all_no_work,
			'paid_d_op_all_procent' => $paid_d_op_all_procent,

			'paid_mp_at' => $paid_mp_at,
			'paid_mp_at_magister' => $paid_mp_at_magister,
			'paid_mp_at_work' => $paid_mp_at_work,
			'paid_mp_at_no_work' => $paid_mp_at_no_work,
			'paid_mp_at_procent' => $paid_mp_at_procent,

			'paid_mp_tu' => $paid_mp_tu,
			'paid_mp_tu_magister' => $paid_mp_tu_magister,
			'paid_mp_tu_work' => $paid_mp_tu_work,
			'paid_mp_tu_no_work' => $paid_mp_tu_no_work,
			'paid_mp_tu_procent' => $paid_mp_tu_procent,

			'paid_mnp_tu' => $paid_mnp_tu,
			'paid_mnp_tu_magister' => $paid_mnp_tu_magister,
			'paid_mnp_tu_work' => $paid_mnp_tu_work,
			'paid_mnp_tu_no_work' => $paid_mnp_tu_no_work,
			'paid_mnp_tu_procent' => $paid_mnp_tu_procent,

			'paid_all' => $paid_all,
			'paid_all_magister' => $paid_all_magister,
			'paid_all_work' => $paid_all_work,
			'paid_all_no_work' => $paid_all_no_work,
			'paid_all_procent' => $paid_all_procent,

			'all' => $all,
			'all_magister' => $all_magister,
			'all_work' => $all_work,
			'all_no_work' => $all_no_work,
			'all_procent' => $all_procent,
		];
		return view('admin.graduate.report.index', $dataArray);
	}
	public function pdf()
	{
		// ГРАНТ ОБУЧЕНИЕ //
		// AT-MX
		$grant_at_mx = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(МХ)'],
		])
			->count();
		$grant_at_mx_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(МХ)'],
			['magister', TRUE]
		])
			->count();
		$grant_at_mx_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(МХ)'],
			['work', '!=', NULL]
		])
			->count();
		$grant_at_mx_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(МХ)'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$grant_at_mx_no_work = $grant_at_mx - $grant_at_mx_magister - $grant_at_mx_work;
		$grant_at_mx_procent = (($grant_at_mx_work + $grant_at_mx_magister) * 100) / $grant_at_mx;

		// AT-АВ
		$grant_at_mv = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(АВ)'],
		])
			->count();
		$grant_at_mv_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(АВ)'],
			['magister', TRUE]
		])
			->count();
		$grant_at_mv_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(АВ)'],
			['work', '!=', NULL]
		])
			->count();
		$grant_at_mv_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(АВ)'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$grant_at_mv_no_work = $grant_at_mv - $grant_at_mv_magister - $grant_at_mv_work;
		$grant_at_mv_procent = (($grant_at_mv_work + $grant_at_mv_magister) * 100) / $grant_at_mv;
		// AT-ОНО
		$grant_at_ono = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(ОНО)'],
		])
			->count();
		$grant_at_ono_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(ОНО)'],
			['magister', TRUE]
		])
			->count();
		$grant_at_ono_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(ОНО)'],
			['work', '!=', NULL]
		])
			->count();
		$grant_at_ono_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-(ОНО)'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$grant_at_ono_no_work = $grant_at_ono - $grant_at_ono_magister - $grant_at_ono_work;
		$grant_at_ono_procent = (($grant_at_ono_work + $grant_at_ono_magister) * 100) / $grant_at_ono;

		// AT-ОВД
		$grant_at_ovd = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-ОВД'],
		])
			->count();
		$grant_at_ovd_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-ОВД'],
			['magister', TRUE]
		])
			->count();
		$grant_at_ovd_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-ОВД'],
			['work', '!=', NULL]
		])
			->count();
		$grant_at_ovd_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-ОВД'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$grant_at_ovd_no_work = $grant_at_ovd - $grant_at_ovd_magister - $grant_at_ovd_work;
		$grant_at_ovd_procent = (($grant_at_ovd_work + $grant_at_ovd_magister) * 100) / $grant_at_ovd;

		// AT-АБ
		$grant_at_ab = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-АБ'],
		])
			->count();
		$grant_at_ab_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-АБ'],
			['magister', TRUE]
		])
			->count();
		$grant_at_ab_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-АБ'],
			['work', '!=', NULL]
		])
			->count();
		$grant_at_ab_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'АТ-АБ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$grant_at_ab_no_work = $grant_at_ab - $grant_at_ab_magister - $grant_at_ab_work;
		$grant_at_ab_procent = (($grant_at_ab_work + $grant_at_ab_magister) * 100) / $grant_at_ab;

		// ГРАНТ AT //
		$grant_at = $grant_at_mx + $grant_at_mv + $grant_at_ono + $grant_at_ovd + $grant_at_ab;
		$grant_at_magister = $grant_at_mx_magister + $grant_at_mv_magister + $grant_at_ono_magister + $grant_at_ovd_magister + $grant_at_ab_magister;
		$grant_at_work = $grant_at_mx_work + $grant_at_mv_work + $grant_at_ono_work + $grant_at_ovd_work + $grant_at_ab_work;
		$grant_at_no_work = $grant_at_mx_no_work + $grant_at_mv_no_work + $grant_at_ono_no_work + $grant_at_ovd_no_work + $grant_at_ab_no_work;
		$grant_at_direction = $grant_at_mx_direction + $grant_at_mv_direction + $grant_at_ono_direction + $grant_at_ovd_direction + $grant_at_ab_direction;
		$grant_at_procent = (($grant_at_work + $grant_at_magister) * 100) / $grant_at;

		// ОП-ЛГ
		$grant_op_lg = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП-ЛГ'],
		])
			->count();
		$grant_op_lg_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП-ЛГ'],
			['magister', TRUE]
		])
			->count();
		$grant_op_lg_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП-ЛГ'],
			['work', '!=', NULL]
		])
			->count();
		$grant_op_lg_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП-ЛГ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$grant_op_lg_no_work = $grant_op_lg - $grant_op_lg_magister - $grant_op_lg_work;
		$grant_op_lg_procent = (($grant_op_lg_work + $grant_op_lg_magister) * 100) / $grant_op_lg;

		// ОП
		$grant_op17 = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП'],
		])
			->count();
		$grant_op17_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП'],
			['magister', TRUE]
		])
			->count();
		$grant_op17_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП'],
			['work', '!=', NULL]
		])
			->count();
		$grant_op17_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ОП'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$grant_op18 = Graduate::where([
			['form_study', 'грант'],
			['groupe', 'УС-ОП -18'],
		])
			->count();
		$grant_op18_magister = Graduate::where([
			['form_study', 'грант'],
			['groupe', 'УС-ОП -18'],
			['magister', TRUE]
		])
			->count();
		$grant_op18_work = Graduate::where([
			['form_study', 'грант'],
			['groupe', 'УС-ОП -18'],
			['work', '!=', NULL]
		])
			->count();
		$grant_op18_direction = Graduate::where([
			['form_study', 'грант'],
			['groupe', 'УС-ОП -18'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();

		$grant_op = $grant_op17 + $grant_op18;
		$grant_op_magister = $grant_op17_magister + $grant_op18_magister;
		$grant_op_work = $grant_op17_work + $grant_op18_work;
		$grant_op_no_work = $grant_op - $grant_op_magister - $grant_op_work;
		$grant_op_procent = (($grant_op_work + $grant_op_magister) * 100) / $grant_op;

		// ОП ВСЕ //
		$grant_op_all = $grant_op + $grant_op_lg;
		$grant_op_all_magister = $grant_op_magister + $grant_op_lg_magister;
		$grant_op_all_work = $grant_op_work + $grant_op_lg_work;
		$grant_op_all_no_work = $grant_op_no_work + $grant_op_lg_no_work;
		$grant_op_all_procent = (($grant_op_all_work + $grant_op_all_magister) * 100) / $grant_op_all;

		// МНП-АТ
		$grant_mnp_at = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-АТ'],
		])
			->count();
		$grant_mnp_at_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-АТ'],
			['magister', TRUE]
		])
			->count();
		$grant_mnp_at_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-АТ'],
			['work', '!=', NULL]
		])
			->count();
		$grant_mnp_at_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-АТ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$grant_mnp_at_no_work = $grant_mnp_at - $grant_mnp_at_magister - $grant_mnp_at_work;
		$grant_mnp_at_procent = (($grant_mnp_at_work + $grant_mnp_at_magister) * 100) / $grant_mnp_at;

		// МНП-ТУ
		$grant_mnp_tu = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-ТУ'],
		])
			->count();
		$grant_mnp_tu_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-ТУ'],
			['magister', TRUE]
		])
			->count();
		$grant_mnp_tu_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-ТУ'],
			['work', '!=', NULL]
		])
			->count();
		$grant_mnp_tu_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'МНП-ТУ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$grant_mnp_tu_no_work = $grant_mnp_tu - $grant_mnp_tu_magister - $grant_mnp_tu_work;
		$grant_mnp_tu_procent = (($grant_mnp_tu_work + $grant_mnp_tu_magister) * 100) / $grant_mnp_tu;

		// ДАТ
		$grant_dat = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ДОК-АТ'],
		])
			->count();
		$grant_dat_magister = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ДОК-АТ'],
			['magister', TRUE]
		])
			->count();
		$grant_dat_work = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ДОК-АТ'],
			['work', '!=', NULL]
		])
			->count();
		$grant_dat_direction = Graduate::where([
			['form_study', 'грант'],
			['unification', 'ДОК-АТ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$grant_dat_no_work = $grant_dat - $grant_dat_magister - $grant_dat_work;
		$grant_dat_procent = (($grant_dat_work + $grant_dat_magister) * 100) / $grant_dat;

		// Грант ВСЕ 
		$grant_all = $grant_at + $grant_op_all + $grant_mnp_at + $grant_mnp_tu + $grant_dat;
		$grant_all_magister = $grant_at_magister + $grant_op_all_magister + $grant_mnp_at_magister + $grant_mnp_tu_magister + $grant_dat_magister;
		$grant_all_work = $grant_at_work + $grant_op_all_work + $grant_mnp_at_work + $grant_mnp_tu_work + $grant_dat_work;
		$grant_all_no_work = $grant_at_no_work + $grant_op_all_no_work + $grant_mnp_at_no_work + $grant_mnp_tu_no_work + $grant_dat_no_work;
		$grant_all_procent = (($grant_all_work + $grant_all_magister) * 100) / $grant_all;

		// ПЛАТНОЕ //
		// АТ-МХ
		$paid_at_mx = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(МХ)'],
		])
			->count();
		$paid_at_mx_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(МХ)'],
			['magister', TRUE]
		])
			->count();
		$paid_at_mx_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(МХ)'],
			['work', '!=', NULL]
		])
			->count();
		$paid_at_mx_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(МХ)'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_at_mx_work = $paid_at_mx_work + $paid_at_mx_direction;
		$paid_at_mx_no_work = $paid_at_mx - $paid_at_mx_magister - $paid_at_mx_work;
		$paid_at_mx_procent = (($paid_at_mx_work + $paid_at_mx_magister) * 100) / $paid_at_mx;

		// АТ-АВ
		$paid_at_av = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(АВ)'],
		])
			->count();
		$paid_at_av_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(АВ)'],
			['magister', TRUE]
		])
			->count();
		$paid_at_av_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(АВ)'],
			['work', '!=', NULL]
		])
			->count();
		$paid_at_av_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(АВ)'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_at_av_work = $paid_at_av_work + $paid_at_av_direction;
		$paid_at_av_no_work = $paid_at_av - $paid_at_av_magister - $paid_at_av_work;
		$paid_at_av_procent = (($paid_at_av_work + $paid_at_av_magister) * 100) / $paid_at_av;

		// АТ-ОНО
		$paid_at_ono = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(ОНО)'],
		])
			->count();
		$paid_at_ono_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(ОНО)'],
			['magister', TRUE]
		])
			->count();
		$paid_at_ono_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(ОНО)'],
			['work', '!=', NULL]
		])
			->count();
		$paid_at_ono_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-(ОНО)'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_at_ono_work = $paid_at_ono_work + $paid_at_ono_direction;
		$paid_at_ono_no_work = $paid_at_ono - $paid_at_ono_magister - $paid_at_ono_work;
		$paid_at_ono_procent = (($paid_at_ono_work + $paid_at_ono_magister) * 100) / $paid_at_ono;

		// АТ-АБ
		$paid_at_ab = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-АБ'],
		])
			->count();
		$paid_at_ab_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-АБ'],
			['magister', TRUE]
		])
			->count();
		$paid_at_ab_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-АБ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_at_ab_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-АБ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_at_ab_work = $paid_at_ab_work + $paid_at_ab_direction;
		$paid_at_ab_no_work = $paid_at_ab - $paid_at_ab_magister - $paid_at_ab_work;
		$paid_at_ab_procent = (($paid_at_ab_work + $paid_at_ab_magister) * 100) / $paid_at_ab;

		// АТ-ОВД
		$paid_at_ovd = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-ОВД'],
		])
			->count();
		$paid_at_ovd_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-ОВД'],
			['magister', TRUE]
		])
			->count();
		$paid_at_ovd_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-ОВД'],
			['work', '!=', NULL]
		])
			->count();
		$paid_at_ovd_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'АТ-ОВД'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_at_ovd_work = $paid_at_ovd_work + $paid_at_ovd_direction;
		$paid_at_ovd_no_work = $paid_at_ovd - $paid_at_ovd_magister - $paid_at_ovd_work;
		$paid_at_ovd_procent = (($paid_at_ovd_work + $paid_at_ovd_magister) * 100) / $paid_at_ovd;

		// АТ ВСЕ //
		$paid_at = $paid_at_mx + $paid_at_av + $paid_at_ono + $paid_at_ab + $paid_at_ovd;
		$paid_at_magister = $paid_at_mx_magister + $paid_at_av_magister + $paid_at_ono_magister + $paid_at_ab_magister + $paid_at_ovd_magister;
		$paid_at_work = $paid_at_mx_work + $paid_at_av_work + $paid_at_ono_work + $paid_at_ab_work + $paid_at_ovd_work;
		$paid_at_no_work = $paid_at_mx_no_work + $paid_at_av_no_work + $paid_at_ono_no_work + $paid_at_ab_no_work + $paid_at_ovd_no_work;
		$paid_at_procent = (($paid_at_work + $paid_at_magister) * 100) / $paid_at;

		// ОП-ЛГ
		$paid_op_lg = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП-ЛГ'],
		])
			->count();
		$paid_op_lg_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП-ЛГ'],
			['magister', TRUE]
		])
			->count();
		$paid_op_lg_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП-ЛГ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_op_lg_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП-ЛГ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_op_lg_work = $paid_op_lg_work + $paid_op_lg_direction;
		$paid_op_lg_no_work = $paid_op_lg - $paid_op_lg_magister - $paid_op_lg_work;
		$paid_op_lg_procent = (($paid_op_lg_work + $paid_op_lg_magister) * 100) / $paid_op_lg;

		// ОП
		$paid_op = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП'],
		])
			->count();
		$paid_op_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП'],
			['magister', TRUE]
		])
			->count();
		$paid_op_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП'],
			['work', '!=', NULL]
		])
			->count();
		$paid_op_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'ОП'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_op_work = $paid_op_work + $paid_op_direction;
		$paid_op_no_work = $paid_op - $paid_op_magister - $paid_op_work;
		$paid_op_procent = (($paid_op_work + $paid_op_magister) * 100) / $paid_op;

		// ОП ВСЕ //
		$paid_op_all = $paid_op_lg + $paid_op;
		$paid_op_all_magister = $paid_op_lg_magister + $paid_op_magister;
		$paid_op_all_work = $paid_op_lg_work + $paid_op_work;
		$paid_op_all_no_work = $paid_op_lg_no_work + $paid_op_no_work;
		$paid_op_all_procent = (($paid_op_all_work + $paid_op_all_magister) * 100) / $paid_op_all;

		// Д-ЛЭ
		$paid_d_le = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ЛЭ'],
		])
			->count();
		$paid_d_le_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ЛЭ'],
			['magister', TRUE]
		])
			->count();
		$paid_d_le_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ЛЭ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_le_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ЛЭ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_d_le_work = $paid_d_le_work + $paid_d_le_direction;
		$paid_d_le_no_work = $paid_d_le - $paid_d_le_magister - $paid_d_le_work;
		$paid_d_le_procent = (($paid_d_le_work + $paid_d_le_magister) * 100) / $paid_d_le;

		// Д-МХ
		$paid_d_mx = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-МХ'],
		])
			->count();
		$paid_d_mx_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-МХ'],
			['magister', TRUE]
		])
			->count();
		$paid_d_mx_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-МХ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_mx_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-МХ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_d_mx_work = $paid_d_mx_work + $paid_d_mx_direction;
		$paid_d_mx_no_work = $paid_d_mx - $paid_d_mx_magister - $paid_d_mx_work;
		$paid_d_mx_procent = (($paid_d_mx_work + $paid_d_mx_magister) * 100) / $paid_d_mx;

		// Д-АВ
		$paid_d_av = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АВ'],
		])
			->count();
		$paid_d_av_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АВ'],
			['magister', TRUE]
		])
			->count();
		$paid_d_av_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АВ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_av_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АВ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_d_av_work = $paid_d_av_work + $paid_d_av_direction;
		$paid_d_av_no_work = $paid_d_av - $paid_d_av_magister - $paid_d_av_work;
		$paid_d_av_procent = (($paid_d_av_work + $paid_d_av_magister) * 100) / $paid_d_av;

		// Д-ОВД
		$paid_d_ovd = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОВД'],
		])
			->count();
		$paid_d_ovd_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОВД'],
			['magister', TRUE]
		])
			->count();
		$paid_d_ovd_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОВД'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_ovd_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОВД'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_d_ovd_work = $paid_d_ovd_work + $paid_d_ovd_direction;
		$paid_d_ovd_no_work = $paid_d_ovd - $paid_d_ovd_magister - $paid_d_ovd_work;
		$paid_d_ovd_procent = (($paid_d_ovd_work + $paid_d_ovd_magister) * 100) / $paid_d_ovd;

		// Д-АБ
		$paid_d_ab = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АБ'],
		])
			->count();
		$paid_d_ab_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АБ'],
			['magister', TRUE]
		])
			->count();
		$paid_d_ab_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АБ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_ab_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-АБ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_d_ab_work = $paid_d_ab_work + $paid_d_ab_direction;
		$paid_d_ab_no_work = $paid_d_ab - $paid_d_ab_magister - $paid_d_ab_work;
		$paid_d_ab_procent = (($paid_d_ab_work + $paid_d_ab_magister) * 100) / $paid_d_ab;

		// Д-ОНО
		$paid_d_ono = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОНО'],
		])
			->count();
		$paid_d_ono_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОНО'],
			['magister', TRUE]
		])
			->count();
		$paid_d_ono_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОНО'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_ono_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОНО'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_d_ono_work = $paid_d_ono_work + $paid_d_ono_direction;
		$paid_d_ono_no_work = $paid_d_ono - $paid_d_ono_magister - $paid_d_ono_work;
		$paid_d_ono_procent = (($paid_d_ono_work + $paid_d_ono_magister) * 100) / $paid_d_ono;

		// Д-АТ ВСЕ //
		$paid_dat = $paid_d_le + $paid_d_mx + $paid_d_av + $paid_d_ovd + $paid_d_ab + $paid_d_ono;
		$paid_dat_magister = $paid_d_le_magister + $paid_d_mx_magister + $paid_d_av_magister + $paid_d_ovd_magister + $paid_d_ab_magister + $paid_d_ono_magister;
		$paid_dat_work = $paid_d_le_work + $paid_d_mx_work + $paid_d_av_work + $paid_d_ovd_work + $paid_d_ab_work + $paid_d_ono_work;
		$paid_dat_no_work = $paid_d_le_no_work + $paid_d_mx_no_work + $paid_d_av_no_work + $paid_d_ovd_no_work + $paid_d_ab_no_work + $paid_d_ono_no_work;
		$paid_dat_procent = (($paid_dat_work + $paid_dat_magister) * 100) / $paid_dat;

		// Д-ОП
		$paid_d_op = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП'],
		])
			->count();
		$paid_d_op_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП'],
			['magister', TRUE]
		])
			->count();
		$paid_d_op_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_op_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_d_op_work = $paid_d_op_work + $paid_d_op_direction;
		$paid_d_op_no_work = $paid_d_op - $paid_d_op_magister - $paid_d_op_work;
		$paid_d_op_procent = (($paid_d_op_work + $paid_d_op_magister) * 100) / $paid_d_op;

		// Д-ОП-ЛГ
		$paid_d_op_lg = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП-ЛГ'],
		])
			->count();
		$paid_d_op_lg_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП-ЛГ'],
			['magister', TRUE]
		])
			->count();
		$paid_d_op_lg_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП-ЛГ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_d_op_lg_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'Д-ОП-ЛГ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_d_op_lg_work = $paid_d_op_lg_work + $paid_d_op_lg_direction;
		$paid_d_op_lg_no_work = $paid_d_op_lg - $paid_d_op_lg_magister - $paid_d_op_lg_work;
		$paid_d_op_lg_procent = (($paid_d_op_lg_work + $paid_d_op_lg_magister) * 100) / $paid_d_op_lg;

		// Д-ОП ВСЕ //
		$paid_d_op_all = $paid_d_op + $paid_d_op_lg;
		$paid_d_op_all_magister = $paid_d_op_magister + $paid_d_op_lg_magister;
		$paid_d_op_all_work = $paid_d_op_work + $paid_d_op_lg_work;
		$paid_d_op_all_no_work = $paid_d_op_no_work + $paid_d_op_lg_no_work;
		$paid_d_op_all_procent = (($paid_d_op_all_work + $paid_d_op_all_magister) * 100) / $paid_d_op_all;

		// МП-АТ
		$paid_mp_at = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-АТ'],
		])
			->count();
		$paid_mp_at_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-АТ'],
			['magister', TRUE]
		])
			->count();
		$paid_mp_at_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-АТ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_mp_at_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-АТ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_mp_at_work = $paid_mp_at_work + $paid_mp_at_direction;
		$paid_mp_at_no_work = $paid_mp_at - $paid_mp_at_magister - $paid_mp_at_work;
		$paid_mp_at_procent = (($paid_mp_at_work + $paid_mp_at_magister) * 100) / $paid_mp_at;

		// МП-ТУ
		$paid_mp_tu = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-ТУ'],
		])
			->count();
		$paid_mp_tu_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-ТУ'],
			['magister', TRUE]
		])
			->count();
		$paid_mp_tu_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-ТУ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_mp_tu_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МП-ТУ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_mp_tu_work = $paid_mp_tu_work + $paid_mp_tu_direction;
		$paid_mp_tu_no_work = $paid_mp_tu - $paid_mp_tu_magister - $paid_mp_tu_work;
		$paid_mp_tu_procent = (($paid_mp_tu_work + $paid_mp_tu_magister) * 100) / $paid_mp_tu;

		// МНП-ТУ
		$paid_mnp_tu = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МНП-ТУ'],
		])
			->count();
		$paid_mnp_tu_magister = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МНП-ТУ'],
			['magister', TRUE]
		])
			->count();
		$paid_mnp_tu_work = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МНП-ТУ'],
			['work', '!=', NULL]
		])
			->count();
		$paid_mnp_tu_direction = Graduate::where([
			['form_study', 'платное'],
			['unification', 'МНП-ТУ'],
			['direction', TRUE],
			['magister', FALSE],
			['work', NULL]
		])
			->count();
		$paid_mnp_tu_work = $paid_mnp_tu_work + $paid_mnp_tu_direction;
		$paid_mnp_tu_no_work = $paid_mnp_tu - $paid_mnp_tu_magister - $paid_mnp_tu_work;
		$paid_mnp_tu_procent = (($paid_mnp_tu_work + $paid_mnp_tu_magister) * 100) / $paid_mnp_tu;

		// ПЛАТНОЕ ВСЕ 
		$paid_all = $paid_at + $paid_op_all + $paid_dat + $paid_d_op_all + $paid_mp_at + $paid_mp_tu + $paid_mnp_tu;
		$paid_all_magister = $paid_at_magister + $paid_op_all_magister + $paid_dat_magister + $paid_d_op_all_magister + $paid_mp_at_magister + $paid_mp_tu_magister + $paid_mnp_tu_magister;
		$paid_all_work = $paid_at_work + $paid_op_all_work + $paid_dat_work + $paid_d_op_all_work + $paid_mp_at_work + $paid_mp_tu_work + $paid_mnp_tu_work;
		$paid_all_no_work = $paid_at_no_work + $paid_op_all_no_work + $paid_dat_no_work + $paid_d_op_all_no_work + $paid_mp_at_no_work + $paid_mp_tu_no_work + $paid_mnp_tu_no_work;
		$paid_all_procent = (($paid_all_work + $paid_all_magister) * 100) / $paid_all;

		// ВСЕ 
		$all = $grant_all + $paid_all;
		$all_magister = $grant_all_magister + $paid_all_magister;
		$all_work = $grant_all_work + $paid_all_work;
		$all_no_work = $grant_all_no_work + $paid_all_no_work;
		$all_procent = (($all_work + $all_magister) * 100) / $all;

		$today = now('Asia/Almaty');
		// Data Array
		$dataArray = [
			'today' => $today,
			'grant_at_mx' => $grant_at_mx,
			'grant_at_mx_magister' => $grant_at_mx_magister,
			'grant_at_mx_work' => $grant_at_mx_work,
			'grant_at_mx_no_work' => $grant_at_mx_no_work,
			'grant_at_mx_procent' => $grant_at_mx_procent,

			'grant_at_mv' => $grant_at_mv,
			'grant_at_mv_magister' => $grant_at_mv_magister,
			'grant_at_mv_work' => $grant_at_mv_work,
			'grant_at_mv_no_work' => $grant_at_mv_no_work,
			'grant_at_mv_procent' => $grant_at_mv_procent,

			'grant_at_ono' => $grant_at_ono,
			'grant_at_ono_magister' => $grant_at_ono_magister,
			'grant_at_ono_work' => $grant_at_ono_work,
			'grant_at_ono_no_work' => $grant_at_ono_no_work,
			'grant_at_ono_procent' => $grant_at_ono_procent,

			'grant_at_ovd' => $grant_at_ovd,
			'grant_at_ovd_magister' => $grant_at_ovd_magister,
			'grant_at_ovd_work' => $grant_at_ovd_work,
			'grant_at_ovd_no_work' => $grant_at_ovd_no_work,
			'grant_at_ovd_procent' => $grant_at_ovd_procent,

			'grant_at_ab' => $grant_at_ab,
			'grant_at_ab_magister' => $grant_at_ab_magister,
			'grant_at_ab_work' => $grant_at_ab_work,
			'grant_at_ab_no_work' => $grant_at_ab_no_work,
			'grant_at_ab_procent' => $grant_at_ab_procent,

			'grant_at' => $grant_at,
			'grant_at_magister' => $grant_at_magister,
			'grant_at_work' => $grant_at_work,
			'grant_at_no_work' => $grant_at_no_work,
			'grant_at_procent' => $grant_at_procent,

			'grant_op_lg' => $grant_op_lg,
			'grant_op_lg_magister' => $grant_op_lg_magister,
			'grant_op_lg_work' => $grant_op_lg_work,
			'grant_op_lg_no_work' => $grant_op_lg_no_work,
			'grant_op_lg_procent' => $grant_op_lg_procent,

			'grant_op' => $grant_op,
			'grant_op_magister' => $grant_op_magister,
			'grant_op_work' => $grant_op_work,
			'grant_op_no_work' => $grant_op_no_work,
			'grant_op_procent' => $grant_op_procent,

			'grant_op_all' => $grant_op_all,
			'grant_op_all_magister' => $grant_op_all_magister,
			'grant_op_all_work' => $grant_op_all_work,
			'grant_op_all_no_work' => $grant_op_all_no_work,
			'grant_op_all_procent' => $grant_op_all_procent,

			'grant_mnp_at' => $grant_mnp_at,
			'grant_mnp_at_magister' => $grant_mnp_at_magister,
			'grant_mnp_at_work' => $grant_mnp_at_work,
			'grant_mnp_at_no_work' => $grant_mnp_at_no_work,
			'grant_mnp_at_procent' => $grant_mnp_at_procent,

			'grant_mnp_tu' => $grant_mnp_tu,
			'grant_mnp_tu_magister' => $grant_mnp_tu_magister,
			'grant_mnp_tu_work' => $grant_mnp_tu_work,
			'grant_mnp_tu_no_work' => $grant_mnp_tu_no_work,
			'grant_mnp_tu_procent' => $grant_mnp_tu_procent,

			'grant_dat' => $grant_dat,
			'grant_dat_magister' => $grant_dat_magister,
			'grant_dat_work' => $grant_dat_work,
			'grant_dat_no_work' => $grant_dat_no_work,
			'grant_dat_procent' => $grant_dat_procent,

			'grant_all' => $grant_all,
			'grant_all_magister' => $grant_all_magister,
			'grant_all_work' => $grant_all_work,
			'grant_all_no_work' => $grant_all_no_work,
			'grant_all_procent' => $grant_all_procent,

			'paid_at_mx' => $paid_at_mx,
			'paid_at_mx_magister' => $paid_at_mx_magister,
			'paid_at_mx_work' => $paid_at_mx_work,
			'paid_at_mx_no_work' => $paid_at_mx_no_work,
			'paid_at_mx_procent' => $paid_at_mx_procent,

			'paid_at_av' => $paid_at_av,
			'paid_at_av_magister' => $paid_at_av_magister,
			'paid_at_av_work' => $paid_at_av_work,
			'paid_at_av_no_work' => $paid_at_av_no_work,
			'paid_at_av_procent' => $paid_at_av_procent,

			'paid_at_ono' => $paid_at_ono,
			'paid_at_ono_magister' => $paid_at_ono_magister,
			'paid_at_ono_work' => $paid_at_ono_work,
			'paid_at_ono_no_work' => $paid_at_ono_no_work,
			'paid_at_ono_procent' => $paid_at_ono_procent,

			'paid_at_ab' => $paid_at_ab,
			'paid_at_ab_magister' => $paid_at_ab_magister,
			'paid_at_ab_work' => $paid_at_ab_work,
			'paid_at_ab_no_work' => $paid_at_ab_no_work,
			'paid_at_ab_procent' => $paid_at_ab_procent,

			'paid_at_ovd' => $paid_at_ovd,
			'paid_at_ovd_magister' => $paid_at_ovd_magister,
			'paid_at_ovd_work' => $paid_at_ovd_work,
			'paid_at_ovd_no_work' => $paid_at_ovd_no_work,
			'paid_at_ovd_procent' => $paid_at_ovd_procent,

			'paid_at' => $paid_at,
			'paid_at_magister' => $paid_at_magister,
			'paid_at_work' => $paid_at_work,
			'paid_at_no_work' => $paid_at_no_work,
			'paid_at_procent' => $paid_at_procent,

			'paid_op_lg' => $paid_op_lg,
			'paid_op_lg_magister' => $paid_op_lg_magister,
			'paid_op_lg_work' => $paid_op_lg_work,
			'paid_op_lg_no_work' => $paid_op_lg_no_work,
			'paid_op_lg_procent' => $paid_op_lg_procent,

			'paid_op' => $paid_op,
			'paid_op_magister' => $paid_op_magister,
			'paid_op_work' => $paid_op_work,
			'paid_op_no_work' => $paid_op_no_work,
			'paid_op_procent' => $paid_op_procent,

			'paid_op_all' => $paid_op_all,
			'paid_op_all_magister' => $paid_op_all_magister,
			'paid_op_all_work' => $paid_op_all_work,
			'paid_op_all_no_work' => $paid_op_all_no_work,
			'paid_op_all_procent' => $paid_op_all_procent,

			'paid_d_le' => $paid_d_le,
			'paid_d_le_magister' => $paid_d_le_magister,
			'paid_d_le_work' => $paid_d_le_work,
			'paid_d_le_no_work' => $paid_d_le_no_work,
			'paid_d_le_procent' => $paid_d_le_procent,

			'paid_d_mx' => $paid_d_mx,
			'paid_d_mx_magister' => $paid_d_mx_magister,
			'paid_d_mx_work' => $paid_d_mx_work,
			'paid_d_mx_no_work' => $paid_d_mx_no_work,
			'paid_d_mx_procent' => $paid_d_mx_procent,

			'paid_d_av' => $paid_d_av,
			'paid_d_av_magister' => $paid_d_av_magister,
			'paid_d_av_work' => $paid_d_av_work,
			'paid_d_av_no_work' => $paid_d_av_no_work,
			'paid_d_av_procent' => $paid_d_av_procent,

			'paid_d_ovd' => $paid_d_ovd,
			'paid_d_ovd_magister' => $paid_d_ovd_magister,
			'paid_d_ovd_work' => $paid_d_ovd_work,
			'paid_d_ovd_no_work' => $paid_d_ovd_no_work,
			'paid_d_ovd_procent' => $paid_d_ovd_procent,

			'paid_d_ab' => $paid_d_ab,
			'paid_d_ab_magister' => $paid_d_ab_magister,
			'paid_d_ab_work' => $paid_d_ab_work,
			'paid_d_ab_no_work' => $paid_d_ab_no_work,
			'paid_d_ab_procent' => $paid_d_ab_procent,

			'paid_d_ono' => $paid_d_ono,
			'paid_d_ono_magister' => $paid_d_ono_magister,
			'paid_d_ono_work' => $paid_d_ono_work,
			'paid_d_ono_no_work' => $paid_d_ono_no_work,
			'paid_d_ono_procent' => $paid_d_ono_procent,

			'paid_dat' => $paid_dat,
			'paid_dat_magister' => $paid_dat_magister,
			'paid_dat_work' => $paid_dat_work,
			'paid_dat_no_work' => $paid_dat_no_work,
			'paid_dat_procent' => $paid_dat_procent,

			'paid_d_op' => $paid_d_op,
			'paid_d_op_magister' => $paid_d_op_magister,
			'paid_d_op_work' => $paid_d_op_work,
			'paid_d_op_no_work' => $paid_d_op_no_work,
			'paid_d_op_procent' => $paid_d_op_procent,

			'paid_d_op_lg' => $paid_d_op_lg,
			'paid_d_op_lg_magister' => $paid_d_op_lg_magister,
			'paid_d_op_lg_work' => $paid_d_op_lg_work,
			'paid_d_op_lg_no_work' => $paid_d_op_lg_no_work,
			'paid_d_op_lg_procent' => $paid_d_op_lg_procent,

			'paid_d_op_all' => $paid_d_op_all,
			'paid_d_op_all_magister' => $paid_d_op_all_magister,
			'paid_d_op_all_work' => $paid_d_op_all_work,
			'paid_d_op_all_no_work' => $paid_d_op_all_no_work,
			'paid_d_op_all_procent' => $paid_d_op_all_procent,

			'paid_mp_at' => $paid_mp_at,
			'paid_mp_at_magister' => $paid_mp_at_magister,
			'paid_mp_at_work' => $paid_mp_at_work,
			'paid_mp_at_no_work' => $paid_mp_at_no_work,
			'paid_mp_at_procent' => $paid_mp_at_procent,

			'paid_mp_tu' => $paid_mp_tu,
			'paid_mp_tu_magister' => $paid_mp_tu_magister,
			'paid_mp_tu_work' => $paid_mp_tu_work,
			'paid_mp_tu_no_work' => $paid_mp_tu_no_work,
			'paid_mp_tu_procent' => $paid_mp_tu_procent,

			'paid_mnp_tu' => $paid_mnp_tu,
			'paid_mnp_tu_magister' => $paid_mnp_tu_magister,
			'paid_mnp_tu_work' => $paid_mnp_tu_work,
			'paid_mnp_tu_no_work' => $paid_mnp_tu_no_work,
			'paid_mnp_tu_procent' => $paid_mnp_tu_procent,

			'paid_all' => $paid_all,
			'paid_all_magister' => $paid_all_magister,
			'paid_all_work' => $paid_all_work,
			'paid_all_no_work' => $paid_all_no_work,
			'paid_all_procent' => $paid_all_procent,

			'all' => $all,
			'all_magister' => $all_magister,
			'all_work' => $all_work,
			'all_no_work' => $all_no_work,
			'all_procent' => $all_procent,
		];

		$pdfName = 'Отчёт по выпускникам на ' . date('d.m.Y h:i', strtotime($today)) . '.pdf';
		$pdf = PDF::loadView('admin.graduate.report.pdf', $dataArray)->setOptions(['default-font' => 'sans-serif']);
		$pdf->setPaper('A4', 'landscape');
		return $pdf->download($pdfName);
	}
}
