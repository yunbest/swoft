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
 * 发送短信记录表

 * @Entity()
 * @Table(name="mallbuilder_msg_record")
 * @uses      MallbuilderMsgRecord
 */
class MallbuilderMsgRecord extends Model
{
    /**
     * @var int $id 编号
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $msg 短信内容
     * @Column(name="msg", type="string", length=255)
     * @Required()
     */
    private $msg;

    /**
     * @var int $count 发送次数
     * @Column(name="count", type="tinyint")
     * @Required()
     */
    private $count;

    /**
     * @var int $createTime 发送时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $updateTime 最后一次发送时间
     * @Column(name="update_time", type="integer")
     * @Required()
     */
    private $updateTime;

    /**
     * @var string $serial 序列号
     * @Column(name="serial", type="char", length=6)
     * @Required()
     */
    private $serial;

    /**
     * @var string $orderId 订单编号
     * @Column(name="order_id", type="string", length=15, default="0")
     */
    private $orderId;

    /**
     * @var int $type 类型，1为虚拟商品购买,2为注册验证码，3为找回密码
     * @Column(name="type", type="tinyint", default=0)
     */
    private $type;

    /**
     * @var int $receive 接受者电话号码
     * @Column(name="receive", type="integer")
     * @Required()
     */
    private $receive;

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
     * 短信内容
     * @param string $value
     * @return $this
     */
    public function setMsg(string $value): self
    {
        $this->msg = $value;

        return $this;
    }

    /**
     * 发送次数
     * @param int $value
     * @return $this
     */
    public function setCount(int $value): self
    {
        $this->count = $value;

        return $this;
    }

    /**
     * 发送时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 最后一次发送时间
     * @param int $value
     * @return $this
     */
    public function setUpdateTime(int $value): self
    {
        $this->updateTime = $value;

        return $this;
    }

    /**
     * 序列号
     * @param string $value
     * @return $this
     */
    public function setSerial(string $value): self
    {
        $this->serial = $value;

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
     * 类型，1为虚拟商品购买,2为注册验证码，3为找回密码
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 接受者电话号码
     * @param int $value
     * @return $this
     */
    public function setReceive(int $value): self
    {
        $this->receive = $value;

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
     * 短信内容
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * 发送次数
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * 发送时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 最后一次发送时间
     * @return int
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * 序列号
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
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
     * 类型，1为虚拟商品购买,2为注册验证码，3为找回密码
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 接受者电话号码
     * @return int
     */
    public function getReceive()
    {
        return $this->receive;
    }

}
