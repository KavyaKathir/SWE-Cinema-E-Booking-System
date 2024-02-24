package cs4050.cinema;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.scheduling.annotation.Scheduled;
import org.springframework.stereotype.Component;

@Component
public class DataFetcher {

     @Autowired
    private MovieRepository movieRepository;


    @Scheduled(fixedRate = 10000) // Runs every 60 seconds
    public void fetchDataFromDatabase() {
        // Fetch data from the database and perform necessary processing
        // Example:
        List<Movie> movies = movieRepository.findAll();
        // Process the list of movies as needed
        System.out.println("Fetching data from the database...");
        movies.forEach(movie -> System.out.println("Movie Title: " + movie.getTitle()));
    }
    }

