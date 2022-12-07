' Vrací pátý pád jména k prvnímu pádu
'
'     Argumenty:
'     jmeno -- první pád jména
'
Option Explicit
Public Function OSLOVENÍ(ByVal jmeno As String) As String
    Dim ljmeno As String
    ljmeno = " " & LCase(jmeno)
    Dim c As String
    c = Right(ljmeno, 1)
    If c = "a" Then
        Dim replacepair
        replacepair = IIf(Left(Right(ljmeno, 2), 1) = "i", Array("a", "e"), Array("a", "o"))
    ElseIf c = "n" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "o" Then
            If Left(Right(ljmeno, 3), 1) = "i" Then
                replacepair = IIf(Left(Right(ljmeno, 5), 1) = "y", Array("", "e"), Array("", ""))
            Else
                replacepair = Array("", "e")
            End If
        ElseIf c = "i" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "r" Then
                If Left(Right(ljmeno, 4), 1) = "a" Then
                    replacepair = IIf(Left(Right(ljmeno, 5), 1) = "m", Array("", "e"), Array("", ""))
                Else
                    replacepair = Array("", "")
                End If
            ElseIf c = "l" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "r", Array("", "e"), Array("", ""))
            Else
                replacepair = Array("", "e")
            End If
        ElseIf c = "í" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "r", Array("", ""), Array("", "e"))
        ElseIf c = "e" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "m" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "m", Array("", "e"), Array("", ""))
            ElseIf c = "r" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "o", Array("", "e"), Array("", ""))
            Else
                replacepair = Array("", "e")
            End If
        ElseIf c = "y" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "r", Array("", "e"), Array("", ""))
        ElseIf c = "á" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "p", Array("án", "ane"), Array("", "e"))
        Else
            replacepair = IIf(c = "u", Array("", "o"), Array("", "e"))
        End If
    ElseIf c = "l" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "e" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "i" Then
                If Left(Right(ljmeno, 4), 1) = "r" Then
                    replacepair = IIf(Left(Right(ljmeno, 5), 1) = "u", Array("", ""), Array("", "i"))
                Else
                    replacepair = Array("", "i")
                End If
            ElseIf c = "r" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "a", Array("el", "le"), Array("", "i"))
            ElseIf c = "v" Then
                replacepair = IIf(Left(Right(ljmeno, 5), 1) = "p", Array("el", "le"), Array("el", "li"))
            ElseIf c = "k" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "a", Array("", ""), Array("", "i"))
            Else
                replacepair = IIf(c = "h", Array("", ""), Array("", "i"))
            End If
        ElseIf c = "i" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "a", Array("", "o"), Array("", "e"))
        ElseIf c = "ě" Or c = "á" Or c = "s" Then
            replacepair = Array("", "i")
        ElseIf c = "ů" Then
            replacepair = Array("ůl", "ole")
        Else
            replacepair = Array("", "e")
        End If
    ElseIf c = "m" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "a" Then
            If Left(Right(ljmeno, 3), 1) = "i" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "r", Array("", ""), Array("", "e"))
            Else
                replacepair = Array("", "e")
            End If
        Else
            replacepair = IIf(c = "ů", Array("ům", "ome"), Array("", "e"))
        End If
    ElseIf c = "c" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "e" Then
            If Left(Right(ljmeno, 3), 1) = "v" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "š", Array("vec", "evče"), Array("ec", "če"))
            Else
                replacepair = Array("ec", "če")
            End If
        ElseIf c = "i" Then
            replacepair = IIf(Left(Right(ljmeno, 4), 1) = "o", Array("", "i"), Array("", "u"))
        Else
            replacepair = IIf(c = "a", Array("", "u"), Array("", "i"))
        End If
    ElseIf c = "e" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "n" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "n" Then
                replacepair = IIf(Left(Right(ljmeno, 7), 1) = "b", Array("", ""), Array("e", "o"))
            Else
                replacepair = IIf(c = "g", Array("e", "i"), Array("", ""))
            End If
        ElseIf c = "c" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "i" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "r", Array("e", "i"), Array("", ""))
            Else
                replacepair = IIf(c = "v", Array("", ""), Array("e", "i"))
            End If
        ElseIf c = "d" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "l", Array("e", "o"), Array("", ""))
        ElseIf c = "g" Then
            If Left(Right(ljmeno, 3), 1) = "r" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "a", Array("", ""), Array("e", "i"))
            Else
                replacepair = Array("e", "i")
            End If
        ElseIf c = "l" Then
            If Left(Right(ljmeno, 3), 1) = "l" Then
                c = Left(Right(ljmeno, 4), 1)
                If c = "e" Then
                    replacepair = Array("e", "o")
                ElseIf c = "o" Then
                    replacepair = Array("", "")
                Else
                    replacepair = Array("e", "i")
                End If
            Else
                replacepair = Array("", "")
            End If
        ElseIf c = "s" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "s", Array("e", "i"), Array("e", "o"))
        ElseIf c = "h" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "t", Array("", ""), Array("e", "i"))
        Else
            replacepair = IIf(c = "k", Array("", "u"), Array("", ""))
        End If
    ElseIf c = "s" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "e" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "n" Then
                c = Left(Right(ljmeno, 4), 1)
                If c = "e" Then
                    replacepair = Array("s", "")
                ElseIf c = "á" Then
                    replacepair = Array("", "i")
                Else
                    replacepair = Array("", "")
                End If
            ElseIf c = "l" Then
                c = Left(Right(ljmeno, 4), 1)
                If c = "u" Then
                    replacepair = IIf(Left(Right(ljmeno, 5), 1) = "j", Array("", "i"), Array("s", ""))
                Else
                    replacepair = IIf(c = "o" Or c = "r", Array("", "i"), Array("s", ""))
                End If
            ElseIf c = "r" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "e", Array("s", "ro"), Array("", "i"))
            ElseIf c = "d" Or c = "t" Or c = "m" Then
                replacepair = Array("s", "")
            ElseIf c = "u" Then
                replacepair = Array("s", "u")
            ElseIf c = "p" Then
                replacepair = Array("es", "se")
            ElseIf c = "x" Then
                replacepair = Array("es", "i")
            Else
                replacepair = Array("", "i")
            End If
        ElseIf c = "i" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "r" Then
                If Left(Right(ljmeno, 4), 1) = "a" Then
                    replacepair = IIf(Left(Right(ljmeno, 5), 1) = "p", Array("s", "de"), Array("s", "to"))
                Else
                    replacepair = Array("", "i")
                End If
            ElseIf c = "n" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "f", Array("s", "de"), Array("", "i"))
            Else
                replacepair = IIf(c = "m", Array("s", "do"), Array("", "i"))
            End If
        ElseIf c = "o" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "m" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "i", Array("os", "e"), Array("", "i"))
            ElseIf c = "k" Then
                replacepair = Array("", "e")
            ElseIf c = "x" Then
                replacepair = Array("os", "i")
            Else
                replacepair = Array("os", "e")
            End If
        ElseIf c = "a" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "r" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "a", Array("", "i"), Array("as", "e"))
            ElseIf c = "l" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "l", Array("s", "do"), Array("", "i"))
            Else
                replacepair = IIf(c = "y", Array("as", "e"), Array("", "i"))
            End If
        ElseIf c = "r" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "a", Array("s", "te"), Array("", "i"))
        ElseIf c = "u" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "n" Then
                c = Left(Right(ljmeno, 4), 1)
                If c = "e" Then
                    replacepair = IIf(Left(Right(ljmeno, 5), 1) = "v", Array("us", "ero"), Array("", "i"))
                Else
                    replacepair = IIf(c = "g", Array("", "i"), Array("us", "e"))
                End If
            ElseIf c = "e" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "z", Array("zeus", "die"), Array("us", "e"))
            ElseIf c = "m" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "t", Array("us", "e"), Array("", "i"))
            ElseIf c = "g" Or c = "a" Then
                replacepair = Array("", "i")
            ElseIf c = "h" Then
                replacepair = Array("", "e")
            ElseIf c = "c" Or c = "k" Then
                replacepair = Array("s", "")
            Else
                replacepair = Array("us", "e")
            End If
        ElseIf c = "y" Then
            replacepair = IIf(Left(Right(ljmeno, 4), 1) = "a", Array("", "i"), Array("", ""))
        Else
            replacepair = IIf(c = "é", Array("s", "e"), Array("", "i"))
        End If
    ElseIf c = "o" Then
        replacepair = IIf(Left(Right(ljmeno, 2), 1) = "l", Array("", "i"), Array("", ""))
    ElseIf c = "x" Then
        replacepair = IIf(Left(Right(ljmeno, 2), 1) = "n", Array("x", "go"), Array("", "i"))
    ElseIf c = "i" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "n" Then
            replacepair = IIf(Left(Right(ljmeno, 4), 1) = "e", Array("", ""), Array("", "o"))
        ElseIf c = "m" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "a", Array("", ""), Array("", "o"))
        ElseIf c = "r" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "i", Array("", "o"), Array("", ""))
        Else
            replacepair = IIf(c = "s" Or c = "a" Or c = "o" Or c = "c" Or c = "t", Array("", "i"), Array("", ""))
        End If
    ElseIf c = "t" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "i" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "l", Array("", "e"), Array("", ""))
        ElseIf c = "u" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "r", Array("", ""), Array("", "e"))
        Else
            replacepair = Array("", "e")
        End If
    ElseIf c = "r" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "e" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "d" Then
                If Left(Right(ljmeno, 4), 1) = "i" Then
                    replacepair = IIf(Left(Right(ljmeno, 5), 1) = "e", Array("", "e"), Array("", "i"))
                Else
                    replacepair = Array("er", "re")
                End If
            ElseIf c = "t" Then
                c = Left(Right(ljmeno, 4), 1)
                If c = "e" Then
                    replacepair = IIf(Left(Right(ljmeno, 5), 1) = "p", Array("", "e"), Array("", "o"))
                ElseIf c = "s" Then
                    replacepair = IIf(Left(Right(ljmeno, 5), 1) = "o", Array("", "e"), Array("", ""))
                Else
                    replacepair = IIf(c = "n", Array("", "i"), Array("", "e"))
                End If
            Else
                replacepair = IIf(c = "g" Or c = "k", Array("er", "ře"), Array("", "e"))
            End If
        ElseIf c = "a" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "m" Then
                replacepair = IIf(Left(Right(ljmeno, 4), 1) = "g", Array("", ""), Array("", "e"))
            ElseIf c = "l" Then
                replacepair = IIf(Left(Right(ljmeno, 5), 1) = "p", Array("", ""), Array("", "e"))
            Else
                replacepair = Array("", "e")
            End If
        ElseIf c = "o" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "n", Array("", "o"), Array("", "e"))
        Else
            replacepair = IIf(c = "d" Or c = "t" Or c = "b", Array("r", "ře"), Array("", "e"))
        End If
    ElseIf c = "j" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "o" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "t", Array("oj", "ý"), Array("", "i"))
        ElseIf c = "i" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "d", Array("", "i"), Array("ij", "ý"))
        Else
            replacepair = IIf(c = "y", Array("yj", "ý"), Array("", "i"))
        End If
    ElseIf c = "d" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "i" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "r", Array("", ""), Array("", "e"))
        ElseIf c = "u" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "a", Array("", ""), Array("", "e"))
        Else
            replacepair = Array("", "e")
        End If
    ElseIf c = "y" Then
        c = Left(Right(ljmeno, 2), 1)
        replacepair = IIf(c = "a" Or c = "g" Or c = "o", Array("", "i"), Array("", ""))
    ElseIf c = "h" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "c" Then
            c = Left(Right(ljmeno, 3), 1)
            If c = "r" Then
                replacepair = Array("", "i")
            ElseIf c = "ý" Then
                replacepair = Array("", "")
            Else
                replacepair = Array("", "u")
            End If
        ElseIf c = "t" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "e", Array("", "e"), Array("", "i"))
        ElseIf c = "a" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "o", Array("", "u"), Array("", ""))
        Else
            replacepair = IIf(c = "ů", Array("ůh", "ože"), Array("", "i"))
        End If
    ElseIf c = "v" Then
        replacepair = IIf(Left(Right(ljmeno, 2), 1) = "ů", Array("", ""), Array("", "e"))
    ElseIf c = "u" Then
        replacepair = IIf(Left(Right(ljmeno, 2), 1) = "t", Array("", ""), Array("", "i"))
    ElseIf c = "k" Then
        c = Left(Right(ljmeno, 2), 1)
        If c = "ě" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "n", Array("něk", "ňku"), Array("k", "če"))
        Else
            replacepair = IIf(c = "e", Array("ek", "ku"), Array("", "u"))
        End If
    ElseIf c = "g" Then
        If Left(Right(ljmeno, 2), 1) = "i" Then
            replacepair = IIf(Left(Right(ljmeno, 3), 1) = "e", Array("", ""), Array("", "u"))
        Else
            replacepair = Array("", "u")
        End If
    ElseIf c = "ň" Then
        replacepair = IIf(Left(Right(ljmeno, 2), 1) = "o", Array("ň", "ni"), Array("ůň", "oni"))
    ElseIf c = "ď" Then
        replacepair = Array("ď", "di")
    ElseIf c = "ť" Then
        replacepair = Array("ť", "ti")
    ElseIf c = "f" Or c = "p" Or c = "b" Then
        replacepair = Array("", "e")
    ElseIf c = "w" Or c = "í" Or c = "á" Or c = "ý" Or c = "ů" Or c = "é" Then
        replacepair = Array("", "")
    Else
        replacepair = Array("", "i")
    End If
    If replacepair(0) = "" And replacepair(1) = "" Then
        OSLOVENÍ = jmeno
    ElseIf replacepair(1) = "" Then
        OSLOVENÍ = Left(jmeno, Len(jmeno) - Len(replacepair(0)))
    ElseIf replacepair(0) = "" Then
        OSLOVENÍ = jmeno & IIf(Right(jmeno, 1) = LCase(Right(jmeno, 1)), replacepair(1), UCase(replacepair(1)))
    Else
        Dim replaceending
        replaceending = Right(jmeno, Len(replacepair(0)))
        If replaceending = UCase(replaceending) Then
            OSLOVENÍ = Left(jmeno, Len(jmeno) - Len(replacepair(0))) & UCase(replacepair(1))
        ElseIf Left(replaceending, 1) = UCase(Left(replaceending, 1)) Then
            OSLOVENÍ = Left(jmeno, Len(jmeno) - Len(replacepair(0))) & StrConv(replacepair(1), vbProperCase)
        ElseIf Right(jmeno, 1) = UCase(Right(jmeno, 1)) Then
            OSLOVENÍ = Left(jmeno, Len(jmeno) - Len(replacepair(0))) & UCase(replacepair(1))
        Else
            OSLOVENÍ = Left(jmeno, Len(jmeno) - Len(replacepair(0))) & replacepair(1)
        End If
    End If
End Function