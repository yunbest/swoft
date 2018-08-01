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
 * 活动产品表

 * @Entity()
 * @Table(name="mallbuilder_activity_product_list")
 * @uses      MallbuilderActivityProductList
 */
class MallbuilderActivityProductList extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $activityId 活动ID
     * @Column(name="activity_id", type="integer")
     * @Required()
     */
    private $activityId;

    /**
     * @var int $productId 产品ID
     * @Column(name="product_id", type="integer")
     * @Required()
     */
    private $productId;

    /**
     * @var string $productName 产品名
     * @Column(name="product_name", type="string", length=100)
     * @Required()
     */
    private $productName;

    /**
     * @var int $memberId 会员ID
     * @Column(name="member_id", type="integer")
     * @Required()
     */
    private $memberId;

    /**
     * @var string $memberName 会员名
     * @Column(name="member_name", type="string", length=30)
     * @Required()
     */
    private $memberName;

    /**
     * @var int $createTime 创建时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $status 状态
     * @Column(name="status", type="tinyint")
     * @Required()
     */
    private $status;

    /**
     * @var int $displayorder 排序
     * @Column(name="displayorder", type="smallint", default=0)
     */
    private $displayorder;

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
     * 活动ID
     * @param int $value
     * @return $this
     */
    public function setActivityId(int $value): self
    {
        $this->activityId = $value;

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
     * 产品名
     * @param string $value
     * @return $this
     */
    public function setProductName(string $value): self
    {
        $this->productName = $value;

        return $this;
    }

    /**
     * 会员ID
     * @param int $value
     * @return $this
     */
    public function setMemberId(int $value): self
    {
        $this->memberId = $value;

        return $this;
    }

    /**
     * 会员名
     * @param string $value
     * @return $this
     */
    public function setMemberName(string $value): self
    {
        $this->memberName = $value;

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
     * 排序
     * @param int $value
     * @return $this
     */
    public function setDisplayorder(int $value): self
    {
        $this->displayorder = $value;

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
     * 活动ID
     * @return int
     */
    public function getActivityId()
    {
        return $this->activityId;
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
     * 产品名
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * 会员ID
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * 会员名
     * @return string
     */
    public function getMemberName()
    {
        return $this->memberName;
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
     * 状态
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 排序
     * @return int
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

}
