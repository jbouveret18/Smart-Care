<div style="width: 60%; margin-left: auto; margin-right: auto; height: 60% ">
    <canvas id="myChart"></canvas>
</div>

<?php
    $con = new mysqli('localhost','root','','app');
    $query = $con->query("SELECT `Valeur`,`Date` FROM `rc` ORDER BY `Date`");

    foreach($query as $data){
        $time[] = $data['Date'];
        $bpm[] = $data['Valeur'];
    }
?>

<script>
 const labels = <?php echo json_encode($time);?>;
const data = {
  labels: labels,
  datasets: [{
    label: 'Mon rythme cardiaque',
    data: <?php echo json_encode($bpm);?>,
    fill: false,
    borderColor: 'rgb(75, 192, 192)',
    tension: 0.1,
  }]
};
const config = {
    type: 'line',
    data: data,
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
    );
</script>
