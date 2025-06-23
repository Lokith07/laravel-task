document.addEventListener("DOMContentLoaded", function () {
    var today = new Date();
    var year = today.getFullYear() - 18;
    var month = String(today.getMonth() + 1).padStart(2, "0"); // Month is 0-indexed
    var day = String(today.getDate()).padStart(2, "0");

    var maxDate = year + "-" + month + "-" + day;

    document.getElementById("dob").setAttribute("max", maxDate);
});
