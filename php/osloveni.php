<?php
/**
 * Vrací pátý pád jména k prvnímu pádu
 * @param string $jmeno první pád jména
*/
function osloveni($jmeno) {
	$ljmeno = " " . mb_convert_case($jmeno, MB_CASE_LOWER, "UTF-8");
	switch (mb_substr($ljmeno, -1, 1)) {
	case 'a':
		$replacepair = mb_substr($ljmeno, -2, 1) == 'i' ? ["a", "e"] : ["a", "o"];
		break;
	case 'n':
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'o':
			if (mb_substr($ljmeno, -3, 1) == 'i') {
				$replacepair = mb_substr($ljmeno, -5, 1) == 'y' ? ["", "e"] : ["", ""];
			} else {
				$replacepair = ["", "e"];
			}
			break;
		case 'i':
			switch (mb_substr($ljmeno, -3, 1)) {
			case 'r':
				if (mb_substr($ljmeno, -4, 1) == 'a') {
					$replacepair = mb_substr($ljmeno, -5, 1) == 'm' ? ["", "e"] : ["", ""];
				} else {
					$replacepair = ["", ""];
				}
				break;
			case 'l':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'r' ? ["", "e"] : ["", ""];
				break;
			default:
				$replacepair = ["", "e"];
			}
			break;
		case 'í':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'r' ? ["", ""] : ["", "e"];
			break;
		case 'e':
			switch (mb_substr($ljmeno, -3, 1)) {
			case 'm':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'm' ? ["", "e"] : ["", ""];
				break;
			case 'r':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'o' ? ["", "e"] : ["", ""];
				break;
			default:
				$replacepair = ["", "e"];
			}
			break;
		case 'y':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'r' ? ["", "e"] : ["", ""];
			break;
		case 'á':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'p' ? ["án", "ane"] : ["", "e"];
			break;
		default:
			$replacepair = mb_substr($ljmeno, -2, 1) == 'u' ? ["", "o"] : ["", "e"];
		}
		break;
	case 'l':
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'e':
			switch (mb_substr($ljmeno, -3, 1)) {
			case 'i':
				if (mb_substr($ljmeno, -4, 1) == 'r') {
					$replacepair = mb_substr($ljmeno, -5, 1) == 'u' ? ["", ""] : ["", "i"];
				} else {
					$replacepair = ["", "i"];
				}
				break;
			case 'r':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'a' ? ["el", "le"] : ["", "i"];
				break;
			case 'v':
				$replacepair = mb_substr($ljmeno, -5, 1) == 'p' ? ["el", "le"] : ["el", "li"];
				break;
			case 'k':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'a' ? ["", ""] : ["", "i"];
				break;
			default:
				$replacepair = mb_substr($ljmeno, -3, 1) == 'h' ? ["", ""] : ["", "i"];
			}
			break;
		case 'i':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'a' ? ["", "o"] : ["", "e"];
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
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'a':
			if (mb_substr($ljmeno, -3, 1) == 'i') {
				$replacepair = mb_substr($ljmeno, -4, 1) == 'r' ? ["", ""] : ["", "e"];
			} else {
				$replacepair = ["", "e"];
			}
			break;
		default:
			$replacepair = mb_substr($ljmeno, -2, 1) == 'ů' ? ["ům", "ome"] : ["", "e"];
		}
		break;
	case 'c':
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'e':
			if (mb_substr($ljmeno, -3, 1) == 'v') {
				$replacepair = mb_substr($ljmeno, -4, 1) == 'š' ? ["vec", "evče"] : ["ec", "če"];
			} else {
				$replacepair = ["ec", "če"];
			}
			break;
		case 'i':
			$replacepair = mb_substr($ljmeno, -4, 1) == 'o' ? ["", "i"] : ["", "u"];
			break;
		default:
			$replacepair = mb_substr($ljmeno, -2, 1) == 'a' ? ["", "u"] : ["", "i"];
		}
		break;
	case 'e':
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'n':
			switch (mb_substr($ljmeno, -3, 1)) {
			case 'n':
				$replacepair = mb_substr($ljmeno, -7, 1) == 'b' ? ["", ""] : ["e", "o"];
				break;
			default:
				$replacepair = mb_substr($ljmeno, -3, 1) == 'g' ? ["e", "i"] : ["", ""];
			}
			break;
		case 'c':
			switch (mb_substr($ljmeno, -3, 1)) {
			case 'i':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'r' ? ["e", "i"] : ["", ""];
				break;
			default:
				$replacepair = mb_substr($ljmeno, -3, 1) == 'v' ? ["", ""] : ["e", "i"];
			}
			break;
		case 'd':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'l' ? ["e", "o"] : ["", ""];
			break;
		case 'g':
			if (mb_substr($ljmeno, -3, 1) == 'r') {
				$replacepair = mb_substr($ljmeno, -4, 1) == 'a' ? ["", ""] : ["e", "i"];
			} else {
				$replacepair = ["e", "i"];
			}
			break;
		case 'l':
			if (mb_substr($ljmeno, -3, 1) == 'l') {
				switch (mb_substr($ljmeno, -4, 1)) {
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
			$replacepair = mb_substr($ljmeno, -3, 1) == 's' ? ["e", "i"] : ["e", "o"];
			break;
		case 'h':
			$replacepair = mb_substr($ljmeno, -3, 1) == 't' ? ["", ""] : ["e", "i"];
			break;
		default:
			$replacepair = mb_substr($ljmeno, -2, 1) == 'k' ? ["", "u"] : ["", ""];
		}
		break;
	case 's':
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'e':
			switch (mb_substr($ljmeno, -3, 1)) {
			case 'n':
				switch (mb_substr($ljmeno, -4, 1)) {
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
				switch (mb_substr($ljmeno, -4, 1)) {
				case 'u':
					$replacepair = mb_substr($ljmeno, -5, 1) == 'j' ? ["", "i"] : ["s", ""];
					break;
				default:
					$c = mb_substr($ljmeno, -4, 1);
					$replacepair = $c == 'o' || $c == 'r' ? ["", "i"] : ["s", ""];
				}
				break;
			case 'r':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'e' ? ["s", "ro"] : ["", "i"];
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
			switch (mb_substr($ljmeno, -3, 1)) {
			case 'r':
				if (mb_substr($ljmeno, -4, 1) == 'a') {
					$replacepair = mb_substr($ljmeno, -5, 1) == 'p' ? ["s", "de"] : ["s", "to"];
				} else {
					$replacepair = ["", "i"];
				}
				break;
			case 'n':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'f' ? ["s", "de"] : ["", "i"];
				break;
			default:
				$replacepair = mb_substr($ljmeno, -3, 1) == 'm' ? ["s", "do"] : ["", "i"];
			}
			break;
		case 'o':
			switch (mb_substr($ljmeno, -3, 1)) {
			case 'm':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'i' ? ["os", "e"] : ["", "i"];
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
			switch (mb_substr($ljmeno, -3, 1)) {
			case 'r':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'a' ? ["", "i"] : ["as", "e"];
				break;
			case 'l':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'l' ? ["s", "do"] : ["", "i"];
				break;
			default:
				$replacepair = mb_substr($ljmeno, -3, 1) == 'y' ? ["as", "e"] : ["", "i"];
			}
			break;
		case 'r':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'a' ? ["s", "te"] : ["", "i"];
			break;
		case 'u':
			switch (mb_substr($ljmeno, -3, 1)) {
			case 'n':
				switch (mb_substr($ljmeno, -4, 1)) {
				case 'e':
					$replacepair = mb_substr($ljmeno, -5, 1) == 'v' ? ["us", "ero"] : ["", "i"];
					break;
				default:
					$replacepair = mb_substr($ljmeno, -4, 1) == 'g' ? ["", "i"] : ["us", "e"];
				}
				break;
			case 'e':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'z' ? ["zeus", "die"] : ["us", "e"];
				break;
			case 'm':
				$replacepair = mb_substr($ljmeno, -4, 1) == 't' ? ["us", "e"] : ["", "i"];
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
			$replacepair = mb_substr($ljmeno, -4, 1) == 'a' ? ["", "i"] : ["", ""];
			break;
		default:
			$replacepair = mb_substr($ljmeno, -2, 1) == 'é' ? ["s", "e"] : ["", "i"];
		}
		break;
	case 'o':
		$replacepair = mb_substr($ljmeno, -2, 1) == 'l' ? ["", "i"] : ["", ""];
		break;
	case 'x':
		$replacepair = mb_substr($ljmeno, -2, 1) == 'n' ? ["x", "go"] : ["", "i"];
		break;
	case 'i':
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'n':
			$replacepair = mb_substr($ljmeno, -4, 1) == 'e' ? ["", ""] : ["", "o"];
			break;
		case 'm':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'a' ? ["", ""] : ["", "o"];
			break;
		case 'r':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'i' ? ["", "o"] : ["", ""];
			break;
		default:
			$c = mb_substr($ljmeno, -2, 1);
			$replacepair = $c == 's' || $c == 'a' || $c == 'o' || $c == 'c' || $c == 't' ? ["", "i"] : ["", ""];
		}
		break;
	case 't':
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'i':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'l' ? ["", "e"] : ["", ""];
			break;
		case 'u':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'r' ? ["", ""] : ["", "e"];
			break;
		default:
			$replacepair = ["", "e"];
		}
		break;
	case 'r':
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'e':
			switch (mb_substr($ljmeno, -3, 1)) {
			case 'd':
				if (mb_substr($ljmeno, -4, 1) == 'i') {
					$replacepair = mb_substr($ljmeno, -5, 1) == 'e' ? ["", "e"] : ["", "i"];
				} else {
					$replacepair = ["er", "re"];
				}
				break;
			case 't':
				switch (mb_substr($ljmeno, -4, 1)) {
				case 'e':
					$replacepair = mb_substr($ljmeno, -5, 1) == 'p' ? ["", "e"] : ["", "o"];
					break;
				case 's':
					$replacepair = mb_substr($ljmeno, -5, 1) == 'o' ? ["", "e"] : ["", ""];
					break;
				default:
					$replacepair = mb_substr($ljmeno, -4, 1) == 'n' ? ["", "i"] : ["", "e"];
				}
				break;
			default:
				$c = mb_substr($ljmeno, -3, 1);
				$replacepair = $c == 'g' || $c == 'k' ? ["er", "ře"] : ["", "e"];
			}
			break;
		case 'a':
			switch (mb_substr($ljmeno, -3, 1)) {
			case 'm':
				$replacepair = mb_substr($ljmeno, -4, 1) == 'g' ? ["", ""] : ["", "e"];
				break;
			case 'l':
				$replacepair = mb_substr($ljmeno, -5, 1) == 'p' ? ["", ""] : ["", "e"];
				break;
			default:
				$replacepair = ["", "e"];
			}
			break;
		case 'o':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'n' ? ["", "o"] : ["", "e"];
			break;
		default:
			$c = mb_substr($ljmeno, -2, 1);
			$replacepair = $c == 'd' || $c == 't' || $c == 'b' ? ["r", "ře"] : ["", "e"];
		}
		break;
	case 'j':
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'o':
			$replacepair = mb_substr($ljmeno, -3, 1) == 't' ? ["oj", "ý"] : ["", "i"];
			break;
		case 'i':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'd' ? ["", "i"] : ["ij", "ý"];
			break;
		default:
			$replacepair = mb_substr($ljmeno, -2, 1) == 'y' ? ["yj", "ý"] : ["", "i"];
		}
		break;
	case 'd':
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'i':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'r' ? ["", ""] : ["", "e"];
			break;
		case 'u':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'a' ? ["", ""] : ["", "e"];
			break;
		default:
			$replacepair = ["", "e"];
		}
		break;
	case 'y':
		$c = mb_substr($ljmeno, -2, 1);
		$replacepair = $c == 'a' || $c == 'g' || $c == 'o' ? ["", "i"] : ["", ""];
		break;
	case 'h':
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'c':
			switch (mb_substr($ljmeno, -3, 1)) {
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
			$replacepair = mb_substr($ljmeno, -3, 1) == 'e' ? ["", "e"] : ["", "i"];
			break;
		case 'a':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'o' ? ["", "u"] : ["", ""];
			break;
		default:
			$replacepair = mb_substr($ljmeno, -2, 1) == 'ů' ? ["ůh", "ože"] : ["", "i"];
		}
		break;
	case 'v':
		$replacepair = mb_substr($ljmeno, -2, 1) == 'ů' ? ["", ""] : ["", "e"];
		break;
	case 'u':
		$replacepair = mb_substr($ljmeno, -2, 1) == 't' ? ["", ""] : ["", "i"];
		break;
	case 'k':
		switch (mb_substr($ljmeno, -2, 1)) {
		case 'ě':
			$replacepair = mb_substr($ljmeno, -3, 1) == 'n' ? ["něk", "ňku"] : ["k", "če"];
			break;
		default:
			$replacepair = mb_substr($ljmeno, -2, 1) == 'e' ? ["ek", "ku"] : ["", "u"];
		}
		break;
	case 'g':
		if (mb_substr($ljmeno, -2, 1) == 'i') {
			$replacepair = mb_substr($ljmeno, -3, 1) == 'e' ? ["", ""] : ["", "u"];
		} else {
			$replacepair = ["", "u"];
		}
		break;
	case 'ň':
		$replacepair = mb_substr($ljmeno, -2, 1) == 'o' ? ["ň", "ni"] : ["ůň", "oni"];
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
		return mb_substr($jmeno, 0, -mb_strlen($replacepair[0]));
	} elseif ($replacepair[0] == "") {
		return $jmeno . (preg_match("/^[a-záčďéěíňóřšťţúůýž]+$/u", mb_substr($jmeno, -1, 1)) ? $replacepair[1] : mb_convert_case($replacepair[1], MB_CASE_UPPER, "UTF-8"));
	} else {
		$replaceending = mb_substr($jmeno, -mb_strlen($replacepair[0]));
		if (preg_match("/^[A-ZÁČĎÉÍŇÓŘŠŤÚÝŽ]+$/u", $replaceending)) {
			return mb_substr($jmeno, 0, -mb_strlen($replacepair[0])) . mb_convert_case($replacepair[1], MB_CASE_UPPER, "UTF-8");
		} elseif (preg_match("/^[A-ZÁČĎÉÍŇÓŘŠŤÚÝŽ][a-záčďéěíňóřšťţúůýž]*$/u", $replaceending)) {
			return mb_substr($jmeno, 0, -mb_strlen($replacepair[0])) . mb_convert_case($replacepair[1], MB_CASE_TITLE, "UTF-8");
		} elseif (preg_match("/^[A-ZÁČĎÉÍŇÓŘŠŤÚÝŽ]+$/u", mb_substr($jmeno, -1, 1))) {
			return mb_substr($jmeno, 0, -mb_strlen($replacepair[0])) . mb_convert_case($replacepair[1], MB_CASE_UPPER, "UTF-8");
		} else {
			return mb_substr($jmeno, 0, -mb_strlen($replacepair[0])) . $replacepair[1];
		}
	}
}
?>