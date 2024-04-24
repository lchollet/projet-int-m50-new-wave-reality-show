<div class="card">
    <img class="small-card-img" src="{{ asset('storage/images/' . $image) }}" alt="{{$alt}}">
    <p class="small-card-text">{{$texte}}</p>
    <a class="small-card-button" href="{{ $link }}">{{$button}}</a>
</div>

<style>

    .small-card-img {
        width: 60px;
        object-fit: cover;
        height: auto;

    }

    .card {
        background-color: var(--light-grey);
        padding: 0.5em;
        border-radius: 6px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 47%;
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        height: 11em;
        align-items: flex-start;
    }

    .small-card-text {
        font-size: 1em;
        color: var(--black);
        padding: 0.5em 0em 0.5em 0em;
        text-align: left;
    }

    .small-card-button {
        border: none;
        padding: 5px 10px;
        border-radius: 6px;
        
        font-weight: 700;
        color: var(--white) !important;
        background-color: var(--orange-1);
        font-size: 0.9em;

        display: inline;

        cursor: pointer;

        width: fit-content;
        align-self: flex-start;
        margin-top: auto;
    }

    .small-card-button a{
        text-decoration: none;
        color: var(--white);
    }

    .small-card-button:focus,
    .small-card-button:hover {
        background-color: var(--orange-2);
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

</style>