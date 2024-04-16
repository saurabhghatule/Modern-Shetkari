<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

<div class="container">
    <h2>Contact Us</h2>
    <form id="contactForm" action="#" method="post">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.." required>

        <label for="email">Your Email</label>
        <input type="text" id="email" name="email" placeholder="Your email.." required>

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="Subject.." required>

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea>

        <input type="submit" value="Submit">
    </form>
</div>

<script src="js/contact.js"></script>
</body>
</html>
