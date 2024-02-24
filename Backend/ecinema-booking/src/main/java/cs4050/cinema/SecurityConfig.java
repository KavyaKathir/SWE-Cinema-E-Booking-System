// package cs4050.cinema;

// import org.springframework.context.annotation.Bean;
// import org.springframework.context.annotation.Configuration;
// import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
// import org.springframework.security.config.annotation.web.builders.HttpSecurity;
// import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
// import org.springframework.security.config.annotation.web.configuration.WebSecurityConfiguration;
// import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
// import org.springframework.security.crypto.password.PasswordEncoder;

// @SuppressWarnings("deprecation")
// @Configuration
// @EnableWebSecurity
// public class SecurityConfig extends WebSecurityConfiguration {

    
//     protected void configure(HttpSecurity http) throws Exception {
//         http.authorizeRequests()
//                 .requestMatchers("/hello").permitAll() // Allow access to /hello without authentication
//                 .anyRequest().authenticated()
//                 .and();
//     }

    
    
//     protected void configure(AuthenticationManagerBuilder auth) throws Exception {
//         auth
//             .inMemoryAuthentication()
//                 .withUser("user").password(passwordEncoder().encode("password")).roles("USER");
//     }

//     @Bean
//     public PasswordEncoder passwordEncoder() {
//         return new BCryptPasswordEncoder();
//     }
// }
