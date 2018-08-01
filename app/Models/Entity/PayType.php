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
 * 支付方式表

 * @Entity()
 * @Table(name="pay_type")
 * @uses      PayType
 */
class PayType extends Model
{
    /**
     * @var int $paymentId ID
     * @Id()
     * @Column(name="payment_id", type="tinyint")
     */
    private $paymentId;

    /**
     * @var string $paymentType 类型
     * @Column(name="payment_type", type="string", length=20)
     */
    private $paymentType;

    /**
     * @var string $paymentName 名称
     * @Column(name="payment_name", type="string", length=100)
     */
    private $paymentName;

    /**
     * @var string $paymentCommission 手续费
     * @Column(name="payment_commission", type="string", length=8, default="0")
     */
    private $paymentCommission;

    /**
     * @var string $paymentDesc 描述
     * @Column(name="payment_desc", type="text", length=65535)
     */
    private $paymentDesc;

    /**
     * @var string $paymentConfig 配置
     * @Column(name="payment_config", type="text", length=65535)
     */
    private $paymentConfig;

    /**
     * @var int $active 是否启用
     * @Column(name="active", type="tinyint", default=0)
     */
    private $active;

    /**
     * @var int $nums 排序
     * @Column(name="nums", type="tinyint", default=0)
     */
    private $nums;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setPaymentId(int $value)
    {
        $this->paymentId = $value;

        return $this;
    }

    /**
     * 类型
     * @param string $value
     * @return $this
     */
    public function setPaymentType(string $value): self
    {
        $this->paymentType = $value;

        return $this;
    }

    /**
     * 名称
     * @param string $value
     * @return $this
     */
    public function setPaymentName(string $value): self
    {
        $this->paymentName = $value;

        return $this;
    }

    /**
     * 手续费
     * @param string $value
     * @return $this
     */
    public function setPaymentCommission(string $value): self
    {
        $this->paymentCommission = $value;

        return $this;
    }

    /**
     * 描述
     * @param string $value
     * @return $this
     */
    public function setPaymentDesc(string $value): self
    {
        $this->paymentDesc = $value;

        return $this;
    }

    /**
     * 配置
     * @param string $value
     * @return $this
     */
    public function setPaymentConfig(string $value): self
    {
        $this->paymentConfig = $value;

        return $this;
    }

    /**
     * 是否启用
     * @param int $value
     * @return $this
     */
    public function setActive(int $value): self
    {
        $this->active = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setNums(int $value): self
    {
        $this->nums = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * 类型
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * 名称
     * @return string
     */
    public function getPaymentName()
    {
        return $this->paymentName;
    }

    /**
     * 手续费
     * @return string
     */
    public function getPaymentCommission()
    {
        return $this->paymentCommission;
    }

    /**
     * 描述
     * @return string
     */
    public function getPaymentDesc()
    {
        return $this->paymentDesc;
    }

    /**
     * 配置
     * @return string
     */
    public function getPaymentConfig()
    {
        return $this->paymentConfig;
    }

    /**
     * 是否启用
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * 排序
     * @return int
     */
    public function getNums()
    {
        return $this->nums;
    }

}
