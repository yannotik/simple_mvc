<?php

class Model_portfolio extends Model{

	public function get_data(){
		return array(
			array(
				'Year' => '2016',
				'Site' => 'http://DunkelBeer.ru',
				'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией CАН ИнБев.'
			),

			array(
				'Year' => '2016',
				'Site' => 'http://ZopoMobile.ru',
				'Description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'
			)
		);
	}

}
