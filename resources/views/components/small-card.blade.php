<div class="card">
    <img src="{{ asset('storage/images/' . $image) }}" alt="{{$alt}}">
    <div class="card-details">
        <p>{{$texte}}</p>
        <a class="card-button">{{$button}}</a>
    </div>
</div>

<style>

    img {
        width: 4em;
        object-fit: cover;
        height: auto;

    }

    .card {
        background-color: var(--light-grey);
        padding: 0.5em;
        border-radius: 6px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 45%;
    }

    p {
        font-size: 1em;
        color: var(--black);
    }

    .card-button {
        border: none;
        padding: 5px 10px;
        border-radius: 6px;
        
        font-weight: 700;
        color: var(--white) !important;
        background-color: var(--orange-1);

        margin: 0 auto;
        display: block;

        cursor: pointer;

        width: fit-content;
    }

    .card-details {
        padding: 16px 8px 8px 8px;
    }

    .card-button:focus,
    .card-button:hover {
        background-color: var(--orange-2);
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

</style>