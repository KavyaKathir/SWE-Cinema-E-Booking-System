const orderData = {
    bookingNumber: "456123",
    movie: "Kung FU Panda 4",
    date: "March 10, 2024",
    time: "7:00 PM",
    seat1: "F18",
    seat2: "F19",
    total: 34.50,
    ticketUrl: "ticket.pdf" 
}

orderTotal = document.getElementById('orderTot');
orderTotal.innerHTML = `
    <h3>Order Total: $${orderData.total}</h3>
  `;

const card1Data = {
    cardNum: "1111 4444 8888 9999",
    cardCity: "Athens",
    cardState: "Georgia"
 };

const card2Data = {
    cardNum: "1234 5678 9123 4567",
    cardCity: "Athens",
    cardState: "Georgia"
 };


const button1 = document.getElementById('card1Check');
const button2 = document.getElementById('card2Check');
const button3 = document.getElementById('card3Check');
const displayText = document.getElementById('displayText');

const chosenCardDiv = document.getElementById('chosenCard');

// Add event listeners to the buttons
button1.addEventListener('click', function() {
    chosenCardDiv.innerHTML = `
    <h3>Card Chosen: ${card1Data.cardNum}</h3>
  `;
});

button2.addEventListener('click', function() {
    chosenCardDiv.innerHTML = `
    <h3>Card Chosen: ${card2Data.cardNum}</h3>
  `;
});

button3.addEventListener('click', function() {
    chosenCardDiv.innerHTML = `
    <h3>Card Chosen: NO CARD 3</h3>
  `;
});



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
  
  const checkoutDetailsDiv = document.getElementById('checkoutDetails');
  checkoutDetailsDiv.innerHTML = `
    <h2>Booking Number: ${bookingData.bookingNumber}</h2>
    <h3>Ticket Details:</h3>
    <p>Movie: ${bookingData.movie}</p>
    <p>Date: ${bookingData.date}</p>
    <p>Time: ${bookingData.time}</p>
    <p>Seat 1: ${bookingData.seat1}</p>
    <p>Seat 2: ${bookingData.seat2}</p>
  
  `;
  
