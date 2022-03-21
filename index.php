
<style>
form {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

label, input {
    display: block;
}
</style>


<form  action="/thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_last_name" required>
    </div>
    <div>
        <label  for="prenom">Prenom :</label>
        <input  type="text"  id="prenom"  name="user_name" required>
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required>
    </div>
    <div>
        <label  for="tel">Tel :</label>
        <input  type="tel"  id="tel"  name="user_tel" required>
    </div>
    <div>
        <label for="subject">Subject :</label>

        <select name="subject" id="subject" required>
            <option value="">--Please choose an option--</option>
            <option value="option_1">Option 1</option>
            <option value="option_2">Option 2</option>
            <option value="option_3">Option 3</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message" required></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>
