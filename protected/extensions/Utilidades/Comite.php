<?php 
	public class Comite{
		var $lstComites=array( 
		1395 => array('Comite' => "ANDES", 'ValorPodio'=> 1),
		2052 => array('Comite' => "APC", 'ValorPodio'=> 2),
		1868 => array('Comite' => "Armenia", 'ValorPodio'=> 3),
		2018 => array('Comite' => "Bogota", 'ValorPodio'=> 4),
		759 => array('Comite' => "BUCARAMANGA", 'ValorPodio'=> 5),
		915 => array('Comite' => "CALI", 'ValorPodio'=> 6),
		858 => array('Comite' => "CARTAGENA", 'ValorPodio'=> 7),
		1737 => array('Comite' => "CENTRAL", 'ValorPodio'=> 8),
		1738 => array('Comite' => "CUCUTA", 'ValorPodio'=> 9),
		1198 => array('Comite' => "EAFIT", 'ValorPodio'=> 10),
		509 => array('Comite' => "EAN", 'ValorPodio'=> 11),
		1505 => array('Comite' => "ECI", 'ValorPodio'=> 12),
		1858 => array('Comite' => "EXTERNADO", 'ValorPodio'=> 13),
		1923 => array('Comite' => "FLORENCIA", 'ValorPodio'=> 14),
		1165 => array('Comite' => "JAVERIANA", 'ValorPodio'=> 15),
		1739 => array('Comite' => "JAVERIANA CALI", 'ValorPodio'=> 16),
		661 => array('Comite' => "MANIZALES", 'ValorPodio'=> 17),
		1832 => array('Comite' => "MC CO", 'ValorPodio'=> 18),
		510 => array('Comite' => "MONTERIA", 'ValorPodio'=> 19),
		1745 => array('Comite' => "NEIVA", 'ValorPodio'=> 20),
		1756 => array('Comite' => "PASTO", 'ValorPodio'=> 21),
		825 => array('Comite' => "PEREIRA", 'ValorPodio'=> 22),
		1740 => array('Comite' => "Popayan", 'ValorPodio'=> 23),
		1919 => array('Comite' => "Riohacha", 'ValorPodio'=> 24),
		428 => array('Comite' => "ROSARIO", 'ValorPodio'=> 25),
		1921 => array('Comite' => "SAN GIL", 'ValorPodio'=> 26),
		1812 => array('Comite' => "Santa Marta", 'ValorPodio'=> 27),
		1747 => array('Comite' => "SINCELEJO", 'ValorPodio'=> 28),
		294 => array('Comite' => "TOLIMA", 'ValorPodio'=> 29),
		1754 => array('Comite' => "TULUA", 'ValorPodio'=> 30),
		1877 => array('Comite' => "TUNJA", 'ValorPodio'=> 31),
		1746 => array('Comite' => "UdeA", 'ValorPodio'=> 32),
		173 => array('Comite' => "UNIATLANTICO", 'ValorPodio'=> 33),
		1469 => array('Comite' => "UNINORTE", 'ValorPodio'=> 34),
		1479 => array('Comite' => "UPB", 'ValorPodio'=> 35),
		172 => array('Comite' => "VALLEDUPAR", 'ValorPodio'=> 36),
		1920 => array('Comite' => "Villavicencio", 'ValorPodio'=> 37)
		);

		public function getValorPodio($idComite){
			return $lstComites[$idComite]["ValorPodio"];
		}
	}
 ?>