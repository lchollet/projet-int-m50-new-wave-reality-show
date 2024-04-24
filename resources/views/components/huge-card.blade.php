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
  /* background-color: var(--light-grey); */
  background-image: url("{{ asset('storage/images/' . $background) }}");
  padding: 0.5em;
  border-radius: 6px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  margin: 0 auto;
  max-width: 40em;
  height: auto;
  padding: 2em;
}

.countdown-container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 2em auto;
  background-color: rgba(255, 105, 36, 0.8);
  border-radius: 24px;
}

.count-down-box {
  text-shadow: 2px 2px rgba(0, 0, 0, 0.3);
  text-align: center;
  max-width: 100%;
  display: flex;
  width: 100%;
  flex-direction: row;
  justify-content: space-around; 
  align-items: center; 
  max-width: 20em;
  height: 5em;
}

.count-down-box h1 {
  font-size: 1.5em;
  color: var(--white);
  font-weight: 800;
}

.count-down-box p {
  font-size: 0.8em;
  color: var(--white);
  font-weight: 400;
}

.card-button  {
    border: none;
    padding: 5px 10px;
    border-radius: 6px;
    width: fit-content;

        
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

const EventDate = `{{$eventDate}} ${currentYear}`;

const formatTime = (time) => (time < 10 ? `0${time}` : time);

const countdown = () => {
  const EventDateDay = new Date(EventDate);
  const currentDate = new Date();

  const totalSeconds = (EventDateDay - currentDate) / 1000;

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