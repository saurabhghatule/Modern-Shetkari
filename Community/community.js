document.addEventListener('DOMContentLoaded', () => {
    const farmersList = document.getElementById('farmers-list');
    const joinForm = document.getElementById('join-form');
    const postsContainer = document.getElementById('posts-container');
    const postForm = document.getElementById('post-form');
    const eventsContainer = document.getElementById('events-container');
    const eventForm = document.getElementById('event-form');

    // Fetch and display existing farmers
    fetchFarmers();

    // Fetch and display existing posts
    fetchPosts();

    // Fetch and display upcoming events
    fetchEvents();

    // Handle join community form submission
    joinForm.addEventListener('submit', event => {
        event.preventDefault();
        joinCommunity();
    });

    // Handle new post submission
    postForm.addEventListener('submit', event => {
        event.preventDefault();
        addNewPost();
    });

    // Handle new event submission
    eventForm.addEventListener('submit', event => {
        event.preventDefault();
        addNewEvent();
    });

    function fetchFarmers() {
        fetch('get_farmers.php')
            .then(response => response.json())
            .then(farmers => {
                farmersList.innerHTML = '';
                farmers.forEach(farmer => {
                    const farmerElement = createFarmerElement(farmer);
                    farmersList.appendChild(farmerElement);
                });
            });
    }

    function joinCommunity() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;

        fetch('join_community.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ name, email })
        })
        .then(response => response.json())
        .then(message => {
            alert(message);
            joinForm.reset();
            fetchFarmers();
        });
    }

    function fetchPosts() {
        fetch('get_posts.php')
            .then(response => response.json())
            .then(posts => {
                postsContainer.innerHTML = '';
                posts.forEach(post => {
                    const postElement = createPostElement(post);
                    postsContainer.appendChild(postElement);
                });
            });
    }

    function addNewPost() {
        const title = document.getElementById('title').value;
        const content = document.getElementById('content').value;

        fetch('add_post.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ title, content })
        })
        .then(response => response.json())
        .then(post => {
            const postElement = createPostElement(post);
            postsContainer.prepend(postElement);
            postForm.reset();
        });
    }

    function fetchEvents() {
        fetch('get_events.php')
            .then(response => response.json())
            .then(events => {
                eventsContainer.innerHTML = '';
                events.forEach(event => {
                    const eventElement = createEventElement(event);
                    eventsContainer.appendChild(eventElement);
                });
            });
    }

    function addNewEvent() {
        const title = document.getElementById('event-title').value;
        const date = document.getElementById('event-date').value;
        const description = document.getElementById('event-description').value;

        fetch('add_event.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ title, date, description })
        })
        .then(response => response.json())
        .then(event => {
            const eventElement = createEventElement(event);
            eventsContainer.prepend(eventElement);
            eventForm.reset();
        });
    }

    function createFarmerElement(farmer) {
        const farmerLi = document.createElement('li');
        farmerLi.textContent = farmer.name;
        return farmerLi;
    }

    function createPostElement(post) {
        const postDiv = document.createElement('div');
        postDiv.classList.add('post');
        postDiv.innerHTML = `
            <h3>${post.title}</h3>
            <p>${post.content}</p>
        `;
        return postDiv;
    }

    function createEventElement(event) {
        const eventDiv = document.createElement('div');
        eventDiv.classList.add('event');
        eventDiv.innerHTML = `
            <h3>${event.title}</h3>
            <p>${event.date}</p>
            <p>${event.description}</p>
        `;
        return eventDiv;
    }
});
