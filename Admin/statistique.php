<?php // content="text/plain; charset=utf-8"
require_once ('../jpgraph-4.4.0/src/jpgraph.php');
require_once ('../jpgraph-4.4.0/src/jpgraph_pie.php');
require_once ('../jpgraph-4.4.0/src/jpgraph_pie3d.php');
include "../Controller/userC.php";



$userC=new userC();
$listeBAS=$userC->commandeBAS();
$listeMOY=$userC->commandeMOY();
$listeHAUT=$userC->commandeHAUT();

foreach($listeHAUT as $row)
	$HAUT=$row['nbr'];
foreach($listeMOY as $row)
	$MOY=$row['nbr'];
foreach($listeBAS as $row)
	$BAS=$row['nbr'];
// Some data
$data = array($HAUT,$MOY,$BAS);

// Create the Pie Graph. 
$graph = new PieGraph(720,500);

$theme_class= new VividTheme;
$graph->SetTheme($theme_class);

// Set A title for the plot
$graph->title->Set("Statistique ( yellow:HAUT blue:MOY green:BAS )");

// Create
$p1 = new PiePlot3D($data);
$graph->Add($p1);

$p1->ShowBorder();
$p1->SetColor('black');
$p1->ExplodeSlice(1);
$graph->Stroke();

?>