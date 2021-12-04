<?php

if (isset($_POST['cetak_sku'])) {
    require_once 'vendor/autoload.php';
    
    ob_start();
    include 'views/template_surat/sku.php';
    $content = ob_get_clean();
    
    $encryption = crypt("sku", "bmntr");
    $file = $encryption.'.pdf';
    
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($content);
    $mpdf->Output($file, 'I');
    exit;
} else {
    ?>
    <script>
        document.location = '<?= $base_url; ?>user/sku';
    </script>
    <?php
}