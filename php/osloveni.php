<?php
/**
 * Vrací pátý pád jména k prvnímu pádu
 * @param string $jmeno první pád jména
*/
function osloveni($jmeno) {
	$ljmeno = " " . mb_convert_case($jmeno, MB_CASE_LOWER, "UTF-8");
	switch ($ljmeno[strlen($ljmeno) - 1]) {
	case 'a':
		$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'i' ? ["a", "e"] : ["a", "o"];
		break;
	case 'n':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'o':
			if ($ljmeno[strlen($ljmeno) - 3] == 'i') {
				$replacepair = $ljmeno[strlen($ljmeno) - 5] == 'y' ? ["", "e"] : ["", ""];
			} else {
				$replacepair = ["", "e"];
			}
			break;
		case 'i':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'r':
				if ($ljmeno[strlen($ljmeno) - 4] == 'a') {
					$replacepair = $ljmeno[strlen($ljmeno) - 5] == 'm' ? ["", "e"] : ["", ""];
				} else {
					$replacepair = ["", ""];
				}
				break;
			case 'l':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'r' ? ["", "e"] : ["", ""];
				break;
			default:
				$replacepair = ["", "e"];
			}
			break;
		case 'í':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'r' ? ["", ""] : ["", "e"];
			break;
		case 'e':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'm':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'm' ? ["", "e"] : ["", ""];
				break;
			case 'r':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'o' ? ["", "e"] : ["", ""];
				break;
			default:
				$replacepair = ["", "e"];
			}
			break;
		case 'y':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'r' ? ["", "e"] : ["", ""];
			break;
		case 'á':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'p' ? ["án", "ane"] : ["", "e"];
			break;
		default:
			$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'u' ? ["", "o"] : ["", "e"];
		}
		break;
	case 'l':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'e':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'i':
				if ($ljmeno[strlen($ljmeno) - 4] == 'r') {
					$replacepair = $ljmeno[strlen($ljmeno) - 5] == 'u' ? ["", ""] : ["", "i"];
				} else {
					$replacepair = ["", "i"];
				}
				break;
			case 'r':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'a' ? ["el", "le"] : ["", "i"];
				break;
			case 'v':
				$replacepair = $ljmeno[strlen($ljmeno) - 5] == 'p' ? ["el", "le"] : ["el", "li"];
				break;
			case 'k':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'a' ? ["", ""] : ["", "i"];
				break;
			default:
				$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'h' ? ["", ""] : ["", "i"];
			}
			break;
		case 'i':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'a' ? ["", "o"] : ["", "e"];
			break;
		case 'ě':
		case 'á':
		case 's':
			$replacepair = ["", "i"];
			break;
		case 'ů':
			$replacepair = ["ůl", "ole"];
			break;
		default:
			$replacepair = ["", "e"];
		}
		break;
	case 'm':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'a':
			if ($ljmeno[strlen($ljmeno) - 3] == 'i') {
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'r' ? ["", ""] : ["", "e"];
			} else {
				$replacepair = ["", "e"];
			}
			break;
		default:
			$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'ů' ? ["ům", "ome"] : ["", "e"];
		}
		break;
	case 'c':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'e':
			if ($ljmeno[strlen($ljmeno) - 3] == 'v') {
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'š' ? ["vec", "evče"] : ["ec", "če"];
			} else {
				$replacepair = ["ec", "če"];
			}
			break;
		case 'i':
			$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'o' ? ["", "i"] : ["", "u"];
			break;
		default:
			$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'a' ? ["", "u"] : ["", "i"];
		}
		break;
	case 'e':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'n':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'n':
				$replacepair = $ljmeno[strlen($ljmeno) - 7] == 'b' ? ["", ""] : ["e", "o"];
				break;
			default:
				$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'g' ? ["e", "i"] : ["", ""];
			}
			break;
		case 'c':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'i':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'r' ? ["e", "i"] : ["", ""];
				break;
			default:
				$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'v' ? ["", ""] : ["e", "i"];
			}
			break;
		case 'd':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'l' ? ["e", "o"] : ["", ""];
			break;
		case 'g':
			if ($ljmeno[strlen($ljmeno) - 3] == 'r') {
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'a' ? ["", ""] : ["e", "i"];
			} else {
				$replacepair = ["e", "i"];
			}
			break;
		case 'l':
			if ($ljmeno[strlen($ljmeno) - 3] == 'l') {
				switch ($ljmeno[strlen($ljmeno) - 4]) {
				case 'e':
					$replacepair = ["e", "o"];
					break;
				case 'o':
					$replacepair = ["", ""];
					break;
				default:
					$replacepair = ["e", "i"];
				}
			} else {
				$replacepair = ["", ""];
			}
			break;
		case 's':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 's' ? ["e", "i"] : ["e", "o"];
			break;
		case 'h':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 't' ? ["", ""] : ["e", "i"];
			break;
		default:
			$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'k' ? ["", "u"] : ["", ""];
		}
		break;
	case 's':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'e':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'n':
				switch ($ljmeno[strlen($ljmeno) - 4]) {
				case 'e':
					$replacepair = ["s", ""];
					break;
				case 'á':
					$replacepair = ["", "i"];
					break;
				default:
					$replacepair = ["", ""];
				}
				break;
			case 'l':
				switch ($ljmeno[strlen($ljmeno) - 4]) {
				case 'u':
					$replacepair = $ljmeno[strlen($ljmeno) - 5] == 'j' ? ["", "i"] : ["s", ""];
					break;
				default:
					$c = $ljmeno[strlen($ljmeno) - 4];
					$replacepair = $c == 'o' || $c == 'r' ? ["", "i"] : ["s", ""];
				}
				break;
			case 'r':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'e' ? ["s", "ro"] : ["", "i"];
				break;
			case 'd':
			case 't':
			case 'm':
				$replacepair = ["s", ""];
				break;
			case 'u':
				$replacepair = ["s", "u"];
				break;
			case 'p':
				$replacepair = ["es", "se"];
				break;
			case 'x':
				$replacepair = ["es", "i"];
				break;
			default:
				$replacepair = ["", "i"];
			}
			break;
		case 'i':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'r':
				if ($ljmeno[strlen($ljmeno) - 4] == 'a') {
					$replacepair = $ljmeno[strlen($ljmeno) - 5] == 'p' ? ["s", "de"] : ["s", "to"];
				} else {
					$replacepair = ["", "i"];
				}
				break;
			case 'n':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'f' ? ["s", "de"] : ["", "i"];
				break;
			default:
				$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'm' ? ["s", "do"] : ["", "i"];
			}
			break;
		case 'o':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'm':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'i' ? ["os", "e"] : ["", "i"];
				break;
			case 'k':
				$replacepair = ["", "e"];
				break;
			case 'x':
				$replacepair = ["os", "i"];
				break;
			default:
				$replacepair = ["os", "e"];
			}
			break;
		case 'a':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'r':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'a' ? ["", "i"] : ["as", "e"];
				break;
			case 'l':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'l' ? ["s", "do"] : ["", "i"];
				break;
			default:
				$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'y' ? ["as", "e"] : ["", "i"];
			}
			break;
		case 'r':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'a' ? ["s", "te"] : ["", "i"];
			break;
		case 'u':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'n':
				switch ($ljmeno[strlen($ljmeno) - 4]) {
				case 'e':
					$replacepair = $ljmeno[strlen($ljmeno) - 5] == 'v' ? ["us", "ero"] : ["", "i"];
					break;
				default:
					$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'g' ? ["", "i"] : ["us", "e"];
				}
				break;
			case 'e':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'z' ? ["zeus", "die"] : ["us", "e"];
				break;
			case 'm':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 't' ? ["us", "e"] : ["", "i"];
				break;
			case 'g':
			case 'a':
				$replacepair = ["", "i"];
				break;
			case 'h':
				$replacepair = ["", "e"];
				break;
			case 'c':
			case 'k':
				$replacepair = ["s", ""];
				break;
			default:
				$replacepair = ["us", "e"];
			}
			break;
		case 'y':
			$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'a' ? ["", "i"] : ["", ""];
			break;
		default:
			$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'é' ? ["s", "e"] : ["", "i"];
		}
		break;
	case 'o':
		$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'l' ? ["", "i"] : ["", ""];
		break;
	case 'x':
		$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'n' ? ["x", "go"] : ["", "i"];
		break;
	case 'i':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'n':
			$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'e' ? ["", ""] : ["", "o"];
			break;
		case 'm':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'a' ? ["", ""] : ["", "o"];
			break;
		case 'r':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'i' ? ["", "o"] : ["", ""];
			break;
		default:
			$c = $ljmeno[strlen($ljmeno) - 2];
			$replacepair = $c == 's' || $c == 'a' || $c == 'o' || $c == 'c' || $c == 't' ? ["", "i"] : ["", ""];
		}
		break;
	case 't':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'i':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'l' ? ["", "e"] : ["", ""];
			break;
		case 'u':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'r' ? ["", ""] : ["", "e"];
			break;
		default:
			$replacepair = ["", "e"];
		}
		break;
	case 'r':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'e':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'd':
				if ($ljmeno[strlen($ljmeno) - 4] == 'i') {
					$replacepair = $ljmeno[strlen($ljmeno) - 5] == 'e' ? ["", "e"] : ["", "i"];
				} else {
					$replacepair = ["er", "re"];
				}
				break;
			case 't':
				switch ($ljmeno[strlen($ljmeno) - 4]) {
				case 'e':
					$replacepair = $ljmeno[strlen($ljmeno) - 5] == 'p' ? ["", "e"] : ["", "o"];
					break;
				case 's':
					$replacepair = $ljmeno[strlen($ljmeno) - 5] == 'o' ? ["", "e"] : ["", ""];
					break;
				default:
					$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'n' ? ["", "i"] : ["", "e"];
				}
				break;
			default:
				$c = $ljmeno[strlen($ljmeno) - 3];
				$replacepair = $c == 'g' || $c == 'k' ? ["er", "ře"] : ["", "e"];
			}
			break;
		case 'a':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'm':
				$replacepair = $ljmeno[strlen($ljmeno) - 4] == 'g' ? ["", ""] : ["", "e"];
				break;
			case 'l':
				$replacepair = $ljmeno[strlen($ljmeno) - 5] == 'p' ? ["", ""] : ["", "e"];
				break;
			default:
				$replacepair = ["", "e"];
			}
			break;
		case 'o':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'n' ? ["", "o"] : ["", "e"];
			break;
		default:
			$c = $ljmeno[strlen($ljmeno) - 2];
			$replacepair = $c == 'd' || $c == 't' || $c == 'b' ? ["r", "ře"] : ["", "e"];
		}
		break;
	case 'j':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'o':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 't' ? ["oj", "ý"] : ["", "i"];
			break;
		case 'i':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'd' ? ["", "i"] : ["ij", "ý"];
			break;
		default:
			$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'y' ? ["yj", "ý"] : ["", "i"];
		}
		break;
	case 'd':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'i':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'r' ? ["", ""] : ["", "e"];
			break;
		case 'u':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'a' ? ["", ""] : ["", "e"];
			break;
		default:
			$replacepair = ["", "e"];
		}
		break;
	case 'y':
		$c = $ljmeno[strlen($ljmeno) - 2];
		$replacepair = $c == 'a' || $c == 'g' || $c == 'o' ? ["", "i"] : ["", ""];
		break;
	case 'h':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'c':
			switch ($ljmeno[strlen($ljmeno) - 3]) {
			case 'r':
				$replacepair = ["", "i"];
				break;
			case 'ý':
				$replacepair = ["", ""];
				break;
			default:
				$replacepair = ["", "u"];
			}
			break;
		case 't':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'e' ? ["", "e"] : ["", "i"];
			break;
		case 'a':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'o' ? ["", "u"] : ["", ""];
			break;
		default:
			$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'ů' ? ["ůh", "ože"] : ["", "i"];
		}
		break;
	case 'v':
		$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'ů' ? ["", ""] : ["", "e"];
		break;
	case 'u':
		$replacepair = $ljmeno[strlen($ljmeno) - 2] == 't' ? ["", ""] : ["", "i"];
		break;
	case 'k':
		switch ($ljmeno[strlen($ljmeno) - 2]) {
		case 'ě':
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'n' ? ["něk", "ňku"] : ["k", "če"];
			break;
		default:
			$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'e' ? ["ek", "ku"] : ["", "u"];
		}
		break;
	case 'g':
		if ($ljmeno[strlen($ljmeno) - 2] == 'i') {
			$replacepair = $ljmeno[strlen($ljmeno) - 3] == 'e' ? ["", ""] : ["", "u"];
		} else {
			$replacepair = ["", "u"];
		}
		break;
	case 'ň':
		$replacepair = $ljmeno[strlen($ljmeno) - 2] == 'o' ? ["ň", "ni"] : ["ůň", "oni"];
		break;
	case 'f':
	case 'p':
	case 'b':
		$replacepair = ["", "e"];
		break;
	case 'w':
	case 'í':
	case 'á':
	case 'ý':
	case 'ů':
	case 'é':
		$replacepair = ["", ""];
		break;
	default:
		$replacepair = ["", "i"];
	}

	if ($replacepair[0] == "" && $replacepair[1] == "") {
		return $jmeno;
	} elseif ($replacepair[1] == "") {
		return substr($jmeno, 0, -strlen($replacepair[0]));
	} elseif ($replacepair[0] == "") {
		return $jmeno + (mb_convert_case($jmeno[strlen($jmeno)], MB_CASE_LOWER) == $jmeno[strlen($jmeno)] ? $replacepair[1] : mb_convert_case($replacepair[1], MB_CASE_UPPER, "UTF-8"));
	} else {
		$replaceending = substr($jmeno, -strlen($replacepair[0]));
		if (mb_convert_case($replaceending, MB_CASE_UPPER) == $replaceending) {
			return substr($jmeno, 0, strlen($jmeno) - strlen($replacepair[0])) . mb_convert_case($replacepair[1], MB_CASE_UPPER, "UTF-8");
		} elseif (preg_match("/^[A-ZÁČĎÉÍŇÓŘŠŤÚÝŽ][a-záčďéěíňóřšťúůýž]*$/u", $replaceending)) {
			return substr($jmeno, 0, strlen($jmeno) - strlen($replacepair[0])) . mb_convert_case($replacepair[1], MB_CASE_TITLE, "UTF-8");
		} elseif (mb_convert_case($jmeno[strlen($jmeno) - 1], MB_CASE_UPPER) == $jmeno[strlen($jmeno) - 1]) {
			return substr($jmeno, 0, strlen($jmeno) - strlen($replacepair[0])) . mb_convert_case($replacepair[1], MB_CASE_UPPER, "UTF-8");
		} else {
			return substr($jmeno, 0, strlen($jmeno) - strlen($replacepair[0])) . $replacepair[1];
		}
	}
}
?>