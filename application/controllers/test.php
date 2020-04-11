<?php 
$pdf = $this->CosimModel->theoryFileSelect();
$this->db->query("TRUNCATE table sc_theory_tfidf");
foreach($pdf as $pdf){
	$title 	= $pdf->id_title;
	$docid 	= $pdf->id_theory;
	$theoryFile = $pdf->theory_file;
	$parser = new \Smalot\PdfParser\Parser();
	$cPdf   = $parser->parseFile($theoryFile);
	$rPdf 	= $cPdf->getText();
	$token	= $this->preprocess->Text($rPdf);
	$stop_word = array();
	foreach ($token as $t){
		$term 	= $this->porter->Stem($t);
		if (in_array($term,array_column($stop_word, 'term'))) {
			foreach($stop_word as $k => $v){
				if ($v['term'] == $term) {
					$stop_word[$k]['jumlah'] ++;
				}
			}
		} else {
			$s['term'] 		= $term;
			$s['id_theory']	= $docid;
			$s['jumlah'] 	= 1;
			array_push($stop_word,$s);
		}
	}
	$this->CosimModel->theoryTermInsertB($stop_word);
}
$N = $this->CosimModel->theoryTotalFile();
$all = $this->CosimModel->theoryTermSelectD();
$idfUpdate = array();
foreach ($all as $all) {
	$term 	= $all->term;
	$setdf 	= $all->df;
	$idf =  (log(round($N/ (1 + $setdf),4),10)) + 1;
	$d['term'] = $term;
	$d['idf'] = round($idf,4);
	array_push($idfUpdate,$d);
}
$this->CosimModel->theoryIdfUpdateB($idfUpdate);
?>