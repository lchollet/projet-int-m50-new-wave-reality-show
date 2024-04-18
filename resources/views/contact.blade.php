@extends('layouts.default')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contactez-nous</title>
</head>
<body>
    <div class="contact-container">
        <h1>Contacte-nous !</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Entrer votre nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Entrer votre email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Saisissez votre message" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Envoyer</button>
        </form>
    </div>
</body>
</html>

<style>
.contact-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: var(--white);
    border-radius: 10px;
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); ca peux etre beau */
    color: var(--orange-1);
   
}

.contact-container h1 {
    text-align: left;
    color: var(--black);
}

.contact-container form {
    
    padding-right: 20px;
    padding-left: 20px;
    
}

.contact-container .form-group {
    margin-bottom: 20px;
}

.contact-container label {
    display: block;
    margin-bottom: 5px;
    font-weight: var(--paragraphe-font-weight);

}

.contact-container input[type="text"],
.contact-container input[type="email"],
.contact-container textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid var(--grey);
    border-radius: 5px;
    color: var(--black); 
}

.contact-container textarea {
    resize: vertical;
}

.contact-container .btn-submit {
    width: 100%;
    padding: 10px;
    background-color: var(--orange-1);
    color: var(--white);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: var(--paragraphe-font-weight);
}

.contact-container .btn-submit:hover {
    background-color: var(--orange-2);
}


</style>
@stop

