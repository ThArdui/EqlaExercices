<form method="POST" action="{{ url('calculate') }}">
@csrf
<label for="nbr_1"> Entrez un premier nombre? </label>
    <input type="number" name="nbr_1" id="nbr_1" required>

    <label for="nbr_2"> Entrez un deuxième nombre? </label>
    <input type="number" name="nbr_2" id="nbr_2" required>
    <select  id="ope" name="ope" required>
        <option value="add">Addition</option>
        <option value="sub">Soustraction</option>
        <option value="mul">Multiplication</option>
        <option value="div"> Divison</option>
    </select>
    <input type="submit" value="Donne moi le résultat">
</form>
