WORDS_FILE = "words.txt"

import os
import codecs
fin  = codecs.open(os.path.dirname(__file__) + "/" + WORDS_FILE,  "r", "utf-8")
fout = codecs.open(os.path.dirname(__file__) + "/" + WORDS_FILE + ".tmp", "w", "utf-8")

suffixes = {}
names = {}

def process_couple(nominativ, vocativ):
    # find the match of the cases
    if nominativ == vocativ[0:len(nominativ)]:
        i = len(nominativ) - 1
        suffix = nominativ[i: len(nominativ)]
        suffix_vocativ = vocativ[i: len(vocativ)]
    elif vocativ == nominativ[0:len(vocativ)]:
        i = len(vocativ) - 1
        suffix = nominativ[i: len(nominativ)]
        suffix_vocativ = vocativ[i: len(vocativ)]
    else:
        for i in range(0, len(nominativ)):
            if nominativ[i] != vocativ[i]:
                break
        suffix = nominativ[i: len(nominativ)]
        suffix_vocativ = vocativ[i: len(vocativ)]


    search_suffix = nominativ[-1]
    if search_suffix in suffixes:
        if suffix == suffix_vocativ[ : len(suffix)]:
            suffix_vocativ = suffix_vocativ[ len(suffix) : ]
            suffix = ""
        elif suffix_vocativ == suffix[ : len(suffix_vocativ)]:
            suffix = suffix[len(suffix_vocativ) : ]
            suffix_vocativ = ""
        suf_ex_new = False
        suf_ex = search_suffix
        (suf1, suf2, suf3) = suffixes[search_suffix]
        while suf1 == "-":
            suf_ex = nominativ[len(nominativ) - len(suf_ex) - 1 : len(nominativ) - len(suf_ex)] + suf_ex
            if suf_ex in suffixes:
                (suf1, suf2, suf3) = suffixes[suf_ex]
            else:
                suf_ex_new = True
                suffixes[suf_ex] = (suf_ex, suffix, suffix_vocativ)
                names[suf_ex] = [nominativ]
                break
        search_suffix = suf_ex

        if not nominativ in names[search_suffix] and not suf_ex_new:
            if suffix == suf2 and suffix_vocativ == suf3:
                names[search_suffix].append(nominativ)
            else:
                max_dif_len = 0
                for name in names[search_suffix]:
                    for l in range(-len(search_suffix) - 1, -max(len(name), len(nominativ)) - 1, -1):
                        if name[l] != nominativ[l]:
                            break
                    new_suf = name[len(name) + l : len(name) - len(suf1)] + suf1
                    if not new_suf in suffixes:
                        suffixes[new_suf] = (new_suf, suf2, suf3)
                        names[new_suf] = []
                    for j in range(len(suf1), -l - 1):
                        suffixes[name[-j - 1 : -len(suf1)] + suf1] = ("-", "-", "-")
                    names[new_suf].append(name)
                    if -l > max_dif_len:
                        max_dif_len = -l
                names[suf1] = []
                suffixes[suf1] = ("-", "-", "-")
                new_suf = nominativ[len(nominativ) - max_dif_len : len(nominativ) - len(suf1)] + suf1
                suffixes[new_suf] = (new_suf, suffix, suffix_vocativ)
                names[new_suf] = [nominativ]

    else:
        if suffix == suffix_vocativ[ : len(suffix)]:
            suffix_vocativ = suffix_vocativ[len(suffix):]
            suf2 = ""
        elif suffix_vocativ == suffix[ : len(suffix_vocativ)]:
            suf2 = suffix[ : len(suffix_vocativ)]
            suffix_vocativ = ""
        else:
            suf2 = suffix
        suffixes[suffix] = (suffix, suf2, suffix_vocativ)
        names[suffix] = []
        names[suffix].append(nominativ)

        for i in range(1, len(suffix)):
            sub_suf = suffix[i:]
            if not sub_suf in suffixes:
                suffixes[sub_suf] = ("-", "-", "-")
            else:
                (suf1, suf2, suf3) = suffixes[sub_suf]
                if suf1 != '-':
                    for name in names[suf1]:
                        dif_len = i
                        new_suf = name[len(name) - len(suf1) - dif_len : len(name) - len(suf1)] + suf1
                        if not new_suf in suffixes:
                            suffixes[new_suf] = (new_suf, suf2, suf3)
                            names[new_suf] = []
                        for j in range(1, dif_len):
                            dummy_suffix = name[len(name) - len(suf1) - dif_len + j : len(name) - len(suf1)] + suf1
                            suffixes[dummy_suffix] = ("-", "-", "-")
                        names[new_suf].append(name)
                    names[suf1] = []
                    suffixes[suf1] = ("-", "-", "-")

