<?php
namespace popp\ch_3;
//require_once("../vendor/autoload.php");

use popp\ch_3\ShopProduct;

class CdProduct extends ShopProduct
{
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        int|float $price,
        private int $playLength
    ) {
        parent::__construct(
            $title,
            $firstName,
            $mainName,
            $price
        );
    }

    /* listing 03.48 */
    public function getPlayLength(): int 
    {
        return $this->playLength;
    }

    /* /listing 03.48 */
    public function getSummaryLine():string
    {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": playing time - {$this->playLength}";
        return $base;
    }

/* /listing 03.75 */


}