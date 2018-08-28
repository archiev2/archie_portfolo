<?php

function loadView($inc, $data, $type=false)
{
	$CI = & get_instance();

	if($type):
		$html = '';

	
			if(is_array($inc))
				$inc = array_merge(array('_module/header'), $inc, array('_module/footer'));
			else
				$inc = array('_module/header', $inc, '_module/footer');
		
		
		$data['pages'] = $inc;
		$html .= $CI->load->view('template', $data, true);
		
		return $html;
	else:
		if(is_array($inc))
			$inc = array_merge(array('_module/header'), $inc, array('_module/footer'));
		else
			$inc = array('_module/header', $inc, '_module/footer');
			
		$data['pages'] = $inc;
		$CI->load->view('template', $data);
		
		
	endif;
}

 
function get_module($inc,$data = false)	
{
	$CI = & get_instance();
	
	$data['pages'] = $inc;
	if(IS_AJAX)
		$CI->load->view('template', $data,false);
	else
		$CI->load->view('template', $data);

}

function css($href,$attr = false){
	echo '<link rel="stylesheet" type="text/css"  href="'.base_url().'_css/'.$href.'" '.$attr.'>';
}
function js($href,$attr = false){
	echo '<script type="text/javascript" src="'.base_url().'_js/'.$href.'" '.$attr.'></script>';
}
function plugin($href,$attr = false){
	echo '<link rel="stylesheet" type="text/css"  href="'.base_url().'_plugin/'.$href.'" '.$attr.'>';
}

