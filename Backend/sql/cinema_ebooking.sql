CREATE DATABASE cinema_ebooking;
USE cinema_ebooking;

CREATE TABLE movies (
    movie_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    category VARCHAR(50),
    cast VARCHAR(255),
    director VARCHAR(100),
    producer VARCHAR(100),
    synopsis TEXT,
    reviews TEXT,
    trailer_picture VARCHAR(255),
    trailer_video VARCHAR(255),
    mpaa_rating VARCHAR(10),
    show_dates_times DATETIME
);
CREATE TABLE halls (
    hall_id INT AUTO_INCREMENT PRIMARY KEY,
    hall_name VARCHAR(100),
    capacity INT,
    location VARCHAR(255)
);

CREATE TABLE show_times (
    show_id INT AUTO_INCREMENT PRIMARY KEY,
    movie_id INT NOT NULL,
    hall_id INT NOT NULL,
    show_date_time DATETIME NOT NULL,
    available_seats INT,
    FOREIGN KEY (movie_id) REFERENCES movies(movie_id),
    FOREIGN KEY (hall_id) REFERENCES halls(hall_id)
);

CREATE TABLE registered_users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    phone_number VARCHAR(20),
    verification_code VARCHAR(20),
    is_verified TINYINT(1) DEFAULT 0,
    subscription_status TINYINT(1) DEFAULT 0
);
ALTER TABLE registered_users
MODIFY COLUMN subscription_status TINYINT;

CREATE TABLE administrators (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    name VARCHAR(100),
    email VARCHAR(100),
    phone_number VARCHAR(20)
);

CREATE TABLE booking_information (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    show_id INT,
    booking_date DATETIME,
    number_of_tickets INT,
    total_price DECIMAL(10,2),
    FOREIGN KEY (user_id) REFERENCES registered_users(user_id),
    FOREIGN KEY (show_id) REFERENCES show_times(show_id)
);

CREATE TABLE ticket_prices (
    ticket_id INT AUTO_INCREMENT PRIMARY KEY,
    age_category VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

CREATE TABLE promotions (
    promotion_id INT AUTO_INCREMENT PRIMARY KEY,
    promotion_code VARCHAR(50) UNIQUE NOT NULL,
    description VARCHAR(255),
    discount_type ENUM('percentage', 'fixed_amount') NOT NULL,
    discount_value DECIMAL(10,2) NOT NULL
);

CREATE TABLE payment_information (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    booking_id INT,
    payment_method VARCHAR(50),
    card_type VARCHAR(50),
    card_number VARCHAR(50),
    card_expiry VARCHAR(10),
    payment_status VARCHAR(50),
    payment_date DATETIME,
    total_amount DECIMAL(10,2),
    FOREIGN KEY (booking_id) REFERENCES booking_information(booking_id)
);

CREATE TABLE shipping_addresses (
    address_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    address_line1 VARCHAR(255),
    address_line2 VARCHAR(255),
    city VARCHAR(100),
    state VARCHAR(100),
    zip_code VARCHAR(20),
    country VARCHAR(100),
    FOREIGN KEY (user_id) REFERENCES registered_users(user_id)
);




