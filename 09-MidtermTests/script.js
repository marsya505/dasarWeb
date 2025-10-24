$(document).ready(function() {
    $("#jobForm").submit(function(e) {
        e.preventDefault();

        const fullname = $("#fullname").val().trim();
        const email = $("#email").val().trim();
        const phone = $("#phone").val().trim();

        if (fullname === "" || email === "" || phone === "") {
            alert("Please fill in all required fields.");
            return;
        }

        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!email.match(emailPattern)) {
            alert("Please enter a valid email address.");
            return;
        }

        $("#successMessage").fadeIn(400).delay(2000).fadeOut(400);

        this.submit();
    });
});
