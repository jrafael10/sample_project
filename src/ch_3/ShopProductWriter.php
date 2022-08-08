<?php

namespace popp\ch_3;

use popp\ch_3\ShopProduct;

/* listing 03.70 */
class ShopProductWriter
{
    private $products = [];

     //...
/* /listing 03.70 */

public function addProduct(ShopProduct $shopProduct)
{
    $this->products[] = $shopProduct;

}

public function write()
{
    $str = "";

    foreach($this->products as $shopProduct)
    {
        $str .= "{$shopProduct->getTitle()}: ";
        $str .= $shopProduct->getProducer();
        $str .= " ({$shopProduct->getPrice()})\n";
    }

    print $str;
}


}
