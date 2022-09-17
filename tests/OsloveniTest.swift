import XCTest

func testOsloveni(words: String) throws {
    let lines = words.split(whereSeparator: \.isNewline)
    for i in 0..<lines.count {
        let wordPair = String(lines[i]).components(separatedBy: ";")
        XCTAssertEqual(osloveni(wordPair[0].uppercased()), wordPair[1].uppercased())
        XCTAssertEqual(osloveni(wordPair[0].lowercased()), wordPair[1].lowercased())
        XCTAssertEqual(osloveni(wordPair[0].capitalized), wordPair[1].capitalized)
    }
}
