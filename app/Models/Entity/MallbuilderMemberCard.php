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
 * 会员卡

 * @Entity()
 * @Table(name="mallbuilder_member_card")
 * @uses      MallbuilderMemberCard
 */
class MallbuilderMemberCard extends Model
{
    /**
     * @var int $id 编号
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $createTime 创建时间
     * @Column(name="create_time", type="integer")
     */
    private $createTime;

    /**
     * @var int $blindMemberId 绑定会员ID
     * @Column(name="blind_member_id", type="integer", default=0)
     */
    private $blindMemberId;

    /**
     * @var string $blindMemberName 绑定会员名称
     * @Column(name="blind_member_name", type="string", length=50)
     */
    private $blindMemberName;

    /**
     * @var float $discounts 折扣比例
     * @Column(name="discounts", type="float")
     */
    private $discounts;

    /**
     * @var string $logo 图标
     * @Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var int $usedTime 使用日期
     * @Column(name="used_time", type="integer")
     */
    private $usedTime;

    /**
     * @var string $name 会员卡名称
     * @Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var int $tempId 模板编号
     * @Column(name="temp_id", type="integer")
     */
    private $tempId;

    /**
     * @var int $shopId 店铺编号
     * @Column(name="shop_id", type="integer")
     * @Required()
     */
    private $shopId;

    /**
     * @var string $shopName 店铺名称
     * @Column(name="shop_name", type="string", length=255)
     * @Required()
     */
    private $shopName;

    /**
     * @var string $serial 序列号
     * @Column(name="serial", type="char", length=18)
     * @Required()
     */
    private $serial;

    /**
     * @var int $status 卡状态
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

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
     * 绑定会员ID
     * @param int $value
     * @return $this
     */
    public function setBlindMemberId(int $value): self
    {
        $this->blindMemberId = $value;

        return $this;
    }

    /**
     * 绑定会员名称
     * @param string $value
     * @return $this
     */
    public function setBlindMemberName(string $value): self
    {
        $this->blindMemberName = $value;

        return $this;
    }

    /**
     * 折扣比例
     * @param float $value
     * @return $this
     */
    public function setDiscounts(float $value): self
    {
        $this->discounts = $value;

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
     * 使用日期
     * @param int $value
     * @return $this
     */
    public function setUsedTime(int $value): self
    {
        $this->usedTime = $value;

        return $this;
    }

    /**
     * 会员卡名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

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
     * 店铺编号
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
     * 卡状态
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

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
     * 创建时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 绑定会员ID
     * @return int
     */
    public function getBlindMemberId()
    {
        return $this->blindMemberId;
    }

    /**
     * 绑定会员名称
     * @return string
     */
    public function getBlindMemberName()
    {
        return $this->blindMemberName;
    }

    /**
     * 折扣比例
     * @return float
     */
    public function getDiscounts()
    {
        return $this->discounts;
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
     * 使用日期
     * @return int
     */
    public function getUsedTime()
    {
        return $this->usedTime;
    }

    /**
     * 会员卡名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * 店铺编号
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
     * 序列号
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * 卡状态
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

}
