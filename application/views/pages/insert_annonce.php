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

        <label for="diplome">Diplôme:</label>
        <select id="diplome" name="diplome" required>
            <option value="none">Sélectionner un diplôme</option>
            <option value="bachelor">Licence</option>
            <option value="master">Master</option>
            <option value="phd">Doctorat</option>
            <!-- Add more options as needed -->
        </select><br><br>

        <label for="competence">Compétence:</label>
        <input type="text" id="competence" name="competence[]" required><br>
        <input type="text" id="competence" name="competence[]" required><br>
        <input type="text" id="competence" name="competence[]" required><br>
        <!-- Add more fields for competencies as needed -->

        <br><label for="cv">Upload CV:</label>
        <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required><br><br>

        <label for="motivation">Upload Lettre de Motivation:</label>
        <input type="file" id="motivation" name="motivation" accept=".pdf,.doc,.docx" required><br><br>

        <button type="submit">OK</button>
    </form>
</div>