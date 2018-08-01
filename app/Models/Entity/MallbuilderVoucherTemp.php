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
 * 代金券模板表

 * @Entity()
 * @Table(name="mallbuilder_voucher_temp")
 * @uses      MallbuilderVoucherTemp
 */
class MallbuilderVoucherTemp extends Model
{
    /**
     * @var int $id 编号
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $isindex 推荐
     * @Column(name="isindex", type="tinyint", default=0)
     */
    private $isindex;

    /**
     * @var string $name 代金券模板名称
     * @Column(name="name", type="string", length=200)
     */
    private $name;

    /**
     * @var string $desc 模板描述
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
     * @var float $limit 使用时的消费金额限制
     * @Column(name="limit", type="double")
     */
    private $limit;

    /**
     * @var int $shopId 店铺ID
     * @Column(name="shop_id", type="integer")
     */
    private $shopId;

    /**
     * @var string $shopName 店铺名称
     * @Column(name="shop_name", type="string", length=255)
     */
    private $shopName;

    /**
     * @var int $status 状态 1-有效,2-失效
     * @Column(name="status", type="integer", default=1)
     */
    private $status;

    /**
     * @var int $total 数量
     * @Column(name="total", type="integer")
     */
    private $total;

    /**
     * @var int $giveout 已发放数量
     * @Column(name="giveout", type="integer", default=0)
     */
    private $giveout;

    /**
     * @var int $used 已使用数量
     * @Column(name="used", type="integer", default=0)
     */
    private $used;

    /**
     * @var int $points 兑换所需积分
     * @Column(name="points", type="integer", default=0)
     */
    private $points;

    /**
     * @var int $eachlimit 没人限制领取
     * @Column(name="eachlimit", type="integer")
     */
    private $eachlimit;

    /**
     * @var string $logo LOGO图片
     * @Column(name="logo", type="string", length=255)
     */
    private $logo;

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
     * 推荐
     * @param int $value
     * @return $this
     */
    public function setIsindex(int $value): self
    {
        $this->isindex = $value;

        return $this;
    }

    /**
     * 代金券模板名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 模板描述
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
     * 使用时的消费金额限制
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
     * 状态 1-有效,2-失效
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 数量
     * @param int $value
     * @return $this
     */
    public function setTotal(int $value): self
    {
        $this->total = $value;

        return $this;
    }

    /**
     * 已发放数量
     * @param int $value
     * @return $this
     */
    public function setGiveout(int $value): self
    {
        $this->giveout = $value;

        return $this;
    }

    /**
     * 已使用数量
     * @param int $value
     * @return $this
     */
    public function setUsed(int $value): self
    {
        $this->used = $value;

        return $this;
    }

    /**
     * 兑换所需积分
     * @param int $value
     * @return $this
     */
    public function setPoints(int $value): self
    {
        $this->points = $value;

        return $this;
    }

    /**
     * 没人限制领取
     * @param int $value
     * @return $this
     */
    public function setEachlimit(int $value): self
    {
        $this->eachlimit = $value;

        return $this;
    }

    /**
     * LOGO图片
     * @param string $value
     * @return $this
     */
    public function setLogo(string $value): self
    {
        $this->logo = $value;

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
     * 推荐
     * @return int
     */
    public function getIsindex()
    {
        return $this->isindex;
    }

    /**
     * 代金券模板名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 模板描述
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
     * 使用时的消费金额限制
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
     * 店铺名称
     * @return string
     */
    public function getShopName()
    {
        return $this->shopName;
    }

    /**
     * 状态 1-有效,2-失效
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 数量
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * 已发放数量
     * @return int
     */
    public function getGiveout()
    {
        return $this->giveout;
    }

    /**
     * 已使用数量
     * @return int
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * 兑换所需积分
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * 没人限制领取
     * @return int
     */
    public function getEachlimit()
    {
        return $this->eachlimit;
    }

    /**
     * LOGO图片
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

}
