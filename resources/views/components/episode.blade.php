<div class="epsiode">
    <div>
        <img src="{{ asset('storage/images/' . $image) }}" alt="image">
    </div>
    <div>
        <h2>{{ $title }}</h2>
    </div>
</div>

<style>
img {
    width: 95%;
    max-height: 250px;
    border-radius: 10px;
    object-fit: cover;
}
h2 {
    font-size: 2em;
    text-align: center;
    margin-bottom: 3%;
}
</style>


