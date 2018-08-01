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
 * @Table(name="mallbuilder_economy")
 * @uses      MallbuilderEconomy
 */
class MallbuilderEconomy extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $orderId 订单号
     * @Column(name="order_id", type="string", length=15)
     * @Required()
     */
    private $orderId;

    /**
     * @var int $paytime 支付时间/申请时间
     * @Column(name="paytime", type="integer")
     */
    private $paytime;

    /**
     * @var string $user 购买人
     * @Column(name="user", type="string", length=20)
     * @Required()
     */
    private $user;

    /**
     * @var float $price 金额
     * @Column(name="price", type="float", default=50)
     */
    private $price;

    /**
     * @var int $validTime 有效期
     * @Column(name="valid_time", type="integer")
     * @Required()
     */
    private $validTime;

    /**
     * @var string $brokerCoefficient 经纪人系数
     * @Column(name="broker_coefficient", type="string", length=10, default="0.85")
     */
    private $brokerCoefficient;

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
     * 订单号
     * @param string $value
     * @return $this
     */
    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 支付时间/申请时间
     * @param int $value
     * @return $this
     */
    public function setPaytime(int $value): self
    {
        $this->paytime = $value;

        return $this;
    }

    /**
     * 购买人
     * @param string $value
     * @return $this
     */
    public function setUser(string $value): self
    {
        $this->user = $value;

        return $this;
    }

    /**
     * 金额
     * @param float $value
     * @return $this
     */
    public function setPrice(float $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * 有效期
     * @param int $value
     * @return $this
     */
    public function setValidTime(int $value): self
    {
        $this->validTime = $value;

        return $this;
    }

    /**
     * 经纪人系数
     * @param string $value
     * @return $this
     */
    public function setBrokerCoefficient(string $value): self
    {
        $this->brokerCoefficient = $value;

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
     * 订单号
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 支付时间/申请时间
     * @return int
     */
    public function getPaytime()
    {
        return $this->paytime;
    }

    /**
     * 购买人
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 金额
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 有效期
     * @return int
     */
    public function getValidTime()
    {
        return $this->validTime;
    }

    /**
     * 经纪人系数
     * @return mixed
     */
    public function getBrokerCoefficient()
    {
        return $this->brokerCoefficient;
    }

}
