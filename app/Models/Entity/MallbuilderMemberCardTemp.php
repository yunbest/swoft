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
 * 会员卡模板

 * @Entity()
 * @Table(name="mallbuilder_member_card_temp")
 * @uses      MallbuilderMemberCardTemp
 */
class MallbuilderMemberCardTemp extends Model
{
    /**
     * @var int $id 编号
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $createTime 创建日期
     * @Column(name="create_time", type="integer")
     */
    private $createTime;

    /**
     * @var int $total 生成总数
     * @Column(name="total", type="integer")
     */
    private $total;

    /**
     * @var int $used 已使用的卡数量
     * @Column(name="used", type="integer", default=0)
     */
    private $used;

    /**
     * @var string $name 会员卡名称
     * @Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var int $discounts 折扣比例
     * @Column(name="discounts", type="integer")
     */
    private $discounts;

    /**
     * @var string $logo 会员卡图标
     * @Column(name="logo", type="string", length=255)
     */
    private $logo;

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
     * @var int $status 卡模板状态
     * @Column(name="status", type="tinyint")
     * @Required()
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
     * 创建日期
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 生成总数
     * @param int $value
     * @return $this
     */
    public function setTotal(int $value): self
    {
        $this->total = $value;

        return $this;
    }

    /**
     * 已使用的卡数量
     * @param int $value
     * @return $this
     */
    public function setUsed(int $value): self
    {
        $this->used = $value;

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
     * 折扣比例
     * @param int $value
     * @return $this
     */
    public function setDiscounts(int $value): self
    {
        $this->discounts = $value;

        return $this;
    }

    /**
     * 会员卡图标
     * @param string $value
     * @return $this
     */
    public function setLogo(string $value): self
    {
        $this->logo = $value;

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
     * 卡模板状态
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
     * 创建日期
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 生成总数
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * 已使用的卡数量
     * @return int
     */
    public function getUsed()
    {
        return $this->used;
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
     * 折扣比例
     * @return int
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * 会员卡图标
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
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
     * 卡模板状态
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

}
