<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="container" style="padding-bottom: 100px;">
    <h2 style="text-align: center; margin-top: 20px;">Statistiques de Participation</h2>

    <div style="display: flex; gap: 40px; flex-wrap: wrap; justify-content: space-around; margin-top: 30px;">
        
        <div style="flex: 1; min-width: 400px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            <h3>Électeurs par Bureau</h3>
            <table class="public-table">
                <thead><tr><th>Bureau</th><th>Total</th></tr></thead>
                <tbody>
                    <?php foreach ($statsBureau as $row): ?>
                        <tr><td><?= h($row->label) ?></td><td><?= $row->count ?></td></tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <canvas id="chartBureau" width="400" height="200"></canvas>
        </div>

        <div style="flex: 1; min-width: 400px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            <h3>Électeurs par Quartier</h3>
            <table class="public-table">
                <thead><tr><th>Quartier</th><th>Total</th></tr></thead>
                <tbody>
                    <?php foreach ($statsQuartier as $row): ?>
                        <tr><td><?= h($row->label) ?></td><td><?= $row->count ?></td></tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <canvas id="chartQuartier" width="400" height="200"></canvas>
        </div>
    </div>
</div>

<script>
    // Graphique Barres pour les Bureaux
    new Chart(document.getElementById('chartBureau'), {
        type: 'bar',
        data: {
            labels: <?= json_encode(array_column($statsBureau, 'label')) ?>,
            datasets: [{
                label: 'Nombre d\'électeurs',
                data: <?= json_encode(array_column($statsBureau, 'count')) ?>,
                backgroundColor: '#2e7d32'
            }]
        }
    });

    // Graphique Doughnut pour les Quartiers
    new Chart(document.getElementById('chartQuartier'), {
        type: 'doughnut',
        data: {
            labels: <?= json_encode(array_column($statsQuartier, 'label')) ?>,
            datasets: [{
                data: <?= json_encode(array_column($statsQuartier, 'count')) ?>,
                backgroundColor: ['#2e7d32', '#43a047', '#66bb6a', '#a5d6a7']
            }]
        }
    });
</script>