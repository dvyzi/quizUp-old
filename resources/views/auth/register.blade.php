<x-base css="auth/registerLogin.css">

    <form action="">
        @csrf
        <h2>Inscription</h2>
        <div class="formContain">
            <label for="name">Prénom</label>
            <input type="text" name="name" id="name" class="connectInput" required
                placeholder="Entrez votre prénom">
        </div>
        <div class="formContain">
            <label for="surname">Nom</label>
            <input type="text" name="surname" id="surname" class="connectInput" required
                placeholder="Entrez votre nom">
        </div>
        <div class="formContain">
            <label for="nickname">Pseudo</label>
            <input type="text" name="nickname" id="nickname" class="connectInput" required
                placeholder="Entrez votre pseudo">
        </div>
        <div class="formContain">
            <label for="email">Adresse email</label>
            <input type="email" name="email" id="email" class="connectInput" required
                placeholder="Entrez votre adresse email">
        </div>
        <div class="formContain">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" class="connectInput" required
                placeholder="Entrez votre mot de passe">
        </div>
        <div class="formContain">
            <label for="password">Confirmer le mot de passe</label>
            <input type="password" name="password" id="password" class="connectInput" required
                placeholder="Entrez à nouveau votre mot de passe">
        </div>
        <button class="connectButton">S'inscrire</button>
        <p>Vous avez un compte ? <a href="/auth/login">Se connecter</a></p>
    </form>

</x-base>
