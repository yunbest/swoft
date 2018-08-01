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
 * 经纪人设置

 * @Entity()
 * @Table(name="mallbuilder_economy_xg")
 * @uses      MallbuilderEconomyXg
 */
class MallbuilderEconomyXg extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var float $cost 申请金额
     * @Column(name="cost", type="float", default=388.88)
     */
    private $cost;

    /**
     * @var int $duration 时长/年
     * @Column(name="duration", type="integer", default=1)
     */
    private $duration;

    /**
     * @var float $voucher 获得的代金券
     * @Column(name="voucher", type="float", default=388.88)
     */
    private $voucher;

    /**
     * @var string $protocol 经纪人的申请协议
     * @Column(name="protocol", type="text", length=65535)
     */
    private $protocol;

    /**
     * @var float $deduct 上级提成
     * @Column(name="deduct", type="float", default=188.88)
     */
    private $deduct;

    /**
     * @var int $shopid 代金券可用店铺
     * @Column(name="shopid", type="integer", default=333)
     */
    private $shopid;

    /**
     * @var string $shopname 店铺名称
     * @Column(name="shopname", type="string", length=50, default="环球仓")
     */
    private $shopname;

    /**
     * @var int $pcs 数量
     * @Column(name="pcs", type="integer", default=10)
     */
    private $pcs;

    /**
     * @var float $how 限满多少使用
     * @Column(name="how", type="float", default=300)
     */
    private $how;

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
     * 申请金额
     * @param float $value
     * @return $this
     */
    public function setCost(float $value): self
    {
        $this->cost = $value;

        return $this;
    }

    /**
     * 时长/年
     * @param int $value
     * @return $this
     */
    public function setDuration(int $value): self
    {
        $this->duration = $value;

        return $this;
    }

    /**
     * 获得的代金券
     * @param float $value
     * @return $this
     */
    public function setVoucher(float $value): self
    {
        $this->voucher = $value;

        return $this;
    }

    /**
     * 经纪人的申请协议
     * @param string $value
     * @return $this
     */
    public function setProtocol(string $value): self
    {
        $this->protocol = $value;

        return $this;
    }

    /**
     * 上级提成
     * @param float $value
     * @return $this
     */
    public function setDeduct(float $value): self
    {
        $this->deduct = $value;

        return $this;
    }

    /**
     * 代金券可用店铺
     * @param int $value
     * @return $this
     */
    public function setShopid(int $value): self
    {
        $this->shopid = $value;

        return $this;
    }

    /**
     * 店铺名称
     * @param string $value
     * @return $this
     */
    public function setShopname(string $value): self
    {
        $this->shopname = $value;

        return $this;
    }

    /**
     * 数量
     * @param int $value
     * @return $this
     */
    public function setPcs(int $value): self
    {
        $this->pcs = $value;

        return $this;
    }

    /**
     * 限满多少使用
     * @param float $value
     * @return $this
     */
    public function setHow(float $value): self
    {
        $this->how = $value;

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
     * 申请金额
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * 时长/年
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * 获得的代金券
     * @return mixed
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * 经纪人的申请协议
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * 上级提成
     * @return mixed
     */
    public function getDeduct()
    {
        return $this->deduct;
    }

    /**
     * 代金券可用店铺
     * @return mixed
     */
    public function getShopid()
    {
        return $this->shopid;
    }

    /**
     * 店铺名称
     * @return mixed
     */
    public function getShopname()
    {
        return $this->shopname;
    }

    /**
     * 数量
     * @return mixed
     */
    public function getPcs()
    {
        return $this->pcs;
    }

    /**
     * 限满多少使用
     * @return mixed
     */
    public function getHow()
    {
        return $this->how;
    }

}
