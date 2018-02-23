<?php
require('../frontend/fpdf181/fpdf.php');

class PDF extends FPDF
{
protected $col = 0; // Current column
protected $y0;      // Ordinate of column start


function Footer()
{
    // Page footer
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->SetTextColor(128);
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

function SetCol($col)
{
    // Set position at a given column
    $this->col = $col;
    $x = 10+$col*65;
    $this->SetLeftMargin($x);
    $this->SetX($x);
}

function AcceptPageBreak()
{
    // Method accepting or not automatic page break
    if($this->col<2)
    {
        // Go to next column
        $this->SetCol($this->col+1);
        // Set ordinate to top
        $this->SetY($this->y0);
        // Keep on page
        return false;
    }
    else
    {
        // Go back to first column
        $this->SetCol(0);
        // Page break
        return true;
    }
}

function ChapterBody()
{
    // Read text file
    // $txt = file_get_contents($file);
    // Font
    $this->SetFont('Times','',12);
    // Output text in a 6 cm width column

    $this->SetX(70);
    $this->MultiCell(120,5,"RUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAYRUNAWAY");

    $this->Ln();
    // Mention
    $this->SetFont('','I');
    $this->Cell(0,5,'(end of excerpt)');
    // Go back to first column
    $this->SetCol(0);
}

function PrintChapter($num, $file)
{
    // Add chapter
    $this->AddPage();
    $this->ChapterBody($file);
}
}

$pdf = new PDF();
$pdf->PrintChapter(1,'20k_c1.txt');
$pdf->Output();
?>
