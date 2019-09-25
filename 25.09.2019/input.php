<form action="input_do.php" method="get">
    <div>
        <label for="nimi">Nimi:</label>
        <input type="text" id="nimi" name="nimi">
    </div>
    <div>
        <label for="pikkus">Pikkus (m):</label>
        <input type="number" step="0.01" min="0.0" id="pikkus" name="pikkus">
    </div>
    <div>
        <label for="kaal">Kaal (kg):</label>
        <input type="number" min="0" id="kaal" name="kaal">
    </div>
    <input type="submit" value="Saada">
</form>
