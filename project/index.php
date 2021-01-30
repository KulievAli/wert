<?php
class linearEquation
{
	private $a;
	private $b;
	
	function func($s, $w){
		if ($s!=0){
			$x = -$w/$s;
			return $x;
		}else if($s==0){
			return 'Уравнение имеет бесконечно много решений \n';
		}else{
			return 'Уравнение не имеет корней \n';
		};
	}
}

class quadraticEquation 
{
	private $a;
	private $b;
	private $c;
	private $d;
	
	
	
	protected function discriminant($a, $b, $c){
		$d = ($b * $b) - (4 * $a * $c);
		return $d ;
	}
	
	function myFunc($a, $b, $c){
		$d = $this->discriminant($a, $b, $c);
		
		if ($d < 0) {
			return "\nD = $d \nno roots in the equation \n";
		} 
	
		$D=sqrt($d);

		if ($d>0) 
		{
			$x1 = ((-1 * $b) + $D) / (2 * $a);
			$x2 = ((-1 * $b) - $D) / (2 * $a);
			$arr = [$x1,$x2];
            foreach($arr AS $val)
            {
               $arr0 .= $val;
            }
			function f($arr){
				for($i=0;$i<count($arr);$i++){
					echo $arr[$i];
				}
			}
			function ar($arr){
				var_dump($arr[0],$arr[1]);
			}
			//return implode(" ",$arr);
			return $arr0;
		}
 
	
			$x1=(-1*$b)/(2*$a);
			return "\nx1=$x1 \n";
	
	}
}


$linEq = new linearEquation();
$quadEq = new quadraticEquation();

echo $linEq->func(2, 4), "\n";
echo $quadEq->myFunc(2, 3, -5), "\n";

?>