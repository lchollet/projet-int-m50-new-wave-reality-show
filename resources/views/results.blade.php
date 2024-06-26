@extends('layouts.default')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Réponses au vote</title>
</head>
<body>
    <div class="response-container">
        <div class="results-container">
            <h2>Résultats du vote :</h2>
            @if($results->isEmpty())
                <p>Aucun vote enregistré pour le moment.</p>
            @else
                @php
                    $totalVotes = $results->sum('total_votes');
                @endphp
                @foreach($results as $result)
                    @if($result->answer)
                        @php
                            $percentage = $totalVotes != 0 ? round(($result->total_votes / $totalVotes) * 100) : 0;
                        @endphp
                        <div class="result-bar" style="width: {{ $percentage }}%;">{{ $result->answer->answer }} ({{ $percentage }}%)</div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>    
</body>
</html>
@stop

<style>
.response-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 10px;
    background-color: #f2f2f2; /* Fond gris clair */
    color: #333; /* Texte noir */
}

.response-container h1 {
    color: #444; /* Titre plus foncé */
}

.results-container {
    margin-top: 20px;
}

.results-container h2 {
    margin-bottom: 10px;
    font-weight: bold;
}

.result-bar {
    margin-bottom: 10px;
    padding: 8px;
    background-color: var(--orange-2); /* Vert */
    color: #fff; /* Texte blanc */
    border-radius: 5px;
}


</style>
