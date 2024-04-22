<div class="epsiode">
        <img src="{{ asset('storage/images/' . $image) }}" alt="image">
        <p>{{ $title }}</p>
</div>

<style>

img {
    max-width: 300px;
    max-height: 190px;
    border-radius: 6px;
    object-fit: cover;
    margin: auto;
    display: block;
}
p {
    font-size: var(--paragraphe-font-size);
    font-weight: var(--h2-font-weight);
    font-size: var(--paragraphe-font-size);
    line-height: var(--paragraphe-line-height);
    color: var(--black);
    text-align: center;
    margin-bottom: 5%;
    margin-top: 8px;
}
</style>


