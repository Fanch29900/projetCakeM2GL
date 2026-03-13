<h2>Liste officielle des inscrits</h2>
<table class="public-table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Bureau de Vote (Adresse)</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($electeurs as $electeur): ?>
        <tr>
            <td><?= h($electeur->nom) ?></td>
            <td><?= h($electeur->prenom) ?></td>
            <td><?= h($electeur->bureau_vote->adr_bureau) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>