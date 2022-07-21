/**
 * Vrací pátý pád jména k prvnímu pádu
 * @param {String} jmeno první pád jména
*/
function osloveni(jmeno) {
	var ljmeno;
	var replacepair;
	var c;
	ljmeno = " " + jmeno.toLowerCase();
	switch (ljmeno.charAt(ljmeno.length - 1)) {
	case 'a':
		replacepair = ljmeno.charAt(ljmeno.length - 2) == 'i' ? ["a", "e"] : ["a", "o"];
		break;
	case 'n':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'o':
			if (ljmeno.charAt(ljmeno.length - 3) == 'i') {
				replacepair = ljmeno.charAt(ljmeno.length - 5) == 'y' ? ["", "e"] : ["", ""];
			} else {
				replacepair = ["", "e"];
			}
			break;
		case 'i':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'r':
				if (ljmeno.charAt(ljmeno.length - 4) == 'a') {
					replacepair = ljmeno.charAt(ljmeno.length - 5) == 'm' ? ["", "e"] : ["", ""];
				} else {
					replacepair = ["", ""];
				}
				break;
			case 'l':
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'r' ? ["", "e"] : ["", ""];
				break;
			default:
				replacepair = ["", "e"];
			}
			break;
		case 'í':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'r' ? ["", ""] : ["", "e"];
			break;
		case 'e':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'm':
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'm' ? ["", "e"] : ["", ""];
				break;
			case 'r':
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'o' ? ["", "e"] : ["", ""];
				break;
			default:
				replacepair = ["", "e"];
			}
			break;
		case 'y':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'r' ? ["", "e"] : ["", ""];
			break;
		default:
			replacepair = ljmeno.charAt(ljmeno.length - 2) == 'u' ? ["", "o"] : ["", "e"];
		}
		break;
	case 'l':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'e':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'i':
				if (ljmeno.charAt(ljmeno.length - 4) == 'r') {
					replacepair = ljmeno.charAt(ljmeno.length - 5) == 'u' ? ["", ""] : ["", "i"];
				} else {
					replacepair = ["", "i"];
				}
				break;
			case 'r':
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'a' ? ["el", "le"] : ["", "i"];
				break;
			case 'v':
				replacepair = ljmeno.charAt(ljmeno.length - 5) == 'p' ? ["el", "le"] : ["el", "li"];
				break;
			case 'k':
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'a' ? ["", ""] : ["", "i"];
				break;
			default:
				replacepair = ljmeno.charAt(ljmeno.length - 3) == 'h' ? ["", ""] : ["", "i"];
			}
			break;
		case 'i':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'a' ? ["", "o"] : ["", "e"];
			break;
		case 'ě':
		case 'á':
		case 's':
			replacepair = ["", "i"];
			break;
		case 'ů':
			replacepair = ["ůl", "ole"];
			break;
		default:
			replacepair = ["", "e"];
		}
		break;
	case 'm':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'a':
			if (ljmeno.charAt(ljmeno.length - 3) == 'i') {
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'r' ? ["", ""] : ["", "e"];
			} else {
				replacepair = ["", "e"];
			}
			break;
		default:
			replacepair = ljmeno.charAt(ljmeno.length - 2) == 'ů' ? ["ům", "ome"] : ["", "e"];
		}
		break;
	case 'c':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'e':
			if (ljmeno.charAt(ljmeno.length - 3) == 'v') {
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'š' ? ["vec", "evče"] : ["ec", "če"];
			} else {
				replacepair = ["ec", "če"];
			}
			break;
		case 'i':
			replacepair = ljmeno.charAt(ljmeno.length - 4) == 'o' ? ["", "i"] : ["", "u"];
			break;
		default:
			replacepair = ljmeno.charAt(ljmeno.length - 2) == 'a' ? ["", "u"] : ["", "i"];
		}
		break;
	case 'e':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'n':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'n':
				replacepair = ljmeno.charAt(ljmeno.length - 7) == 'b' ? ["", ""] : ["e", "o"];
				break;
			default:
				replacepair = ljmeno.charAt(ljmeno.length - 3) == 'g' ? ["e", "i"] : ["", ""];
			}
			break;
		case 'c':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'i':
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'r' ? ["e", "i"] : ["", ""];
				break;
			default:
				replacepair = ljmeno.charAt(ljmeno.length - 3) == 'v' ? ["", ""] : ["e", "i"];
			}
			break;
		case 'd':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'l' ? ["e", "o"] : ["", ""];
			break;
		case 'g':
			if (ljmeno.charAt(ljmeno.length - 3) == 'r') {
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'a' ? ["", ""] : ["e", "i"];
			} else {
				replacepair = ["e", "i"];
			}
			break;
		case 'l':
			if (ljmeno.charAt(ljmeno.length - 3) == 'l') {
				switch (ljmeno.charAt(ljmeno.length - 4)) {
				case 'e':
					replacepair = ["e", "o"];
					break;
				case 'o':
					replacepair = ["", ""];
					break;
				default:
					replacepair = ["e", "i"];
				}
			} else {
				replacepair = ["", ""];
			}
			break;
		case 's':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 's' ? ["e", "i"] : ["e", "o"];
			break;
		case 'h':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 't' ? ["", ""] : ["e", "i"];
			break;
		default:
			replacepair = ljmeno.charAt(ljmeno.length - 2) == 'k' ? ["", "u"] : ["", ""];
		}
		break;
	case 's':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'e':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'n':
				switch (ljmeno.charAt(ljmeno.length - 4)) {
				case 'e':
					replacepair = ["s", ""];
					break;
				case 'á':
					replacepair = ["", "i"];
					break;
				default:
					replacepair = ["", ""];
				}
				break;
			case 'l':
				switch (ljmeno.charAt(ljmeno.length - 4)) {
				case 'u':
					replacepair = ljmeno.charAt(ljmeno.length - 5) == 'j' ? ["", "i"] : ["s", ""];
					break;
				default:
					c = ljmeno.charAt(ljmeno.length - 4);
					replacepair = c == 'o' || c == 'r' ? ["", "i"] : ["s", ""];
				}
				break;
			case 'd':
			case 't':
			case 'm':
				replacepair = ["s", ""];
				break;
			case 'r':
				replacepair = ["s", "ro"];
				break;
			case 'u':
				replacepair = ["s", "u"];
				break;
			case 'p':
				replacepair = ["es", "se"];
				break;
			case 'x':
				replacepair = ["es", "i"];
				break;
			default:
				replacepair = ["", "i"];
			}
			break;
		case 'i':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'r':
				if (ljmeno.charAt(ljmeno.length - 4) == 'a') {
					replacepair = ljmeno.charAt(ljmeno.length - 5) == 'p' ? ["s", "de"] : ["s", "to"];
				} else {
					replacepair = ["", "i"];
				}
				break;
			case 'n':
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'f' ? ["s", "de"] : ["", "i"];
				break;
			default:
				replacepair = ljmeno.charAt(ljmeno.length - 3) == 'm' ? ["s", "do"] : ["", "i"];
			}
			break;
		case 'o':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'r':
				replacepair = ["os", "e"];
				break;
			case 'k':
				replacepair = ["", "e"];
				break;
			case 'x':
				replacepair = ["os", "i"];
				break;
			default:
				replacepair = ["", "i"];
			}
			break;
		case 'a':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'r':
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'a' ? ["", "i"] : ["as", "e"];
				break;
			case 'l':
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'l' ? ["s", "do"] : ["", "i"];
				break;
			default:
				replacepair = ljmeno.charAt(ljmeno.length - 3) == 'y' ? ["as", "e"] : ["", "i"];
			}
			break;
		case 'r':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'a' ? ["s", "te"] : ["", "i"];
			break;
		case 'u':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'n':
				switch (ljmeno.charAt(ljmeno.length - 4)) {
				case 'e':
					replacepair = ljmeno.charAt(ljmeno.length - 5) == 'v' ? ["us", "ero"] : ["", "i"];
					break;
				default:
					replacepair = ljmeno.charAt(ljmeno.length - 4) == 'g' ? ["", "i"] : ["us", "e"];
				}
				break;
			case 'e':
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'z' ? ["zeus", "die"] : ["us", "e"];
				break;
			case 'm':
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 't' ? ["us", "e"] : ["", "i"];
				break;
			case 'g':
			case 'a':
				replacepair = ["", "i"];
				break;
			case 'h':
				replacepair = ["", "e"];
				break;
			case 'c':
			case 'k':
				replacepair = ["s", ""];
				break;
			default:
				replacepair = ["us", "e"];
			}
			break;
		case 'y':
			replacepair = ljmeno.charAt(ljmeno.length - 4) == 'a' ? ["", "i"] : ["", ""];
			break;
		default:
			replacepair = ["", "i"];
		}
		break;
	case 'o':
		replacepair = ljmeno.charAt(ljmeno.length - 2) == 'l' ? ["", "i"] : ["", ""];
		break;
	case 'x':
		replacepair = ljmeno.charAt(ljmeno.length - 2) == 'n' ? ["x", "go"] : ["", "i"];
		break;
	case 'i':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'n':
			replacepair = ljmeno.charAt(ljmeno.length - 4) == 'e' ? ["", ""] : ["", "o"];
			break;
		case 'm':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'a' ? ["", ""] : ["", "o"];
			break;
		case 'r':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'i' ? ["", "o"] : ["", ""];
			break;
		default:
			c = ljmeno.charAt(ljmeno.length - 2);
			replacepair = c == 's' || c == 'a' || c == 'o' || c == 'c' || c == 't' ? ["", "i"] : ["", ""];
		}
		break;
	case 't':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'i':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'l' ? ["", "e"] : ["", ""];
			break;
		case 'u':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'r' ? ["", ""] : ["", "e"];
			break;
		default:
			replacepair = ["", "e"];
		}
		break;
	case 'r':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'e':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'd':
				if (ljmeno.charAt(ljmeno.length - 4) == 'i') {
					replacepair = ljmeno.charAt(ljmeno.length - 5) == 'e' ? ["", "e"] : ["", "i"];
				} else {
					replacepair = ["er", "re"];
				}
				break;
			case 't':
				switch (ljmeno.charAt(ljmeno.length - 4)) {
				case 'e':
					replacepair = ljmeno.charAt(ljmeno.length - 5) == 'p' ? ["", "e"] : ["", "o"];
					break;
				case 's':
					replacepair = ljmeno.charAt(ljmeno.length - 5) == 'o' ? ["", "e"] : ["", ""];
					break;
				default:
					replacepair = ljmeno.charAt(ljmeno.length - 4) == 'n' ? ["", "i"] : ["", "e"];
				}
				break;
			default:
				c = ljmeno.charAt(ljmeno.length - 3);
				replacepair = c == 'g' || c == 'k' ? ["er", "ře"] : ["", "e"];
			}
			break;
		case 'a':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'm':
				replacepair = ljmeno.charAt(ljmeno.length - 4) == 'g' ? ["", ""] : ["", "e"];
				break;
			case 'l':
				replacepair = ljmeno.charAt(ljmeno.length - 5) == 'p' ? ["", ""] : ["", "e"];
				break;
			default:
				replacepair = ["", "e"];
			}
			break;
		case 'o':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'n' ? ["", "o"] : ["", "e"];
			break;
		default:
			c = ljmeno.charAt(ljmeno.length - 2);
			replacepair = c == 'd' || c == 't' || c == 'b' ? ["r", "ře"] : ["", "e"];
		}
		break;
	case 'j':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'o':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 't' ? ["oj", "ý"] : ["", "i"];
			break;
		case 'i':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'd' ? ["", "i"] : ["ij", "ý"];
			break;
		default:
			replacepair = ljmeno.charAt(ljmeno.length - 2) == 'y' ? ["yj", "ý"] : ["", "i"];
		}
		break;
	case 'd':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'i':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'r' ? ["", ""] : ["", "e"];
			break;
		case 'u':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'a' ? ["", ""] : ["", "e"];
			break;
		default:
			replacepair = ["", "e"];
		}
		break;
	case 'y':
		c = ljmeno.charAt(ljmeno.length - 2);
		replacepair = c == 'a' || c == 'g' || c == 'o' ? ["", "i"] : ["", ""];
		break;
	case 'h':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'c':
			switch (ljmeno.charAt(ljmeno.length - 3)) {
			case 'r':
				replacepair = ["", "i"];
				break;
			case 'ý':
				replacepair = ["", ""];
				break;
			default:
				replacepair = ["", "u"];
			}
			break;
		case 't':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'e' ? ["", "e"] : ["", "i"];
			break;
		case 'a':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'o' ? ["", "u"] : ["", ""];
			break;
		default:
			replacepair = ljmeno.charAt(ljmeno.length - 2) == 'ů' ? ["ůh", "ože"] : ["", "i"];
		}
		break;
	case 'v':
		replacepair = ljmeno.charAt(ljmeno.length - 2) == 'ů' ? ["", ""] : ["", "e"];
		break;
	case 'u':
		replacepair = ljmeno.charAt(ljmeno.length - 2) == 't' ? ["", ""] : ["", "i"];
		break;
	case 'k':
		switch (ljmeno.charAt(ljmeno.length - 2)) {
		case 'ě':
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'n' ? ["něk", "ňku"] : ["k", "če"];
			break;
		default:
			replacepair = ljmeno.charAt(ljmeno.length - 2) == 'e' ? ["ek", "ku"] : ["", "u"];
		}
		break;
	case 'g':
		if (ljmeno.charAt(ljmeno.length - 2) == 'i') {
			replacepair = ljmeno.charAt(ljmeno.length - 3) == 'e' ? ["", ""] : ["", "u"];
		} else {
			replacepair = ["", "u"];
		}
		break;
	case 'ň':
		replacepair = ljmeno.charAt(ljmeno.length - 2) == 'o' ? ["ň", "ni"] : ["ůň", "oni"];
		break;
	case 'f':
	case 'p':
	case 'b':
		replacepair = ["", "e"];
		break;
	case 'w':
	case 'í':
	case 'á':
	case 'ý':
	case 'ů':
	case 'é':
		replacepair = ["", ""];
		break;
	default:
		replacepair = ["", "i"];
	}

	if (replacepair[0] == "" && replacepair[1] == "") {
		return jmeno;
	} else if (replacepair[1] == "") {
		return jmeno.substr(0, -replacepair[0].length);
	} else if (replacepair[0] == "") {
		return jmeno + (jmeno.charAt(jmeno.length).toLowerCase() == jmeno.charAt(jmeno.length) ? replacepair[1] : replacepair[1].toUpperCase());
	} else {
		var replaceending;
		replaceending = jmeno.substr(jmeno.length - replacepair[0].length);
		if (replaceending.toUpperCase() == replaceending) {
			return jmeno.substr(0, jmeno.length - replacepair[0].length) + replacepair[1].toUpperCase();
		} else if (replaceending.match(/^[A-ZÁČĎÉÍŇÓŘŠŤÚÝŽ][a-záčďéěíňóřšťúůýž]*$/u)) {
			return jmeno.substr(0, jmeno.length - replacepair[0].length) + replacepair[1].replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
		} else if (jmeno.charAt(jmeno.length - 1).toUpperCase() == jmeno.charAt(jmeno.length - 1)) {
			return jmeno.substr(0, jmeno.length - replacepair[0].length) + replacepair[1].toUpperCase();
		} else {
			return jmeno.substr(0, jmeno.length - replacepair[0].length) + replacepair[1];
		}
	}
}
