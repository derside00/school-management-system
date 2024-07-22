<!DOCTYPE html>
<html lang="en">
<head>
    <title>School Management Dashboard</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: white;
    padding: 10px;
    text-align: center;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 10px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

.container {
    padding: 20px;
    text-align: center;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
   
}</style>
</head>
<body>
    <header>
        <h1>School Management Dashboard</h1>
        <nav>
            <ul>
                <li><a href="#overview">Overview</a></li>
                <li><a href="#students">Students</a></li>
                <li><a href="#classes">Classes</a></li>
                <li><a href="#settings">Settings</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="overview" class="card">
            <h2>Overview</h2>
            <div class="overview-data">
                <div class="data-item">
                    <h3>Total Students</h3>
                    <p>1,234</p>
                </div>
                <div class="data-item">
                    <h3>Total Staff</h3>
                    <p>123</p>
                </div>
                <div class="data-item">
                    <h3>Total Classes</h3>
                    <p>56</p>
                </div>
            </div>
        </section>
        <section id="students" class="card">
            <h2>Students</h2>
            <div id="students-list">
                <!-- Student list will be rendered here -->
                <p>Student list coming soon...</p>
            </div>
        </section>
        <section id="staff" class="card">
            <h2>Staff</h2>
            <div id="staff-list">
                <!-- Staff list will be rendered here -->
                <p>Staff list coming soon...</p>
            </div>
        </section>
        <section id="classes" class="card">
            <h2>Classes</h2>
            <div id="classes-list">
                <!-- Classes list will be rendered here -->
                <p>Classes list coming soon...</p>
            </div>
        </section>
        <section id="settings" class="card">
            <h2>Settings</h2>
            <form>
                <label for="school-name">School Name:</label>
                <input type="text" id="school-name" name="school-name">

                <label for="school-email">School Email:</label>
                <input type="email" id="school-email" name="school-email">

                <input type="submit" value="Save Settings">
            </form>
        </section>
    </main>
    <footer>
        <p> 2024 School Management System</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>

