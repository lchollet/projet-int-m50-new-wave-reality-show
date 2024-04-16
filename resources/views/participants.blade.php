@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<h1>Participants</h1>
<!-- <form action="/action_page.php"> -->
<form>
  <select name="team" id="teams">
    <option value="Yverdon">Yverdon-les-bains</option>
    <option value="Vaud">Vaud</option>
  </select>
</form>

<!-- Participants Yverdon -->
<div class="episode-list">
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
        @component('components.participants', ['name' => 'Max', 'image' => 'participants/Max.png'])
        @endcomponent
        @component('components.participants', ['name' => 'Leo', 'image' => 'participants/Leo.png'])
        @endcomponent
    </div>

    <style>
        .episode-list {
            display: flex;
            flex-wrap: wrap;
        }

        .episode-list>* {
            flex: 0 0 50%;
        }
        h1 {
            font-size: 4em;
            font-weight: bold;
        }
    </style>
<!-- Participants Vaud -->
@stop