for line in fin:
    fout.write(line)

    # get the nominativ and vocativ case of the word
    (nominativ, vocativ) = line.split(";")
    if nominativ[0] == '\ufeff':
        nominativ = nominativ[1:]
    nominativ = nominativ.strip()
    vocativ = vocativ.strip()

    process_couple(nominativ.lower(), vocativ.lower())

fin.close()

fin  = codecs.open(os.path.dirname(__file__) + "newnames.txt",  "r", "utf-8")
for line in fin:
    nominativ = line
    if nominativ[0] == '\ufeff':
        nominativ = nominativ[1:]
    nominativ = nominativ.strip()

    if nominativ == "":
        continue

    vocativ = ''
    for suffix in suffixes:
        (suf1, suf2, suf3) = suffixes[suffix]
        if nominativ[-len(suf1) : ] == suf1:
            vocativ = nominativ[ : len(nominativ) - len(suf2)] + suf3
            break

    if vocativ != "":
        if nominativ in names[suf1]:
            continue
        new_vocativ = input(nominativ + " ; [" + vocativ + "] : ")
        if new_vocativ == "":
            new_vocativ = vocativ
    else:
        new_vocativ = input(nominativ + " ; [???] : ")

    process_couple(nominativ, new_vocativ)
    fout.write(nominativ + ";" + new_vocativ + "\n")

fout.close()

import os
os.remove(WORDS_FILE)
os.rename(WORDS_FILE + ".tmp", WORDS_FILE)

i = 1
suffixTree = {}
while True:
    subSuf = {k: v for k, v in suffixes.items() if len(k) == i}
    if len(subSuf) == 0:
        break
    else:
        for k, (suf1, suf2, suf3) in subSuf.items():
            node = suffixTree #root
            for j in range(len(k) - 1, 0, -1):
                node = node[k[j]]
            node[k[0]] = {} if suf1 == '-' else len(names[suf1])
        i += 1

from configs import configs

def generateEqualCond(depth, config, var, c):
    return config["equal"].format(exp1=var, exp2=config["charquote"] + c + config["charquote"])

def generateIfCondition(i, depth, config, var, c, usefetchedchar):
    if type(c) is list:
        for j in range(len(c)):
            exp1 = config["var"].format(varname="c") if usefetchedchar else config["charatpos"].format(var=var, pos=str(-depth) if "strnegativepos" in config and config["strnegativepos"] else config["strlen"].format(var=var) + " - " + str(depth))
            cond = generateEqualCond(depth, config, exp1, c[j]) if j == 0 else config["or"].format(exp1=cond, exp2=generateEqualCond(depth, config, exp1, c[j]))
    else:
        exp1 = config["var"].format(varname="c") if usefetchedchar else config["charatpos"].format(var=var, pos=str(-depth) if "strnegativepos" in config and config["strnegativepos"] else config["strlen"].format(var=var) + " - " + str(depth))
        cond = generateEqualCond(depth, config, exp1, c)
    return config["if" if i == 0 else "elseif"].format(cond=cond)

def generateReplace(config, var, replacewhat, replaceby):
    ret = var if replacewhat == "" else config["leftstr"].format(var=var, length=str(-len(replacewhat)) if "strnegativepos" in config and config["strnegativepos"] else config["strlen"].format(var=var) + " - " + str(len(replacewhat)))
    if replaceby != "":
        ret = config["concat"].format(str1=ret, str2=config["strquote"] + replaceby + config["strquote"])
    return ret

