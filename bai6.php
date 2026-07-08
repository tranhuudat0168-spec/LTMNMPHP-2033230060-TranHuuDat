<?php
class BankAccount{
    public $SoTk;
    public $TenTk;
    public $Sodu;

    public function naptien($sotien)
    {
        $this->Sodu += $sotien;
        echo "da nap $sotien dong.<br>";
    }
    public function ruttien($sotien)
    {
        if ($sotien <= $this->Sodu) {
            $this->Sodu -= $sotien;
            echo "Đa rut $sotien dong.<br>";
        } else {
            echo "Rut $sotien. Khong du so du de rut. Giao dich that bai<br>";
        }
    }
    public function hienthisodu()
    {
        echo "<hr>";
        echo "So tai khoan: " . $this->SoTk . "<br>";
        echo "Ten tai khoan: " . $this->TenTk . "<br>";
        echo "So du hien tai: " . $this->Sodu . " dong<br>";
        echo "<hr>";
    }

}
$acc = new BankAccount();
$acc->SoTk = "123456789";
$acc->TenTk = "Tran Van B";
$acc->Sodu = 0;

$acc->hienthisodu();
$acc->naptien(500000);
$acc->hienthisodu();
$acc->ruttien(50000);
$acc->hienthisodu();
$acc->ruttien(500000);
$acc->hienthisodu();
?>