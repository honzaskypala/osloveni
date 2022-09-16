import Foundation

/// Vrací pátý pád jména k prvnímu pádu
///
/// - Parameters:
///     - jmeno: první pád jména.
public func osloveni(_ jmeno: String) -> String {
    var ljmeno: String
    var replacepair: (String, String)
    var c: String
    ljmeno = " " + jmeno.lowercased()
    switch String(Array(ljmeno)[ljmeno.count - 1]) {
    case "a":
        replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "i" ? ("a", "e") : ("a", "o")
    case "n":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "o":
            if String(Array(ljmeno)[ljmeno.count - 3]) == "i" {
                replacepair = String(Array(ljmeno)[ljmeno.count - 5]) == "y" ? ("", "e") : ("", "")
            } else {
                replacepair = ("", "e")
            }
        case "i":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "r":
                if String(Array(ljmeno)[ljmeno.count - 4]) == "a" {
                    replacepair = String(Array(ljmeno)[ljmeno.count - 5]) == "m" ? ("", "e") : ("", "")
                } else {
                    replacepair = ("", "")
                }
            case "l":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "r" ? ("", "e") : ("", "")
            default:
                replacepair = ("", "e")
            }
        case "í":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "r" ? ("", "") : ("", "e")
        case "e":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "m":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "m" ? ("", "e") : ("", "")
            case "r":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "o" ? ("", "e") : ("", "")
            default:
                replacepair = ("", "e")
            }
        case "y":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "r" ? ("", "e") : ("", "")
        case "á":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "p" ? ("án", "ane") : ("", "e")
        default:
            replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "u" ? ("", "o") : ("", "e")
        }
    case "l":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "e":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "i":
                if String(Array(ljmeno)[ljmeno.count - 4]) == "r" {
                    replacepair = String(Array(ljmeno)[ljmeno.count - 5]) == "u" ? ("", "") : ("", "i")
                } else {
                    replacepair = ("", "i")
                }
            case "r":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "a" ? ("el", "le") : ("", "i")
            case "v":
                replacepair = String(Array(ljmeno)[ljmeno.count - 5]) == "p" ? ("el", "le") : ("el", "li")
            case "k":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "a" ? ("", "") : ("", "i")
            default:
                replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "h" ? ("", "") : ("", "i")
            }
        case "i":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "a" ? ("", "o") : ("", "e")
        case "ě", "á", "s":
            replacepair = ("", "i")
        case "ů":
            replacepair = ("ůl", "ole")
        default:
            replacepair = ("", "e")
        }
    case "m":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "a":
            if String(Array(ljmeno)[ljmeno.count - 3]) == "i" {
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "r" ? ("", "") : ("", "e")
            } else {
                replacepair = ("", "e")
            }
        default:
            replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "ů" ? ("ům", "ome") : ("", "e")
        }
    case "c":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "e":
            if String(Array(ljmeno)[ljmeno.count - 3]) == "v" {
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "š" ? ("vec", "evče") : ("ec", "če")
            } else {
                replacepair = ("ec", "če")
            }
        case "i":
            replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "o" ? ("", "i") : ("", "u")
        default:
            replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "a" ? ("", "u") : ("", "i")
        }
    case "e":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "n":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "n":
                replacepair = String(Array(ljmeno)[ljmeno.count - 7]) == "b" ? ("", "") : ("e", "o")
            default:
                replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "g" ? ("e", "i") : ("", "")
            }
        case "c":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "i":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "r" ? ("e", "i") : ("", "")
            default:
                replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "v" ? ("", "") : ("e", "i")
            }
        case "d":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "l" ? ("e", "o") : ("", "")
        case "g":
            if String(Array(ljmeno)[ljmeno.count - 3]) == "r" {
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "a" ? ("", "") : ("e", "i")
            } else {
                replacepair = ("e", "i")
            }
        case "l":
            if String(Array(ljmeno)[ljmeno.count - 3]) == "l" {
                switch String(Array(ljmeno)[ljmeno.count - 4]) {
                case "e":
                    replacepair = ("e", "o")
                case "o":
                    replacepair = ("", "")
                default:
                    replacepair = ("e", "i")
                }
            } else {
                replacepair = ("", "")
            }
        case "s":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "s" ? ("e", "i") : ("e", "o")
        case "h":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "t" ? ("", "") : ("e", "i")
        default:
            replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "k" ? ("", "u") : ("", "")
        }
    case "s":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "e":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "n":
                switch String(Array(ljmeno)[ljmeno.count - 4]) {
                case "e":
                    replacepair = ("s", "")
                case "á":
                    replacepair = ("", "i")
                default:
                    replacepair = ("", "")
                }
            case "l":
                switch String(Array(ljmeno)[ljmeno.count - 4]) {
                case "u":
                    replacepair = String(Array(ljmeno)[ljmeno.count - 5]) == "j" ? ("", "i") : ("s", "")
                default:
                    c = String(Array(ljmeno)[ljmeno.count - 4])
                    replacepair = c == "o" || c == "r" ? ("", "i") : ("s", "")
                }
            case "r":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "e" ? ("s", "ro") : ("", "i")
            case "d", "t", "m":
                replacepair = ("s", "")
            case "u":
                replacepair = ("s", "u")
            case "p":
                replacepair = ("es", "se")
            case "x":
                replacepair = ("es", "i")
            default:
                replacepair = ("", "i")
            }
        case "i":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "r":
                if String(Array(ljmeno)[ljmeno.count - 4]) == "a" {
                    replacepair = String(Array(ljmeno)[ljmeno.count - 5]) == "p" ? ("s", "de") : ("s", "to")
                } else {
                    replacepair = ("", "i")
                }
            case "n":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "f" ? ("s", "de") : ("", "i")
            default:
                replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "m" ? ("s", "do") : ("", "i")
            }
        case "o":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "m":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "i" ? ("os", "e") : ("", "i")
            case "k":
                replacepair = ("", "e")
            case "x":
                replacepair = ("os", "i")
            default:
                replacepair = ("os", "e")
            }
        case "a":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "r":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "a" ? ("", "i") : ("as", "e")
            case "l":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "l" ? ("s", "do") : ("", "i")
            default:
                replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "y" ? ("as", "e") : ("", "i")
            }
        case "r":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "a" ? ("s", "te") : ("", "i")
        case "u":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "n":
                switch String(Array(ljmeno)[ljmeno.count - 4]) {
                case "e":
                    replacepair = String(Array(ljmeno)[ljmeno.count - 5]) == "v" ? ("us", "ero") : ("", "i")
                default:
                    replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "g" ? ("", "i") : ("us", "e")
                }
            case "e":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "z" ? ("zeus", "die") : ("us", "e")
            case "m":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "t" ? ("us", "e") : ("", "i")
            case "g", "a":
                replacepair = ("", "i")
            case "h":
                replacepair = ("", "e")
            case "c", "k":
                replacepair = ("s", "")
            default:
                replacepair = ("us", "e")
            }
        case "y":
            replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "a" ? ("", "i") : ("", "")
        default:
            replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "é" ? ("s", "e") : ("", "i")
        }
    case "o":
        replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "l" ? ("", "i") : ("", "")
    case "x":
        replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "n" ? ("x", "go") : ("", "i")
    case "i":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "n":
            replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "e" ? ("", "") : ("", "o")
        case "m":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "a" ? ("", "") : ("", "o")
        case "r":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "i" ? ("", "o") : ("", "")
        default:
            c = String(Array(ljmeno)[ljmeno.count - 2])
            replacepair = c == "s" || c == "a" || c == "o" || c == "c" || c == "t" ? ("", "i") : ("", "")
        }
    case "t":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "i":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "l" ? ("", "e") : ("", "")
        case "u":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "r" ? ("", "") : ("", "e")
        default:
            replacepair = ("", "e")
        }
    case "r":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "e":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "d":
                if String(Array(ljmeno)[ljmeno.count - 4]) == "i" {
                    replacepair = String(Array(ljmeno)[ljmeno.count - 5]) == "e" ? ("", "e") : ("", "i")
                } else {
                    replacepair = ("er", "re")
                }
            case "t":
                switch String(Array(ljmeno)[ljmeno.count - 4]) {
                case "e":
                    replacepair = String(Array(ljmeno)[ljmeno.count - 5]) == "p" ? ("", "e") : ("", "o")
                case "s":
                    replacepair = String(Array(ljmeno)[ljmeno.count - 5]) == "o" ? ("", "e") : ("", "")
                default:
                    replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "n" ? ("", "i") : ("", "e")
                }
            default:
                c = String(Array(ljmeno)[ljmeno.count - 3])
                replacepair = c == "g" || c == "k" ? ("er", "ře") : ("", "e")
            }
        case "a":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "m":
                replacepair = String(Array(ljmeno)[ljmeno.count - 4]) == "g" ? ("", "") : ("", "e")
            case "l":
                replacepair = String(Array(ljmeno)[ljmeno.count - 5]) == "p" ? ("", "") : ("", "e")
            default:
                replacepair = ("", "e")
            }
        case "o":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "n" ? ("", "o") : ("", "e")
        default:
            c = String(Array(ljmeno)[ljmeno.count - 2])
            replacepair = c == "d" || c == "t" || c == "b" ? ("r", "ře") : ("", "e")
        }
    case "j":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "o":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "t" ? ("oj", "ý") : ("", "i")
        case "i":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "d" ? ("", "i") : ("ij", "ý")
        default:
            replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "y" ? ("yj", "ý") : ("", "i")
        }
    case "d":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "i":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "r" ? ("", "") : ("", "e")
        case "u":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "a" ? ("", "") : ("", "e")
        default:
            replacepair = ("", "e")
        }
    case "y":
        c = String(Array(ljmeno)[ljmeno.count - 2])
        replacepair = c == "a" || c == "g" || c == "o" ? ("", "i") : ("", "")
    case "h":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "c":
            switch String(Array(ljmeno)[ljmeno.count - 3]) {
            case "r":
                replacepair = ("", "i")
            case "ý":
                replacepair = ("", "")
            default:
                replacepair = ("", "u")
            }
        case "t":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "e" ? ("", "e") : ("", "i")
        case "a":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "o" ? ("", "u") : ("", "")
        default:
            replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "ů" ? ("ůh", "ože") : ("", "i")
        }
    case "v":
        replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "ů" ? ("", "") : ("", "e")
    case "u":
        replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "t" ? ("", "") : ("", "i")
    case "k":
        switch String(Array(ljmeno)[ljmeno.count - 2]) {
        case "ě":
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "n" ? ("něk", "ňku") : ("k", "če")
        default:
            replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "e" ? ("ek", "ku") : ("", "u")
        }
    case "g":
        if String(Array(ljmeno)[ljmeno.count - 2]) == "i" {
            replacepair = String(Array(ljmeno)[ljmeno.count - 3]) == "e" ? ("", "") : ("", "u")
        } else {
            replacepair = ("", "u")
        }
    case "ň":
        replacepair = String(Array(ljmeno)[ljmeno.count - 2]) == "o" ? ("ň", "ni") : ("ůň", "oni")
    case "f", "p", "b":
        replacepair = ("", "e")
    case "w", "í", "á", "ý", "ů", "é":
        replacepair = ("", "")
    default:
        replacepair = ("", "i")
    }

    if replacepair.0 == "" && replacepair.1 == "" {
        return jmeno
    } else if replacepair.1 == "" {
        return String(jmeno.prefix(jmeno.count - replacepair.0.count))
    } else if replacepair.0 == "" {
        return jmeno + (String(Array(jmeno)[jmeno.count - 1]).lowercased() == String(Array(jmeno)[jmeno.count - 1]) ? replacepair.1 : replacepair.1.uppercased())
    } else {
        var replaceending: String
        replaceending = String(jmeno.suffix(replacepair.0.count))
        if replaceending.uppercased() == replaceending {
            return String(jmeno.prefix(jmeno.count - replacepair.0.count)) + replacepair.1.uppercased()
        } else if replaceending.capitalized == replaceending {
            return String(jmeno.prefix(jmeno.count - replacepair.0.count)) + replacepair.1.capitalized
        } else if String(Array(jmeno)[jmeno.count - 1]).uppercased() == String(Array(jmeno)[jmeno.count - 1]) {
            return String(jmeno.prefix(jmeno.count - replacepair.0.count)) + replacepair.1.uppercased()
        } else {
            return String(jmeno.prefix(jmeno.count - replacepair.0.count)) + replacepair.1
        }
    }
}