def generateCodeTree(node, depth, config, fout, suffix = "", indentLevel = 0):
    if len(node) == 1 and type(next (iter (node.values()))) is dict:
        for key, subnode in node.items():
            generateCodeTree(subnode, depth + 1, config, fout, key + suffix, indentLevel)
        return
    i = 0
    if indentLevel == 0:
        indentLevel = depth
    indent = config["indent"] * indentLevel
    var = config["var"].format(varname="ljmeno")
    non_leafs = {k: v for k, v in node.items() if type(v) is dict}
    leafs = {k: v for k, v in node.items() if type(v) is int}
    if len(leafs) > 0:
        suffixLeafs = {}
        for k, leaf in leafs.items():
            (suf1, suf2, suf3) = suffixes[k + suffix]
            sufIndex = suf2 + '|' + suf3
            if not sufIndex in suffixLeafs:
                suffixLeafs[sufIndex] = []
            suffixLeafs[sufIndex].append(k)
    usefetchedchar = False
    if ("switchsupport" not in config or not config["switchsupport"]) and "fetchcharoptimization" in config and config["fetchcharoptimization"] and (len(non_leafs) > 1 or len(non_leafs) + len(suffixLeafs) > 2):
        fout.write(indent + config["assignement"].format(var=config["var"].format(varname="c"), exp=config["charatpos"].format(var=var, pos=str(-depth) if "strnegativepos" in config and config["strnegativepos"] else config["strlen"].format(var=var) + " - " + str(depth))) + "\n")
        usefetchedchar = True
    if "switchsupport" in config and config["switchsupport"] and len(non_leafs) + len(suffixLeafs) > 2:
        fout.write(indent + config["switch"].format(var=config["charatpos"].format(var=var, pos=str(-depth) if "strnegativepos" in config and config["strnegativepos"] else config["strlen"].format(var=var) + " - " + str(depth))) + "\n")
    for key, subnode in non_leafs.items():
        fout.write(indent + (config["case"].format(exp=config["charquote"] + key + config["charquote"]) if "switchsupport" in config and config["switchsupport"] and len(non_leafs) + len(suffixLeafs) > 2 else generateIfCondition(i, depth, config, var, key, usefetchedchar)) + "\n")
        generateCodeTree(subnode, depth + 1, config, fout, key + suffix, indentLevel + 1)
        if "switchsupport" in config and config["switchsupport"] and "endcase" in config and len(non_leafs) + len(suffixLeafs) > 2:
            fout.write(indent + config["endcase"] + "\n")
        i += 1
    if len(leafs) > 0:
        suffixFreq = {k2: len(x) for k2, x in suffixLeafs.items()}
        mostFrequency = 0
        for key, freq in suffixFreq.items():
            if freq > mostFrequency:
                (mostFrequency, mostFreqSuffix) = (freq, key)
        if "conditional" in config and len(suffixLeafs) == 2:
            for key, sufList in suffixLeafs.items():
                if mostFreqSuffix == key:
                    (mostfreqreplacewhat, mostfreqreplaceby) = key.split("|")
                else:
                    (lessfreqreplacewhat, lessfreqreplaceby) = key.split("|")
                    usefetchedchar2 = usefetchedchar
                    if len(sufList) > 1:
                        usefetchedchar2 = True
                    for j in range(len(sufList)):
                        exp1 = config["var"].format(varname="c") if usefetchedchar2 else config["charatpos"].format(var=var, pos=str(-depth) if "strnegativepos" in config and config["strnegativepos"] else config["strlen"].format(var=var) + " - " + str(depth))
                        cond = generateEqualCond(depth, config, exp1, sufList[j]) if j == 0 else config["or"].format(exp1=cond, exp2=generateEqualCond(depth, config, exp1, sufList[j]))
            moreindent = ""
            if i > 0:
                fout.write(indent + config["default" if "switchsupport" in config and config["switchsupport"] and (len(suffixLeafs) + len(non_leafs)) > 2 else "else"] + "\n")
                moreindent = config["indent"]
            if usefetchedchar2 and not usefetchedchar:
                fout.write(indent + moreindent + config["assignement"].format(var=config["var"].format(varname="c"), exp=config["charatpos"].format(var=var, pos=str(-depth) if "strnegativepos" in config and config["strnegativepos"] else config["strlen"].format(var=var) + " - " + str(depth))) + "\n")
            fout.write(indent + moreindent + config["assignement"].format(var=config["var"].format(varname="replacepair"), exp=config["conditional"].format(cond=cond, exp1=config["tuple"].format(exp1=config["strquote"] + lessfreqreplacewhat + config["strquote"], exp2=config["strquote"] + lessfreqreplaceby + config["strquote"]), exp2=config["tuple"].format(exp1=config["strquote"] + mostfreqreplacewhat + config["strquote"], exp2=config["strquote"] + mostfreqreplaceby + config["strquote"]))) + "\n")
            if "switchsupport" in config and config["switchsupport"] and len(suffixLeafs) > 2 and "enddefault" in config and config["enddefault"]:
                fout.write(indent + config["enddefault"] + "\n")
        else:
            for key, sufList in suffixLeafs.items():
                if mostFreqSuffix == key:
                    (mostfreqreplacewhat, mostfreqreplaceby) = key.split("|")
                else:
                    (replacewhat, replaceby) = key.split("|")
                    if "switchsupport" in config and config["switchsupport"] and len(suffixLeafs) > 2:
                        for suf1 in sufList:
                            fout.write(indent + config["case"].format(exp=config["charquote"] + suf1 + config["charquote"]) + "\n")
                    else:
                        fout.write(indent + generateIfCondition(i, depth, config, var, sufList, usefetchedchar) + "\n")
                    fout.write(indent + config["indent"] + config["assignement"].format(var=config["var"].format(varname="replacepair"), exp=config["tuple"].format(exp1=config["strquote"] + replacewhat + config["strquote"], exp2=config["strquote"] + replaceby + config["strquote"])) + "\n")
                    if "switchsupport" in config and config["switchsupport"] and "endcase" in config and len(suffixLeafs) > 2:
                        fout.write(indent + config["endcase"] + "\n")
                    i += 1
            if (i > 0):
                fout.write(indent + config["default" if "switchsupport" in config and config["switchsupport"] and (len(suffixLeafs) + len(non_leafs)) > 2 else "else"] + "\n")
            fout.write(indent + config["indent"] + config["assignement"].format(var=config["var"].format(varname="replacepair"), exp=config["tuple"].format(exp1=config["strquote"] + mostfreqreplacewhat + config["strquote"], exp2=config["strquote"] + mostfreqreplaceby + config["strquote"])) + "\n")
            if "switchsupport" in config and config["switchsupport"] and len(suffixLeafs) > 2 and "enddefault" in config and config["enddefault"]:
                fout.write(indent + config["enddefault"] + "\n")

    if "switchsupport" in config and config["switchsupport"] and (len(non_leafs) > 0 or len(suffixLeafs) > 2):
        fout.write(indent + config["endswitch"] + "\n")
    elif "endif" in config and (len(non_leafs) > 0 or len(suffixLeafs) > 2):
        fout.write(indent + config["endif"] + "\n")

