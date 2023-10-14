
import static Osloveni.osloveni;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.util.logging.Level;
import java.util.logging.Logger;
import org.junit.jupiter.api.Test;
import static org.junit.jupiter.api.Assertions.*;

public class OsloveniTest {
    private static final Logger logger = Logger.getLogger(OsloveniTest.class.getName());
    
    /**
     * Test of osloveni method, of class Osloveni.
     */
    @org.junit.jupiter.api.Test
    public void testOsloveni() {
        System.out.println("osloveni");
        
        try {
            String data = new String(
                    Files.readAllBytes(Paths.get("../generate-code/words.txt")));
            String[] lines = data.split("\r\n");
            for (String line : lines) {
                String[] words = line.split(";");
                String jmeno1 = words[0];
                String jmeno5 = words[1];
                String result = osloveni(jmeno1);
                assertEquals(jmeno5, result);

                jmeno1 = words[0].toLowerCase();
                jmeno5 = words[1].toLowerCase();
                result = osloveni(jmeno1);
                assertEquals(jmeno5, result);

                jmeno1 = words[0].toUpperCase();
                jmeno5 = words[1].toUpperCase();
                result = osloveni(jmeno1);
                assertEquals(jmeno5, result);
            }
        } catch (IOException ex) {
            Logger.getLogger(Osloveni.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
    }

    /**
     * Test of capitalize method, of class Osloveni.
     */
    @org.junit.jupiter.api.Test
    public void testCapitalize() {
        System.out.println("capitalize");
        String text = "hello";
        String expResult = "Hello";
        String result = Osloveni.capitalize(text);
        assertEquals(expResult, result);
    }
    
}
