function Booking(rowIndex) {
    let hotelname = document.getElementsByName('hotelname[]')[rowIndex].value;
    let roomtype = document.getElementsByName('roomtype[]')[rowIndex].value;
    let location = document.getElementsByName('location[]')[rowIndex].value;
    let date = document.getElementsByName('date[]')[rowIndex].value;
    let id = document.getElementsByName('id[]')[rowIndex].value;

    let Booking=document.getElementById('Booking');

    Booking.innerHTML="";

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/MyBookings.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
   
    let data = 'hotelname=' + hotelname + '&roomtype=' + roomtype +
               '&location=' + location + '&date=' + date+'&id=' + id;

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            if (response.status === 10) {
                Booking.innerHTML = response.message;
            }
        }
    }

    xhttp.send(data);
}