def generateReturn(fout):
    fout.write("\n")
    fout.write(config["indent"] + config["if"].format(cond=config["and"].format(exp1=config["equal"].format(exp1=config["var"].format(varname="replacepair") + "[0]", exp2=config["strquote"] * 2), exp2=config["equal"].format(exp1=config["var"].format(varname="replacepair") + "[1]", exp2=config["strquote"] * 2))) + "\n")
    fout.write(config["indent"] * 2 + config["return"].format(exp=config["var"].format(varname="jmeno")) + "\n")
    fout.write(config["indent"] + config["elseif"].format(cond=config["equal"].format(exp1=config["var"].format(varname="replacepair") + "[1]", exp2=config["strquote"] * 2)) + "\n")
    fout.write(config["indent"] * 2 + config["return"].format(exp=config["leftstr"].format(var=config["var"].format(varname="jmeno"), length="-" + config["strlen"].format(var=config["var"].format(varname="replacepair") + "[0]"))) + "\n")
    fout.write(config["indent"] + config["elseif"].format(cond=config["equal"].format(exp1=config["var"].format(varname="replacepair") + "[0]", exp2=config["strquote"] * 2)) + "\n")
    fout.write(config["indent"] * 2 + config["return"].format(exp=config["var"].format(varname="jmeno") + " + (" + config["conditional"].format(cond=config["islowercase"].format(var=config["charatpos"].format(var=config["var"].format(varname="jmeno"), pos="-1" if config["strnegativepos"] else config["strlen"].format(var=config["var"].format(varname="jmeno")))), exp1=config["var"].format(varname="replacepair") + "[1]", exp2=config["uppercase"].format(var=config["var"].format(varname="replacepair") + "[1]")) + ")") + "\n")
    fout.write(config["indent"] + config["else"] + "\n")
    if "vardeclaration" in config:
        fout.write(config["indent"] * 2 + config["vardeclaration"].format(var=config["var"].format(varname="replaceending")) + "\n")
    fout.write(config["indent"] * 2 + config["assignement"].format(var=config["var"].format(varname="replaceending"), exp=config["rightstr"].format(var=config["var"].format(varname="jmeno"), length=config["strlen"].format(var=config["var"].format(varname="replacepair") + "[0]"))) + "\n")
    fout.write(config["indent"] * 2 + config["if"].format(cond=config["isuppercase"].format(var=config["var"].format(varname="replaceending"))) + "\n")
    fout.write(config["indent"] * 3 + config["return"].format(exp=config["concat"].format(str1=config["leftstr"].format(var=config["var"].format(varname="jmeno"), length=("-" + config["strlen"].format(var=config["var"].format(varname="replacepair") + "[0]") if config["strnegativepos"] else config["strlen"].format(var=config["var"].format(varname="jmeno")) + " - "  + config["strlen"].format(var=config["var"].format(varname="replacepair") + "[0]"))), str2=config["uppercase"].format(var=config["var"].format(varname="replacepair") + "[1]"))) + "\n")
    fout.write(config["indent"] * 2 + config["elseif"].format(cond=config["istitlecase"].format(var=config["var"].format(varname="replaceending"))) + "\n")
    fout.write(config["indent"] * 3 + config["return"].format(exp=config["concat"].format(str1=config["leftstr"].format(var=config["var"].format(varname="jmeno"), length=("-" + config["strlen"].format(var=config["var"].format(varname="replacepair") + "[0]") if config["strnegativepos"] else config["strlen"].format(var=config["var"].format(varname="jmeno")) + " - "  + config["strlen"].format(var=config["var"].format(varname="replacepair") + "[0]"))), str2=config["titlecase"].format(var=config["var"].format(varname="replacepair") + "[1]"))) + "\n")
    fout.write(config["indent"] * 2 + config["elseif"].format(cond=config["isuppercase"].format(var=config["charatpos"].format(var=config["var"].format(varname="jmeno"), pos="-1" if config["strnegativepos"] else config["strlen"].format(var=config["var"].format(varname="jmeno")) + " - 1"))) + "\n")
    fout.write(config["indent"] * 3 + config["return"].format(exp=config["concat"].format(str1=config["leftstr"].format(var=config["var"].format(varname="jmeno"), length=("-" + config["strlen"].format(var=config["var"].format(varname="replacepair") + "[0]") if config["strnegativepos"] else config["strlen"].format(var=config["var"].format(varname="jmeno")) + " - "  + config["strlen"].format(var=config["var"].format(varname="replacepair") + "[0]"))), str2=config["uppercase"].format(var=config["var"].format(varname="replacepair") + "[1]"))) + "\n")
    fout.write(config["indent"] * 2 + config["else"] + "\n")
    fout.write(config["indent"] * 3 + config["return"].format(exp=config["concat"].format(str1=config["leftstr"].format(var=config["var"].format(varname="jmeno"), length=("-" + config["strlen"].format(var=config["var"].format(varname="replacepair") + "[0]") if config["strnegativepos"] else config["strlen"].format(var=config["var"].format(varname="jmeno")) + " - "  + config["strlen"].format(var=config["var"].format(varname="replacepair") + "[0]"))), str2=config["var"].format(varname="replacepair") + "[1]")) + "\n")
    if "endif" in config:
        fout.write(config["indent"] * 2 + config["endif"] + "\n")
        fout.write(config["indent"] + config["endif"] + "\n")

