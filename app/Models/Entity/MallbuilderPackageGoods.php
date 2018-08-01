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
 * @Entity()
 * @Table(name="mallbuilder_package_goods")
 * @uses      MallbuilderPackageGoods
 */
class MallbuilderPackageGoods extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $packageId 
     * @Column(name="package_id", type="integer")
     * @Required()
     */
    private $packageId;

    /**
     * @var int $goodsId 
     * @Column(name="goods_id", type="integer")
     * @Required()
     */
    private $goodsId;

    /**
     * @var int $goodsNum 
     * @Column(name="goods_num", type="integer")
     * @Required()
     */
    private $goodsNum;

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
     * @param int $value
     * @return $this
     */
    public function setPackageId(int $value): self
    {
        $this->packageId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setGoodsId(int $value): self
    {
        $this->goodsId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setGoodsNum(int $value): self
    {
        $this->goodsNum = $value;

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
     * @return int
     */
    public function getPackageId()
    {
        return $this->packageId;
    }

    /**
     * @return int
     */
    public function getGoodsId()
    {
        return $this->goodsId;
    }

    /**
     * @return int
     */
    public function getGoodsNum()
    {
        return $this->goodsNum;
    }

}
