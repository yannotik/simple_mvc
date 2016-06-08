<?php
class View{

	public function generate($content_view, $template_view, $data = null){
		include 'application/view/'.$template_view;
	}
}