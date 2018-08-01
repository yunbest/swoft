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
 * 代金券表

 * @Entity()
 * @Table(name="mallbuilder_voucher")
 * @uses      MallbuilderVoucher
 */
class MallbuilderVoucher extends Model
{
    /**
     * @var int $id 编号
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $serial 序列号
     * @Column(name="serial", type="string", length=32)
     */
    private $serial;

    /**
     * @var int $tempId 模板编号
     * @Column(name="temp_id", type="integer")
     */
    private $tempId;

    /**
     * @var string $name 代金券名称
     * @Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string $desc 代金券描述
     * @Column(name="desc", type="string", length=255)
     */
    private $desc;

    /**
     * @var int $startTime 开始时间
     * @Column(name="start_time", type="integer")
     */
    private $startTime;

    /**
     * @var int $endTime 结束时间
     * @Column(name="end_time", type="integer")
     */
    private $endTime;

    /**
     * @var int $price 面额
     * @Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var float $limit 使用时的最低消费限制
     * @Column(name="limit", type="double")
     */
    private $limit;

    /**
     * @var int $shopId 店铺ID
     * @Column(name="shop_id", type="integer")
     */
    private $shopId;

    /**
     * @var int $status 购物券状态 1-未用,2-已用,3-过期,4-收回
     * @Column(name="status", type="tinyint")
     */
    private $status;

    /**
     * @var int $createTime 代金券领取日期
     * @Column(name="create_time", type="integer")
     */
    private $createTime;

    /**
     * @var int $memberId 会员ID
     * @Column(name="member_id", type="integer")
     */
    private $memberId;

    /**
     * @var string $memberName 会员名称
     * @Column(name="member_name", type="string", length=50)
     */
    private $memberName;

    /**
     * @var string $orderId 绑定订单ID
     * @Column(name="order_id", type="string", length=20)
     */
    private $orderId;

    /**
     * @var string $logo 图标
     * @Column(name="logo", type="string", length=255)
     * @Required()
     */
    private $logo;

    /**
     * @var string $shopName 店铺名称
     * @Column(name="shop_name", type="string", length=200)
     * @Required()
     */
    private $shopName;

    /**
     * @var int $pcs 此代金券数量
     * @Column(name="pcs", type="integer", default=10)
     */
    private $pcs;

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
     * 模板编号
     * @param int $value
     * @return $this
     */
    public function setTempId(int $value): self
    {
        $this->tempId = $value;

        return $this;
    }

    /**
     * 代金券名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 代金券描述
     * @param string $value
     * @return $this
     */
    public function setDesc(string $value): self
    {
        $this->desc = $value;

        return $this;
    }

    /**
     * 开始时间
     * @param int $value
     * @return $this
     */
    public function setStartTime(int $value): self
    {
        $this->startTime = $value;

        return $this;
    }

    /**
     * 结束时间
     * @param int $value
     * @return $this
     */
    public function setEndTime(int $value): self
    {
        $this->endTime = $value;

        return $this;
    }

    /**
     * 面额
     * @param int $value
     * @return $this
     */
    public function setPrice(int $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * 使用时的最低消费限制
     * @param float $value
     * @return $this
     */
    public function setLimit(float $value): self
    {
        $this->limit = $value;

        return $this;
    }

    /**
     * 店铺ID
     * @param int $value
     * @return $this
     */
    public function setShopId(int $value): self
    {
        $this->shopId = $value;

        return $this;
    }

    /**
     * 购物券状态 1-未用,2-已用,3-过期,4-收回
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 代金券领取日期
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

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
     * 会员名称
     * @param string $value
     * @return $this
     */
    public function setMemberName(string $value): self
    {
        $this->memberName = $value;

        return $this;
    }

    /**
     * 绑定订单ID
     * @param string $value
     * @return $this
     */
    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 图标
     * @param string $value
     * @return $this
     */
    public function setLogo(string $value): self
    {
        $this->logo = $value;

        return $this;
    }

    /**
     * 店铺名称
     * @param string $value
     * @return $this
     */
    public function setShopName(string $value): self
    {
        $this->shopName = $value;

        return $this;
    }

    /**
     * 此代金券数量
     * @param int $value
     * @return $this
     */
    public function setPcs(int $value): self
    {
        $this->pcs = $value;

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
     * 序列号
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * 模板编号
     * @return int
     */
    public function getTempId()
    {
        return $this->tempId;
    }

    /**
     * 代金券名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 代金券描述
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * 开始时间
     * @return int
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * 结束时间
     * @return int
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * 面额
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 使用时的最低消费限制
     * @return float
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * 店铺ID
     * @return int
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * 购物券状态 1-未用,2-已用,3-过期,4-收回
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 代金券领取日期
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
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
     * 会员名称
     * @return string
     */
    public function getMemberName()
    {
        return $this->memberName;
    }

    /**
     * 绑定订单ID
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 图标
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * 店铺名称
     * @return string
     */
    public function getShopName()
    {
        return $this->shopName;
    }

    /**
     * 此代金券数量
     * @return mixed
     */
    public function getPcs()
    {
        return $this->pcs;
    }

}
