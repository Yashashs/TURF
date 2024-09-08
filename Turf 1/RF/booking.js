document.getElementById("bookingForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var date = document.getElementById("date").value;
    var time = document.getElementById("time").value;
    var payment = document.getElementById("payment").value;
    
    

    var message = document.getElementById("message");
    message.innerText = "Booking successful! We'll see you on " + date + " at " + time + ". Your payment method is: " + payment + ".";
    message.style.display = "block";
  

    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("date").value = "";
    document.getElementById("time").value = "";
    document.getElementById("payment").value = "credit";
  });
  