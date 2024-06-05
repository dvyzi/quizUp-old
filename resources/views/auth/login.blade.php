<x-base css="auth/registerLogin.css">

    <form action="">
        @csrf
        <h2>Connexion</h2>
        <div class="formContain">
            <label for="nickname">Pseudo/Email</label>
            <input type="text" name="nickname" id="nickname" class="connectInput" placeholder="Entrez votre mail ou pseudo" required>
        </div>
        <div class="formContain">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" class="connectInput" placeholder="Entrez votre mot de passe" required>
        </div>
        <button class="connectButton">S'inscrire</button>
        <p>Vous n'avez pas encore de compte ? <a href="/auth/register">S'inscrire</a></p>
    </form>

</x-base>
