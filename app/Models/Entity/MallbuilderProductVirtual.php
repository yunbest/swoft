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
 * 虚拟商品表

 * @Entity()
 * @Table(name="mallbuilder_product_virtual")
 * @uses      MallbuilderProductVirtual
 */
class MallbuilderProductVirtual extends Model
{
    /**
     * @var int $id 编号
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $pid 商品id
     * @Column(name="pid", type="integer")
     * @Required()
     */
    private $pid;

    /**
     * @var int $endTime 结束时间
     * @Column(name="end_time", type="integer")
     * @Required()
     */
    private $endTime;

    /**
     * @var string $promotionMsg 促销信息
     * @Column(name="promotion_msg", type="string", length=255)
     * @Required()
     */
    private $promotionMsg;

    /**
     * @var int $maxbuy 每人限制购买数量
     * @Column(name="maxbuy", type="integer", default=0)
     */
    private $maxbuy;

    /**
     * @var float $recate 购买后过期未使用退款比例
     * @Column(name="recate", type="float")
     * @Required()
     */
    private $recate;

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
     * 商品id
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

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
     * 促销信息
     * @param string $value
     * @return $this
     */
    public function setPromotionMsg(string $value): self
    {
        $this->promotionMsg = $value;

        return $this;
    }

    /**
     * 每人限制购买数量
     * @param int $value
     * @return $this
     */
    public function setMaxbuy(int $value): self
    {
        $this->maxbuy = $value;

        return $this;
    }

    /**
     * 购买后过期未使用退款比例
     * @param float $value
     * @return $this
     */
    public function setRecate(float $value): self
    {
        $this->recate = $value;

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
     * 商品id
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
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
     * 促销信息
     * @return string
     */
    public function getPromotionMsg()
    {
        return $this->promotionMsg;
    }

    /**
     * 每人限制购买数量
     * @return int
     */
    public function getMaxbuy()
    {
        return $this->maxbuy;
    }

    /**
     * 购买后过期未使用退款比例
     * @return float
     */
    public function getRecate()
    {
        return $this->recate;
    }

}
