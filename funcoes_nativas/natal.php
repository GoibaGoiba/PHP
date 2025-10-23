<?php
$hj=new DateTime('');
$natal=new DateTime('2025-12-25');
$intervalo=$hj->diff($natal);
Echo "Faltam ".$intervalo->days." dias para o Natal";