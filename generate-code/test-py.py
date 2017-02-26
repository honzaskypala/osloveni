import unittest

WORDS_FILE = "words.txt"

import os
import sys
sys.path.append(os.path.dirname(__file__) + "/../python")
from osloveni import osloveni

import codecs

class TestOsloveni(unittest.TestCase):

    def test_osloveni(self):
        fin = codecs.open(os.path.dirname(__file__) + "/" + WORDS_FILE, "r", "utf-8")
        for line in fin:
            (first, fifth) = line.split(";")
            if first[0] == '\ufeff':
                first = first[1:]
            first = first.strip()
            fifth = fifth.strip()
            self.assertEqual(osloveni(first.title()), fifth.title())
            self.assertEqual(osloveni(first.upper()), fifth.upper())
            self.assertEqual(osloveni(first.lower()), fifth.lower())
        fin.close()

if __name__ == '__main__':
    unittest.main()
