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
 * @Table(name="mallbuilder_pay_log")
 * @uses      MallbuilderPayLog
 */
class MallbuilderPayLog extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $orderId 订单号
     * @Column(name="order_id", type="string", length=255)
     */
    private $orderId;

    /**
     * @var string $outTradeNo 外部支付单号
     * @Column(name="out_trade_no", type="string", length=255)
     */
    private $outTradeNo;

    /**
     * @var string $payInfo 支付信息
     * @Column(name="pay_info", type="string", length=255)
     */
    private $payInfo;

    /**
     * @var int $isPaid 是否支付
     * @Column(name="is_paid", type="tinyint")
     */
    private $isPaid;

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
     * 外部支付单号
     * @param string $value
     * @return $this
     */
    public function setOutTradeNo(string $value): self
    {
        $this->outTradeNo = $value;

        return $this;
    }

    /**
     * 支付信息
     * @param string $value
     * @return $this
     */
    public function setPayInfo(string $value): self
    {
        $this->payInfo = $value;

        return $this;
    }

    /**
     * 是否支付
     * @param int $value
     * @return $this
     */
    public function setIsPaid(int $value): self
    {
        $this->isPaid = $value;

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
     * 外部支付单号
     * @return string
     */
    public function getOutTradeNo()
    {
        return $this->outTradeNo;
    }

    /**
     * 支付信息
     * @return string
     */
    public function getPayInfo()
    {
        return $this->payInfo;
    }

    /**
     * 是否支付
     * @return int
     */
    public function getIsPaid()
    {
        return $this->isPaid;
    }

}
