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
 * 购物车

 * @Entity()
 * @Table(name="mallbuilder_product_cart")
 * @uses      MallbuilderProductCart
 */
class MallbuilderProductCart extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $buyerId 会员ID
     * @Column(name="buyer_id", type="integer", default=0)
     */
    private $buyerId;

    /**
     * @var int $productId 产品ID
     * @Column(name="product_id", type="integer", default=0)
     */
    private $productId;

    /**
     * @var int $sellerId 卖家ID
     * @Column(name="seller_id", type="integer", default=0)
     */
    private $sellerId;

    /**
     * @var float $price 价格
     * @Column(name="price", type="float", default=0)
     */
    private $price;

    /**
     * @var int $quantity 数量
     * @Column(name="quantity", type="integer", default=0)
     */
    private $quantity;

    /**
     * @var int $createTime 创建时间
     * @Column(name="create_time", type="integer", default=0)
     */
    private $createTime;

    /**
     * @var string $specId 
     * @Column(name="spec_id", type="string", length=20)
     */
    private $specId;

    /**
     * @var string $isTg 
     * @Column(name="is_tg", type="string", length=5, default="false")
     */
    private $isTg;

    /**
     * @var string $discounts 会员折扣
     * @Column(name="discounts", type="string", length=10, default="0.0")
     */
    private $discounts;

    /**
     * @var int $payMethod 付款方式1：在线支付2：货到付款3：线下付款
     * @Column(name="pay_method", type="tinyint", default=1)
     */
    private $payMethod;

    /**
     * @var string $type 商品类型
     * @Column(name="type", type="string", length=50)
     */
    private $type;

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
     * 会员ID
     * @param int $value
     * @return $this
     */
    public function setBuyerId(int $value): self
    {
        $this->buyerId = $value;

        return $this;
    }

    /**
     * 产品ID
     * @param int $value
     * @return $this
     */
    public function setProductId(int $value): self
    {
        $this->productId = $value;

        return $this;
    }

    /**
     * 卖家ID
     * @param int $value
     * @return $this
     */
    public function setSellerId(int $value): self
    {
        $this->sellerId = $value;

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
     * 数量
     * @param int $value
     * @return $this
     */
    public function setQuantity(int $value): self
    {
        $this->quantity = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSpecId(string $value): self
    {
        $this->specId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIsTg(string $value): self
    {
        $this->isTg = $value;

        return $this;
    }

    /**
     * 会员折扣
     * @param string $value
     * @return $this
     */
    public function setDiscounts(string $value): self
    {
        $this->discounts = $value;

        return $this;
    }

    /**
     * 付款方式1：在线支付2：货到付款3：线下付款
     * @param int $value
     * @return $this
     */
    public function setPayMethod(int $value): self
    {
        $this->payMethod = $value;

        return $this;
    }

    /**
     * 商品类型
     * @param string $value
     * @return $this
     */
    public function setType(string $value): self
    {
        $this->type = $value;

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
     * 会员ID
     * @return int
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }

    /**
     * 产品ID
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * 卖家ID
     * @return int
     */
    public function getSellerId()
    {
        return $this->sellerId;
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
     * 数量
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * @return string
     */
    public function getSpecId()
    {
        return $this->specId;
    }

    /**
     * @return mixed
     */
    public function getIsTg()
    {
        return $this->isTg;
    }

    /**
     * 会员折扣
     * @return mixed
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * 付款方式1：在线支付2：货到付款3：线下付款
     * @return mixed
     */
    public function getPayMethod()
    {
        return $this->payMethod;
    }

    /**
     * 商品类型
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

}
