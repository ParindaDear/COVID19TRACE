<?php
function loadConfirmedData(){
    $csv_Confirmed = fopen("https://raw.githubusercontent.com/CSSEGISandData/COVID-19/master/archived_data/archived_time_series/time_series_2019-ncov-Confirmed.csv","r");
    return $csv_Confirmed;
}

function loadRecoveredData(){
    $csv_Recovered = fopen("https://raw.githubusercontent.com/CSSEGISandData/COVID-19/master/archived_data/archived_time_series/time_series_2019-ncov-Recovered.csv","r");
    return $csv_Recovered;
}

function loadDeathsData(){
    $csv_Deaths = fopen("https://raw.githubusercontent.com/CSSEGISandData/COVID-19/master/archived_data/archived_time_series/time_series_2019-ncov-Deaths.csv","r");
    return $csv_Deaths;
}

function getTotalDeaths(){
    $total_deaths = 0;
    $deaths = loadDeathsData();
    $temp_Deaths = fgetcsv($deaths);

    while(!feof($deaths))
    {
        $temp_Deaths = fgetcsv($deaths);
        $total_deaths += end($temp_Deaths);
    }
    return $total_deaths;
}

function getTotalRecovered(){
    $total_recovered = 0;
    $recovered = loadRecoveredData();
    $temp_Recovered = fgetcsv($recovered);

    while(!feof($recovered))
    {
        $temp_Recovered = fgetcsv($recovered);
        $total_recovered += end($temp_Recovered);
    }
    return $total_recovered;
}

function getTotalConfirmed()
{
    $total_confirmed = 0;
    $confirmed = loadConfirmedData();
    $temp_Confirmed = fgetcsv($confirmed);

    while(!feof($confirmed))
    {
        $temp_Confirmed = fgetcsv($confirmed);
        $total_confirmed += end($temp_Confirmed);
    }
    return $total_confirmed;
}

function printTable(){
    $confirmed = loadConfirmedData();
    $recovered = loadRecoveredData();
    $deaths = loadDeathsData();
    $temp_Confirmed = fgetcsv($confirmed);
    $temp_Recovered = fgetcsv($recovered);
    $temp_Deaths = fgetcsv($deaths);

    while(!feof($confirmed))
    { 
      $temp_Confirmed = fgetcsv($confirmed);
      $temp_Recovered = fgetcsv($recovered);
      $temp_Deaths = fgetcsv($deaths);

      if (is_array($temp_Confirmed) && is_array($temp_Recovered) && is_array($temp_Deaths))
      {
        echo "<tr>";
        echo "<th>".$temp_Confirmed[1]."</th>"."<td>".($temp_Confirmed[0] != "" ? $temp_Confirmed[0] : "ไม่ระบุเมือง")."</td>". "<td>" .end($temp_Confirmed)."</td>"."<td>".end($temp_Deaths)."</td>"."<td>".end($temp_Recovered)."</td>";
        echo "</tr>";
      }
    }
}


?>
