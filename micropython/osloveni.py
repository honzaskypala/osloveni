def osloveni(jmeno):
    """Vrací pátý pád jména k prvnímu pádu

    Argumenty:
    jmeno -- první pád jména
    """
    ljmeno = ' ' + jmeno.lower()
    c = ljmeno[-1]
    if c == 'a':
        replacepair = ('a', 'e') if ljmeno[-2] == 'i' else ('a', 'o')
    elif c == 'n':
        c = ljmeno[-2]
        if c == 'o':
            if ljmeno[-3] == 'i':
                replacepair = ('', 'e') if ljmeno[-5] == 'y' else ('', '')
            else:
                replacepair = ('', 'e')
        elif c == 'i':
            c = ljmeno[-3]
            if c == 'r':
                if ljmeno[-4] == 'a':
                    replacepair = ('', 'e') if ljmeno[-5] == 'm' else ('', '')
                else:
                    replacepair = ('', '')
            elif c == 'l':
                replacepair = ('', 'e') if ljmeno[-4] == 'r' else ('', '')
            else:
                replacepair = ('', 'e')
        elif c == 'í':
            replacepair = ('', '') if ljmeno[-3] == 'r' else ('', 'e')
        elif c == 'e':
            c = ljmeno[-3]
            if c == 'm':
                replacepair = ('', 'e') if ljmeno[-4] == 'm' else ('', '')
            elif c == 'r':
                replacepair = ('', 'e') if ljmeno[-4] == 'o' else ('', '')
            else:
                replacepair = ('', 'e')
        elif c == 'y':
            replacepair = ('', 'e') if ljmeno[-3] == 'r' else ('', '')
        else:
            replacepair = ('', 'o') if c == 'u' else ('', 'e')
    elif c == 'l':
        c = ljmeno[-2]
        if c == 'e':
            c = ljmeno[-3]
            if c == 'i':
                if ljmeno[-4] == 'r':
                    replacepair = ('', '') if ljmeno[-5] == 'u' else ('', 'i')
                else:
                    replacepair = ('', 'i')
            elif c == 'r':
                replacepair = ('el', 'le') if ljmeno[-4] == 'a' else ('', 'i')
            elif c == 'v':
                replacepair = ('el', 'le') if ljmeno[-5] == 'p' else ('el', 'li')
            elif c == 'k':
                replacepair = ('', '') if ljmeno[-4] == 'a' else ('', 'i')
            else:
                replacepair = ('', '') if c == 'h' else ('', 'i')
        elif c == 'i':
            replacepair = ('', 'o') if ljmeno[-3] == 'a' else ('', 'e')
        elif c == 'ě' or c == 'á' or c == 's':
            replacepair = ('', 'i')
        elif c == 'ů':
            replacepair = ('ůl', 'ole')
        else:
            replacepair = ('', 'e')
    elif c == 'm':
        c = ljmeno[-2]
        if c == 'a':
            if ljmeno[-3] == 'i':
                replacepair = ('', '') if ljmeno[-4] == 'r' else ('', 'e')
            else:
                replacepair = ('', 'e')
        else:
            replacepair = ('ům', 'ome') if c == 'ů' else ('', 'e')
    elif c == 'c':
        c = ljmeno[-2]
        if c == 'e':
            if ljmeno[-3] == 'v':
                replacepair = ('vec', 'evče') if ljmeno[-4] == 'š' else ('ec', 'če')
            else:
                replacepair = ('ec', 'če')
        elif c == 'i':
            replacepair = ('', 'i') if ljmeno[-4] == 'o' else ('', 'u')
        else:
            replacepair = ('', 'u') if c == 'a' else ('', 'i')
    elif c == 'e':
        c = ljmeno[-2]
        if c == 'n':
            c = ljmeno[-3]
            if c == 'n':
                replacepair = ('', '') if ljmeno[-7] == 'b' else ('e', 'o')
            else:
                replacepair = ('e', 'i') if c == 'g' else ('', '')
        elif c == 'c':
            c = ljmeno[-3]
            if c == 'i':
                replacepair = ('e', 'i') if ljmeno[-4] == 'r' else ('', '')
            else:
                replacepair = ('', '') if c == 'v' else ('e', 'i')
        elif c == 'd':
            replacepair = ('e', 'o') if ljmeno[-3] == 'l' else ('', '')
        elif c == 'g':
            if ljmeno[-3] == 'r':
                replacepair = ('', '') if ljmeno[-4] == 'a' else ('e', 'i')
            else:
                replacepair = ('e', 'i')
        elif c == 'l':
            if ljmeno[-3] == 'l':
                c = ljmeno[-4]
                if c == 'e':
                    replacepair = ('e', 'o')
                elif c == 'o':
                    replacepair = ('', '')
                else:
                    replacepair = ('e', 'i')
            else:
                replacepair = ('', '')
        elif c == 's':
            replacepair = ('e', 'i') if ljmeno[-3] == 's' else ('e', 'o')
        elif c == 'h':
            replacepair = ('', '') if ljmeno[-3] == 't' else ('e', 'i')
        else:
            replacepair = ('', 'u') if c == 'k' else ('', '')
    elif c == 's':
        c = ljmeno[-2]
        if c == 'e':
            c = ljmeno[-3]
            if c == 'n':
                c = ljmeno[-4]
                if c == 'e':
                    replacepair = ('s', '')
                elif c == 'á':
                    replacepair = ('', 'i')
                else:
                    replacepair = ('', '')
            elif c == 'l':
                c = ljmeno[-4]
                if c == 'u':
                    replacepair = ('', 'i') if ljmeno[-5] == 'j' else ('s', '')
                else:
                    replacepair = ('', 'i') if c == 'o' or c == 'r' else ('s', '')
            elif c == 'r':
                replacepair = ('s', 'ro') if ljmeno[-4] == 'e' else ('', 'i')
            elif c == 'd' or c == 't' or c == 'm':
                replacepair = ('s', '')
            elif c == 'u':
                replacepair = ('s', 'u')
            elif c == 'p':
                replacepair = ('es', 'se')
            elif c == 'x':
                replacepair = ('es', 'i')
            else:
                replacepair = ('', 'i')
        elif c == 'i':
            c = ljmeno[-3]
            if c == 'r':
                if ljmeno[-4] == 'a':
                    replacepair = ('s', 'de') if ljmeno[-5] == 'p' else ('s', 'to')
                else:
                    replacepair = ('', 'i')
            elif c == 'n':
                replacepair = ('s', 'de') if ljmeno[-4] == 'f' else ('', 'i')
            else:
                replacepair = ('s', 'do') if c == 'm' else ('', 'i')
        elif c == 'o':
            c = ljmeno[-3]
            if c == 'm':
                replacepair = ('os', 'e') if ljmeno[-4] == 'i' else ('', 'i')
            elif c == 'k':
                replacepair = ('', 'e')
            elif c == 'x':
                replacepair = ('os', 'i')
            else:
                replacepair = ('os', 'e')
        elif c == 'a':
            c = ljmeno[-3]
            if c == 'r':
                replacepair = ('', 'i') if ljmeno[-4] == 'a' else ('as', 'e')
            elif c == 'l':
                replacepair = ('s', 'do') if ljmeno[-4] == 'l' else ('', 'i')
            else:
                replacepair = ('as', 'e') if c == 'y' else ('', 'i')
        elif c == 'r':
            replacepair = ('s', 'te') if ljmeno[-3] == 'a' else ('', 'i')
        elif c == 'u':
            c = ljmeno[-3]
            if c == 'n':
                c = ljmeno[-4]
                if c == 'e':
                    replacepair = ('us', 'ero') if ljmeno[-5] == 'v' else ('', 'i')
                else:
                    replacepair = ('', 'i') if c == 'g' else ('us', 'e')
            elif c == 'e':
                replacepair = ('zeus', 'die') if ljmeno[-4] == 'z' else ('us', 'e')
            elif c == 'm':
                replacepair = ('us', 'e') if ljmeno[-4] == 't' else ('', 'i')
            elif c == 'g' or c == 'a':
                replacepair = ('', 'i')
            elif c == 'h':
                replacepair = ('', 'e')
            elif c == 'c' or c == 'k':
                replacepair = ('s', '')
            else:
                replacepair = ('us', 'e')
        elif c == 'y':
            replacepair = ('', 'i') if ljmeno[-4] == 'a' else ('', '')
        else:
            replacepair = ('s', 'e') if c == 'é' else ('', 'i')
    elif c == 'o':
        replacepair = ('', 'i') if ljmeno[-2] == 'l' else ('', '')
    elif c == 'x':
        replacepair = ('x', 'go') if ljmeno[-2] == 'n' else ('', 'i')
    elif c == 'i':
        c = ljmeno[-2]
        if c == 'n':
            replacepair = ('', '') if ljmeno[-4] == 'e' else ('', 'o')
        elif c == 'm':
            replacepair = ('', '') if ljmeno[-3] == 'a' else ('', 'o')
        elif c == 'r':
            replacepair = ('', 'o') if ljmeno[-3] == 'i' else ('', '')
        else:
            replacepair = ('', 'i') if c == 's' or c == 'a' or c == 'o' or c == 'c' or c == 't' else ('', '')
    elif c == 't':
        c = ljmeno[-2]
        if c == 'i':
            replacepair = ('', 'e') if ljmeno[-3] == 'l' else ('', '')
        elif c == 'u':
            replacepair = ('', '') if ljmeno[-3] == 'r' else ('', 'e')
        else:
            replacepair = ('', 'e')
    elif c == 'r':
        c = ljmeno[-2]
        if c == 'e':
            c = ljmeno[-3]
            if c == 'd':
                if ljmeno[-4] == 'i':
                    replacepair = ('', 'e') if ljmeno[-5] == 'e' else ('', 'i')
                else:
                    replacepair = ('er', 're')
            elif c == 't':
                c = ljmeno[-4]
                if c == 'e':
                    replacepair = ('', 'e') if ljmeno[-5] == 'p' else ('', 'o')
                elif c == 's':
                    replacepair = ('', 'e') if ljmeno[-5] == 'o' else ('', '')
                else:
                    replacepair = ('', 'i') if c == 'n' else ('', 'e')
            else:
                replacepair = ('er', 'ře') if c == 'g' or c == 'k' else ('', 'e')
        elif c == 'a':
            c = ljmeno[-3]
            if c == 'm':
                replacepair = ('', '') if ljmeno[-4] == 'g' else ('', 'e')
            elif c == 'l':
                replacepair = ('', '') if ljmeno[-5] == 'p' else ('', 'e')
            else:
                replacepair = ('', 'e')
        elif c == 'o':
            replacepair = ('', 'o') if ljmeno[-3] == 'n' else ('', 'e')
        else:
            replacepair = ('r', 'ře') if c == 'd' or c == 't' or c == 'b' else ('', 'e')
    elif c == 'j':
        c = ljmeno[-2]
        if c == 'o':
            replacepair = ('oj', 'ý') if ljmeno[-3] == 't' else ('', 'i')
        elif c == 'i':
            replacepair = ('', 'i') if ljmeno[-3] == 'd' else ('ij', 'ý')
        else:
            replacepair = ('yj', 'ý') if c == 'y' else ('', 'i')
    elif c == 'd':
        c = ljmeno[-2]
        if c == 'i':
            replacepair = ('', '') if ljmeno[-3] == 'r' else ('', 'e')
        elif c == 'u':
            replacepair = ('', '') if ljmeno[-3] == 'a' else ('', 'e')
        else:
            replacepair = ('', 'e')
    elif c == 'y':
        c = ljmeno[-2]
        replacepair = ('', 'i') if c == 'a' or c == 'g' or c == 'o' else ('', '')
    elif c == 'h':
        c = ljmeno[-2]
        if c == 'c':
            c = ljmeno[-3]
            if c == 'r':
                replacepair = ('', 'i')
            elif c == 'ý':
                replacepair = ('', '')
            else:
                replacepair = ('', 'u')
        elif c == 't':
            replacepair = ('', 'e') if ljmeno[-3] == 'e' else ('', 'i')
        elif c == 'a':
            replacepair = ('', 'u') if ljmeno[-3] == 'o' else ('', '')
        else:
            replacepair = ('ůh', 'ože') if c == 'ů' else ('', 'i')
    elif c == 'v':
        replacepair = ('', '') if ljmeno[-2] == 'ů' else ('', 'e')
    elif c == 'u':
        replacepair = ('', '') if ljmeno[-2] == 't' else ('', 'i')
    elif c == 'k':
        c = ljmeno[-2]
        if c == 'ě':
            replacepair = ('něk', 'ňku') if ljmeno[-3] == 'n' else ('k', 'če')
        else:
            replacepair = ('ek', 'ku') if c == 'e' else ('', 'u')
    elif c == 'g':
        if ljmeno[-2] == 'i':
            replacepair = ('', '') if ljmeno[-3] == 'e' else ('', 'u')
        else:
            replacepair = ('', 'u')
    elif c == 'ň':
        replacepair = ('ň', 'ni') if ljmeno[-2] == 'o' else ('ůň', 'oni')
    elif c == 'f' or c == 'p' or c == 'b':
        replacepair = ('', 'e')
    elif c == 'w' or c == 'í' or c == 'á' or c == 'ý' or c == 'ů' or c == 'é':
        replacepair = ('', '')
    else:
        replacepair = ('', 'i')

    if replacepair[0] == '' and replacepair[1] == '':
        return jmeno
    elif replacepair[1] == '':
        return jmeno[:-len(replacepair[0])]
    elif replacepair[0] == '':
        return jmeno + (replacepair[1] if jmeno[-1].islower() else replacepair[1].upper())
    else:
        replaceending = jmeno[-len(replacepair[0]):]
        if replaceending.isupper():
            return jmeno[:-len(replacepair[0])] + replacepair[1].upper()
        elif replaceending[0].isupper() and replaceending[1:].islower():
            return jmeno[:-len(replacepair[0])] + replacepair[1][0].upper() + replacepair[1][1:].lower()
        elif jmeno[-1].isupper():
            return jmeno[:-len(replacepair[0])] + replacepair[1].upper()
        else:
            return jmeno[:-len(replacepair[0])] + replacepair[1]
