<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/photo_2024-09-23_15-48-40.jpg" type="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Simma Fit</title>
</head>
<body>
    <div class="contentBlock Header">
    <div class="menu">
            <div class="logo-container me-4">
                <a href="index.html">
                    <img class="logo" src="./img/logo.png" alt="Logo">
                </a>
            </div>
        
            <div class="nav-links">
                <a href="index.php">Home</a>
                <a href="about.html">About us</a>
                <a href="classes.php">Classes</a>
                <a href="contacts.html">Contact</a>
            </div>
            </div>
            <title>Training Reservations</title>
  <style>
    h1{
    display:flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 50px;
    margin-top: 50px;
    }
    .containers {
      display: flex;
      justify-content: space-between;
      margin: 80px;
    
    }
    .card {
      width: 30%;
      background: rgb(33, 37, 41);
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }
    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .card-body {
      padding: 20px;
      color: grey;
    }
    .card-title {
      font-size: 1.5rem;
      font-weight: bold;
      margin: 0 0 10px;
      color: white;
    }
    .time-btn {
      display: inline-block;
      margin: 5px;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      background-color: #e247bb;
      color: #fff;
      cursor: pointer;
    }
    .time-btn:hover {
      background-color: #73115a;
    }
    .modal {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
      z-index: 1000;
    }
    .modal-overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 999;
    }
    .visible {
      display: block;
    }
    .close-btn {
      margin-top: 10px;
      background-color: #dc3545;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .close-btn:hover {
      background-color: #b02a37;
    }
  </style>
</head>
<body>


<h1 style="color: white";>Enroll in the course:</h1>

<div class="containers">
  <div class="card">
    <img src="./img/photo_2024-11-29 22.00.37.jpeg" alt="Yoga Class">
    <div class="card-body">
      <h5 class="card-title">Yoga Class</h5>
      <p>Relax and rejuvenate with our yoga sessions.</p>
      <button class="time-btn" data-class="Yoga" data-time="6:00 AM">6:00 AM</button>
      <button class="time-btn" data-class="Yoga" data-time="7:00 PM">7:00 PM</button>
    </div>
  </div>

  <div class="card">
    <img src="./img/photo_2024-11-29 22.00.41.jpeg" alt="Strength Training">
    <div class="card-body">
      <h5 class="card-title">Strength Training</h5>
      <p>Build strength and endurance with expert guidance.</p>
      <button class="time-btn" data-class="Strength" data-time="8:00 AM">8:00 AM</button>
      <button class="time-btn" data-class="Strength" data-time="6:00 PM">6:00 PM</button>
    </div>
  </div>

  <div class="card">
    <img src="./img/photo_2024-11-29 22.00.43.jpeg" alt="Cardio Workout">
    <div class="card-body">
      <h5 class="card-title">Cardio Workout</h5>
      <p>Boost your heart health with our cardio programs.</p>
      <button class="time-btn" data-class="Cardio" data-time="9:00 AM">9:00 AM</button>
      <button class="time-btn" data-class="Cardio" data-time="5:00 PM">5:00 PM</button>
    </div>
  </div>
</div>

<div class="modal-overlay" id="modalOverlay"></div>
<div class="modal" id="reservationModal">
  <form id="reservationForm">
    <h2>Reserve Your Training</h2>
    <p id="selectedClassAndTime"></p>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required><br><br>
    <button type="submit">Submit</button>
    <button type="button" class="close-btn" id="closeModal">Cancel</button>
  </form>
</div>

<script>
  const timeButtons = document.querySelectorAll('.time-btn');
  const modal = document.getElementById('reservationModal');
  const modalOverlay = document.getElementById('modalOverlay');
  const closeModal = document.getElementById('closeModal');
  const selectedClassAndTime = document.getElementById('selectedClassAndTime');
  const reservationForm = document.getElementById('reservationForm');

  let chosenClass = '';
  let chosenTime = '';

  timeButtons.forEach(button => {
    button.addEventListener('click', () => {
      chosenClass = button.getAttribute('data-class');
      chosenTime = button.getAttribute('data-time');
      selectedClassAndTime.textContent = `Class: ${chosenClass}, Time: ${chosenTime}`;
      modal.classList.add('visible');
      modalOverlay.classList.add('visible');
    });
  });

  closeModal.addEventListener('click', () => {
    modal.classList.remove('visible');
    modalOverlay.classList.remove('visible');
  });

  reservationForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(reservationForm);
    formData.append('class', chosenClass);
    formData.append('time', chosenTime);

    fetch('reserve.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      alert('Reservation Successful!');
      modal.classList.remove('visible');
      modalOverlay.classList.remove('visible');
      window.location.reload();
    })
    .catch(error => console.error('Error:', error));
  });
  function calculateCalories() {
    // Считываем значения из формы
    const age = parseInt(document.getElementById('age').value);
    const gender = document.querySelector('input[name="gender"]:checked').value;
    const weight = parseInt(document.getElementById('weight').value);
    const height = parseInt(document.getElementById('height').value);
    const activityLevel = parseFloat(document.getElementById('activityLevel').value);

    // Проверка, чтобы все поля были заполнены
    if (isNaN(age) || isNaN(weight) || isNaN(height)) {
        alert("Please fill in all fields.");
        return;
    }

    // Расчет BMR (базальный обмен веществ)
    let bmr;
    if (gender === "male") {
        bmr = 88.36 + (13.4 * weight) + (4.8 * height) - (5.7 * age);
    } else {
        bmr = 447.6 + (9.2 * weight) + (3.1 * height) - (4.3 * age);
    }

    // Умножаем BMR на уровень активности
    const totalCalories = bmr * activityLevel;

    // Показать результат
    document.getElementById('calories').textContent = totalCalories.toFixed(0);
    document.getElementById('result').style.display = 'block';
}





</script>

<section id="calorie-calculator" style="padding: 40px 0; background-color: #f9f9f9;">
    <div class="container">
        <h2 class="text-center mb-4" style="color: #333;">Calorie Calculator</h2>
        <p class="text-center" style="color: #555;">Enter your details to calculate your daily calorie needs.</p>
        
        <form id="calculatorForm" class="shadow-lg p-4 bg-white rounded">
            <div class="mb-3">
                <label for="age" class="form-label">Age (years)</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label><br>
                <input type="radio" id="male" name="gender" value="male" checked> Male
                <input type="radio" id="female" name="gender" value="female"> Female
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Weight (kg)</label>
                <input type="number" class="form-control" id="weight" name="weight" required>
            </div>
            <div class="mb-3">
                <label for="height" class="form-label">Height (cm)</label>
                <input type="number" class="form-control" id="height" name="height" required>
            </div>
            <div class="mb-3">
                <label for="activityLevel" class="form-label">Activity Level</label>
                <select class="form-control" id="activityLevel" name="activityLevel" required>
                    <option value="1.2">Low (Little to no exercise)</option>
                    <option value="1.55">Medium (Moderate exercise 3-5 days/week)</option>
                    <option value="1.9">High (Intense exercise 6-7 days/week)</option>
                </select>
            </div>
            <button type="button" class="btn w-100" style="background-color: #e247bb; color: white;" onclick="calculateCalories()">Calculate</button>
        </form>

        <div id="result" class="mt-4" style="display: none; text-align: center; color: #333;">
            <h4>Your daily calorie requirement: <span id="calories"></span> kcal</h4>
            <p style="color: #777;">To lose weight, you can reduce your calorie intake by 500-700 kcal.</p>
        </div>
    </div>
</section>



<footer>
                <p>© 2024 SIMMA FIT. Все права защищены.</p>
            </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>