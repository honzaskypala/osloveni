// This unit test is written in Node.js and requires module unit.js installed.
const test = require('unit.js');
const tools = require('../javascript/osloveni');
const fs = require('fs');

fs.readFile('../generate-code/words.txt', 'utf8', (err, data) => {
  test.value(err).isNull()
  const lineSplit = data.split(/\r?\n/);
  lineSplit.forEach((line) => {
      if (line.charCodeAt(0) == 65279)
        line = line.substring(1)  // strip UTF-8 file header
      const wordPair = line.split(';')
      if (wordPair[0] != '') {
          test.value(wordPair[1].toLowerCase()).is(tools.osloveni(wordPair[0].toLowerCase())) // lowercase
          test.value(wordPair[1].toUpperCase()).is(tools.osloveni(wordPair[0]).toUpperCase()) // UPPERCASE
          test.value(wordPair[1].replace(/\w\S*/g, function(txt){{return txt.charAt(0).toUpperCase() + txt.substring(1).toLowerCase();}})).is(tools.osloveni(wordPair[0]).replace(/\w\S*/g, function(txt){{return txt.charAt(0).toUpperCase() + txt.substring(1).toLowerCase();}})) // TitleCase
      }
  })
});
