<div>
    <h2>Liste des Annonces</h2>
    <?php if (!empty($annonces)): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Département</th>
                    <th>Poste</th>
                    <th>Date</th>
                    <th>Limite Date</th>
                    <th>Limite d'Âge</th>
                    <th>Années d'Expérience</th>
                    <th>Diplômes</th>
                    <th>Compétences</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($annonces as $annonce): ?>
                    <tr>
                        <td><?= htmlspecialchars($annonce['dep']) ?></td>
                        <td><?= htmlspecialchars($annonce['poste']) ?></td>
                        <td><?= htmlspecialchars($annonce['date']) ?></td>
                        <td><?= htmlspecialchars($annonce['limit_date']) ?></td>
                        <td><?= htmlspecialchars($annonce['age_limit']) ?></td>
                        <td><?= htmlspecialchars($annonce['experience']) ?></td>
                        <td>
                            <?= implode(', ', array_map(function($diplome) {
                                return htmlspecialchars($diplome['nom_diplome']);
                            }, $annonce['diplomes'])) ?>
                        </td>
                        <td>
                            <?= implode(', ', array_map(function($competence) {
                                return htmlspecialchars($competence['nom_competence']);
                            }, $annonce['competences'])) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucune annonce trouvée.</p>
    <?php endif; ?>
</div>