def generateFunction(language, config):
    fout = codecs.open(os.path.dirname(__file__) + "/../" + language + "/osloveni" + config["filesuffix"], "w", "utf-8")
    if "filestart" in config:
        fout.write(config["filestart"] + "\n")
    var = config["var"].format(varname="jmeno")
    if not config["docinsidefunction"]:
        fout.write(config["funcdoc"] + "\n")
    fout.write(config["function"].format(fnname="osloveni", var=var) + "\n")
    if config["docinsidefunction"]:
        fout.write(config["indent"] + config["funcdoc"].replace("\n", "\n" + config["indent"]).replace("\n" + config["indent"] + "\n", "\n\n") + "\n")
    if "vardeclaration" in config:
        fout.write(config["indent"] + config["vardeclaration"].format(var=config["var"].format(varname="ljmeno")) + "\n")
        fout.write(config["indent"] + config["vardeclaration"].format(var=config["var"].format(varname="replacepair")) + "\n")
    if "fetchcharoptimization" in config and config["fetchcharoptimization"] and "vardeclaration" in config:
        fout.write(config["indent"] + config["vardeclaration"].format(var=config["var"].format(varname="c")) + "\n")
    fout.write(config["indent"] + config["assignement"].format(var=config["var"].format(varname="ljmeno"), exp=config["concat"].format(str1=config["strquote"] + " " + config["strquote"], str2=config["lowercase"].format(var=config["var"].format(varname="jmeno")))) + "\n")
    generateCodeTree(suffixTree, 1, config, fout)
    generateReturn(fout)
    if "functionend" in config and config["functionend"] != "":
        fout.write(config["functionend"] + "\n")
    if "fileend" in config:
        fout.write(config["fileend"])
    fout.close()

for language, config in configs.items():
    generateFunction(language, config)
