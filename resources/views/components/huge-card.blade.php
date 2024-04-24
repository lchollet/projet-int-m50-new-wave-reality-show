<div class="huge-card">
    <div class = "countdown-container">
        <div class="count-down-box">
          <div class="count-down-box">
            <div class="count-down">
              <h1 id="hours">00</h1>
              <p>Heures</p>
            </div>
          </div>
          <div class="count-down-box">
            <div class="count-down">
              <h1 id="minutes">00</h1>
              <p>Minutes</p>
            </div>
          </div>
          <div class="count-down-box">
            <div class="count-down">
              <h1 id="seconds">00</h1>
              <p>Secondes</p>
            </div>
          </div>
        </div> 
    </div>
<a class="card-button">{{$button}}</a>
</div>

<style>


.huge-card {
  background-color: var(--light-grey);
  padding: 0.5em;
  border-radius: 6px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
}

.countdown-container {
  border-radius: 24px;
  max-width: 50%;
  height: auto;
  background-color: rgba(255, 105, 36, 0.8);
  display: flex; /* Utilise Flexbox pour organiser les éléments horizontalement */
  justify-content: space-around; /* Pour espacer les éléments également */
  align-items: center; /* Pour centrer verticalement les éléments */
  gap: 1em; /* Pour ajouter un espace entre les éléments */
  padding: 10 5 10 5;
  margin: 1em auto;
}

.count-down-box {
  text-shadow: 2px 2px rgba(0, 0, 0, 0.3);
  text-align: center;
  max-width: 100%;
  flex: 1; /* Pour que chaque countdown box prenne autant d'espace que possible */
}

.count-down-box h1 {
  font-size: 2em;
  color: white;
}

.count-down-box p {
  font-size: 13px;
  color: white;
}

.card-button  {
    border: none;
    padding: 5px 10px;
    border-radius: 6px;
        
    font-weight: 700;
    color: var(--white) !important;
    background-color: var(--orange-1);

    cursor: pointer;
    margin: 0 auto;
    }

.card-button:focus,
.card-button:hover {
    background-color: var(--orange-2);
    }

</style>

<script>
const remHours = document.getElementById("hours");
const remMinutes = document.getElementById("minutes");
const remSeconds = document.getElementById("seconds");

const currentYear = new Date().getFullYear();

const birthDay = `27 Dec ${currentYear}`;

const formatTime = (time) => (time < 10 ? `0${time}` : time);

const countdown = () => {
  const birthDayDate = new Date(birthDay);
  const currentDate = new Date();

  const totalSeconds = (birthDayDate - currentDate) / 1000;

  const hours = Math.floor(totalSeconds / 3600) % 24;
  const mins = Math.floor(totalSeconds / 60) % 60;
  const seconds = Math.floor(totalSeconds) % 60;

  remHours.innerHTML = formatTime(hours);
  remMinutes.innerHTML = formatTime(mins);
  remSeconds.innerHTML = formatTime(seconds);
};

// initial call
countdown();

setInterval(countdown, 1000);

</script>