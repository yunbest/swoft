<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * @Entity()
 * @Table(name="mallbuilder_product_setmeal")
 * @uses      MallbuilderProductSetmeal
 */
class MallbuilderProductSetmeal extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $pid 产品ID
     * @Column(name="pid", type="integer", default=0)
     */
    private $pid;

    /**
     * @var string $setmeal 套餐名称
     * @Column(name="setmeal", type="string", length=255)
     * @Required()
     */
    private $setmeal;

    /**
     * @var string $specName 
     * @Column(name="spec_name", type="string", length=255)
     */
    private $specName;

    /**
     * @var float $price 价格
     * @Column(name="price", type="decimal", default=0)
     */
    private $price;

    /**
     * @var float $marketPrice 市场价
     * @Column(name="market_price", type="float", default=0)
     */
    private $marketPrice;

    /**
     * @var float $costPrice 生产价
     * @Column(name="cost_price", type="float", default=0)
     */
    private $costPrice;

    /**
     * @var int $stock 库存
     * @Column(name="stock", type="integer", default=0)
     */
    private $stock;

    /**
     * @var string $sku 货号
     * @Column(name="sku", type="string", length=60)
     * @Required()
     */
    private $sku;

    /**
     * @var string $propertyValueId 规格ID
     * @Column(name="property_value_id", type="text", length=65535)
     */
    private $propertyValueId;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 产品ID
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * 套餐名称
     * @param string $value
     * @return $this
     */
    public function setSetmeal(string $value): self
    {
        $this->setmeal = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSpecName(string $value): self
    {
        $this->specName = $value;

        return $this;
    }

    /**
     * 价格
     * @param float $value
     * @return $this
     */
    public function setPrice(float $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * 市场价
     * @param float $value
     * @return $this
     */
    public function setMarketPrice(float $value): self
    {
        $this->marketPrice = $value;

        return $this;
    }

    /**
     * 生产价
     * @param float $value
     * @return $this
     */
    public function setCostPrice(float $value): self
    {
        $this->costPrice = $value;

        return $this;
    }

    /**
     * 库存
     * @param int $value
     * @return $this
     */
    public function setStock(int $value): self
    {
        $this->stock = $value;

        return $this;
    }

    /**
     * 货号
     * @param string $value
     * @return $this
     */
    public function setSku(string $value): self
    {
        $this->sku = $value;

        return $this;
    }

    /**
     * 规格ID
     * @param string $value
     * @return $this
     */
    public function setPropertyValueId(string $value): self
    {
        $this->propertyValueId = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 产品ID
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * 套餐名称
     * @return string
     */
    public function getSetmeal()
    {
        return $this->setmeal;
    }

    /**
     * @return string
     */
    public function getSpecName()
    {
        return $this->specName;
    }

    /**
     * 价格
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 市场价
     * @return mixed
     */
    public function getMarketPrice()
    {
        return $this->marketPrice;
    }

    /**
     * 生产价
     * @return mixed
     */
    public function getCostPrice()
    {
        return $this->costPrice;
    }

    /**
     * 库存
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * 货号
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * 规格ID
     * @return string
     */
    public function getPropertyValueId()
    {
        return $this->propertyValueId;
    }

}
