<?php

class M_general extends CI_Model{		
	public function get_tgl()
	{
		return date("Y-m-d");
	}
	public function get_timestamp()
	{
		return date("Y-m-d H:i:s");
	}	
	public function date_ymd($tgl)
	{
		return date('Y-m-d', strtotime($tgl));
	}
	public function date_jfy($tgl)
	{
		return date('j F Y', strtotime($tgl));
	}
	public function add_date($tgl)
	{
		return date("Y-m-d", strtotime("+1 day", strtotime($tgl)));
	}
	
	
	public function format_number($n = '')
	{
		return ($n === '') ? '' : number_format( (float) $n, 0, ',', '.');
	}
	
	public function msg_box($class, $msg)
	{
		if($class=='success'){
			$this->session->set_flashdata('msg',"<div class='msg_box msg_success'><h3><i class='fa fa-fw fa-check-square-o'></i> Sukses</h3>$msg</div>");
		}
		else{ $this->session->set_flashdata('msg',"<div class='msg_box msg_error'><h3><i class='fa fa-fw fa-warning'></i> Error</h3>$msg</div>"); }
	}
	
	public function select_month()
	{
		$options = array();
		$options += array('01' => 'Januari');
		$options += array('02' => 'Februari');
		$options += array('03' => 'Maret');
		$options += array('04' => 'April');
		$options += array('05' => 'Mei');
		$options += array('06' => 'Juni');
		$options += array('07' => 'Juli');
		$options += array('08' => 'Agustus');
		$options += array('09' => 'September');
		$options += array('10' => 'Oktober');
		$options += array('11' => 'November');
		$options += array('12' => 'Desember');
		return $options;
	}
	
	public function nama_bln($bln)
	{
		if($bln == '01') return 'Januari';
		else if($bln == '02') return 'Februari';
		else if($bln == '03') return 'Maret';
		else if($bln == '04') return 'April';
		else if($bln == '05') return 'Mei';
		else if($bln == '06') return 'Juni';
		else if($bln == '07') return 'Juli';
		else if($bln == '08') return 'Agustus';
		else if($bln == '09') return 'September';
		else if($bln == '10') return 'Oktober';
		else if($bln == '11') return 'November';
		else if($bln == '12') return 'Desember';
	}
	
	
}

?>