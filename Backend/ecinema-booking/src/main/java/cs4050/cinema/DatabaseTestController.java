package cs4050.cinema;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import javax.persistence.EntityManager;
import javax.persistence.Query;
import java.util.List;

@RestController
@RequestMapping("/test")
public class DatabaseTestController {

    @Autowired
    private EntityManager entityManager;

    @SuppressWarnings("unchecked")
    @GetMapping("/database")
    public List<Movie> testDatabase() {
        // Execute a query to fetch all movies from the database
        Query query = entityManager.createQuery("SELECT m FROM Movie m", Movie.class);
        return query.getResultList();
    }
}
