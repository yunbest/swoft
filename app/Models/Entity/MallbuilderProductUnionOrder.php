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
 * 合并支付

 * @Entity()
 * @Table(name="mallbuilder_product_union_order")
 * @uses      MallbuilderProductUnionOrder
 */
class MallbuilderProductUnionOrder extends Model
{
    /**
     * @var int $id 编号
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $orderId 订单编号
     * @Column(name="order_id", type="char", length=18)
     * @Required()
     */
    private $orderId;

    /**
     * @var string $inorder 合并订单编号
     * @Column(name="inorder", type="string", length=255)
     * @Required()
     */
    private $inorder;

    /**
     * @var float $price 总价格
     * @Column(name="price", type="float")
     * @Required()
     */
    private $price;

    /**
     * @var string $createTime 创建时间
     * @Column(name="create_time", type="string", length=10)
     * @Required()
     */
    private $createTime;

    /**
     * @var int $buyer 买家ID
     * @Column(name="buyer", type="integer")
     * @Required()
     */
    private $buyer;

    /**
     * @var int $status -1 失效,1代付款,2已付款
     * @Column(name="status", type="tinyint")
     * @Required()
     */
    private $status;

    /**
     * 编号
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 订单编号
     * @param string $value
     * @return $this
     */
    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 合并订单编号
     * @param string $value
     * @return $this
     */
    public function setInorder(string $value): self
    {
        $this->inorder = $value;

        return $this;
    }

    /**
     * 总价格
     * @param float $value
     * @return $this
     */
    public function setPrice(float $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param string $value
     * @return $this
     */
    public function setCreateTime(string $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 买家ID
     * @param int $value
     * @return $this
     */
    public function setBuyer(int $value): self
    {
        $this->buyer = $value;

        return $this;
    }

    /**
     * -1 失效,1代付款,2已付款
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 编号
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 订单编号
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 合并订单编号
     * @return string
     */
    public function getInorder()
    {
        return $this->inorder;
    }

    /**
     * 总价格
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 买家ID
     * @return int
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * -1 失效,1代付款,2已付款
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

}
