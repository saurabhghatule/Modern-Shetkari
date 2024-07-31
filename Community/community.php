<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Community</title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="community.css">
</head>
<body>
    <header>
        <h1>Farmers Community</h1>
        <p>Share your experiences and tips!</p>
    </header>
    <main>
        <div class="container">
            <aside id="left-section">
                <section id="joined-farmers">
                    <h2>Joined Farmers</h2>
                    <ul id="farmers-list">
                        <!-- Joined farmers will be displayed here -->
                    </ul>
                </section>
                <section id="join-community">
                    <h2>Join the Farmer Community</h2>
                    <form id="join-form">
                        <input type="text" id="name" placeholder="Your Name" required>
                        <input type="email" id="email" placeholder="Your Email" required>
                        <button type="submit">Join</button>
                    </form>
                </section>
            </aside>
            <section id="right-section">
                <div id="posts-container">
                    <!-- Community posts will be displayed here -->
                </div>
                <section id="new-post">
                    <h2>Add a New Post</h2>
                    <form id="post-form">
                        <input type="text" id="title" placeholder="Post Title" required>
                        <textarea id="content" placeholder="Post Content" required></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </section>
                <section id="events">
                    <h2>Upcoming Events</h2>
                    <div id="events-container">
                        <!-- Upcoming events will be displayed here -->
                    </div>
                    <h2>Add a New Event</h2>
                    <form id="event-form">
                        <input type="text" id="event-title" placeholder="Event Title" required>
                        <input type="date" id="event-date" required>
                        <textarea id="event-description" placeholder="Event Description" required></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </section>
            </section>
        </div>
    </main>
    <script src="community.js"></script>
</body>
</html>
