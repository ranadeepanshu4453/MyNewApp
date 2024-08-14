<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <div class="sidebar">
        <h2>MY APP</h2>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            
        </ul>
    </div>
</div>


<style>
    * {
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    display: flex;
}

.sidebar {
    width: 250px;
    background-color: #007BFF;
    color: white;
    padding: 20px;
    height: 82vh; /* Full height */
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    margin: 15px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    padding: 10px;
    display: block;
    transition: background 0.3s;
}

.sidebar ul li a:hover {
    background-color: #34495e;
}

.content {
    flex-grow: 1;
    padding: 20px;
}

</style>