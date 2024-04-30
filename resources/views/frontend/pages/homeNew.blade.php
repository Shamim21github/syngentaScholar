<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  {{-- <!-- <link rel="stylesheet" href="asset {{frontend/assets/css}}"> --> --}}

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap");

:root {
  --primary-color: #28bf96;
  --primary-color-dark: #209677;
  --text-dark: #111827;
  --text-light: #6b7280;
  --white: #ffffff;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Roboto", sans-serif;
}

/* .container {
  position: relative;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 2rem;
  z-index: 1;
} */

.logo a {
  font-size: 1.5rem;
  font-weight: bold;
  text-decoration: none;
  color: var(--primary-color);
}

.nav-links ul {
  display: flex;
  list-style: none;
}

.nav-links ul li {
  margin: 0 1rem;
}

.nav-links ul li a {
  text-decoration: none;
  color: var(--text-light);
  transition: color 0.3s ease;
}

.nav-links ul li a:hover {
  color: var(--primary-color);
}

.search-bar {
  display: flex;
  align-items: center;
}

.search-bar input[type="text"] {
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px 0 0 4px;
}

.search-bar button {
  padding: 0.5rem;
  background-color: var(--primary-color);
  color: var(--white);
  border: none;
  border-radius: 0 4px 4px 0;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.search-bar button:hover {
  background-color: var(--primary-color-dark);
}

.image-container {
  position: relative;
  flex: 1;
  width: 100vw;
  height: 100vh;
  overflow: hidden;
}

.full-page-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* @media (max-width: 768px) {
  header {
    flex-direction: column;
    padding: 1rem;
  }

  .nav-links ul {
    margin-top: 1rem;
  }

  .search-bar {
    margin-top: 1rem;
  }
} */


.container {
  position: relative;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 2rem;
  z-index: 2;
}

.image-container {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: auto;
  /* z-index: 1; */
}

.full-page-image {
  width: 100%;
  height: auto;
  object-fit: contain;
  object-position: top;
}

@media (max-width: 768px) {
  header {
    flex-direction: column;
    padding: 1rem;
  }

  .nav-links ul {
    margin-top: 1rem;
  }

  .search-bar {
    margin-top: 1rem;
  }

  .full-page-image {
    object-position: left;
  }
}


/* Registration form design  */


/* .form-container {
  margin-top: 20px;
}

.form-row {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="tel"],
input[type="email"],
textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button[type="submit"] {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

@media screen and (max-width: 600px) {
  .form-row {
    display: flex;
    flex-direction: column;
  }
} */
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="logo">
        <!-- <a href="#">Logo</a> -->
      </div>
      <nav class="nav-links">
        <ul>
          <li><a href="{{ route('home') }}" style="font-weight: bold" >Home</a></li>
          <li><a href="{{ route('registration') }}">Registration</a></li>
          <li><a href="{{ route('result') }}">Result</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </nav>
      <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button><i class="fas fa-search"></i></button>
      </div>
    </header>
    <div class="image-container">
      
      <img src="{{ asset('frontend/assets/images/bg5.jpg') }}" alt="header image" class="full-page-image">
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>