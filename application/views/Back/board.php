<div class="main-content col-md-9" style="margin-left: 300px;">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">
                            <span class="div__ul__li__span div__ul__li__span--titre">Total d'argent reçu : </span>
                            <span class="div__ul_li_span div__ul__li__span--argent">29 000 Ar</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">
                            <span class="div__ul__li__span div__ul__li__span--titre">Nombre de clients : </span>
                            <span class="div__ul_li_span div__ul__li__span--argent">
                                <?php echo $nombreClient; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-5 mt-5">
                <div class="col-md-6">
                    <div class="p-3 border chart-container">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>
        <script src="<?php echo bu('assets/chartJS/chart.js'); ?>"></script>
        <!-- Script pour le chart  -->
        <script>
            // var dataPrices = [];
            // @foreach($prices as $p)
            // dataPrices.push('{{ $p }}');
            // @endforeach

            // // Appel de la fonction drawChart en passant les données nécessaires
            drawChart();

            function drawChart() {
                // var pricesArray = price.map(function (price) {
                //     return parseInt(price.replace(/ /g, ''));
                // });
                // Chart pour le courbe de variation
                // Données de variation de salaire
                const labels = ["Jan", "Fév", "Mar", "Avr", "Mai", "Jun", "jul", "Aou", "sept", "oct", "nov", "dec"];
                // const dataset1 = {
                //     label: "Nombre de réservation",
                //     data: [40, 20, 35, 23, 50, 63],
                //     backgroundColor: "rgba(54, 162, 235, 0.5)",
                //     borderColor: "rgba(54, 162, 235, 1)",
                //     borderWidth: 1
                // };
                const dataset2 = {
                    label: "Montant obtenues",
                    data: [10000,8000,6000,5000],
                    backgroundColor: "rgba(255, 99, 132, 0.5)",
                    borderColor: "rgba(255, 99, 132, 1)",
                    borderWidth: 1
                };

                // Configuration du graphique
                const config = {
                    type: "line",
                    data: {
                        labels: labels,
                        datasets: [dataset2]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: "Montant obtenues"
                                }
                            }
                        }
                    }
                };
                // Création du graphique
                const myChart = new Chart(document.getElementById("myChart"), config);
            }
        </script>