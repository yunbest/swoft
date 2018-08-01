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
 * 店铺证书表

 * @Entity()
 * @Table(name="mallbuilder_shop_certificate")
 * @uses      MallbuilderShopCertificate
 */
class MallbuilderShopCertificate extends Model
{
    /**
     * @var int $unionId 编号
     * @Id()
     * @Column(name="union_id", type="integer")
     */
    private $unionId;

    /**
     * @var int $userid 店铺会员编号
     * @Column(name="userid", type="integer", default=0)
     */
    private $userid;

    /**
     * @var int $cid 证书编号
     * @Column(name="cid", type="integer", default=0)
     */
    private $cid;

    /**
     * @var string $filename 上传文件地址
     * @Column(name="filename", type="string", length=100)
     */
    private $filename;

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
     * 店铺会员编号
     * @param int $value
     * @return $this
     */
    public function setUserid(int $value): self
    {
        $this->userid = $value;

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
     * 上传文件地址
     * @param string $value
     * @return $this
     */
    public function setFilename(string $value): self
    {
        $this->filename = $value;

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
     * 店铺会员编号
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
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
     * 上传文件地址
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

}
