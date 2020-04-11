<?php defined('BASEPATH') OR exit('No direct script access allowed');
	function asset_url(){
		return base_url().'assets/';
	}

    function passwordHash($plainPassword)
    {
        return password_hash($plainPassword, PASSWORD_DEFAULT);
    }

/**
 * This function used to generate the hashed password
 * @param {string} $plainPassword : This is plain text password
 * @param {string} $hashedPassword : This is hashed password
 */

    function verifyHashedPassword($plainPassword, $hashedPassword)
    {
        return password_verify($plainPassword, $hashedPassword) ? true : false;
    }


	function tgl_indonesia($date){
	   /* ARRAY u/ hari dan bulan */
	   $Hari = array ("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu",);
	   $Bulan = array ("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	/* Memisahkan format tanggal bulan dan tahun menggunakan substring */
	$tahun     = substr($date, 0, 4);
	$bulan     = substr($date, 5, 2);
	$tgl    = substr($date, 8, 2);
	$waktu    = substr($date,11, 5);
	$hari    = date("w", strtotime($date));
	$result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun;
	return $result;
	}

	function error_message($errorMsg){
		$result = '<div class="alert alert-warning alert-dismissible fade show mt-2" role="alert"><div class="alert-text"><h5 class=""alert-heading"><i class="la la-times-circle-o" style="font-size:1.55rem"></i> Something Went Wrong!</h5> <p> Error: '.$errorMsg.'</p><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="la la-close"></i></span></button></div></div>';

		return $result;
	}


?>