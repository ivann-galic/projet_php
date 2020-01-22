<?php
class Date {
    private $dateNow;
    private $dateUser;


    public function getDateNow($dateUser)
    {
        $numberofsecs = time();
        echo time();
        echo $numberofsecs;
        $result = $numberofsecs - $dateUser;
        echo date('Y/m/d H:i:s', $result);
    }


}
?>
