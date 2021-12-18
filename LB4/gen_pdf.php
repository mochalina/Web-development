<?php
    require('tfpdf/tfpdf.php');

    $mysqli = new mysqli("localhost", "a0609677_root", "root", "a0609677_games");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $pdf = new tFPDF();
    $pdf->AddFont('PDFFont','','cour.ttf');
    $pdf->SetFont('PDFFont','',12);
    $pdf->AddPage();

    $pdf->Cell(80);
    $pdf->Cell(30,10,'Игры',1,0,'C');
    $pdf->Ln(20);

    $pdf->SetFillColor(200,200,200);
    $pdf->SetFontSize(6);

    $header = array("п/п","Название","Жанр","Разработчик","Издатель","Ключ","Дата приобретения","Дата окончания","URL магазина");
    $w = array(6,20,25,25,20,20,20,17,40);
    $h = 20;
    for ($c = 0; $c < 9; $c++){
        $pdf->Cell($w[$c],$h,$header[$c],'LRTB','0','',true);
    }
    $pdf->Ln();

    // Запрос на выборку сведений о пользователях
    $result = $mysqli->query("SELECT
        games.games_name as game_name,
        games.games_genre as game_genre,
        games.games_developer as game_developer,
        games.games_publisher as game_publisher,
        kl.key_name,
        kl.key_date,
        kl.key_date_end,
        stores.stores_url as url
        FROM kl
        LEFT JOIN games ON kl.id_games=games.id_games
        LEFT JOIN stores ON kl.id_stores=stores.id_stores"
    );

    if ($result){
        $counter = 1;
        // Для каждой строки из запроса
        while ($row = $result->fetch_row()){
            $pdf->Cell($w[0],$h,$counter,'LRBT','0','C',true);
            $pdf->Cell($w[1],$h,$row[0],'LRB');

            for ($c = 2; $c < 9; $c++){
                if ($c==6 || $c==7){
                    $row[$c-1] = date('d-m-Y', strtotime($row[$c-1]));
                }
                $pdf->Cell($w[$c],$h,$row[$c-1],'RB');
            }
            $pdf->Ln();
            $counter++;
        }
    }

    $pdf->Output("I",'Games.pdf',true);
?>