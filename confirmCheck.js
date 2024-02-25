const bookingData = {
    bookingNumber: "456123",
    movie: "Kung Fu Panda 4",
    date: "March 10, 2024",
    time: "7:00 PM",
    seat1: "F18",
    seat2: "F19",
    total: 34.50,
    ticketUrl: "ticket.pdf" 
  };
  
  const bookingDetailsDiv = document.getElementById('bookingDetails');
  bookingDetailsDiv.innerHTML = `
    <h2>Booking Number: ${bookingData.bookingNumber}</h2>
    <h3>Ticket Details:</h3>
    <p>Movie: ${bookingData.movie}</p>
    <p>Date: ${bookingData.date}</p>
    <p>Time: ${bookingData.time}</p>
    <p>Seat 1: ${bookingData.seat1}</p>
    <p>Seat 2: ${bookingData.seat2}</p>
  
    <h3>Total: $${bookingData.total.toFixed(2)}</h3>
    <a href="${bookingData.ticketUrl}" download>Download Ticket</a>
  `;
  