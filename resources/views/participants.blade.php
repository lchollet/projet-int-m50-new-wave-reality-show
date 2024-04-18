@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<h1 class="participants">Participants</h1>
<form>
  <select name="team" id="teams">
    <option value="Yverdon">Yverdon-les-bains</option>
    <option value="Vaud">Vaud</option>
  </select>
</form>

<!-- Participants Yverdon -->
<div class="participants-list yverdon">
        @component('components.participants', ['name' => 'Omar', 'image' => 'participants/Omar.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Ambre', 'image' => 'participants/Ambre.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Julie', 'image' => 'participants/Julie.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Aron', 'image' => 'participants/Aron.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Sofia', 'image' => 'participants/Sofia.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Julien', 'image' => 'participants/Julien.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Theo', 'image' => 'participants/Theo.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Lea', 'image' => 'participants/Lea.png'])
        @endcomponent
</div>

<!-- Participants Vaud -->
<div class="participants-list vaud hidden">
        @component('components.participants', ['name' => 'Max', 'image' => 'participants/Max.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Ela', 'image' => 'participants/Ela.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Lou', 'image' => 'participants/Lou.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Andrea', 'image' => 'participants/Andrea.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Lionel', 'image' => 'participants/Lionel.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Marie', 'image' => 'participants/Marie.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Jean', 'image' => 'participants/Jean.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Ana', 'image' => 'participants/Ana.png'])
        @endcomponent
</div>

<script>
document.getElementById('teams').addEventListener('change', function() {
    console.log('selected team', this.value)
    var selectedTeam = this.value;
    var allTeams = document.querySelectorAll('.participants-list');
    
    allTeams.forEach(function(team) {
        if (team.classList.contains(selectedTeam.toLowerCase())) {
            //remove class hidden to show the team
            team.classList.remove('hidden');
        } else {
            //add class hidden to hide the team
            team.classList.add('hidden');
        }
    });
});
</script>


    <style>
        .participants{
            font-family: var(--h1-font-family);
            font-weight: var(--h1-font-weight);
            font-size: var(--h1-font-size);
        }
        .participants-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 18px; /* Adjust as needed */
        }
        
        .hidden {
            display: none;
        }
    </style>
<!-- Participants Vaud -->
@stop
