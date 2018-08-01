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
 * 店铺等级证书表

 * @Entity()
 * @Table(name="mallbuilder_shop_grade_certificate")
 * @uses      MallbuilderShopGradeCertificate
 */
class MallbuilderShopGradeCertificate extends Model
{
    /**
     * @var int $unionId 编号
     * @Id()
     * @Column(name="union_id", type="integer")
     */
    private $unionId;

    /**
     * @var int $gradeId 店铺等级编号
     * @Column(name="grade_id", type="integer", default=0)
     */
    private $gradeId;

    /**
     * @var int $cid 证书编号
     * @Column(name="cid", type="integer", default=0)
     */
    private $cid;

    /**
     * @var int $statu 状态 0不可用,1可用
     * @Column(name="statu", type="tinyint", default=1)
     */
    private $statu;

    /**
     * 编号
     * @param int $value
     * @return $this
     */
    public function setUnionId(int $value)
    {
        $this->unionId = $value;

        return $this;
    }

    /**
     * 店铺等级编号
     * @param int $value
     * @return $this
     */
    public function setGradeId(int $value): self
    {
        $this->gradeId = $value;

        return $this;
    }

    /**
     * 证书编号
     * @param int $value
     * @return $this
     */
    public function setCid(int $value): self
    {
        $this->cid = $value;

        return $this;
    }

    /**
     * 状态 0不可用,1可用
     * @param int $value
     * @return $this
     */
    public function setStatu(int $value): self
    {
        $this->statu = $value;

        return $this;
    }

    /**
     * 编号
     * @return mixed
     */
    public function getUnionId()
    {
        return $this->unionId;
    }

    /**
     * 店铺等级编号
     * @return int
     */
    public function getGradeId()
    {
        return $this->gradeId;
    }

    /**
     * 证书编号
     * @return int
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * 状态 0不可用,1可用
     * @return mixed
     */
    public function getStatu()
    {
        return $this->statu;
    }

}
