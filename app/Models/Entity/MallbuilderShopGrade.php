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
 * 店铺等级表

 * @Entity()
 * @Table(name="mallbuilder_shop_grade")
 * @uses      MallbuilderShopGrade
 */
class MallbuilderShopGrade extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 组名
     * @Column(name="name", type="string", length=50)
     * @Required()
     */
    private $name;

    /**
     * @var float $fee 收费标准
     * @Column(name="fee", type="float", default=0)
     */
    private $fee;

    /**
     * @var string $desc 描述
     * @Column(name="desc", type="text", length=65535)
     * @Required()
     */
    private $desc;

    /**
     * @var int $createTime 创建时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $status 状态 0,1
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

    /**
     * @var int $distribution 分销权限 0无权限 1发布分销 2一级分销价 3二级分销价
     * @Column(name="distribution", type="tinyint", default=0)
     */
    private $distribution;

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
     * 组名
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 收费标准
     * @param float $value
     * @return $this
     */
    public function setFee(float $value): self
    {
        $this->fee = $value;

        return $this;
    }

    /**
     * 描述
     * @param string $value
     * @return $this
     */
    public function setDesc(string $value): self
    {
        $this->desc = $value;

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
     * 状态 0,1
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 分销权限 0无权限 1发布分销 2一级分销价 3二级分销价
     * @param int $value
     * @return $this
     */
    public function setDistribution(int $value): self
    {
        $this->distribution = $value;

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
     * 组名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 收费标准
     * @return float
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * 描述
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
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
     * 状态 0,1
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 分销权限 0无权限 1发布分销 2一级分销价 3二级分销价
     * @return int
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

}
