function Flight(rowIndex) {
    let from = document.getElementsByName('from')[rowIndex].value;
    let to = document.getElementsByName('to')[rowIndex].value;
    let date = document.getElementsByName('date')[rowIndex].value;
    let time = document.getElementsByName('time')[rowIndex].value;
    let Booking = document.getElementById('Booking');

    Booking.innerHTML = "";

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/MyFlightBookings.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    let data = 'from=' + from + '&to=' + to + '&date=' + date + '&time=' + time;

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            if (response.status === 10) {
                Booking.innerHTML = response.message;
            }
        }
    }

    xhttp.send(data);
}
