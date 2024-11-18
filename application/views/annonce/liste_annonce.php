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
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo site_url('CTRL_annonce/edit/'.$annonce["id_annonce"]); ?>">
                                        <i class="bx bx-edit-alt me-1"></i>
                                        Modifier
                                    </a>
                                    <a class="dropdown-item" href="<?php echo site_url('CTRL_annonce/delete/'.$annonce["id_annonce"]); ?>">
                                        <i class="bx bx-trash me-1"></i>
                                        Supprimer
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucune annonce trouvée.</p>
    <?php endif; ?>
</div>
