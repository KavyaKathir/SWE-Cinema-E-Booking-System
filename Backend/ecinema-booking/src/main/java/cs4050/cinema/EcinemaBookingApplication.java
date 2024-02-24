package cs4050.cinema;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.autoconfigure.domain.EntityScan;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.data.jpa.repository.config.EnableJpaRepositories;
import org.springframework.scheduling.annotation.EnableScheduling;
// import org.springframework.web.servlet.config.annotation.EnableWebMvc;

@SpringBootApplication(scanBasePackages={"cs4050.cinema"})
@ComponentScan(basePackages = {"cs4050.cinema.MovieRepository","cs4050.cinema.GreetingController" })
@EnableJpaRepositories(basePackages = "cs4050.cinema.MovieRepository.class")
@EntityScan
@EnableScheduling
// @EnableWebMvc
public class EcinemaBookingApplication {

	public static void main(String[] args) {
		SpringApplication.run(EcinemaBookingApplication.class, args);
		System.out.println("Hii");
	}

}
