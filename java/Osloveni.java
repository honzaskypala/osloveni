/**
 * Vrací pátý pád jména k prvnímu pádu
 * @param {String} jmeno první pád jména
 */
public class Osloveni {

public static String osloveni(String jmeno) {
    String ljmeno;
    String[] replacepair;
    char c;
    ljmeno = " " + jmeno.toLowerCase();
    switch (ljmeno.charAt(ljmeno.length() - 1)) {
    case 'a':
        replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'i') ? new String[]{"a", "e"} : new String[]{"a", "o"};
    	break;
    case 'n':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'o':
            if (ljmeno.charAt(ljmeno.length() - 3) == 'i') {
                replacepair = (ljmeno.charAt(ljmeno.length() - 5) == 'y') ? new String[]{"", "e"} : new String[]{"", ""};
            } else {
                replacepair = new String[]{"", "e"};
            }
        	break;
        case 'i':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'r':
                if (ljmeno.charAt(ljmeno.length() - 4) == 'a') {
                    replacepair = (ljmeno.charAt(ljmeno.length() - 5) == 'm') ? new String[]{"", "e"} : new String[]{"", ""};
                } else {
                    replacepair = new String[]{"", ""};
                }
            	break;
            case 'l':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'r') ? new String[]{"", "e"} : new String[]{"", ""};
            	break;
            default:
                replacepair = new String[]{"", "e"};
            }
        	break;
        case 'í':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'r') ? new String[]{"", ""} : new String[]{"", "e"};
        	break;
        case 'e':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'm':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'm') ? new String[]{"", "e"} : new String[]{"", ""};
            	break;
            case 'r':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'o') ? new String[]{"", "e"} : new String[]{"", ""};
            	break;
            default:
                replacepair = new String[]{"", "e"};
            }
        	break;
        case 'y':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'r') ? new String[]{"", "e"} : new String[]{"", ""};
        	break;
        case 'á':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'p') ? new String[]{"án", "ane"} : new String[]{"", "e"};
        	break;
        default:
            replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'u') ? new String[]{"", "o"} : new String[]{"", "e"};
        }
    	break;
    case 'l':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'e':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'i':
                if (ljmeno.charAt(ljmeno.length() - 4) == 'r') {
                    replacepair = (ljmeno.charAt(ljmeno.length() - 5) == 'u') ? new String[]{"", ""} : new String[]{"", "i"};
                } else {
                    replacepair = new String[]{"", "i"};
                }
            	break;
            case 'r':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'a') ? new String[]{"el", "le"} : new String[]{"", "i"};
            	break;
            case 'v':
                replacepair = (ljmeno.charAt(ljmeno.length() - 5) == 'p') ? new String[]{"el", "le"} : new String[]{"el", "li"};
            	break;
            case 'k':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'a') ? new String[]{"", ""} : new String[]{"", "i"};
            	break;
            default:
                replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'h') ? new String[]{"", ""} : new String[]{"", "i"};
            }
        	break;
        case 'i':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'a') ? new String[]{"", "o"} : new String[]{"", "e"};
        	break;
        case 'ě':
        case 'á':
        case 's':
            replacepair = new String[]{"", "i"};
        	break;
        case 'ů':
            replacepair = new String[]{"ůl", "ole"};
        	break;
        default:
            replacepair = new String[]{"", "e"};
        }
    	break;
    case 'm':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'a':
            if (ljmeno.charAt(ljmeno.length() - 3) == 'i') {
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'r') ? new String[]{"", ""} : new String[]{"", "e"};
            } else {
                replacepair = new String[]{"", "e"};
            }
        	break;
        default:
            replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'ů') ? new String[]{"ům", "ome"} : new String[]{"", "e"};
        }
    	break;
    case 'c':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'e':
            if (ljmeno.charAt(ljmeno.length() - 3) == 'v') {
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'š') ? new String[]{"vec", "evče"} : new String[]{"ec", "če"};
            } else {
                replacepair = new String[]{"ec", "če"};
            }
        	break;
        case 'i':
            replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'o') ? new String[]{"", "i"} : new String[]{"", "u"};
        	break;
        default:
            replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'a') ? new String[]{"", "u"} : new String[]{"", "i"};
        }
    	break;
    case 'e':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'n':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'n':
                replacepair = (ljmeno.charAt(ljmeno.length() - 7) == 'b') ? new String[]{"", ""} : new String[]{"e", "o"};
            	break;
            default:
                replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'g') ? new String[]{"e", "i"} : new String[]{"", ""};
            }
        	break;
        case 'c':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'i':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'r') ? new String[]{"e", "i"} : new String[]{"", ""};
            	break;
            default:
                replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'v') ? new String[]{"", ""} : new String[]{"e", "i"};
            }
        	break;
        case 'd':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'l') ? new String[]{"e", "o"} : new String[]{"", ""};
        	break;
        case 'g':
            if (ljmeno.charAt(ljmeno.length() - 3) == 'r') {
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'a') ? new String[]{"", ""} : new String[]{"e", "i"};
            } else {
                replacepair = new String[]{"e", "i"};
            }
        	break;
        case 'l':
            if (ljmeno.charAt(ljmeno.length() - 3) == 'l') {
                switch (ljmeno.charAt(ljmeno.length() - 4)) {
                case 'e':
                    replacepair = new String[]{"e", "o"};
                	break;
                case 'o':
                    replacepair = new String[]{"", ""};
                	break;
                default:
                    replacepair = new String[]{"e", "i"};
                }
            } else {
                replacepair = new String[]{"", ""};
            }
        	break;
        case 's':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 's') ? new String[]{"e", "i"} : new String[]{"e", "o"};
        	break;
        case 'h':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 't') ? new String[]{"", ""} : new String[]{"e", "i"};
        	break;
        default:
            replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'k') ? new String[]{"", "u"} : new String[]{"", ""};
        }
    	break;
    case 's':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'e':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'n':
                switch (ljmeno.charAt(ljmeno.length() - 4)) {
                case 'e':
                    replacepair = new String[]{"s", ""};
                	break;
                case 'á':
                    replacepair = new String[]{"", "i"};
                	break;
                default:
                    replacepair = new String[]{"", ""};
                }
            	break;
            case 'l':
                switch (ljmeno.charAt(ljmeno.length() - 4)) {
                case 'u':
                    replacepair = (ljmeno.charAt(ljmeno.length() - 5) == 'j') ? new String[]{"", "i"} : new String[]{"s", ""};
                	break;
                default:
                    c = ljmeno.charAt(ljmeno.length() - 4);
                    replacepair = (c == 'o' || c == 'r') ? new String[]{"", "i"} : new String[]{"s", ""};
                }
            	break;
            case 'r':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'e') ? new String[]{"s", "ro"} : new String[]{"", "i"};
            	break;
            case 'd':
            case 't':
            case 'm':
                replacepair = new String[]{"s", ""};
            	break;
            case 'u':
                replacepair = new String[]{"s", "u"};
            	break;
            case 'p':
                replacepair = new String[]{"es", "se"};
            	break;
            case 'x':
                replacepair = new String[]{"es", "i"};
            	break;
            default:
                replacepair = new String[]{"", "i"};
            }
        	break;
        case 'i':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'r':
                if (ljmeno.charAt(ljmeno.length() - 4) == 'a') {
                    replacepair = (ljmeno.charAt(ljmeno.length() - 5) == 'p') ? new String[]{"s", "de"} : new String[]{"s", "to"};
                } else {
                    replacepair = new String[]{"", "i"};
                }
            	break;
            case 'n':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'f') ? new String[]{"s", "de"} : new String[]{"", "i"};
            	break;
            default:
                replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'm') ? new String[]{"s", "do"} : new String[]{"", "i"};
            }
        	break;
        case 'o':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'm':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'i') ? new String[]{"os", "e"} : new String[]{"", "i"};
            	break;
            case 'k':
                replacepair = new String[]{"", "e"};
            	break;
            case 'x':
                replacepair = new String[]{"os", "i"};
            	break;
            default:
                replacepair = new String[]{"os", "e"};
            }
        	break;
        case 'a':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'r':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'a') ? new String[]{"", "i"} : new String[]{"as", "e"};
            	break;
            case 'l':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'l') ? new String[]{"s", "do"} : new String[]{"", "i"};
            	break;
            default:
                replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'y') ? new String[]{"as", "e"} : new String[]{"", "i"};
            }
        	break;
        case 'r':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'a') ? new String[]{"s", "te"} : new String[]{"", "i"};
        	break;
        case 'u':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'n':
                switch (ljmeno.charAt(ljmeno.length() - 4)) {
                case 'e':
                    replacepair = (ljmeno.charAt(ljmeno.length() - 5) == 'v') ? new String[]{"us", "ero"} : new String[]{"", "i"};
                	break;
                default:
                    replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'g') ? new String[]{"", "i"} : new String[]{"us", "e"};
                }
            	break;
            case 'e':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'z') ? new String[]{"zeus", "die"} : new String[]{"us", "e"};
            	break;
            case 'm':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 't') ? new String[]{"us", "e"} : new String[]{"", "i"};
            	break;
            case 'g':
            case 'a':
                replacepair = new String[]{"", "i"};
            	break;
            case 'h':
                replacepair = new String[]{"", "e"};
            	break;
            case 'c':
            case 'k':
                replacepair = new String[]{"s", ""};
            	break;
            default:
                replacepair = new String[]{"us", "e"};
            }
        	break;
        case 'y':
            replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'a') ? new String[]{"", "i"} : new String[]{"", ""};
        	break;
        default:
            replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'é') ? new String[]{"s", "e"} : new String[]{"", "i"};
        }
    	break;
    case 'o':
        replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'l') ? new String[]{"", "i"} : new String[]{"", ""};
    	break;
    case 'x':
        replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'n') ? new String[]{"x", "go"} : new String[]{"", "i"};
    	break;
    case 'i':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'n':
            replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'e') ? new String[]{"", ""} : new String[]{"", "o"};
        	break;
        case 'm':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'a') ? new String[]{"", ""} : new String[]{"", "o"};
        	break;
        case 'r':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'i') ? new String[]{"", "o"} : new String[]{"", ""};
        	break;
        default:
            c = ljmeno.charAt(ljmeno.length() - 2);
            replacepair = (c == 's' || c == 'a' || c == 'o' || c == 'c' || c == 't') ? new String[]{"", "i"} : new String[]{"", ""};
        }
    	break;
    case 't':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'i':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'l') ? new String[]{"", "e"} : new String[]{"", ""};
        	break;
        case 'u':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'r') ? new String[]{"", ""} : new String[]{"", "e"};
        	break;
        default:
            replacepair = new String[]{"", "e"};
        }
    	break;
    case 'r':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'e':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'd':
                if (ljmeno.charAt(ljmeno.length() - 4) == 'i') {
                    replacepair = (ljmeno.charAt(ljmeno.length() - 5) == 'e') ? new String[]{"", "e"} : new String[]{"", "i"};
                } else {
                    replacepair = new String[]{"er", "re"};
                }
            	break;
            case 't':
                switch (ljmeno.charAt(ljmeno.length() - 4)) {
                case 'e':
                    replacepair = (ljmeno.charAt(ljmeno.length() - 5) == 'p') ? new String[]{"", "e"} : new String[]{"", "o"};
                	break;
                case 's':
                    replacepair = (ljmeno.charAt(ljmeno.length() - 5) == 'o') ? new String[]{"", "e"} : new String[]{"", ""};
                	break;
                default:
                    replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'n') ? new String[]{"", "i"} : new String[]{"", "e"};
                }
            	break;
            default:
                c = ljmeno.charAt(ljmeno.length() - 3);
                replacepair = (c == 'g' || c == 'k') ? new String[]{"er", "ře"} : new String[]{"", "e"};
            }
        	break;
        case 'a':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'm':
                replacepair = (ljmeno.charAt(ljmeno.length() - 4) == 'g') ? new String[]{"", ""} : new String[]{"", "e"};
            	break;
            case 'l':
                replacepair = (ljmeno.charAt(ljmeno.length() - 5) == 'p') ? new String[]{"", ""} : new String[]{"", "e"};
            	break;
            default:
                replacepair = new String[]{"", "e"};
            }
        	break;
        case 'o':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'n') ? new String[]{"", "o"} : new String[]{"", "e"};
        	break;
        default:
            c = ljmeno.charAt(ljmeno.length() - 2);
            replacepair = (c == 'd' || c == 't' || c == 'b') ? new String[]{"r", "ře"} : new String[]{"", "e"};
        }
    	break;
    case 'j':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'o':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 't') ? new String[]{"oj", "ý"} : new String[]{"", "i"};
        	break;
        case 'i':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'd') ? new String[]{"", "i"} : new String[]{"ij", "ý"};
        	break;
        default:
            replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'y') ? new String[]{"yj", "ý"} : new String[]{"", "i"};
        }
    	break;
    case 'd':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'i':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'r') ? new String[]{"", ""} : new String[]{"", "e"};
        	break;
        case 'u':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'a') ? new String[]{"", ""} : new String[]{"", "e"};
        	break;
        default:
            replacepair = new String[]{"", "e"};
        }
    	break;
    case 'y':
        c = ljmeno.charAt(ljmeno.length() - 2);
        replacepair = (c == 'a' || c == 'g' || c == 'o') ? new String[]{"", "i"} : new String[]{"", ""};
    	break;
    case 'h':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'c':
            switch (ljmeno.charAt(ljmeno.length() - 3)) {
            case 'r':
                replacepair = new String[]{"", "i"};
            	break;
            case 'ý':
                replacepair = new String[]{"", ""};
            	break;
            default:
                replacepair = new String[]{"", "u"};
            }
        	break;
        case 't':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'e') ? new String[]{"", "e"} : new String[]{"", "i"};
        	break;
        case 'a':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'o') ? new String[]{"", "u"} : new String[]{"", ""};
        	break;
        default:
            replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'ů') ? new String[]{"ůh", "ože"} : new String[]{"", "i"};
        }
    	break;
    case 'v':
        replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'ů') ? new String[]{"", ""} : new String[]{"", "e"};
    	break;
    case 'u':
        replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 't') ? new String[]{"", ""} : new String[]{"", "i"};
    	break;
    case 'k':
        switch (ljmeno.charAt(ljmeno.length() - 2)) {
        case 'ě':
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'n') ? new String[]{"něk", "ňku"} : new String[]{"k", "če"};
        	break;
        default:
            replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'e') ? new String[]{"ek", "ku"} : new String[]{"", "u"};
        }
    	break;
    case 'g':
        if (ljmeno.charAt(ljmeno.length() - 2) == 'i') {
            replacepair = (ljmeno.charAt(ljmeno.length() - 3) == 'e') ? new String[]{"", ""} : new String[]{"", "u"};
        } else {
            replacepair = new String[]{"", "u"};
        }
    	break;
    case 'ň':
        replacepair = (ljmeno.charAt(ljmeno.length() - 2) == 'o') ? new String[]{"ň", "ni"} : new String[]{"ůň", "oni"};
    	break;
    case 'f':
    case 'p':
    case 'b':
        replacepair = new String[]{"", "e"};
    	break;
    case 'w':
    case 'í':
    case 'á':
    case 'ý':
    case 'ů':
    case 'é':
        replacepair = new String[]{"", ""};
    	break;
    default:
        replacepair = new String[]{"", "i"};
    }

    if (replacepair[0].isEmpty() && replacepair[1].isEmpty()) {
        return jmeno;
    } else if (replacepair[1].isEmpty()) {
        return jmeno.substring(0, jmeno.length() - replacepair[0].length());
    } else if (replacepair[0].isEmpty()) {
        return jmeno + ((String.valueOf(jmeno.charAt(jmeno.length() - 1)).toLowerCase().equals(jmeno.charAt(jmeno.length() - 1))) ? replacepair[1] : replacepair[1].toUpperCase());
    } else {
        String replaceending;
        replaceending = jmeno.substring(jmeno.length() - replacepair[0].length());
        if (String.valueOf(replaceending).toUpperCase().equals(replaceending)) {
            return jmeno.substring(0, jmeno.length() - replacepair[0].length()) + replacepair[1].toUpperCase();
        } else if (replaceending.matches("^[A-ZÁČĎÉÍŇÓŘŠŤÚÝŽ][a-záčďéěíňóřšťúůýž]*$")) {
            return jmeno.substring(0, jmeno.length() - replacepair[0].length()) + capitalize(replacepair[1]);
        } else if (String.valueOf(jmeno.charAt(jmeno.length() - 1)).toUpperCase().equals(jmeno.charAt(jmeno.length() - 1))) {
            return jmeno.substring(0, jmeno.length() - replacepair[0].length()) + replacepair[1].toUpperCase();
        } else {
            return jmeno.substring(0, jmeno.length() - replacepair[0].length()) + replacepair[1];
        }
    }
}
    public static String capitalize(String text) {
        if (text.isEmpty()) {
            return text;
        }
        return text.substring(0, 1).toUpperCase() + text.substring(1);
    }

}