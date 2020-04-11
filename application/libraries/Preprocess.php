<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Preprocess {

		function __construct(){
			$this->ci =& get_instance();    

	        // Load helper
	        $this->ci->load->helper('convertAlphabet');
		}

		public function Text($string){
			if ($string == '' or $string == NULL){
				$cleanWord = NULL;
			}else {
				$cleanWord = self::tokenizing($string);
				$cleanWord = self::stopWords($cleanWord);
			}
			return $cleanWord;
			
		}

		private function tokenizing($string){
			$lowcase = strip_tags($string);
			$lowcase = html_entity_decode($lowcase);
			$lowcase = urldecode($lowcase);
			$lowcase = convertToNormal($lowcase);
			$lowcase = mb_strtolower($lowcase, "UTF-8");
			$lowcase = str_replace(
						array("\xe2\x80\x98", "\xe2\x80\x99", "\xe2\x80\x9a","\xe2\x80\x9b", "\xe2\x80\x9c", "\xe2\x80\x9d", "\xe2\x80\x9e", "\xe2\x80\x9f", "\xe2\x80\x93", "\xe2\x80\x94", "\xe2\x80\xa6", "\xe2\xa0\x80"),
						array("'", "'","'", "'", '"', '"', '"', '"', '-', '--', '...', ' '),
						$lowcase);
			
			$puncts = array('"', ')', '(', '!', '?', '|', ';', "'", '$', '&', '/', '[', ']', '>', '%', '=', '#', '*', '+', '\\', '•',  '~', '@', '£', '·', '_', '{', '}', '©', '^', '®', '`',  '<', '→', '°', '€', '™', '›',  '♥', '←', '×', '§', '″', '′', 'Â', '█', '½', 'à', '…', '“', '★', '”', '●', 'â', '►', '¢', '²', '¬', '░', '¶', '↑', '±', '¿', '▾', '═', '¦', '║', '¥', '▓', '‹', '▒', '：', '¼', '⊕', '▼', '▪', '†', '■', '’', '▀', '¨', '▄', '♫', '☆', 'é', '¯', '♦', '¤', '▲', 'è', '¸', '¾', 'Ã', '⋅', '‘', '∞', '∙', '）', '↓', '、', '│', '（', '»', ',', '♪', '╩', '╚', '³', '・', '╦', '╣', '╔', '╗', '▬', '❤', 'ï', 'Ø', '¹', '≤', '‡', '√', '...');
			$lowcase = str_replace($puncts, ' ', $lowcase);
			/*$lowcase = preg_replace('/ +/', ' ', $lowcase);*/
			$lowcase = trim($lowcase);
			
			$lowcase = preg_replace('/[^A-Za-z0-9\s]/', '', $lowcase);

			$token = array();
			$token = explode(' ',$lowcase);
			$token = preg_replace('/\s+/', '', $token);
			return $token;
		}

		private function stopWords($token){
			$clean = array();
			$commonWords = array('i', 'me', 'my', 'myself', 'we', 'our', 'ours', 'ourselves', 'you', "you're", "you've", "you'll", "you'd", 'your', 'yours', 'yourself', 'yourselves', 'he', 'him', 'his', 'himself', 'she', "she's", 'her', 'hers', 'herself', 'it', "it's", 'its', 'itself', 'they', 'them', 'their', 'theirs', 'themselves', 'what', 'which', 'who', 'whom', 'this', 'that', "that'll", 'these', 'those', 'am', 'is', 'are', 'was', 'were', 'be', 'been', 'being', 'have', 'has', 'had', 'having', 'do', 'does', 'did', 'doing', 'a', 'an', 'the', 'and', 'but', 'if', 'or', 'because', 'as', 'until', 'while', 'of', 'at', 'by', 'for', 'with', 'about', 'against', 'between', 'into', 'through', 'during', 'before', 'after', 'above', 'below', 'to', 'from', 'up', 'down', 'in', 'out', 'on', 'off', 'over', 'under', 'again', 'further', 'then', 'once', 'here', 'there', 'when', 'where', 'why', 'how', 'all', 'any', 'both', 'each', 'few', 'more', 'most', 'other', 'some', 'such', 'no', 'nor', 'not', 'only', 'own', 'same', 'so', 'than', 'too', 'very', 's', 't', 'can', 'will', 'just', 'don', "don't", 'should', "should've", 'now', 'd', 'll', 'm', 'o', 're', 've', 'y', 'ain', 'aren', "aren't", 'couldn', "couldn't", 'didn', "didn't", 'doesn', "doesn't", 'hadn', "hadn't", 'hasn', "hasn't", 'haven', "haven't", 'isn', "isn't", 'ma', 'mightn', "mightn't", 'mustn', "mustn't", 'needn', "needn't", 'shan', "shan't", 'shouldn', "shouldn't", 'wasn', "wasn't", 'weren', "weren't", 'won', "won't", 'wouldn', "wouldn't", 'reflect', 'reflected', 'reflecting', 'reflects', 'study', 'studies', 'studying', 'studied', 'approach', 'approached', 'approaching', 'approaches', 'analysis', 'analyses');
			foreach ($token as $t){
				
				$s = preg_replace('/\b('.implode('|',$commonWords).')\b/',"",$t);
				if ($s !=""){
					array_push($clean, $s);
				}
			}
			return $clean;
		}

		/*$commonWords = array('a','an','and','as','at','analysis','approach',
									'but',
									'in',
									'on','of','or',
									'reflected',
									'study',
									'the');*/


		/*$lowcase = strtolower($string);
			$token = array();
			$token = explode(" ",$lowcase);
			$cleanWords = array();
			foreach ($token as $t){
				$commonWords = array('a','an','and','as','at',
									'but',
									'in',
									'on','of','or',
									'the');
				$s = preg_replace('/\b('.implode('|',$commonWords).')\b/','',$t);
				array_push($cleanWords, $s); 
			}
			
			return $cleanWords;*/
	}
?>