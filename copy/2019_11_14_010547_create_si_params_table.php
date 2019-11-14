<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/**
		 * 一、“五险”的英文翻译
		 *		1、养老保险（endowment insurance）；
		 * 		2、医疗保险（medical insurance）；
		 * 		3、失业保险（unemployment insurance）；
		 * 		4、工伤保险（employment injury insurance）；
		 * 		5、生育保险（maternity insurance）。
		 * 二、“一金”的英文翻译
		 * 		住房公积金（Housing Provident Fund）。
		 */
        Schema::create('si_params', function (Blueprint $table) {
            $table->bigIncrements('id');
            // 类型
            $table->enum('type',['城镇','农业']);
            // 年份
            $table->unsignedSmallInteger('year');
            // 区域 id
            $table->unsignedSmallInteger('area_id');
            // 分母  最大数 16,777,215
            $table->unsignedMediumInteger('denominator');

            // 四个基数
			// 养老基数 最低
            $table->unsignedMediumInteger('base_ei_min');
			// 养老基数 最大
            $table->unsignedMediumInteger('base_ei_max');
			// 医疗基数 最低
			$table->unsignedMediumInteger('base_mi_min');
			// 医疗基数 最大
			$table->unsignedMediumInteger('base_mi_max');

			// 系数 coefficient
			// 养老
			$table->unsignedMediumInteger('coef_ei');
			// 医疗
			$table->unsignedMediumInteger('coef_mi');
			// 失业
			$table->unsignedMediumInteger('coef_ui');
			// 工伤
			$table->unsignedMediumInteger('coef_eii');
			// 生育
			$table->unsignedMediumInteger('coef_mati');

			// others
			$table->unsignedMediumInteger('others');

			// 所有金额单位都是分，1元=100分

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('si_params');
    }
}
