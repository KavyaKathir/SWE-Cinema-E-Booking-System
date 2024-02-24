package cs4050.cinema;

import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;

import org.springframework.core.io.ClassPathResource;
// import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
// @RequestMapping("/hello") // Map the controller to the /mycinema context path
public class GreetingController {

    @RequestMapping("/hello")
    public String hello() throws IOException {
        // Read the contents of the "hello.html" file
        System.out.println("Hii");
        ClassPathResource resource = new ClassPathResource("static/hello.html");
        byte[] bytes = Files.readAllBytes(Paths.get(resource.getURI()));
        return new String(bytes);
    }
}
