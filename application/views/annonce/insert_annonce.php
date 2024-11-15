<div>
    <form action="<?php echo base_url("") ?>" method="post"enctype="multipart/form-data">
        <label for="dep">Département:</label>
        <input type="text" id="dep" name="dep" required><br><br>

        <label for="poste">Poste:</label>
        <input type="text" id="poste" name="poste" required><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="limit_date">Limite Date:</label>
        <input type="date" id="limit_date" name="limit_date" required><br><br>

        <label for="age_limit">Limite d'Âge:</label>
        <input type="number" id="age_limit" name="age_limit" required><br><br>

        <label for="experience">Années d'Expérience:</label>
        <input type="number" id="experience" name="experience" required><br><br>

        <label for="diplome">Sélectionner vos diplômes</label> <br/>
            <? foreach ($diplomes as $diplome): ?>
                <input type="checkbox" name="diplomes[]" value="<?= $diplome['id_diplome'] ?>"> /> <?= $diplome['nom_diplome'] ?> 
            <?php endforeach ?>
        <br><br>

        <label for="comptence">Sélectionner vos competence:</label>
        <? foreach ($competences as $competence): ?>
                <input type="checkbox" name="competences[]" value="<?= $competence['id_competence'] ?>"> /> <?= $competence['nom_diplome'] ?> 
            <?php endforeach ?>
        <br><br>

        <button type="submit">OK</button>
    </form>
</div>