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
 * 功能申请表

 * @Entity()
 * @Table(name="mallbuilder_apply")
 * @uses      MallbuilderApply
 */
class MallbuilderApply extends Model
{
    /**
     * @var int $id 申请编号
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $appid 功能编号
     * @Column(name="appid", type="integer")
     */
    private $appid;

    /**
     * @var int $createTime 申请日期
     * @Column(name="create_time", type="integer")
     */
    private $createTime;

    /**
     * @var int $memberId 会员id
     * @Column(name="member_id", type="integer")
     */
    private $memberId;

    /**
     * @var string $memberName 会员名称
     * @Column(name="member_name", type="string", length=50)
     */
    private $memberName;

    /**
     * @var int $shopId 店铺ID
     * @Column(name="shop_id", type="integer")
     */
    private $shopId;

    /**
     * @var string $shopName 店铺名称
     * @Column(name="shop_name", type="string", length=120)
     */
    private $shopName;

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
     * @var int $tlimit 活动次数限制
     * @Column(name="tlimit", type="integer")
     */
    private $tlimit;

    /**
     * @var int $usedtimes 已使用的次数
     * @Column(name="usedtimes", type="integer", default=0)
     */
    private $usedtimes;

    /**
     * @var int $status 状态 1可用,2取消,3结束
     * @Column(name="status", type="integer", default=1)
     */
    private $status;

    /**
     * 申请编号
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 功能编号
     * @param int $value
     * @return $this
     */
    public function setAppid(int $value): self
    {
        $this->appid = $value;

        return $this;
    }

    /**
     * 申请日期
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 会员id
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
     * 活动次数限制
     * @param int $value
     * @return $this
     */
    public function setTlimit(int $value): self
    {
        $this->tlimit = $value;

        return $this;
    }

    /**
     * 已使用的次数
     * @param int $value
     * @return $this
     */
    public function setUsedtimes(int $value): self
    {
        $this->usedtimes = $value;

        return $this;
    }

    /**
     * 状态 1可用,2取消,3结束
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 申请编号
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 功能编号
     * @return int
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * 申请日期
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 会员id
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
     * 店铺ID
     * @return int
     */
    public function getShopId()
    {
        return $this->shopId;
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
     * 活动次数限制
     * @return int
     */
    public function getTlimit()
    {
        return $this->tlimit;
    }

    /**
     * 已使用的次数
     * @return int
     */
    public function getUsedtimes()
    {
        return $this->usedtimes;
    }

    /**
     * 状态 1可用,2取消,3结束
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

}
