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
 * 对话表

 * @Entity()
 * @Table(name="mallbuilder_talk")
 * @uses      MallbuilderTalk
 */
class MallbuilderTalk extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $refundId 
     * @Column(name="refund_id", type="string", length=20)
     */
    private $refundId;

    /**
     * @var string $orderId 订单ID
     * @Column(name="order_id", type="string", length=15)
     */
    private $orderId;

    /**
     * @var int $memberId 发言人ID
     * @Column(name="member_id", type="integer")
     */
    private $memberId;

    /**
     * @var string $memberName 发言人名称
     * @Column(name="member_name", type="string", length=100)
     */
    private $memberName;

    /**
     * @var int $type 发言人类型
     * @Column(name="type", type="tinyint", default=1)
     */
    private $type;

    /**
     * @var string $content 发言内容
     * @Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var string $pic 
     * @Column(name="pic", type="string", length=255)
     */
    private $pic;

    /**
     * @var int $createTime 对话发表时间
     * @Column(name="create_time", type="integer")
     */
    private $createTime;

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
     * @param string $value
     * @return $this
     */
    public function setRefundId(string $value): self
    {
        $this->refundId = $value;

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
     * 发言人ID
     * @param int $value
     * @return $this
     */
    public function setMemberId(int $value): self
    {
        $this->memberId = $value;

        return $this;
    }

    /**
     * 发言人名称
     * @param string $value
     * @return $this
     */
    public function setMemberName(string $value): self
    {
        $this->memberName = $value;

        return $this;
    }

    /**
     * 发言人类型
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 发言内容
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPic(string $value): self
    {
        $this->pic = $value;

        return $this;
    }

    /**
     * 对话发表时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

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
     * @return string
     */
    public function getRefundId()
    {
        return $this->refundId;
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
     * 发言人ID
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * 发言人名称
     * @return string
     */
    public function getMemberName()
    {
        return $this->memberName;
    }

    /**
     * 发言人类型
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 发言内容
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * 对话发表时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

}
