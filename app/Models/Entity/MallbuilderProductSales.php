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
 * 产品销量统计表

 * @Entity()
 * @Table(name="mallbuilder_product_sales")
 * @uses      MallbuilderProductSales
 */
class MallbuilderProductSales extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $pid 产品ID
     * @Column(name="pid", type="integer")
     */
    private $pid;

    /**
     * @var string $name 产品名
     * @Column(name="name", type="string", length=255)
     * @Required()
     */
    private $name;

    /**
     * @var string $company 
     * @Column(name="company", type="char", length=50)
     */
    private $company;

    /**
     * @var string $orderId 订单ID
     * @Column(name="order_id", type="string", length=15)
     */
    private $orderId;

    /**
     * @var float $rePrice 原单价
     * @Column(name="re_price", type="float", default=0)
     */
    private $rePrice;

    /**
     * @var float $price 单价
     * @Column(name="price", type="float", default=0)
     */
    private $price;

    /**
     * @var int $amount 总数
     * @Column(name="amount", type="integer", default=0)
     */
    private $amount;

    /**
     * @var float $total 总价
     * @Column(name="total", type="float", default=0)
     */
    private $total;

    /**
     * @var int $status 状态
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

    /**
     * @var int $stime 
     * @Column(name="stime", type="integer")
     */
    private $stime;

    /**
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
     * 产品名
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCompany(string $value): self
    {
        $this->company = $value;

        return $this;
    }

    /**
     * 订单ID
     * @param string $value
     * @return $this
     */
    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 原单价
     * @param float $value
     * @return $this
     */
    public function setRePrice(float $value): self
    {
        $this->rePrice = $value;

        return $this;
    }

    /**
     * 单价
     * @param float $value
     * @return $this
     */
    public function setPrice(float $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * 总数
     * @param int $value
     * @return $this
     */
    public function setAmount(int $value): self
    {
        $this->amount = $value;

        return $this;
    }

    /**
     * 总价
     * @param float $value
     * @return $this
     */
    public function setTotal(float $value): self
    {
        $this->total = $value;

        return $this;
    }

    /**
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStime(int $value): self
    {
        $this->stime = $value;

        return $this;
    }

    /**
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
     * 产品名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * 订单ID
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 原单价
     * @return mixed
     */
    public function getRePrice()
    {
        return $this->rePrice;
    }

    /**
     * 单价
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 总数
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 总价
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * 状态
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getStime()
    {
        return $this->stime;
    }

}
