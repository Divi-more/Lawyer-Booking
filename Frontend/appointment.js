document.getElementById("appointmentForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch("save_appointment.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("statusMsg").innerHTML = data;
        document.getElementById("appointmentForm").reset();
    })
    .catch(error => {
        document.getElementById("statusMsg").innerHTML = "Error submitting form!";
    });
});